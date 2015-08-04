<?php
include_once("inc/facebook.php"); //include facebook SDK

$appId = '1507227666157854'; //Facebook App ID
$appSecret = '75bb86be5c43f76157bf698f62076c4f'; // Facebook App Secret

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