$(document).ready(function() {
    $('#subscribe').submit(function() {
        if (!valid_email_address($("#email").val()))
        {
            $(".message").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Duzgun bir mail adresi giriniz</div>");
        }
        else
        {
            
            $(".message").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-Posta Adresiniz Ekleniyor...</div>");
            $.ajax({
                url: 'hey.php', 
                data: $('#subscribe').serialize(),
                type: 'POST',
                success: function(msg) {
                    if(msg=="success")
                    {
                        $("#email").val("");
                        $(".message").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-Posta adresiniz basariyla kaydedilmistir. E-mailinizden Onaylayiniz.</span>");
                        
                    }
                    else
                    {
                      $(".message").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-Posta adresiniz basariyla kaydedilmistir. E-mailinizden Onaylayiniz.</span>");  
                    }
                }
            });
        }
 
        return false;
    });
});
function valid_email_address(email)
{
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(email);
}

$(document).ready(function() {
    $('#iletisim').submit(function() {
        if (!valid_email_address($("#femail").val()))
        {
            $(".mesaj").html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Duzgun bir mail adresi giriniz</div>");
        }
        else
        {
            
            $(".mesaj").html("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>E-Posta Adresiniz Ekleniyor...</div>");
            $.ajax({
                url: 'footer_iletisim.php', 
                data: $('#iletisim').serialize(),
                type: 'POST',
                success: function(msg) {
                    if(msg=="success")
                    {
                        $("#femail").val("");
                        $(".mesaj").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Basvurunuz tarafimiza iletilmistir.Tesekkur ederiz.</span>");
                        
                    }
                    else
                    {
                      $(".mesaj").html("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Basvurunuz tarafimiza iletilmistir.Tesekkur ederiz.</span>");  
                    }
                }
            });
        }

        return false;
    });
});
function valid_email_address(femail)
{
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(femail);
}


$(document).ready(function(){
$(".fancybox").fancybox({
    openEffect: "elastic",
    closeEffect: "elastic"
});
});



    
    
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 50000000000000000
    })
});