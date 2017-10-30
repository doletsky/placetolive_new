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
                    var hColPallet=$('#img-preview').outerHeight()/5;
                    var arCPallet=[];
                    var flag=1;
                    for(var j=1;j<6;j++){
                        var vibrant = new Vibrant(img, 256, j);
                        var swatches = vibrant.swatches();
                        var i=0;
                        $('.colPallet').css('height', hColPallet+'px');
                        for (swatch in swatches)

                            if (swatches.hasOwnProperty(swatch) && swatches[swatch]){
                                flag=1;
                                for(var k=0;k<arCPallet.length;k++){
                                    if(arCPallet[k]==swatches[swatch].getHex()) flag=0;
                                }
                                if(flag==1){arCPallet[arCPallet.length]=swatches[swatch].getHex();}
                                $('.pt'+j+' .colPallet:eq('+i+')').css('background-color', swatches[swatch].getHex());
                                i++;
                                console.log(swatch, swatches[swatch].getHex());
                            }
                    }
                    console.log(arCPallet);

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
