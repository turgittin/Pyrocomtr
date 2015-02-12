<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("inc/head.php"); ?>
    <title>pyro | digital solutions - neler yapıyoruz?</title>
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <script  type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script  type="text/javascript" src="js/bootstrap-formhelpers-phone.js"></script>
    <script  type="text/javascript" src="js/jquery.number.min.js"></script>
</head>

<?php include("inc/sure.php"); ?>

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

<?php require_once("inc/nav.php"); ?>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="l-wrapper u-pt3">
                        <p id="navy" style="max-width: 565px;font-size: 25px;font-weight: 600;color: #343434;">Aklınızda bir şeyler mi var?<br>Hadi tanışalım!</p>
                        <p style="max-width: 565px;">Biz kendimizi anlattık, sizi de tanımayı <br>hayallerinizin ortağı olmayı çok isteriz. <br>İster kısaca ister detaylı anlatın, konuşalım!</p>
                        <p style="margin-top:20px;"></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container">

    <div class="row">
        <div class="col-sm-12">

           <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">İletişim Formu</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse collapse in">
                            <div class="panel-body">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><i class="glyphicon glyphicon-user"></i> Ad Soyad</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><i class="glyphicon glyphicon-phone"></i> Telefon</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><i class="glyphicon glyphicon-envelope"></i> E-Posta</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><i class="glyphicon glyphicon-tint"></i> Mesaj</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Detaylı Bilgi Formu</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
            <form role="form" method="post" id="bilgi">
                <fieldset>
                    <div class="form-group col-sm-6 mbn">
                      <label for="username" class="control-label"><i class="glyphicon glyphicon-user"></i> Ad Soyad</label>
                      <input type="text" class="form-control" name="adsoyad" placeholder="Adınız ve soyadınızı yazınız..." title="isim ve soyisminiz">
                    </div>
                    <div class="form-group col-sm-6 mbn">
                      <label for="password" class="control-label"><i class="glyphicon glyphicon-briefcase"></i> Firma</label>
                      <input type="text" class="form-control" name="firma" title="Firmanızın adını yazınız..." placeholder="Firmanızın adını yazınız...">
                    </div>

                    <div class="form-group col-sm-6 mbn">
                      <label for="username" class="control-label"><i class="glyphicon glyphicon-envelope"></i> E-Posta</label>
                      <input type="text" class="form-control" id="eamil" name="eamil" title="E-Posta adresinizi yazınız..." placeholder="example@gmail.com">
                    </div>
                    <div class="form-group col-sm-6 mbn">
                      <label for="tel" class="control-label"><i class="glyphicon glyphicon-phone"></i> Telefon</label>
                      <input type="text" class="form-control bfh-phone"  data-format="+90 (ddd) ddd dd dd" name="tel" value="" title="Ulaşabileceğimiz telefon numaranızı yazınız...">
                    </div>
                    <div class="form-group col-sm-12 mbn">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-list-alt"></i> Hizmet Başlıkları</label>
                        <div class="checkbox">
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="hizmetler" value="Arayüz Tasarımı"> Arayüz Tasarımı
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="hizmetler" value="Kullanıcı Tasarımı (UX)">Kullanıcı Tasarımı (UX)
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="hizmetler" value="Mobil Tasarımı">Mobil Tasarımı
                                </label>
                            </div>
                                
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="hizmetler" value="Arayüz Geliştirme" >Arayüz Geliştirme
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="hizmetler" value="Uygulama Geliştirme">Uygulama Geliştirme
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="hizmetler" value="Diger">Diğer
                                </label>
                            </div>
                                
                            </div>
                        </div>

                        <div class="form-group col-sm-12 mbn">
                        <label for="tel" class="control-label"><i class="glyphicon glyphicon-align-justify"></i> Pyro'yu Nereden Duydunuz?</label>
                        <div class="checkbox">
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="nereden" value="Sosyal Medya"> Sosyal Medya
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="nereden" value="Arkadaş"> Arkadaş
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" name="nereden" value="Diğer"> Diğer
                                </label>
                            </div>
                                
                                
                            </div>
                        </div>

                        <div class="form-group col-sm-12 mbn">
                            <label for="tel" class="control-label"><i class="glyphicon glyphicon-tint"></i> Ek Bilgi (referans linkler, başlangıç-bitiş tarigleri, vb detaylı bilgileri yazabilirsiniz.)</label>
                            <textarea type="textarea" class="form-control" name="mesaj" rows="8" title="Bize iletmek istediginiz mesajiniz" placeholder="Bize iletmek istediginiz mesajiniz"> </textarea>
                        </div>
                        <div class="form-group col-sm-5 mbn">
                          <label for="tel" class="control-label"><i class="fa fa-bank"></i> Tahmini Bütçe (*ayrılması planlanan tahmini bütçe)</label>
                          <div class="input-group">
                           <span class="input-group-addon"><span>&#8378;</span></span><input type="text" class="form-control" id="price" name="butce" value="" title="Bize iletmek istediginiz tahmini butceniz" >
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
                                    <input type="radio" name="donus" value="skype"> Skype <input type="text" name="url" style='display: none;margin-top:-25px;margin-left:50px;width:200px; opacity: 1;' class='form-control type' placeholder="Kullanici adi">
                                </label>
                            </div>
                            </div>
                        </div>
                    <div class="col-sm-12">
                        <div class="haber"></div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Mesajı İlet</button>
                </fieldset>
            </form>
                            </div>
                        </div>
                    </div>

                    <!-- /.panel -->
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
<?php require_once("inc/footer.php"); ?>
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
