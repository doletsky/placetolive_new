<style>
.circle{
    width: 700px;
    height: 700px;
    position: relative;
    float: left;
}
.colorPBox{
    margin: 20px;
    position: relative;
    float: left;
    width: 400px;
    height: 400px;
}
.colorP2, .colorP3{
    width: 80px;
    height: 80px;
    border: 1px solid #000000;
    position: absolute;
    z-index: 999;
    left: 150px;
}
.colorP1{
    width: 200px;
    height: 200px;
    position: absolute;
    z-index: 99;
    top: 40px;
    border: 1px solid #000000;
}
.colorP3{
    top: 200px;
}
    .container {
        top:10px;
        left: 10px;
        width: 600px;
        height: 600px;
        overflow: hidden;
        border-radius: 50%;
        position: absolute;
        border: 1px solid #000000;
        z-index: 1;
    }
    .dragP1, .dragP2{
        position: absolute;
        width: 15px;
        height: 15px;
        border: 4px solid #FFFFFF;
        border-radius: 11px;
        z-index: 999999;
        top: 110px;
        left: 350px;
    }
    .dragP2{
        display: none;
        border: 2px solid #FFFFFF;
    }
    .c2 {
        top: 50px;
        left: 50px;
        width: 520px;
        height: 520px;
        z-index: 9;
    }
    .c3 {
        top: 90px;
        left: 90px;
        width: 440px;
        height: 440px;
        z-index: 99;
    }
    .c4 {
        top: 130px;
        left: 130px;
        width: 360px;
        height: 360px;
        z-index: 999;
    }
    .c5 {
        top: 170px;
        left: 170px;
        width: 280px;
        height: 280px;
        z-index: 9999;
    }
    .c6 {
        top: 210px;
        left: 210px;
        width: 200px;
        height: 200px;
        z-index: 99999;
        background: #FFFFFF;
    }
    .sector {
        width: 50%;
        height: 50%;
        position: absolute;
        left: 50%;
        top: 0;
        transform-origin: left bottom;
        background: #730B0E;/*'красный 1#730B0E.2#910F13.5#EC1B24.6#EF3544.7#F26065'*/
        transform: skewY(120deg);
    }
    .c2 .r1 {
        background: #910F13;
    }
    .c3 .r1 {
        background: #EC1B24;
    }
    .c4 .r1 {
        background: #EF3544;
    }
    .c5 .r1 {
        background: #F26065;
    }
    .r2 {
        transform: rotate(30deg) skewY(120deg);
        background: #731316;
    /*'красно-орнж, #731316, #92191F, #EE2C38, #F2564D, #F47769*/

    }
    .c2 .r2 {
        background: #92191F;
    }
    .c3 .r2 {
        background: #EE2C38;
    }
    .c4 .r2 {
        background: #F2564D;
    }
    .c5 .r2 {
        background: #F47769;
    }
    .r3 {
        transform: rotate(60deg) skewY(120deg);
        background: #6A2E07;
    /*"оранж, #6A2E07. #94430B. #F47115. #F58535. #F79B5C"*/
    }
    .c2 .r3 {
        background: #94430B;
    }
    .c3 .r3 {
        background: #F47115;
    }
    .c4 .r3 {
        background: #F58535;
    }
    .c5 .r3 {
        background: #F79B5C;
    }
    .r4 {
        transform: rotate(90deg) skewY(120deg);
        background: #804E06;
        /*оранж-жел #804E06. #955D07 #F79C0E #F9B134 #FABD5F*/
    }
    .c2 .r4 {
        background: #955D07;
    }
    .c3 .r4 {
        background: #F79C0E;
    }
    .c4 .r4 {
        background: #F9B134;
    }
    .c5 .r4 {
        background: #FABD5F;
    }
    .r5 {
        transform: rotate(120deg) skewY(120deg);
        background: #827B00;
        /*жел #827B00 #989000 #FFF100 #FFF432 #FFF765*/
    }
    .c2 .r5 {
        background: #989000;
    }
    .c3 .r5 {
        background: #FFF100;
    }
    .c4 .r5 {
        background: #FFF432;
    }
    .c5 .r5 {
        background: #FFF765;
    }
    .r6 {
        transform: rotate(150deg) skewY(120deg);
        background: #346415;
        /*жел-зел #346415 #3D751A #65C42F #7FCD51 #A5DB74*/
    }
    .c2 .r6 {
        background: #3D751A;
    }
    .c3 .r6 {
        background: #65C42F;
    }
    .c4 .r6 {
        background: #7FCD51;
    }
    .c5 .r6 {
        background: #A5DB74;
    }
    .r7 {
        transform: rotate(180deg) skewY(120deg);
        background: #00552D;
        /*зел #00552D #006436 #00A65F #32B76C #65C888*/
    }
    .c2 .r7 {
        background: #006436;
    }
    .c3 .r7 {
        background: #00A65F;
    }
    .c4 .r7 {
        background: #32B76C;
    }
    .c5 .r7 {
        background: #65C888;
    }
    .r8 {
        transform: rotate(210deg) skewY(120deg);
        background: #00555A;
        /*зел-син #00555A #00656A #00AAAF #32BABC #65CBC4*/
    }
    .c2 .r8 {
        background: #00656A;
    }
    .c3 .r8 {
        background: #00AAAF;
    }
    .c4 .r8 {
        background: #32BABC;
    }
    .c5 .r8 {
        background: #65CBC4;
    }
    .r9 {
        transform: rotate(240deg) skewY(120deg);
        background: #0C2F5B;
        /*син #0C2F5B #0F386B #1B62B7 #3871C1 #6285CC*/
    }
    .c2 .r9 {
        background: #0F386B;
    }
    .c3 .r9 {
        background: #1B62B7;
    }
    .c4 .r9 {
        background: #3871C1;
    }
    .c5 .r9 {
        background: #6285CC;
    }
    .r10 {
        transform: rotate(270deg) skewY(120deg);
        background: #121C48;
        /*син-феол #121C48 #162257 #293D9B #4346A4 #535BB2*/
    }
    .c2 .r10 {
        background: #162257;
    }
    .c3 .r10 {
        background: #293D9B;
    }
    .c4 .r10 {
        background: #4346A4;
    }
    .c5 .r10 {
        background: #535BB2;
    }
    .r11 {
        transform: rotate(300deg) skewY(120deg);
        background: #291142;
        /*феол #291142 #311550 #542790 #6D399E #7D5AB3*/
    }
    .c2 .r11 {
        background: #311550;
    }
    .c3 .r11 {
        background: #542790;
    }
    .c4 .r11 {
        background: #6D399E;
    }
    .c5 .r11 {
        background: #7D5AB3;
    }
    .r12 {
        transform: rotate(330deg) skewY(120deg);
        background: #530840;
        /*феол-кр #530840 #610A4E #A0138E #A83AA3 #BD65B9*/
    }
    .c2 .r12 {
        background: #610A4E;
    }
    .c3 .r12 {
        background: #A0138E;
    }
    .c4 .r12 {
        background: #A83AA3;
    }
    .c5 .r12 {
        background: #BD65B9;
    }
