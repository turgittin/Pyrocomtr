<div class="container">
    <div class="message"></div>
</div>
    <div class="newbg footerTopSection">
        <div class="container">
            <div class="col-sm-8">
                <p style="color:#fff;font-size:20px;margin: 3px 0px 0px 0px;">Size güncel haber ve özel fırsat bültenleri ateşlememizi ister misiniz?</p>
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

<!-- footerTopSection -->
    <div class="ftbg footerTopSection">
<div class="container">

            <div class="row">
              <div class="col-md-3">

                <h3>Hakkında</h3>
                
                <p>
                pyro digital solution adını, "ateşteki alevlenme"den alır. <p>Bu anlamdan yola çıkan pyro, hizmet vereceği markaların ateşini özgün bakış açısıyla yükseltmek için 2014 yılında kuruldu.</p>
                </p>
                <img src="./img/pyrologo.png">
              </div>
              <div class="col-md-3">
                <h3>Blogdan Haberler</h3>
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
                <h3>Sosyal Medya</h3>
                <p>
                    <span>Pyro, bir kaç sosyal medya hesabı kullanıyor. Bizden haberleri takip etmek için bizi sosyal medyada ateşlemeyi unutma :)</span><br>
                    <p><img src="./img/icons/ico_facebook-ft.png">&nbsp;&nbsp;<img src="./img/icons/ico_twitter-ft.png">&nbsp;&nbsp;<img src="./img/icons/ico_linkedin-ft.png"></p>

                    <a href="#">Blog</a><br>
                    <a href="#">İş Fırsatları</a><br>
                    <a href="#">İletişim</a><br>
                </p>
               
              </div>
              <div class="col-md-3">
                <div class="contact-form">
                    <h3>Bize Ateşle Gelsin!</h3>
                    <div class="mesaj"></div>
                    <form role="form" method="post" id="iletisim" >
                        <div class="form-group" style="margin-bottom:5px;">
                            <input type="text" id="isim" name="isim" class="form-control" placeholder="İsim Soyisim">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="femail" name="femail" placeholder="email adresiniz">
                        </div>
                        <div class="form-group">
                            <textarea name="mesaj" id="mesaj" class="form-control" rows="3" required="" placeholder="Bize iletmek istediğiniz mesajınız..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-block">Mesajı İlet</button>
                    </form>
                </div>
              </div>
            </div>

    </div>
    <div class="footerBottomSection">
        <div class="container">
            <p>&copy; 2015 pyro | digital solutions tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
    <ul class="nav pull-right scroll-top" id="scroll">
      <li><a href="#" data-toggle="tooltip" data-placement="top" title="Yukarı Çık"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
    </ul>

    <script  type="text/javascript" src="js/jquery.fancybox.js"></script>
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
    </script>

    
     <link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
