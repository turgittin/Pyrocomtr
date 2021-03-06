<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("inc/head.php"); ?>
    <title>pyro digital solutions | markanızı alevlendirir!</title>
</head>

<?php include("inc/sure.php"); ?>

<style type="text/css">
    .business-header {
    /*height: 400px;*/
    background: url("<?= $img ?>") center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover; 
}
</style>

<body>

    <!-- Navigation -->
    <?php require_once("inc/nav.php"); ?>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="l-wrapper u-pt3">
                        <p id="navy" style="max-width: 590px;font-size: 25px;font-weight: 600;color: #343434;font-family: 'Montserrat', sans-serif;">Mutlu müşteriler için, tüm dijital platformlarda kullanılabilir uygulamalar<br> ve web siteleri üretiyoruz.</p>
                        <p style="max-width: 565px;">Kullanıcılarınız sitenizde uzun ve keyifli vakit geçirsin, aradıklarını kolayca bulabilsin, sitenize bakarken içi açılsın, evde, mobilde kısaca her yerde sizinle olmak istesin diye tasarımı ve teknolojiyi mutluluk için ateşleriz!</p>
                        <p style="margin-top:20px;"></p>
                        <button class="btn btn-danger" data-toggle="modal" data-target=".intro">TANITIM VİDEOSUNU İZLEYİN&nbsp;&nbsp;<i class="glyphicon glyphicon-play-circle"></i> </button>
                        <p style="margin-top:10px;"></p>
                        <p>Daha fazla bilgi için;</p>
                        <a href="/iletisim"><button class="btn btn-outline">İLETİŞİM</i></button></a>
                        <p style="margin-top:10px;"></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
	
        <div class="row" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="media">
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/arayuztasarim.png"></div>
                    <div class="media-body pl">

                        <h4 class="media-heading">ARAYÜZ TASARIM (UI)</h4>
                        <p>Güncel, teknolojik ve özgün arayüzler tasarlar hayata geçirmek için heyecanlanırız.</p>
                    </div>
                </div>
                <div class="media">
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/arayuzgelistirme.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">ARAYÜZ GELİŞTİRME</h4>
                        <p>Tasarladığımız arayüzleri Pyro ateşiyle mutfağımızda pişiririz.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="media">
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/kullanicideneyimi.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">KULLANICI DENEYİMİ (UX)</h4>
                        <p>Kullanıcı deneyiminde odaklandığımız alan kolaylık ve memnuniyet! Sonuç, mutluluk...</p>
                    </div>
                </div>
                <div class="media">
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/uygulamagelistirme.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">UYGULAMA GELİŞTİRME</h4>
                        <p>Siz ihtiyacınızı söyleyin biz size uygun uygulamayı  hızla geliştirelim.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="media">
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/mobiltasarim.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">MOBİL TASARIM</h4>
                        <p>Tasarım artık mobilde başlıyor! Kullanıcılarınızı olduğu her yerde siz de mobil olun!</p>
                    </div>
                </div>
                <div class="media">
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/tasarimdanismanligi.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">TASARIM DANIŞMANLIĞI</h4>
                        <p>Siz hayallerinizi anlatın biz hayallerinize giden yolu çizelim.</p>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <p class="portfoliotext">Özgün çalışmalarla pek çok internet sitesine ihtiyacı olan enerjiyi pyro ateşiyle verdik! En güncel teknolojilerle arayüzler ve kullanıcı dostu deneyimler tasarlarken mutlu müşteriler kazandık.</p>
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                    <div>
                        <ol class="carousel-indicators">
                            
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>                            
                            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                        </ol>
                    </div>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        
                    <div class="item active">
                        <div class="row">
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/proje/sinemasalorg.jpg" alt="Image" class="main-logolar"></a><h5>SineMASAL</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/proje/artideneyim.jpg" alt="Image" class="main-logolar"></a><h5>Artıdeneyim</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/proje/fodofoodcom.jpg" alt="Image" class="main-logolar"></a><h5>Fodofood</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/proje/lunaroom.jpg" alt="Image" class="main-logolar"></a><h5>Lunaroom</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/proje/iskelehouse.jpg" alt="Image" class="main-logolar"></a><h5>Iskele House</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/proje/istanbulnakliyat.jpg" alt="Image" class="main-logolar"></a><h5>İstanbul Nakliyat</h5></div>
                        </div><!--.row-->
                    </div><!--.item-->
                     
                    <div class="item">
                        <div class="row">
                          <div class="col-md-4 pbn"><a href="#" data-toggle="modal" data-target=".projeler" class="thumbnail"><img src="./img/proje/aloriagarden.jpg" alt="Image" style="max-width:100%;"></a><h5>Aloria Garden</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/proje/bigtiful.jpg" alt="Image" style="max-width:100%;"></a><h5>Bigtiful</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/proje/potasahibinden.jpg" alt="Image" style="max-width:100%;"></a><h5>Pota Sahibinden</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/proje/gulsahekerel.jpg" alt="Image" style="max-width:100%;"></a><h5>Gulsah Ekerel</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/proje/osmanlisanayi.jpg" alt="Image" style="max-width:100%;"></a><h5>Osmanlı Sanayi</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/proje/emingursoy.jpg" alt="Image" style="max-width:100%;"></a><h5>Emin Gürsoy</h5></div>
                        </div><!--.row-->
                    </div><!--.item-->
                     
                      
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /.row -->

<section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center">Büyük fikirleri alevlendiriyoruz!</h2>
                <p class="text-center">Siz büyük düşünün ve hayal kurun sonra gelin bize anlatın ve gerçeğe nasıl dönüştüğünü izleyin!</p>
            </div>

                <div class="row text-center">
                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-contact.png">
                    <p class="rottext">iletişim</p>
                    </div>

                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-arastirma-taslak.png">
                    <p class="rottext">araştırma/taslak</p>
                    </div>

                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-tasarim.png">
                    <p class="rottext">tasarım</p>
                    </div>

                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-sunum.png">
                    <p class="rottext">sunum</p>
                    </div>

                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-test-revizyon.png">
                    <p class="rottext">test/revize</p>
                    </div>

                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-acilis.png">
                    <p class="rottext">açılış</p>
                </div>

            </div>
<blockquote>
     <p><?= $soz ?></p>
     <small>by <cite><?= $yazar ?></cite></small>
</blockquote>
            
        </div>
    </section>

</div>

<div class="modal fade intro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="870" height="490" src="https://www.youtube.com/embed/uLGfSq7lVjg" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

<?php require_once("inc/footer.php"); ?>


</body>

</html>
