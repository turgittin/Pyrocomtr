<?php

	$api_key = "4184337669f730ea14e7ce97ed07114d-us10";
	$list_id = "f851799004";

	require('Mailchimp.php');
	$Mailchimp = new Mailchimp( $api_key );
	$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );
	$subscriber = $Mailchimp_Lists->subscribe( $list_id, array( 'email' => htmlentities($_POST['hey']) ) );

	if ( ! empty( $subscriber['leid'] ) ) {
	   echo '<script>alert("E-postaniz basariyla kaydedildi.");history.back(-1);</script>';
	}
	else
	{
	    echo '<script>alert("E-postaniz kaydedilemedi.");history.back(-1);</script>';
	}

?>