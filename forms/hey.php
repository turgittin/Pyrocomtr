<?php

	$api_key = "adf4f86b08ae924bd4632d154339e7f3-us10";
	$list_id = "e670e713e4";

	require_once('../Mailchimp.php'); 

	$Mailchimp = new Mailchimp( $api_key );
	$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );
	$subscriber = $Mailchimp_Lists->subscribe( $list_id, array( 'email' => htmlentities($_POST['email']) ) );

	if ( ! empty( $subscriber['leid'] ) ) {
	   echo '<script>alert("E-postaniz basariyla kaydedildi.");history.back(-1);</script>';
	}
	else
	{
	    echo '<script>alert("E-postaniz kaydedilemedi.");history.back(-1);</script>';
	}

?>