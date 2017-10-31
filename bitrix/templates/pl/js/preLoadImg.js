$(document).ready(function(){
    $('#img').change(function () {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            if (input.files[0].type.match('image.*')) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img-preview').attr('src', e.target.result);
                }
                reader.onloadend = function (e) {
                    var img = document.createElement('img');
                    img.setAttribute('src', $('#img-preview').attr('src'));
                    $(".pt1").html('');
                    $(".form_cpallet").css("height",(110+$('#img-preview').outerHeight())+"px")
                    var hColPallet=$('#img-preview').outerHeight()/5;
                    var arCPallet=[];
                    var flag=1;
                    for(var j=1;j<6;j++){
                        var vibrant = new Vibrant(img, 128, j);
                        var swatches = vibrant.swatches();
                        var i=0;
                        $('.colPallet').css('height', hColPallet+'px');
                        for (swatch in swatches)

                            if (swatches.hasOwnProperty(swatch) && swatches[swatch]){
                                flag=1;
                                for(var k=0;k<arCPallet.length;k++){
                                    var rgb=swatches[swatch].getRgb();
                                    if(arCPallet.length>0 && Math.abs(arCPallet[k][1][0]-rgb[0])<10 && Math.abs(arCPallet[k][1][1]-rgb[1])<10 && Math.abs(arCPallet[k][1][2]-rgb[2])<10) flag=0;
                                }
                                if(flag==1){
                                    arCPallet[arCPallet.length]=[swatches[swatch].getHex(),swatches[swatch].getRgb()];
                                }
//                                $('.pt'+j+' .colPallet:eq('+i+')').css('background-color', swatches[swatch].getHex());
                                i++;
                            }
                    }

                    var bColPallet=0;// колич. увеличивыаемых элементов
                    var wPt1=Math.ceil(arCPallet.length/5)*100;
                    var ost=arCPallet.length/Math.ceil(arCPallet.length/5)-Math.ceil(arCPallet.length/Math.ceil(arCPallet.length/5));
                    console.log(Math.ceil(arCPallet.length/5)*5-arCPallet.length);
                    if(ost==0 ){
                        hColPallet=$('#img-preview').outerHeight()/(arCPallet.length/Math.ceil(arCPallet.length/5));
                    }
                    else{
                        if(Math.ceil(arCPallet.length/5)*5-arCPallet.length > Math.ceil(arCPallet.length/5)){
                            hColPallet=$('#img-preview').outerHeight()/4;
                            bColPallet=Math.ceil(arCPallet.length/5)*5 - arCPallet.length - Math.ceil(arCPallet.length/5);
                        }
                        else bColPallet=Math.ceil(arCPallet.length/5)*5 - arCPallet.length;
                    }
                    $(".main_cpallet").css("width",(600+wPt1)+"px");
                    $(".main_cpallet").css("margin-left",((600+wPt1)/-2)+"px");
                    $(".pt1").css("width",wPt1+"px");
                    for(color in arCPallet){
                        $(".pt1").append("<div class='colPallet' style='background-color:"+arCPallet[color][0]+"'></div>");
                    }
                    $('.colPallet').css('height', hColPallet+'px');
                    for(var n=0; n<bColPallet; n++){
                        var l=Math.ceil(arCPallet.length/5)+n;
                        $('.colPallet:eq('+l+')').css('height', 2*hColPallet+'px');
                    }

                }
                reader.readAsDataURL(input.files[0]);

            } else {
                console.log('ошибка, не изображение');
            }
        } else {
            console.log('хьюстон у нас проблема');
        }
    });

    $('#reset-img-preview').click(function() {
        $('#img').val('');
        $('#img-preview').attr('src', 'default-preview.jpg');
    });

    $('#form').bind('reset', function () {
        $('#img-preview').attr('src', 'default-preview.jpg');
    });
});
