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
                    var vibrant = new Vibrant(img, 128, 2);
                    var swatches = vibrant.swatches();
                    var i=0;
                    var hColPallet=$('#img-preview').outerHeight()/5;
                    $('.colPallet').css('height', hColPallet+'px');
                    for (swatch in swatches)
                        if (swatches.hasOwnProperty(swatch) && swatches[swatch]){
                            $('.colPallet:eq('+i+')').css('background-color', swatches[swatch].getHex());
                            i++;
                            console.log(swatch, swatches[swatch].getHex());
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
