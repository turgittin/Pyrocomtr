$(document).ready(function () {
    $('#subscribe').submit(function () {
        if (!valid_email_address($("#email").val())) {

            (function(){
                var counter = 5;
                setInterval(function() {
                    counter--;
                    if (counter >= 0) {
                        span = document.getElementById("count");
                        span.innerHTML = counter;
                    }
                }, 1000);
            })();

            swal({  title: "Lütfen geçerli bir E-posta adresi giriniz.!",  
                    type: "error",
                    text: "<span id='count'>5</span>sn içinde kapanacaktır...",
                    timer: 5000, 
                    html: true,
                    confirmButtonText: "Tamam" });
        }
        else {
             swal({  title: "E-posta adresiniz ekleniyor...",  
                        type: "warning",
                        confirmButton: false,
                        showConfirmButton: false

                    });
            
            $.ajax({
                url: 'forms/hey.php',
                data: $('#subscribe').serialize(),
                type: 'POST',
                success: function (msg) {
                    if (msg == "success") {
                        $("#email").val("");
                        $(".message").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-posta adresiniz başarıyla kaydedilmiştir. Adresinize onay maili gönderdik, bakarsanız mutlu oluruz! :)</span>");

                    }
                    else {

                        swal({  title: "E-posta adresiniz başarıyla kaydedilmiştir.!",  
                        type: "success",
                        text: "Adresinize onay maili gönderdik, bakarsanız mutlu oluruz! :)",
                        confirmButtonText: "Tamam" });
                    }
                }

            })
        }
        this.reset();
        return false;
    });


});
function valid_email_address(email) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(email);
}


$(document).ready(function () {
    $('#iletisim').submit(function () {
        if (!valid_email_address($("#femail").val())) {
            $(".mesaj").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Lütfen geçerli bir E-posta adresi giriniz.</div>");
        }
        else {

            $(".mesaj").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-posta adresiniz ekleniyor...</div>");
            $.ajax({
                url: 'forms/footerIletsimForm.php',
                data: $('#iletisim').serialize(),
                type: 'POST',
                success: function (msg) {
                    if (msg == "success") {
                        $("#femail").val("");
                        $(".mesaj").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Mesajınız tarafımıza iletilmiştir. Teşekkürler.</span>");

                    }
                    else {
                        $(".mesaj").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Mesajınız tarafımıza iletilmiştir. Teşekkürler.</span>");
                    }
                }
            });
        }

        return false;
    });
});
function valid_email_address(femail) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(femail);
}


$(document).ready(function () {
    $('#bilgi').submit(function () {
        if (!valid_email_address($("#eamil").val())) {
            $(".haber").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Lütfen geçerli bir E-posta adresi giriniz.</div>");
        }
        else {

            $(".haber").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-posta adresiniz ekleniyor...</div>");
            $.ajax({
                url: 'forms/bilgi_form.php',
                data: $('#bilgi').serialize(),
                type: 'POST',
                success: function (msg) {
                    if (msg == "success") {
                        $("#eamil").val("");
                        $(".haber").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Mesajınız tarafımıza iletilmiştir. Teşekkürler.</span>");

                    }
                    else {
                        $(".haber").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Mesajınız tarafımıza iletilmiştir. Teşekkürler.</span>");
                    }
                }
            });
        }

        return false;
    });
});
function valid_email_address(eamil) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(eamil);
}


$(document).ready(function () {
    $(".fancybox").fancybox({
        openEffect: "elastic",
        closeEffect: "elastic"
    });

    $('.navbar-toggle').click(function(){


        $('#bs-example-navbar-collapse-1').slideToggle(600);
    })

});




$(document).ready(function () {
    $('#Carousel').carousel({
        interval: 50000000000000000
    })
});

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
        $('#bs-example-navbar-collapse-1').hide();
        $('#bs-example-navbar-collapse-1').removeClass('in');
        $('#bs-example-navbar-collapse-1').attr('aria-expanded', 'false');
        $('.navbar-toggle').attr('aria-expanded', 'false');
        $('.navbar-toggle').addClass('collapsed');
    }


});

$(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});



