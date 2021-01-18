<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>常用理财计算器（尚德理财）</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .wrap {
            width: 100%;
            margin: 0 auto;
            position: relative;
            min-width: 320px;
            max-width: 640px;
            padding-top: 64px;
        }

        .top {
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 35px;
            box-sizing: border-box;
            margin: 0 auto;
        }

        .top span {
            display: inline-block;
            text-align: center;
            font: 17px "苹方";
        }

        .four {
            flex-shrink: 0;
        }

        .bottom {
            width: 100%;
            margin-top: 40px;
        }

        .bottom-text {
            width: 100%;
            margin-top: 40px;
            font-weight: bold;
            color: #EA7E2B;
        }

        .box-one,
        .box-two,
        .box-three,
        .box-four {
            width: 89%;

            /* height:206px; */
            margin: 0 auto;
            background-color: #e4e4e4;
            border-radius: 10px;
            padding: 10px 12px;
            box-sizing: border-box;
            box-shadow: 3px 4px 5px #d3d4d6;
        }

        .box-one p {
            font: 15px "苹方";
            color: #333;
            text-align: right;
            line-height: 48px;
        }

        .box-one > div {
            padding-right: 20px;
            padding-top: 10px;
            box-sizing: border-box;
            text-align: right;
        }

        input {
            width: 185px;
            height: 25px;
            border: none;
            border-radius: 2px;
            text-align: right;
            font-size: 15px;
        }

        .jisuanBtn,
        .qingkongBtn {
            display: inline-block;
            width: 81px;
            height: 25px;
            font: 14px "苹方";
            color: #fff;
            text-align: center;
            line-height: 25px;
            border-radius: 2px;
        }

        .jisuanBtn {
            background-color: #00a65a !important;
            margin-left: 20px;
        }

        .qingkongBtn {
            background-color: #dd4b39 !important;
        }

        .last {
            margin-top: 10px;
        }

        .box-two p {
            font: 15px "苹方";
            color: #333;
            text-align: right;
            line-height: 35px;
        }

        .box-two > div {
            padding-right: 19px;
            padding-top: 10px;
            box-sizing: border-box;
            text-align: right;
        }

        .box-three p {
            font: 15px "苹方";
            color: #333;
            text-align: right;
            line-height: 35px;
        }

        .box-three > div {
            padding-right: 18px;
            padding-top: 10px;
            box-sizing: border-box;
            text-align: right;
        }

        .box-four p {
            font: 15px "苹方";
            color: #333;
            text-align: right;
            line-height: 35px;
        }

        .box-four > div {
            padding-right: 18px;
            padding-top: 10px;
            box-sizing: border-box;
            text-align: right;
        }

        .active {
            border-bottom: 1px solid #046ef2;
            color: #046ef2;
        }

        .none {
            display: none;
        }
    </style>
