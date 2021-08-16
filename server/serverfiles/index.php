<?php
if($_GET["user"]) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/".$_GET["user"]."/");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$exec = curl_exec($ch);
	$uszName = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	
	if($uszName == "200")
	{
		echo "200";
	} else if($uszName == "404") {
		echo "404";
	} else {
		echo $uszName;
	}
	curl_close($ch);
}
?>