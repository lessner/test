$(document).ready(function () {
    $('#upload').on('click', function () {
        var logoImg = $('input[name="f1"]').get(0).files[0];
        var formData = new FormData();
        //For image file
        formData.append('logo', logoImg);

        $.ajax({
            url: 'upload.php',
            type:"POST",
            processData:false,
            contentType: false,
            data: formData,
            complete: function(data){
                alert("success");
            }
        });
    });

    $('#display').on('click', function () {
        $.ajax({
            url: 'display.php',
            type:"POST",
            processData:false,
            contentType: false,
            complete: function(data){

            }
        });
    })
});