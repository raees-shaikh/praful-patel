var form = $("#index-form");
form.submit(function(e){
    $('.message').empty();
    $('.inmsg').empty();
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: form.data('action'),
        data: form.serialize(),
        success: function(d){
            if (d.status == 'success') {
                form[0].reset();
                grecaptcha.reset();
                $('.message').append('<p class="success text-center" style="color:green;">'+d.msg+'<p/>')
            }else{
                if (d.msg) {
                    $('.message').append('<p class="error text-center" style="color:red;">'+d.msg+'<p/>')
                }else{
                    for (name in d.errors){
                        var error = d.errors[name];
                        if (name == 'captcha') {
                            $('.g-recaptcha').append('<div class="inmsg"><p class="error" style="color:red;font-size:12px">'+error+'</p></div>')
                        }
                        $('[name="'+name+'"]').after('<div class="inmsg"><p class="error" style="color:red;font-size:12px">'+error+'</p></div>');
                    }
                }
            }
        },
        dataType: "json"
    });
});