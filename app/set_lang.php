<?php
	$new_lang = $_GET['lang'];
	
	if($new_lang == "eng") {
		setcookie("lang", 'eng', time()+31556926 );
	}
	else if($new_lang == "swe"){
		setcookie("lang", 'swe' ,time()+31556926 );
	}
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
	
?>