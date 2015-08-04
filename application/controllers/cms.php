<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  @session_start();
  if(empty($_SESSION["username"]))
  	exit("You Should Login First!");	
  	
  include_once("getcmsinfo.php");

class Cms extends CI_Controller {
	public function  publishnow(){
	   

  		$this->load->helper('text');
 		//first fill needed fields
  		if(!empty($_POST['image']))
  			$image="<img src=\'https://graph.facebook.com/".$_POST['image']."/picture\' />" ;
  		else
 			$image="";

  		$text= @addslashes($_POST['text']);

  		$post_content = $image."\n".$text; 
 		$post_title= @word_limiter( $text,4,"...");
  		
 		$publishDate  = date('Y-m-d H:i:s');  
  		
  		echo "This Post Is On Your Site Now! ";
  		$this->PublishPost($post_title,$post_content,$publishDate,"publish");

		

	}
    
	public function  publishin(){
		$this->load->helper('text');
		//first fill needed fields
		if(!empty($_POST['image']))
			$image="<img src=\'https://graph.facebook.com/".$_POST['image']."/picture\' />" ;
		else
			$image="";
			
		$text= @addslashes($_POST['text']);
		$post_content = $image."\n".$text; 
		$post_title= @word_limiter( $text,4,"...");
		
		//get date and reformat it
		$publishDate =  $_POST['publishdate'];
		$timestamp= strtotime($publishDate);
		$publishDate=  date('Y-m-d H:i:s',$timestamp);  
		
		echo "This Post Will Sent To your Site in ".$publishDate;
		$this->PublishPost($post_title,$post_content,$publishDate,"future");
	}
    
	public function  sendtoqueue(){
		
		$this->load->helper('text');
		$this->load->config();
		
		//first fill needed fields
		if(!empty($_POST['image']))
			$image="<img src=\'https://graph.facebook.com/".$_POST['image']."/picture\' />" ;
		else
			$image="";
			
		$text= @addslashes($_POST['text']);

		$post_content = $image."\n".$text; 
		$post_title= @word_limiter( $text,4,"...");
		
		$cmsdata= getcmsinfo();
		//connect ot db
		$cnn= mysql_connect($cmsdata['dbhost'],$cmsdata['dbuser'],$cmsdata['dbpass']);
		mysql_select_db($cmsdata['dbname']);
		mysql_query('SET NAMES \'utf8\'');
		mysql_set_charset('utf8');
		
		//get last date 
		$sql="select max(id) from ".$cmsdata['tbl_prefix']."content";
		//echo $sql;
		$t1= mysql_query($sql,$cnn);
		$lastid = mysql_fetch_array($t1);
		$lastid = $lastid[0]; 
		
		$publishDate="";
		if(empty($lastid)){
			$publishDate  = date('Y-m-d H:i:s');  
		}
		else{
			$t2=mysql_query("select publish_up from ".$cmsdata['tbl_prefix']."content where id=".$lastid , $cnn);
			$lastpublishdate= mysql_fetch_assoc($t2);
			$lastpublishdate = $lastpublishdate["publish_up"];
			
			$publishDate= date('Y-m-d H:i:s', strtotime($lastpublishdate .' + '.$this->config->item("interval").' hours'));
		}
		

		echo "This Post Will Sent To your Site in ".$publishDate;
		$this->PublishPost($post_title,$post_content,$publishDate,"future");
		
	}

	private function PublishPost($title,$content,$publishDate,$post_status){
		$this->load->helper('text');
		$this->load->config();
		
		$cmsdata= getcmsinfo();
		$cnn= mysql_connect($cmsdata['dbhost'],$cmsdata['dbuser'],$cmsdata['dbpass']);
		mysql_select_db($cmsdata['dbname'],$cnn);
		mysql_query('SET NAMES \'utf8\'');
		mysql_set_charset('utf8');
		
		
		//get uncategorized category id
		$link=mysql_query( "select id from ".$cmsdata['tbl_prefix']."categories where path='uncategorised' and extension='com_content'",$cnn);
		$catid=mysql_fetch_assoc( $link);
		$catid=$catid["id"];
		
		//Created In 
		$created= date('Y-m-d H:i:s');
		
		//author
		$link=mysql_query( "select id from ".$cmsdata['tbl_prefix']."users",$cnn);
		$created_by=mysql_fetch_assoc( $link);
		$created_by=$created_by["id"];

		$tblname=$cmsdata['tbl_prefix']."content";
		//$content = str_replace("...","",$content);
		
		//insert new row in wordpress database
		$sql="INSERT INTO $tblname (title,introtext,state, catid, created, created_by, publish_up,access, language)";
		$sql.="values('$title','$content','1', '$catid', '$created', '$created_by', '$publishDate','1', '*')";  
		//die($content);
		//echo $sql;
		
		mysql_query($sql,$cnn);
		//echo "Query Success Fully Executed!";
	}	

}