</head>
<body>
<div class="wrap">
    <div class="top">
        <span class="one" onclick="change(1)"><a class="active">最终收益</a></span>
        <span class="two" onclick="change(2)"><a>收益率</a></span>
        <span class="three" onclick="change(3)"><a>定投</a></span>
        <span class="four" onclick="change(4)"><a>财务自由计算</a></span>
    </div>
    <div class="bottom">
        <div class="box-one">
            <p><span class="span1">本金：</span><input id="benjin" type="text" ><span> 元</span></p>
            <p><span class="span1">年化收益率：</span><input id="shouyilv" type="text"><span>&nbsp; %</span></p>
            <p><span class="span1">投资年限：</span><input id="touzinianxian" type="text"><span> 年</span></p>
            <div><a onclick="jisuanOne(2)" class="qingkongBtn">清空</a><a class="jisuanBtn" onclick="jisuanOne(1)">计算</a></div>
            <p class="last"><span class="span1">最终收益：</span><input id="zuizhongshouyi" type="text"><span> 元</span></p>
        </div>
        <div class="box-two none">
            <p><span class="span1">买入价格：</span><input id="mairujia" type="text"><span> 元</span></p>
            <p><span class="span1">卖出价格：</span><input id="maichujia" type="text"><span> 元</span></p>
            <p><span class="span1">持有年限：</span><input id="chiyounianxian" type="text"><span> 年</span></p>
            <div><a class="qingkongBtn" onclick="jisuanTwo(2)">清空</a><a class="jisuanBtn" onclick="jisuanTwo(1)">计算</a></div>
            <p class="last"><span class="span1">总收益率：</span><input id="zongshouyilv" type="text"><span>&nbsp; %</span></p>
            <p class="last"><span class="span1">年化收益率：</span><input id="nianhuashouyilv" type="text"><span>&nbsp; %</span></p>
        </div>

        <div class="box-three none">
            <p><span class="span1">投资时长：</span><input id="year" type="text"><span> 年</span></p>
            <p><span class="span1">年化收益率：</span><input id="per" type="text"><span>&nbsp; %</span></p>
            <p><span class="span1">每月存入：</span><input id="money" type="text"><span> 元</span></p>
            <p><span class="span1">投资总收益：</span><input id="touzishouyi" type="text"><span> 元</span></p>
            <div><a class="qingkongBtn" onclick="jisuanThree(2)">清空</a><a class="jisuanBtn" onclick="jisuanThree(1)">计算</a></div>
        </div>

        <div class="box-four none">
            <p><span class="span1">本金：</span><input class="benjin" type="text"><span> 元</span></p>
            <p><span class="span1">月定投：</span><input class="dingtoujine" type="text"><span>元</span></p>
            <p><span class="span1">年化收益：</span><input class="nianhuashouyi" type="text"><span>&nbsp; %</span></p>
            <p><span class="span1">月支出：</span><input class="yuezhichu" type="text"><span> 元</span></p>
            <div><a class="qingkongBtn" onclick="jisuanFour(2)">清空</a><a class="jisuanBtn" onclick="jisuanFour(1)">计算</a></div>
            <p><span class="span1">月均获得收益：</span><input class="yueshouyi" type="text"><span> 元</span></p>
            <p><span class="span1">财务自由时间：</span><input class="time" type="text"><span> 年</span></p>
        </div>

        <div class="bottom-text">
            尚德理财-免费学实操请加老师微信: 18500470923
        </div>

    </div>
</div>
</body>
<script src="{{ asset('js/test2/jquery-1.11.0.min.js') }}"></script>
{{--<script src="bignumber.js"></script>--}}

