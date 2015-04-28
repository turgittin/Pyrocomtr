<?php
$res = array("err"=>0);

	if(empty(htmlentities($_POST['email']))){
		$res["err"]=1;
		$res["msg"]="Lütfen tüm alanları doldurun";
	}else{

		$api_key = "adf4f86b08ae924bd4632d154339e7f3-us10";
		$list_id = "e670e713e4";

		require_once('../mailchimp.php'); 

		$Mailchimp = new Mailchimp( $api_key );
		$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );

		$subscriber = $Mailchimp_Lists->subscribe( $list_id, array( 'email' => htmlentities($_POST['email']) ) );

		if ( ! empty( $subscriber['leid'] ) ) {
			$res["err"]=0;
			$res["msg"]="Adresinize onay maili gönderdik, bakarsanız mutlu oluruz! :)";
		}
		else
		{
		    $res["err"]=1;
			$res["msg"]="E-postaniz kaydedilemedi!";
		}
	}
	echo json_encode($res);
?>
