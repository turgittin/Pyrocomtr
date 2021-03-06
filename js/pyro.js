$(document).ready(function () {

    $('#subscribe').submit(function (){

        if (!checkEmail($("#email").val())) {
            $(".message").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Lütfen geçerli bir e-posta adresi giriniz.</div>");
        }else {
            bilgi();
            
            $.ajax({
                url: '/forms/hey.php',
                data: $('#subscribe').serialize(),
                type: 'POST',
                dataType: 'json',
            
                success : function(data){
                    
                    if(data.err)
                        var className = "danger";
                    else
                        var className = "success";
                    $(".message").html("<div class='alert alert-"+className+"'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span>"+data.msg+"</div>");
                },
                error : function(data){
                    
                    $(".message").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Mesajınız gönderilirken bir hata oluştu.</div>");
                }
            });
        }
        this.reset();
        return false;
    });

    $('#footer').submit(function (){

        if (!checkEmail($("#femail").val())) {
            $(".mesaj").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Lütfen geçerli bir e-posta adresi giriniz.</div>");
        }else {
            $(".mesaj").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span> Mesajınız ulaştırılıyor...</div>");
            
            $.ajax({
                url: '/forms/footer.php',
                data: $('#footer').serialize(),
                type: 'POST',
                dataType: 'json',
            
                success : function(data){
                    
                    if(data.err)
                        var className = "danger";
                    else
                        var className = "success";
                    $(".mesaj").html("<div class='alert alert-"+className+"'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span>"+data.msg+"</div>");
                },
                error : function(data){
                    
                    $(".mesaj").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Mesajınız gönderilirken bir hata oluştu.</div>");
                }
            });
        }
        this.reset();
        return false;
    });

    $('#detay').submit(function (){

        if (!checkEmail($("#eamil").val())) {
            $(".haber").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Lütfen geçerli bir e-posta adresi giriniz.</div>");
        }else {
            $(".haber").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span> Mesajınız ulaştırılıyor...</div>");
            
            $.ajax({
                url: 'forms/detay.php',
                data: $('#detay').serialize(),
                type: 'POST',
                dataType: 'json',
            
                success : function(data){
                    
                    if(data.err)
                        var className = "danger";
                    else
                        var className = "success";
                    $(".haber").html("<div class='alert alert-"+className+"'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span>"+data.msg+"</div>");
                },
                error : function(data){
                    
                    $(".haber").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Mesajınız gonderilirken bir hata meydana geldi.</div>");
                }
            });
        }
        this.reset();
        return false;
    });

    $('#contact-form').submit(function (){

        
            $(".armut").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span> Mesajınız ulaştırılıyor...</div>");
            
            $.ajax({
                url: 'forms/contact.php',
                data: $('#contact-form').serialize(),
                type: 'POST',
                dataType: 'json',
            
                success : function(data){
                    
                    if(data.err)
                        var className = "danger";
                    else
                        var className = "success";
                    $(".armut").html("<div class='alert alert-"+className+"'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span>"+data.msg+"</div>");
                },
                error : function(data){
                    
                    $(".armut").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <span class='glyphicon glyphicon-exclamation-sign'></span> Mesajınız gönderilirken bir hata oluştu.</div>");
                }
            });
        
        this.reset();
        return false;
    


});

});

function checkEmail(email) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(email);
}

function bilgi(msj){
    $(".message").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><span class='glyphicon glyphicon-info-sign'></span> Mesajınız ulaştırılıyor...</div>");
}

function valid_email_address(femail) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(femail);
}

function valid_email_address(eamil) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(eamil);
}


$(document).ready(function () {
    $(".fancybox").fancybox({
        openEffect: "elastic",
        closeEffect: "elastic"
    });




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



