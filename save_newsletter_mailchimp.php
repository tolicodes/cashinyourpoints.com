<?php 

error_reporting(0);
echo syncMailchimp();
exit(0);


function syncMailchimp() {
    $apiKey = '94bd67567eb7abfec77ebdc6ce82d6eb-us13';
    $listId = 'f07f712101';

    $memberId = md5(strtolower($_POST['email']));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([
        'email_address' => $_POST['email'],
        'status'        => 'subscribed'
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


