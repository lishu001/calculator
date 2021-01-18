<?php

namespace App\Admin\Controllers\MarketList;

use App\Models\CallbackRecord;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class CallbackListController extends Controller
{
    use HasResourceActions;

    /**
     * 召回设备列表
     * @author lishukuan <lishukuan@miliantech.com>
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('渠道');
            $content->description('召回设备列表');

            $content->body($this->grid());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CallbackRecord());
        $grid->model()->orderBy('id', 'DESC');
        $grid->column('id', '自增id');
        $grid->column('market_type', '渠道标识')->using(Config::get('market.market_type'),'');
        $grid->column('device_id', '设备ID(MD5大写)');
        $grid->column('member_id', '用户id');
        $grid->column('os', '设备')->using([
            '0' => 'Android',
            '1' => 'iOS'
        ], '');
        $grid->column('aid', 'aid');
        $grid->column('cid', 'cid');
        $grid->column('created_at', '召回时间');

        // 筛选
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->equal('market_type', '渠道标识')->select(Config::get('market.market_type'),'');
            $filter->between('created_at', '召回时间')->datetime();
            $filter->equal('device_id', '设备ID(MD5大写)');

        });

        //表格多选动作条
        $grid->tools(function(Grid\Tools $tools){
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

        //表格设置
        $grid->paginate(10);
        $grid->perPages([10, 20, 30, 40, 50]);
        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableActions();
        return $grid;
    }

}
