<?php

$webhook = "https://discordapp.com/api/webhooks/512392120988991501/fvF3taGVvdtvdjOyd38UshizktY1uyvpMabsOjXAKPl4dxgNrxA8GhYD23yJyrpVEPjM";
$msg = "Gary has connected and will slay you all>";
$role = "<@&511705639622410240>";
$hookObject = json_encode(["embeds" => [
	[
		"title" => "Gary",
		"type" => "rich",
		"color" => hexdec("23AA6D"),
		"description" => "username ".$_GET["user"]." has been claimed\n\n$role\n\n-Gary",
	]
]]);
$make_json = $hookObject;
$ch = curl_init( $webhook );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec( $ch );
?>