</style>
<div class="circle">
    <div class="container">
        <div class="sector"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c2">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c3">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c4">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c5">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c6">
        <div class="triod" id="tiod" style="
	    width: 0;
    height: 0;
    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    border-bottom: 180px solid grey;
    left: 50px;
    position: relative;
">

        </div>
    </div>
    <div class="dragP1" id="dragP1"></div>
    <div class="dragP2" id="dragP2"></div>
    <div class="dragP2" id="dragP3"></div>
</div>
<div class="colorPBox">
    <div class="colorP1" id="colorP1"></div>
    <div class="colorP2" id="colorP2"></div>
    <div class="colorP3" id="colorP3"></div>
</div>

<script src="js/jquery-1.7.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {

        arColor = {
            xp:{//zone x>0
               tg175:{//tg>1.75 - red
                   110:'#F26065', 140:'#EF3544', 180:'#EC1B24', 220:'#910F13', 260:'#730B0E'
               },
               tg57:{
                   110:'#F47769', 140:'#F2564D', 180:'#EE2C38', 220:'#92191F', 260:'#731316'
               },
                tg0:{
                    110:'#F79B5C', 140:'#F58535', 180:'#F47115', 220:'#94430B', 260:'#6A2E07'
                },
                tgm57:{
                    110:'#FABD5F', 140:'#F9B134', 180:'#F79C0E', 220:'#955D07', 260:'#804E06'
                },
                tgm175:{
                    110:'#FFF765', 140:'#FFF432', 180:'#FFF100', 220:'#989000', 260:'#827B00'
                },
                tgmm175:{
                    110:'#A5DB74', 140:'#7FCD51', 180:'#65C42F', 220:'#3D751A', 260:'#346415'
                }
            },
            xn:{//zone x<0
                tg175:{//tg>1.75 - green
                    110:'#65C888', 140:'#32B76C', 180:'#00A65F', 220:'#006436', 260:'#00552D'
                },
                tg57:{
                    110:'#65CBC4', 140:'#32BABC', 180:'#00AAAF', 220:'#00656A', 260:'#00555A'
                },
                tg0:{
                    110:'#6285CC', 140:'#3871C1', 180:'#1B62B7', 220:'#0F386B', 260:'#0C2F5B'
                },
                tgm57:{
                    110:'#535BB2', 140:'#4346A4', 180:'#293D9B', 220:'#162257', 260:'#121C48'
                },
                tgm175:{
                    110:'#7D5AB3', 140:'#6D399E', 180:'#542790', 220:'#311550', 260:'#291142'
                },
                tgmm175:{
                    110:'#BD65B9', 140:'#A83AA3', 180:'#A0138E', 220:'#610A4E', 260:'#530840'
                }
            }
        }

