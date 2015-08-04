<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
if(empty($_SESSION["username"]))
	exit("You Should Login First!");
	
class Posts extends CI_Controller {
	public function Show($pageid,$qr=NULL){
		$hdata=array('title'=>'See Page Posts');
		$this->load->view("header",$hdata);
		
		$cu=new curl();
		$query = "/$pageid/posts?fields=message,picture,object_id&limit=10" ;  
		if(!empty( $qr)){
			$data= $cu->Curl_download($this->config->item("api_url") ,base64_decode( $qr));
		}
		else
			$data= $cu->Curl_download($this->config->item("api_url"),$query);
		

		if(strpos($data,"error",0) ==FALSE ) {
			//load normally
			$data= unserialize(  urldecode($data));
			
			$previous= ($data['paging']['previous']); //with url
			$previous = str_replace("https://graph.facebook.com/v2.0", "", $previous); //clear url query for next page
			
			$next= ($data['paging']['next']); //with url
			$next = str_replace("https://graph.facebook.com/v2.0", "", $next); //clear url query for next page
			
			$data = array('posts'=>$data['data'] , 'next'=>$next , 'previous' => $previous,'pagename' =>$pageid,'qr'=>$qr); 
		}
		else{
			$data=array('posts'=>array() ,'qr'=>$qr,'next'=>'' , 'previous' => '','pagename' =>$pageid,'error_message'=>'This Page Is not valid or has no posts <br/>');
		}
		
		$this->load->view("posts/show",$data);
		$this->load->view("footer");
		
	}
	
	public function showlargeimage($object_id){
		$this->load->helper("url");
		$url="https://graph.facebook.com/".$object_id."/picture";
		redirect($url);
	}
	

}

	
class curl {	

public function Curl_download($Url,$query){
	    // is cURL installed yet?
	    if (!function_exists('curl_init')){
	        die('Sorry cURL is not installed!');
	    }
	 
	    // OK cool - then let's create a new cURL resource handle
	    $ch = curl_init();
	 
	    // Now set some options (most are optional)
	 
	    // Set URL to download
	    curl_setopt($ch, CURLOPT_URL, $Url);
	 
	    // Set a referer
	    curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
	 
	    // User agent
	    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	 
	    // Include header in result? (0 = yes, 1 = no)
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	 
	    // Should cURL return or print out the data? (true = return, false = print)
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 
	    // Timeout in seconds
	    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
	 
		curl_setopt ($ch, CURLOPT_POST, 1);
 	
		curl_setopt ($ch, CURLOPT_POSTFIELDS, array("query"=>urlencode( $query))); 
 
	    // Download the given URL, and return output
	    $output = curl_exec($ch);
	 
	    // Close the cURL resource, and free system resources
	    curl_close($ch);
	 
	    return $output;
	}
	
}