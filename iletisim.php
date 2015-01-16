<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("head.php"); ?>
    <title>pyro | digital solutions - neler yapıyoruz?</title>
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <script  type="text/javascript" src="js/jquery.fancybox.js"></script>
</head>

<?php include("sure.php"); ?>

<style type="text/css">
    .business-header {
    /*height: 400px;*/
    background: url("<?= $iletisim ?>") center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover; 
}
</style>

<body>

<?php require_once("nav.php"); ?>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="l-wrapper u-pt3">
                        <p id="navy" style="max-width: 565px;font-size: 25px;font-weight: 600;color: #343434;">SineMASAL; Bir film izlersin hayatın değişir. <br>Bir şey değişir, her şey değişir!</p>
                        <p style="max-width: 565px;">Böyle bir oluşumun içinde olduğum için çok mutluyum <br>ama daha gidecek çok fazla köy var!</p>
                        <p style="margin-top:10px;">Turgay Öztürk / Gönüllü - SineMASAL Yönetim Kurulu Üyesi</p>
                        <button class="btn btn-danger" data-toggle="modal" data-target=".fragman">SİNEMASAL BELGESEL FRAGMANI&nbsp;&nbsp;<i class="glyphicon glyphicon-play-circle"></i> </button>
                        <p style="margin-top:20px;"></p>
                        <p>Daha fazla bilgi için;</p>
                        <a href="http://sinemasal.org" target="_blank"><button class="btn btn-outline"> SineMASAL'ın Websitesi</i> </button></a>
                        <p style="margin-top:20px;"></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    
    <div class="row" style="margin-top:20px;">
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/arayuztasarim.png"></div>
                    <div class="media-body pl">

                        <h4 class="media-heading">ARAYÜZ TASARIM (UI)</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/arayuzgelistirme.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">ARAYÜZ GELİŞTİRME</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/kullanicideneyimi.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">KULLANICI DENEYİMİ (UX)</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/uygulamagelistirme.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">UYGULAMA GELİŞTİRME</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/mobiltasarim.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">MOBİL TASARIM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/icons/tasarimdanismanligi.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">TASARIM DANIŞMANLIĞI</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade fragman" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="//player.vimeo.com/video/86586173?title=0&amp;byline=0&amp;color=ff9933" width="870" height="490" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


<?php require_once("footer.php"); ?>
</body>
</html>
