<?php
@mysql_connect("localhost","api_user","15241524") or die("Database ile baglanti kurulamadi.");
@mysql_select_db("pyro_blog") or die("Database baglantisi kurulurken sorun olustu.");

mysql_query("set character set utf8");

$result = mysql_query('SELECT `id`, `post_status`, `post_title` FROM `wp_posts` where post_status="publish" ORDER BY `id` DESC LIMIT 20') or die(mysql_error());
$rows = array();
while($row = mysql_fetch_assoc($result)){
    $rows[] = $row;
}

echo json_encode($rows);
