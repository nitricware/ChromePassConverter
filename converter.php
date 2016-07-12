<?php
	/*
		Converter ChromePass to Firefox Password Exporter
		by Kurt Höblinger aka NitricWare.com
		July 12 2016
		v0.2
	*/

	$passFile = 'pass.xml';						// Change path to match ChromePass XML
	$saveFile = True;									// Save output as file?
	$saveFileName = 'output.xml';			// Name of the output file?

	/*
		Do not change anything below!
	*/

	$output = '<xml>';
	$output .= '<entries ext="Password Exporter" extxmlversion="1.1" type="saved" encrypt="false">';
	$passes = simplexml_load_file($passFile);
	foreach ($passes as $pass){
		$output .= '<entry host="'.$pass->origin_url.'" user="'.$pass->user_name[0].'" password="'.$pass->password.'" formSubmitURL="'.$pass->action_url.'" httpRealm="" userFieldName="'.$pass->user_name_field.'" passFieldName="'.$pass->password_field.'" />';
	}
	$output .= '</entries>';
	$output .= '</xml>';

	if ($saveFile) {
		file_put_contents($saveFileName, $output);
	}

	echo $output;
