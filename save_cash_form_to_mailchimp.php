<?php 

 error_reporting(0);

$from = $_POST['email'] ; 
//$from = 'info@websnit.com'; 
$headers = "From: Cash In Your Points<$from>" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message  = 'New Cash In Your Points Form submitted'.'<br />';
$message .= 'First Name : '.$_POST['first_name'].'<br />';
$message .= 'Last Name : '.$_POST['last_name'].'<br />';
$message .= 'Phone : '.$_POST['phone'].'<br />';
$message .= 'Email : '.$_POST['email'].'<br />';
$message .= 'How Many Points Are You Selling? : '.$_POST['how_many_point_selling'].'<br />';
$message .= 'Which Credit Card Program : '.$_POST['which_program'].'<br />';
$subject = 'New Cash In Your Points Form submitted'  ; 
mail('info@cashinyourpoints.com', $subject, $message, $headers);
echo syncMailchimp();
exit(0);


function syncMailchimp() {
    $apiKey = '94bd67567eb7abfec77ebdc6ce82d6eb-us13';
    $listId = '513dd2ef1b';

    $memberId = md5(strtolower($_POST['email']));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([
        'email_address' => $_POST['email'],
        'status'        => 'subscribed', // "subscribed","unsubscribed","cleaned","pending"
        'merge_fields'  => [
            'FNAME' => $_POST['first_name'],
            'LNAME' => $_POST['last_name'],
            'PHONE' => $_POST['phone'],
            'POINTS' => $_POST['how_many_point_selling'],
            'CREDIT_PRO' => $_POST['which_program'],
            'CREDIT_OTH' => $_POST['other_which_program']
        ]
    ]);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

    $result = curl_exec($ch);
    //print_r($result) ;
    $json = json_decode($result);
    //print_r($json)   ; 
    echo $json->{'status'};
    /*
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    print_r($httpCode) ;  die() ; 
    return $httpCode;
    */
}


