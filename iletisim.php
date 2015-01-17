<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("head.php"); ?>
    <title>pyro | digital solutions - neler yapıyoruz?</title>
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <script  type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script  type="text/javascript" src="js/bootstrap-formhelpers-phone.js"></script>
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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form>
                <fieldset>

                <!-- Form Name -->
                <legend>Bilgilendirme Formu</legend>
                <!-- Text input-->
                    <div class="form-group col-sm-6">
                      <label for="username" class="control-label"><i class="glyphicon glyphicon-user"></i> AD SOYAD</label>
                      <input type="text" class="form-control" name="adsoyad" required="" placeholder="AD SOYAD" title="isim ve soyisminiz">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="password" class="control-label"><i class="glyphicon glyphicon-briefcase"></i> FİRMA</label>
                      <input type="text" class="form-control" name="firma" required="" title="Firmanızın adını yazınız..." placeholder="Firmanizin Adi">
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="username" class="control-label"><i class="glyphicon glyphicon-envelope"></i> E-POSTA</label>
                      <input type="email" class="form-control" name="email" required="" title="Email adresinizi yazınız..." placeholder="example@gmail.com">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="tel" class="control-label"><i class="glyphicon glyphicon-phone"></i> TELEFON</label>
                      <input type="text" class="form-control bfh-phone"  data-format="+90 (ddd) ddd dd dd" name="tel" value="" required="" title="Ulaşabileceğimiz telefon numaranızı yazınız" data-mask="000-0000">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-list-alt"></i> HİZMET BAŞLIKLARI</label>
                        <div class="checkbox">
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="arayuz_tasarim"> Arayüz Tasarımı
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="kullanici_tasarim">Kullanıcı Tasarımı (UX)
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="mobil_tasarim">Mobil Tasarımı
                                </label>
                            </div>
                                
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="arayuz_gelistirme">Arayüz Geliştirme
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="uygulama_gelistirme">Uygulama Geliştirme
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="uygulama_gelistirme">Diğer
                                </label>
                            </div>
                                
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-align-justify"></i> BİZİ NEREDEN DUYDUNUZ</label>
                        <div class="checkbox">
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="arayuz_tasarim"> Sosyal Medya
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="kullanici_tasarim"> Arkadaş
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" name="mobil_tasarim"> Diğer
                                </label>
                            </div>
                                
                                
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="tel" class="control-label"><i class="glyphicon glyphicon-tint"></i> EK BILGI</label>
                            <textarea type="textarea" class="form-control" name="mesaj" rows="8" required="" title="Bize iletmek istediginiz mesajiniz" placeholder="Bize iletmek istediginiz mesajiniz"> </textarea>
                        </div>
                        <div class="form-group col-sm-6">
                          <label for="tel" class="control-label"><i class="fa fa-bank"></i> TAHMINI BUTCE</label>
                          <input type="text" class="form-control" name="butce" value="" required="" title="Bize iletmek istediginiz tahmini butceniz">
                        </div>

                        <div class="form-group col-sm-6">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-align-justify"></i> GERI DONUS ICIN TERCIH</label>
                        <div class="radio">
                            <div class="col-md-3">
                                <label>
                                    <input type="radio" name="donus" value="eposta"> E-Posta <input type="hidden" class='type'>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="radio" name="donus" value="tel"> Telefon <input type="hidden" class='type'>

                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="radio" name="donus" value="skype"> Skype

                                    <input type="text" name="url" style='display: none;height: 61px; opacity: 1;' class='form-control type' placeholder="Kullanici adi">
                                </label>
                            </div>
                                
                                
                            </div>
                        </div>
                    <button type="submit" class="btn btn-default btn-block">Gönder</button>
                </fieldset>
            </form>

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
<script type="text/javascript">
    $("input:radio").change(function() {
    $(".type").hide();
    $(this).next("input").show();
});
</script>
</body>
</html>
