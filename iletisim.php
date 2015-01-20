<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("head.php"); ?>
    <title>pyro | digital solutions - neler yapıyoruz?</title>
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <script  type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script  type="text/javascript" src="js/bootstrap-formhelpers-phone.js"></script>
    <script  type="text/javascript" src="js/jquery.number.min.js"></script>
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
                        <p id="navy" style="max-width: 565px;font-size: 25px;font-weight: 600;color: #343434;">Sıra geldi iletişime! Sizin için;<br>detaylı bilgi formu hazırladık...</p>
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
    <div class="row">
        <div class="col-sm-12">
            <form >
                <fieldset>

                <!-- Form Name -->
                                 
                <!-- Text input-->
                    <div class="form-group col-sm-6 mbn">
                      <label for="username" class="control-label"><i class="glyphicon glyphicon-user"></i> Ad Soyad</label>
                      <input type="text" class="form-control" name="adsoyad" required="" placeholder="Adınız ve soyadınızı yazınız..." title="isim ve soyisminiz">
                    </div>
                    <div class="form-group col-sm-6 mbn">
                      <label for="password" class="control-label"><i class="glyphicon glyphicon-briefcase"></i> Firma</label>
                      <input type="text" class="form-control" name="firma" required="" title="Firmanızın adını yazınız..." placeholder="Firmanızın adını yazınız...">
                    </div>

                    <div class="form-group col-sm-6 mbn">
                      <label for="username" class="control-label"><i class="glyphicon glyphicon-envelope"></i> E-Posta</label>
                      <input type="email" class="form-control" name="email" required="" title="E-Posta adresinizi yazınız..." placeholder="example@gmail.com">
                    </div>
                    <div class="form-group col-sm-6 mbn">
                      <label for="tel" class="control-label"><i class="glyphicon glyphicon-phone"></i> Telefon</label>
                      <input type="text" class="form-control bfh-phone"  data-format="+90 (ddd) ddd dd dd" name="tel" value="" required="" title="Ulaşabileceğimiz telefon numaranızı yazınız...">
                    </div>
                    <div class="form-group col-sm-12 mbn">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-list-alt"></i> Hizmet Başlıkları</label>
                        <div class="checkbox">
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="arayuz_tasarim"> Arayüz Tasarımı
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="kullanici_tasarim">Kullanıcı Tasarımı (UX)
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="mobil_tasarim">Mobil Tasarımı
                                </label>
                            </div>
                                
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="arayuz_gelistirme">Arayüz Geliştirme
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="uygulama_gelistirme">Uygulama Geliştirme
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="uygulama_gelistirme">Diğer
                                </label>
                            </div>
                                
                            </div>
                        </div>

                        <div class="form-group col-sm-12 mbn">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-align-justify"></i> Pyro'yu Nereden Duydunuz?</label>
                        <div class="checkbox">
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="arayuz_tasarim"> Sosyal Medya
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="kullanici_tasarim"> Arkadaş
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="mobil_tasarim"> Diğer
                                </label>
                            </div>
                                
                                
                            </div>
                        </div>

                        <div class="form-group col-sm-12 mbn">
                            <label for="tel" class="control-label"><i class="glyphicon glyphicon-tint"></i> Ek Bilgi (referans linkler, başlangıç-bitiş tarigleri, vb detaylı bilgileri yazabilirsiniz.)</label>
                            <textarea type="textarea" class="form-control" name="mesaj" rows="8" required="" title="Bize iletmek istediginiz mesajiniz" placeholder="Bize iletmek istediginiz mesajiniz"> </textarea>
                        </div>
                        <div class="form-group col-sm-5 mbn">
                          <label for="tel" class="control-label"><i class="fa fa-bank"></i> Tahmini Bütçe (*ayrılması planlanan tahmini bütçe)</label>
                          <div class="input-group">
                           <span class="input-group-addon"><span>&#8378;</span></span><input type="text" class="form-control" id="price" name="butce" value="" required="" title="Bize iletmek istediginiz tahmini butceniz" >
                          </div>
                        </div>

                        <div class="form-group col-sm-7 mbn">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-align-justify"></i> Geri Dönüş Tercihiniz? (Size ne şekilde geri dönelim?)</label>
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
                                    <input type="radio" name="donus" value="skype"> Skype <input type="text" name="url" style='display: none;margin-top:-25px;margin-left:50px;width:200px; opacity: 1;' class='form-control type' placeholder="Kullanici adi" required>
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
<script type="text/javascript">
            
            $(function(){
                // Set up the number formatting.
                
                $('#number_container').slideDown('fast');
                
                $('#price').on('change',function(){
                    console.log('Change event.');
                    var val = $('#price').val();
                    $('#the_number').text( val !== '' ? val : '(empty)' );
                });
                
                $('#price').change(function(){
                    console.log('Second change event...');
                });
                
                $('#price').number( true, 2 );
                
                
                // Get the value of the number for the demo.
                $('#get_number').on('click',function(){
                    
                    var val = $('#price').val();
                    
                    $('#the_number').text( val !== '' ? val : '(empty)' );
                });
            });
        </script>
</body>
</html>
