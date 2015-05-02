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
                        <input type="text" class="form-controlwhite form-control" id="email" name="email" placeholder="lorem@gmail.com" style="height:34px">
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
                <img src="./img/pyrologo-footer.png">
              </div>
              <div class="col-md-3">
              <h3>Blogdan Haberler</h3>
           <?php
            function DevamEt ($string, $len, $kelime = 0){
                $bitis = "";
                if (strlen($string) > $len) $bitis = "...";
                    $string = substr($string, 0, $len);
                        if ($kelime) $string = substr($string,0,strtpos($string," ")+1);
                return $string.$bitis;
            }

            $url = 'http://www.pyro.com.tr/blog/api/api.php';
            $content = file_get_contents($url);
            $json = json_decode($content, true);

            $sayac = "1";
            $limit = "3";
            foreach($json['posts'] as $item) {
                if ($sayac <= $limit){ 
                ?>
                
                
                <p>
                    <strong><a href="<?php echo $item['guid'];?>" target="_blank" style="color:#343434;"><?php echo $item['post_title'];?></a></strong><br>
                    <?php echo DevamEt($item['post_content'],80);?>
                </p>
                <?php }$sayac++;}?>
              </div>
              <div class="col-md-3">
                <h3>Sosyal Medya</h3>
                <p>
                    <span>pyro, bir kaç sosyal medya hesabı kullanıyor. Bizden haberleri takip etmek için bizi sosyal medyada ateşlemeyi unutma :)</span><br>
                    <p>
                        <a href="http://www.facebook.com/pyrocomtr" target="_blank" style="text-decoration:none">
                            <img src="./img/icons/ico_fb.png" class="social-medya">
                        </a>&nbsp;
                        <a href="http://www.twitter.com/pyrocomtr" target="_blank" style="text-decoration:none">
                            <img src="./img/icons/ico_tw.png" class="social-medya">
                        </a>&nbsp;
                        <a href="https://www.linkedin.com/company/2631507?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A2-1-2%2CtarId%3A1429987243515%2Ctas%3Apyro%20di" target="_blank" style="text-decoration:none">
                            <img src="./img/icons/ic_lnk.png" class="social-medya">
                        </a>&nbsp;
                        <a href="https://www.youtube.com/channel/UC6j8OjPU_X1QAm-Y86az8tQ" target="_blank" style="text-decoration:none">
                            <img src="./img/icons/ico_you.png" class="social-medya">
                        </a>&nbsp;
                        <a href="http://www.instagram.com/pyrocomtr" target="_blank" style="text-decoration:none">
                            <img src="./img/icons/ico_ins.png" class="social-medya">
                        </a>
                    </p>

                    <a href="http://www.pyro.com.tr/blog" target="_blank">Blog</a><br>
                    <a href="iletisim">İletişim</a><br>
                </p>
               
              </div>
              <div class="col-md-3">
                <div class="contact-form">
                    <h3>Bize Ateşle Gelsin!</h3>
                    <div class="mesaj"></div>
                    <form role="form" method="post" id="footer" >
                        <div class="form-group" style="margin-bottom:5px;">
                            <input type="text" id="isim" name="isim" class="form-control form-controlred" style="height:34px" placeholder="İsim Soyisim">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-controlred" id="femail" style="height:34px" name="femail" placeholder="E-posta">
                        </div>
                        <div class="form-group">
                            <textarea name="mesaj" id="mesaj" class="form-control form-controlred" rows="3" required="" placeholder="Lütfen bize iletmek istediğiniz mesajınızı yazın."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-block">Mesajı İlet</button>
                    </form>
                </div>
              </div>
            </div>

    </div>
    <div class="footerBottomSection">
        <div class="container">
            <p>&copy; 2015 pyro digital solutions - tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
<a href="#" class="scrollToTop  red-tooltip hvr-wobble-vertical" data-toggle="tooltip" data-placement="top" title="Yukarı Çık"><i class="glyphicon glyphicon-chevron-up"></i></a>

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

    </script>