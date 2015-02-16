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
echo json_encode($data);

