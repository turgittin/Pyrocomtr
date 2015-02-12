<?php
include './inc/ayar.php';

$femail=$_REQUEST["femail"];
$sql="SELECT * FROM footer_iletisim WHERE femail = :femail";
$stmt = $db->prepare($sql);
$stmt->bindValue(':femail', $femail, PDO::PARAM_STR);
$stmt->execute();
$count= $stmt->rowCount();
if ($count>0) {

    echo('False');

}  else {

    echo('True');

}