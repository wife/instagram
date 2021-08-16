<?php
	$ch = curl_init();
	$ray = array(
	"X-CSRFToken: WSalz9Nh37vdiX1edgMLQlvFsZIWjYL7",
	"X-Instagram-AJAX: 1",
	"Cookie: ig_cb=1; mid=W-IIbAALAAGSclxFBTs5Vemrultf; mcd=3; rur=FRC; csrftoken=WSalz9Nh37vdiX1edgMLQlvFsZIWjYL7;",
	"Accept-Language: en-US,en;q=0.8",
	"Accept: */*");
	curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/accounts/web_create_ajax/attempt/");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ray);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "username=".$_GET["user"]."&password=&email=&first_name=&opt_into_one_tap=false");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	$exec = curl_exec($ch);
	if(strpos($exec, "username_is_taken") !== false)
		echo "200";
	else if(strpos($exec, "username_only_has_number") !== false)
		echo "200";
	else
		echo "404";
	curl_close($ch);
?>