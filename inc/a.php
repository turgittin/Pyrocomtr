<?php

$url = 'http://www.pyro.com.tr/blog/api/api.php';
$content = file_get_contents($url);
$json = json_decode($content, true);


foreach($json['post'] as $item) {
    echo $item['post_title'];
}