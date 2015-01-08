<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>pyro | digital solutions - ux/ui ajansı</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/p.css" rel="stylesheet">
    <link href="css/business-frontpage.css" rel="stylesheet">
</head>

<?php
$cerezler = array(
        "./img/hero-img-1.jpg",
        "./img/hero-img-2.jpg");

$dk = date("i");
$img = $cerezler[$dk%count($cerezler)];
?>

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
    <nav class="navbar navbar-default navbar-fixed-top" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="./img/pyrologo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">NELER YAPIYORUZ?</a>
                    </li>
                    <li>
                        <a href="#">PROJELER</a>
                    </li>
                    <li>
                        <a href="#">SOSYAL DUYARLILIK</a>
                    </li>
                    <li>
                        <a href="#">BLOG</a>
                    </li>
                    <li>
                        <a href="#">İLETİŞİM</a>
                    </li>
                    <li>
                        <a href="#"><img class="img-round" src="./img/ico_facebook.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-round" src="./img/ico_twitter.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-round" src="./img/ico_linkedin.png"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="l-wrapper u-pt3">
                        <p id="navy" style="max-width: 565px;font-size: 25px;font-weight: 600;color: #343434;">Kullanıcı Dostu ve Doğru Tasarımlar Üretiyor, En Yeni Teknolojiler ile Arayüzler Geliştiriyoruz.</p>
                        <p style="max-width: 565px;">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. </p>
                        <p style="margin-top:20px;"></p>
                        <button class="btn btn-danger">TANITIM VİDEOSUNU İZLEYİN&nbsp;&nbsp;<i class="glyphicon glyphicon-play-circle"></i> </button>
                        <p style="margin-top:20px;"></p>
                        <p>Daha fazla bilgi için;</p>
                        <button class="btn btn-outline">İLETİŞİME GEÇİN </i> </button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-outline">KEŞFEDİN</button>
                        <p style="margin-top:20px;"></p>
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
        <hr>
        <p class="portfoliotext">İstikrarlı ve yaratıcı çalısmalarla sektörde 16. Yılı doldurduk. Yüzlerce internet sitesi tasarladık, yüzlerce interaktif kampanya çalısmalarını sürdürdük ve yüzlerce mutlu müsteri geri dönüsü aldık.</p>
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                     
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol>
                     
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        
                    <div class="item active">
                        <div class="row">
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/sinemasalorg.jpg" alt="Image" style="max-width:100%;"></a><h5>SineMASAL / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/lunaroomnet.jpg" alt="Image" style="max-width:100%;"></a><h5>Lunaroom / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/gulsahekerelcom.jpg" alt="Image" style="max-width:100%;"></a><h5>Gülşah Ekerel / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/fodofoodcom.jpg" alt="Image" style="max-width:100%;"></a><h5>Fodofood / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/aloriagardencom.jpg" alt="Image" style="max-width:100%;"></a><h5>Aloria Garden / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/lunaroomblog.jpg" alt="Image" style="max-width:100%;"></a><h5>Lunaroom Blog / Tasarım & Geliştirme</h5></div>
                        </div><!--.row-->
                    </div><!--.item-->
                     
                    <div class="item">
                        <div class="row">
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/sinemasalorg.jpg" alt="Image" style="max-width:100%;"></a><h5>SineMASAL / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/lunaroomnet.jpg" alt="Image" style="max-width:100%;"></a><h5>Lunaroom / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/gulsahekerelcom.jpg" alt="Image" style="max-width:100%;"></a><h5>Gülşah Ekerel / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/fodofoodcom.jpg" alt="Image" style="max-width:100%;"></a><h5>Fodofood / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/aloriagardencom.jpg" alt="Image" style="max-width:100%;"></a><h5>Aloria Garden / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/lunaroomblog.jpg" alt="Image" style="max-width:100%;"></a><h5>Lunaroom Blog / Tasarım & Geliştirme</h5></div>
                        </div><!--.row-->
                    </div><!--.item-->
                     
                    <div class="item">
                        <div class="row">
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/sinemasalorg.jpg" alt="Image" style="max-width:100%;"></a><h5>SineMASAL / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/lunaroomnet.jpg" alt="Image" style="max-width:100%;"></a><h5>Lunaroom / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 pbn"><a href="#" class="thumbnail"><img src="./img/projeler/gulsahekerelcom.jpg" alt="Image" style="max-width:100%;"></a><h5>Gülşah Ekerel / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/fodofoodcom.jpg" alt="Image" style="max-width:100%;"></a><h5>Fodofood / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/aloriagardencom.jpg" alt="Image" style="max-width:100%;"></a><h5>Aloria Garden / Tasarım & Geliştirme</h5></div>
                          <div class="col-md-4 "><a href="#" class="thumbnail"><img src="./img/projeler/lunaroomblog.jpg" alt="Image" style="max-width:100%;"></a><h5>Lunaroom Blog / Tasarım & Geliştirme</h5></div>
                        </div><!--.row-->
                    </div><!--.item-->

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

<section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center">Büyük fikirleri alevlendiriyoruz!</h2>
                <p class="text-center">Zamanımızın büyük bir kısmını yaratıcı bir fikri en etkili şekilde hayata geçirmenin yollarını planlamak için kullanıyoruz.</p>
            </div>

                <div class="row text-center">
                    <div class="col-md-2 col-md-4 col-xs-6">
                    <img src="./img/icons/op-iletisim.png">
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
        </div>
    </section>
</div>


    <div class="newbg footerTopSection">
        <div class="container">
            <div class="col-sm-8">
                <p style="color:#fff;font-size:20px;margin: 3px 0px 0px 0px;">Size güncel haber ve özel fırsat bültenleri göndermemizi ister misiniz?</p>
            </div>
            <div class="col-sm-4">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="hey@pyro.com.tr" required>
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
                    <span>This may be the very useful and quick link for proper information</span><br><br>
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
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

    $('#nav').affix({
          offset: {
            top: 100
        }
    }); 

    $('#scroll').affix({
          offset: {
            top: 100
        }
    }); 
    $('#bs-example-navbar-collapse-1').affix({
          offset: {
            top: 60
        }
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
</script>

</body>

</html>
