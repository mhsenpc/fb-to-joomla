<?php
include_once("inc/facebook.php"); //include facebook SDK

$appId = ''; //Facebook App ID
$appSecret = ''; // Facebook App Secret

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret,
  'fileUpload' => true,
  'cookie' => true
));


$user = @$facebook->getUser();

$query=$_POST['query'];
$query=urldecode($query);


//$query= "/mamlekate/feed?fields=message,picture&limit=5";
$publicFeed = $facebook->api($query);

$publicFeed = urlencode(serialize($publicFeed));
print_r($publicFeed);