function posCoPoint(x, y, r, tg, tg2, id, idColorBox){
    var x2=r*Math.sin(Math.atan(1/tg2));  ///Math.sqrt(1+Math.sqrt(tg2*tg2)); //r*Math.sin(Math.asin(x/r)-0.52);
    var y2=Math.sqrt(r*r-x2*x2);//*tg2/Math.sqrt(tg2*tg2); //r*Math.cos(Math.acos(y/r)-0.52);
    var modX=Math.sqrt(x*x);
    var modY=Math.sqrt(y*y);
    var flagChange=0;

    if(modX>modY){
        if(x/modX!=x2/Math.sqrt(x2*x2)){
            y2=y2*(-1);
            x2=x2*(-1);
        }
    }else{
        if(y/modY!=y2/Math.sqrt(y2*y2)){
            y2=y2*(-1);
            x2=x2*(-1);
        }
    }

    y2=y2*(-1);
    x2=x2*(-1);

    var tmpR=Math.sqrt(x2*x2+y2*y2);
    $(id).css("left", Math.floor(x2+300));
    $(id).css("top", Math.floor(300-(y2)));
    $(id).css("display", "block");
    getColor(x2/Math.sqrt(x2*x2), tg2, r, idColorBox);
//                    console.log(x2+", "+y2+", "+r+", "+tmpR+", "+tg2+", "+tg2/Math.sqrt(tg2*tg2));
}

        function getColor(modX, tg, r, id){

            var argX=(modX>0)?'xp':'xn';
            var argTg=(tg>1.75)?'tg175':
                (tg>0.57)?'tg57':
                    (tg>0)?'tg0':
                        (tg>-0.57)?'tgm57':
                            (tg>-1.75)?'tgm175':'tgmm175';
            var argR=(r>260)?'260':
                (r>220)?'220':
                    (r>180)?'180':
                        (r>140)?'140':'110';
            $(id).css('background-color', arColor[argX][argTg][argR]);
        }

        $("#dragP1").draggable({
            stop: function(event, ui) {
                var x=ui.offset.left-307;
                var y=307-ui.offset.top;
                var r=Math.sqrt(x*x+y*y);
                var tg=y/x;
                console.log(x+", "+y+", R="+r+", tg="+tg);
                //limit max radius
                var corR=0;
                if(r>292){
                    r=292;
                    corR=1;
                }
                if(r<110){
                    r=110;
                    corR=1;
                }
                var modX=x/Math.sqrt(x*x);
                var modY=y/Math.sqrt(y*y);
                if(corR==1){
                    y=modX*r*Math.sin(Math.atan(tg));
                    x=modX*r*Math.cos(Math.atan(tg));
                    $("#dragP1").css("left", Math.floor(x+300));
                    $("#dragP1").css("top", Math.floor(300-y));
                    console.log(x+", "+y+", R="+r+", tg="+tg);
                    corR=0;
                }
                getColor(modX,tg,r,'#colorP1');

                //position other points
                var tmpX=1.73/tg+1;
                var tmpY=1.73-1/tg;
                var tg2=tmpY/tmpX;

                posCoPoint(x, y, r, tg, tg2, "#dragP2", '#colorP2');

                var tmpX=1.73/tg-1;
                var tmpY=1.73+1/tg;
                var tg2=tmpY/tmpX;

                posCoPoint(x, y, r, tg, tg2, "#dragP3", '#colorP3');

            }
        });
    });
</script>