<?php
	require "vendor/autoload.php";
	require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
	
	$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<3qs5Pox82P6YsmMlmgezB0oh6RuWCT1ChvrGuTRQDgCvWdbmrslqzQuqy4r9oWwrUAT387UBmO/rGlWvHDYW4iKNr9l1tO7g1T3ei7y0w+Zj/z7rxUQFzG0slmDsnW35XwlPMPChWMNmvT6RsLfzcAdB04t89/1O/w1cDnyilFU=>');
	$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<d541679a2b0b2774ca7c0f3e236fba5e>']);

	//$access_token = '3qs5Pox82P6YsmMlmgezB0oh6RuWCT1ChvrGuTRQDgCvWdbmrslqzQuqy4r9oWwrUAT387UBmO/rGlWvHDYW4iKNr9l1tO7g1T3ei7y0w+Zj/z7rxUQFzG0slmDsnW35XwlPMPChWMNmvT6RsLfzcAdB04t89/1O/w1cDnyilFU=';
	
	
	
	/*$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

	echo $result . "\r\n";*/
	
	$response = $bot->replyText('<reply token>', 'hello!');
?>