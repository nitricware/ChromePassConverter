<?php
	/*
		Converter ChromePass to Firefox Password Exporter
		by Kurt Höblinger aka NitricWare.com
		July 3 2016
		v0.1	
	*/
	
	// Change path to match ChromePass XML

	$passFile = "pass.xml";

	/*
		Do not change anything below!
	*/
?>

<xml>
<entries ext="Password Exporter" extxmlversion="1.1" type="saved" encrypt="false">
<?php
	$passes = simplexml_load_file($passFile);
	foreach ($passes as $pass){
		echo '<entry host="'.$pass->origin_url.'" user="'.$pass->user_name[0].'" password="'.$pass->password.'" formSubmitURL="'.$pass->action_url.'" httpRealm="" userFieldName="'.$pass->user_name_field.'" passFieldName="'.$pass->password_field.'" />';
		echo "\n";
	}
?>
</entries>
</xml>	