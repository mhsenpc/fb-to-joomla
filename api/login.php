<?php

	$db_host='';
	$db_name='';
	$db_username='';
	$db_passowrd='';
	
    $username= addslashes( strip_tags( $_POST['username']));
    $password= addslashes( strip_tags( $_POST['password']));
    $siteaddress= addslashes( strip_tags( $_POST['siteaddress']));
    
    $cnn= mysql_connect($db_host,$db_username,$db_passowrd);
    mysql_select_db($db_name,$cnn);
    $link= mysql_query("select count(*) from users where username='$username' and password='$password' and siteaddress='$siteaddress'",$cnn);
    $record=mysql_fetch_array($link);
    if($record[0]>0)
        echo "1";
    else
        echo "0";