<script src="{{ asset('js/test2/bignumber.js') }}"></script>
<script>

    function change(x){
        console.log(x);
        if(x==1){
            $(".one a").addClass('active');
            $(".two a").removeClass('active');
            $(".three a").removeClass('active');
            $(".four a").removeClass('active');
            $(".bottom .box-one").removeClass('none');
            $(".bottom .box-three").addClass('none');
            $(".bottom .box-two").addClass('none');
            $(".bottom .box-four").addClass('none');
        }else if(x==2){
            $(".two a").addClass('active');
            $(".one a").removeClass('active');
            $(".three a").removeClass('active');
            $(".four a").removeClass('active');
            $(".bottom .box-two").removeClass('none');
            $(".bottom .box-one").addClass('none');
            $(".bottom .box-three").addClass('none');
            $(".bottom .box-four").addClass('none');
        }else if(x==3){
            $(".three a").addClass('active');
            $(".two a").removeClass('active');
            $(".one a").removeClass('active');
            $(".four a").removeClass('active');
            $(".bottom .box-three").removeClass('none');
            $(".bottom .box-two").addClass('none');
            $(".bottom .box-one").addClass('none');
            $(".bottom .box-four").addClass('none');
        }
        else if(x==4){
            $(".three a").removeClass('active');
            $(".two a").removeClass('active');
            $(".one a").removeClass('active');
            $(".four a").addClass('active');
            $(".bottom .box-four").removeClass('none');
            $(".bottom .box-three").addClass('none');
            $(".bottom .box-two").addClass('none');
            $(".bottom .box-one").addClass('none');
        }
    }

    // 计算最终收益

    function jisuanOne(x){
        if(x==1){
            var benjinNum = new BigNumber(document.getElementById("benjin").value);
            var shouyilvNum = new BigNumber(document.getElementById("shouyilv").value);
            var touzinianxianNum = new BigNumber(document.getElementById("touzinianxian").value);
            var shouyiNum = new BigNumber(1+shouyilvNum/100);
            var zuizhongshouyi = benjinNum.multipliedBy(shouyiNum.pow(touzinianxianNum)).valueOf();
            console.log(zuizhongshouyi);
            if(String(zuizhongshouyi).indexOf(".")==-1){
                document.getElementById("zuizhongshouyi").value =zuizhongshouyi
                console.log(zuizhongshouyi);
            }else{
                var splitArr = String(zuizhongshouyi).split('.');
                document.getElementById("zuizhongshouyi").value =splitArr[0]+'.'+splitArr[1].substr(0,3);
                console.log(zuizhongshouyi);
            }
        }else if(x==2){
            document.getElementById("benjin").value = "";
            document.getElementById("shouyilv").value = "";
            document.getElementById("touzinianxian").value = "";
            document.getElementById("zuizhongshouyi").value = "";
        }

    }
    // 计算收益率
    function jisuanTwo(x){
        if(x==1){
            var mairujiaNum = document.getElementById("mairujia").value;
            var maichujiaNum = document.getElementById("maichujia").value;
            var chiyounianxianNum  = document.getElementById("chiyounianxian").value;

            console.log(mairujiaNum);
            console.log(maichujiaNum);
            console.log(chiyounianxianNum);
            // 这里是总收益率，后面是%，所以要*100；
            var zongshouyilv = (maichujiaNum - mairujiaNum)/mairujiaNum * 100;
            console.log(zongshouyilv);
            document.getElementById("zongshouyilv").value = zongshouyilv.toFixed(3);

            var nianhuashouyilv = Math.pow(maichujiaNum/mairujiaNum, 1/chiyounianxianNum)-1;
            console.log(nianhuashouyilv);

            document.getElementById("nianhuashouyilv").value = (nianhuashouyilv*100).toFixed(3);
        }else if(x==2){
            document.getElementById("mairujia").value = "";
            document.getElementById("maichujia").value = "";
            document.getElementById("chiyounianxian").value = "";
            document.getElementById("zongshouyilv").value = "";
            document.getElementById("nianhuashouyilv").value = "";
        }

    }

    // 定投
    function jisuanThree(x){
        if(x==1){
            var money = document.getElementById("money").value;
            var per = document.getElementById("per").value;
            var year = document.getElementById("year").value;
            money = parseFloat(money) * 12;
            per = parseFloat(per);
            year = parseFloat(year);

            var q = 1+per/100;
            console.log(q);
            var qn = Math.pow(q,year);
            console.log(qn);
            var x= (1- qn)/(1-q);
            console.log(x);
            var touzishouyi = money*q * x;

            document.getElementById("touzishouyi").value = touzishouyi.toFixed(2);
        }else if(x==2){
            document.getElementById("money").value = "";
            document.getElementById("per").value = "";
            document.getElementById("year").value = "";
            document.getElementById("touzishouyi").value = "";
        }


    }
    // 财务自由实现时间
    function jisuanFour(x){
        if(x==1){
            var n = 1;
            var benjin = $(".benjin").val();
            var dingtoujine = $(".dingtoujine").val();
            var nianhuashouyi = parseFloat($(".nianhuashouyi").val())/100;
            var yuezhichu = $(".yuezhichu").val();
            console.log(benjin,dingtoujine,nianhuashouyi);
            var a1 = dingtoujine * 12 *(1+nianhuashouyi);
            console.log(a1);
            do{
                var b = a1 * Math.pow(1 + nianhuashouyi, n);
                console.log("pow:"+Math.pow(1+nianhuashouyi, n));
                console.log("nianhuashouyi:"+nianhuashouyi);

                console.log(n);
                // 定投金额
                var c = (a1 - b)/(-nianhuashouyi);
                console.log("b金额:"+b);
                console.log("定投金额:"+c);
                // 本金金额
                var d = benjin * Math.pow(1 + nianhuashouyi, n);
                console.log("本金金额:"+d);
                var sum = c + d;
                var yueSum = sum * nianhuashouyi / 12;
                if(yueSum>yuezhichu){
                    console.log(yueSum);
                    console.log(n);
                    $(".time").val(n);
                    $(".yueshouyi").val(yueSum);
                    return false;
                }
                n++;
            }
            while(n>0)
        }else if(x==2){
            document.getElementById("benjin").value = "";
            document.getElementById("shouyilv").value = "";
            document.getElementById("touzinianxian").value = "";
            document.getElementById("zuizhongshouyi").value = "";
        }

    }

</script>
</html>



