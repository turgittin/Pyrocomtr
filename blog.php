<?php
	@mysql_connect("localhost","api_user","15241524") or die("Database ile baglanti kurulamadi.");
	@mysql_select_db("pyro_blog") or die("Database baglantisi kurulurken sorun olustu.");
	mysql_query("set character set utf8");


//$result=mysql_query("SELECT * FROM `wp_posts` WHERE `post_parent` = 0 and `post_status` = 'publish' and `post_type` = 'post' ORDER BY id DESC");
	$result = mysql_query("SELECT * FROM wp_posts"); 

	$i=0;
	while($row=mysql_fetch_array($result)) { 
	extract($row);


		if ($post_parent == 0 && $post_type == 'post' && $post_status == 'publish'){
			$response[$i]['guid']  = $row['guid']; 
			$response[$i]['post_title']= $row['post_title'];
			$response[$i]['post_name']= $row['post_name'];
			$response[$i]['post_content']= $row['post_content'];
			$data['posts'][$i] = $response[$i];
				$i=$i+1;
		} 
		if($post_type == 'attachment'){
			$response[$i]['image']= $row['guid'];	
			
		}

		
	}
?>

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
//$content = file_get_contents($url);
//$json = json_decode($content, true);

$sayac = "1";
$limit = "3";
foreach($data['posts'] as $item) {
	if ($sayac <= $limit){ 
	?>
	
	
	<p>
		<strong><a href="<?php echo $item['guid'];?>" target="_blank" style="color:#343434;"><?php echo $item['post_title'];?></a></strong><br>
		<?php echo DevamEt($item['post_content'],80);?>
	</p>
	<?php }$sayac++;}?>
  </div>