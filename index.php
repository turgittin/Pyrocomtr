<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pyro</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/p.css" rel="stylesheet">
    <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<?php

$cerezler = array(
        "https://d1lrmnchp1ja3v.cloudfront.net/assets/marketing/hero-bg2-44e94fb5b480cec372b8809bb6439a91.jpg",
        "http://www.tarafsizhaber.com/resim/fotogaleri/1/10749/9439.jpg",
        "http://www.birkarefotograf.com/wp-content/uploads/2013/12/kar.jpeg",
        "http://www.ask-resimleri.com/wp-content/uploads/2012/04/manzara-resimleri-82.jpg",
        "http://resimage.net/imagersss/manzara-resimleri/manzara-5.jpg");

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
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affixed-top.bs.affix" data-offset-top="600" id="nav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="./img/pyrologo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/arayuztasarim.png"></div>
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
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/arayuzgelistirme.png"></div>
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
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/kullanicideneyimi.png"></div>
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
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/uygulamagelistirme.png"></div>
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
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/mobiltasarim.png"></div>
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
                    <div style="width: 60px;height: 50px;float: left;"><img src="./img/tasarimdanismanligi.png"></div>
                    <div class="media-body pl">
                        <h4 class="media-heading">TASARIM DANIŞMANLIĞI</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>

            </div>
        </div>
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
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                        </div><!--.row-->
                    </div><!--.item-->
                     
                    <div class="item">
                        <div class="row">
                           <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                        </div><!--.row-->
                    </div><!--.item-->
                     
                    <div class="item">
                        <div class="row">
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                          <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/700x450" alt="Image" style="max-width:100%;"></a></div>
                        </div><!--.row-->
                    </div><!--.item-->
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>




        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

    $('#nav').affix({
      offset: {
        top: 100,
    }

}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})
</script>



</body>

</html>
