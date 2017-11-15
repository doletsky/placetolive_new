$(document).ready(function(){
    $('#img').change(function () {

            var input = $(this)[0];
            var num=0;
            if (input.files)
                $.each(input.files, function(i, file) {
                    num++;
                console.log('num: '+num, i, file);
                if( file) {
                    if (file.type.match('image.*')) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('.img'+num+' #img-preview').css('display','block');
                            $('.img'+num+' #img-preview').attr('src', e.target.result);
//                            console.log(e);
                        }
//                    reader.onloadend = function (e) {
//
//
//                        var img = document.createElement('img');
//                        img.setAttribute('src', $('.img'+num+' #img-preview').attr('src'));
//                        $('.img'+num+" .pt1").html('');
//                        $("#debug").html('');
//                        $(".form_cpallet").css("height",(95+$('.img'+num+' #img-preview').outerHeight())+"px")
//                        var hColPallet=$('.img'+num+' #img-preview').outerHeight()/5;
//
//                        var arCPallet=[];
//                        var sortCPallet=[];
//                        var flag=1;
//                        var vibrant = new Vibrant(img, 256, 5);
//                        var swatches = vibrant._swatches;
//                        $('.img'+num+' .colPallet').css('height', hColPallet+'px');
//                        for(var m in swatches){
//                            flag=1;
//                            for(var k=0;k<arCPallet.length;k++){
//                                var rgb=swatches[m]['rgb'];
//                                if(arCPallet.length>0 && Math.abs(arCPallet[k][1][0]-rgb[0])<20 && Math.abs(arCPallet[k][1][1]-rgb[1])<16 && Math.abs(arCPallet[k][1][2]-rgb[2])<30) flag=0;
//                            }
//                            if(flag==1){
//                                var f=arCPallet.length;
//                                arCPallet[f]=['rgb('+swatches[m]['rgb'].join()+')',swatches[m]['rgb']];
//                                sortCPallet[f]=[swatches[m]['rgb'][0],f];
//                            }
//                            if(arCPallet.length>24)break;
//                        }
//
//
//                        var bColPallet=0;// колич. увеличивыаемых элементов
//                        var wPt1=Math.ceil(arCPallet.length/5)*100;
//                        var ost=arCPallet.length/Math.ceil(arCPallet.length/5)-Math.ceil(arCPallet.length/Math.ceil(arCPallet.length/5));
//                        if(ost==0 ){
//                            hColPallet=$('.img'+num+' #img-preview').outerHeight()/(arCPallet.length/Math.ceil(arCPallet.length/5));
//                        }
//                        else{
//                            if(Math.ceil(arCPallet.length/5)*5-arCPallet.length > Math.ceil(arCPallet.length/5)){
//                                hColPallet=$('.img'+num+' #img-preview').outerHeight()/4;
//                                bColPallet=Math.ceil(arCPallet.length/5)*5 - arCPallet.length - Math.ceil(arCPallet.length/5);
//                            }
//                            else bColPallet=Math.ceil(arCPallet.length/5)*5 - arCPallet.length;
//                        }
//                        $('.img'+num+" .main_cpallet").css("width",(600+wPt1)+"px");
//                        $('.img'+num+" .main_cpallet").css("margin-left",((600+wPt1)/-2)+"px");
//                        $('.img'+num+" .pt1").css("width",wPt1+"px");
//                        sortCPallet.sort(sDecrease);
//                        for(col in sortCPallet){
//                            var color=sortCPallet[col][1];
//                            $('.img'+num+" .pt1").append("<div class='colPallet' style='background-color:"+arCPallet[color][0]+"'></div>");
//                        }
//                        $('.img'+num+' .colPallet').css('height', hColPallet+'px');
//                        for(var n=0; n<bColPallet; n++){
//                            var l=Math.ceil(arCPallet.length/5)+n;
//                            $('.img'+num+' .colPallet:eq('+l+')').css('height', 2*hColPallet+'px');
//                        }
//                        $('.img'+num+' .colPallet:eq(20)').addClass('wmark');
//                        $('.img'+num+' .wmark').html('Placetolive.ru');
//                        $('.img'+num+' .screenshot').css('display','block');
//                    }
                        reader.readAsDataURL(file);

                    } else {
                        console.log('ошибка, не изображение');
                    }
                } else {
                    console.log('хьюстон у нас проблема');
                }
            });


    });

    //сделать скриншот
    $('.screenshot').click(function(){
        $('.screenshot').css('display','none');
        html2canvas($('.main_cpallet'), //селектор, который надо заскринить
            {
                //размеры, если надо
                // width: 2500,
                // height: 500,
                onrendered: function (canvas) {
                    document.body.appendChild(canvas);
                    //после того, как сформировался канвас, копируем ссылку изображения и сохраняем файл
                    screenShot();
                    $('.screenshot').css('display','block');
                }
            });
    });


    //делаем скрин
    function screenShot()
    {
        var canvas = $('canvas')[0];
        var data = canvas.toDataURL('image/png');//.replace(/data:image\/png;base64,/, '');
        $('canvas').remove();
        var link = document.createElement('a');
        link.setAttribute('href',data);
        link.setAttribute('download','download');
        onload=link.click();

//        $.post('screenshot.php',{data:data}, function(rep){
//            alert('Изображение '+rep+' сохранено' );
//        });
    }
    function sDecrease(i, ii) { // По убыванию
        if (i[0] > ii[0])
            return -1;
        else if (i[0] < ii[0])
            return 1;
        else return 0;
//        {
//            if (i[0][1] > ii[0][1])
//                return -1;
//            else if (i[0][1] < ii[0][1])
//                return 1;
//            else return 0;
//        }

    }
});
