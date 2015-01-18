
<div class="message">
    
</div>
    <div class="newbg footerTopSection">
        <div class="container">
            <div class="col-sm-8">
                <p style="color:#fff;font-size:20px;margin: 3px 0px 0px 0px;">Size güncel haber ve özel fırsat bültenleri göndermemizi ister misiniz?</p>
            </div>
            <div class="col-sm-4">
                <form role="form" method="post" id="subscribe">
                    <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="hey@pyro.com.tr">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
    $('#subscribe').submit(function() {
        if (!valid_email_address($("#email").val()))
        {
            $(".message").html("<div class='alert alert-danger'>E-Posta Adresiniz yanlis aq</div>");
        }
        else
        {
            
            $(".message").html("<div class='alert alert-success'>E-Posta Adresiniz Ekleniyor...</div>");
            $.ajax({
                url: 'hey.php', 
                data: $('#subscribe').serialize(),
                type: 'POST',
                success: function(msg) {
                    if(msg=="success")
                    {
                        $("#email").val("");
                        $(".message").html('<span style="color:green;">You have successfully subscribed to our mailing list.</span>');
                        
                    }
                    else
                    {
                      $(".message").html("<div class='alert alert-danger'>E-Posta Adresiniz yanlis ama ya</div>");  
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
    </script>

<!-- footerTopSection -->
    <div class="ftbg footerTopSection">
<div class="container">

            <div class="row">
              <div class="col-md-3">

                <h3>Hakkında</h3>
                
                <p>
                pyro digital solution ajansının adının anlamı, "ateşteki alevlenme" demektir. <p>Bu anlamdan yola çıkan pyro, hizmet vereceği markaların ateşini farklı bakış açısıyla yükseltmek için 2014 yılında kuruldu.</p>
                </p>
                <img src="./img/pyrologo.png">
              </div>
              <div class="col-md-3">
                <h3>Yeni Haberler var</h3>
                <p>
                    Best service provicer for<br>
                    <strong>web and application </strong> design and development.
                </p>
                <p>
                    Best service provicer for<br>
                    <strong>web and application </strong> design and development.
                </p>
                <p>
                    Best service provicer for<br>
                    <strong>web and application </strong> design and development.
                </p>
              </div>
              <div class="col-md-3">
                <h3>Lorem</h3>
                <p>
                    <span>This may be the very useful and quick link for proper information</span><br>
                    <p><img src="./img/icons/ico_facebook-ft.png">&nbsp;&nbsp;<img src="./img/icons/ico_twitter-ft.png">&nbsp;&nbsp;<img src="./img/icons/ico_linkedin-ft.png"></p>
                    <a href="#">Neler Yapıyoruz?</a><br>
                    <a href="#">Projeler</a><br>
                    <a href="#">Sosyal Duyarlılık</a><br>
                    <a href="#">Blog</a><br>
                    <a href="#">İş Fırsatları</a><br>
                    <a href="#">İletişim</a><br>
                </p>
               
              </div>
              <div class="col-md-3">
                <div class="contact-form">
                    <h3>İletişim</h3>

                    <form id="main-contact-form" name="contact-form" method="post" action="#">
                        <div class="form-group" style="margin-bottom:5px;">
                            <input type="text" name="isim" class="form-control" placeholder="İsim Soyisim" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-Posta" required="">
                        </div>
                        <div class="form-group">
                            <textarea name="mesaj" class="form-control" rows="3" placeholder="Bize iletmek istediğiniz mesajınız..." required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-block">Mesajı İlet</button>
                    </form>
                </div>
              </div>
            </div>
        
    </div>
    <div class="footerBottomSection">
        <div class="container">
            <p>&copy; 2010-2015, pyro | digital solutions tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>


    <ul class="nav pull-right scroll-top" id="scroll">
      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Yukarı Çık"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
    </ul>
    <script type="text/javascript">
           $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "elastic",
                closeEffect: "elastic"
            });
            });
        </script>
     <link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
<script type="text/javascript">

    $('#nav').affix({
          offset: {
            top: 60,
        }
    }); 

    $('#scroll').affix({
          offset: {
            top: 100
        }
    }); 

    $('#bs-example-navbar-collapse-1').on('hidden.bs.collapse', function () {
          offset: {
            top: 100
        }
})
    
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


</script>