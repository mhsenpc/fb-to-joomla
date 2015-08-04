<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
class Login extends CI_Controller {

	public function index()
	{
		if(!file_exists("configured"))
			header("location: configuration.php");
			
		$this->load->helper('url');
		$this->load->library("form_validation");
		$this->form_validation->set_rules('txtusername',"Username",'required');
		$this->form_validation->set_rules('txtpassword','Passowrd','required');
		
		if($this->form_validation->run() )
		{
			//get fields from input
			$username= $this->input->post('txtusername');
			$password= $this->input->post('txtpassword');
			
			$this->load->config();
			//send query 
			$query= $this->Curl_download($this->config->item("login_url") ,$username,$password,$_SERVER['SERVER_NAME'] );
			
			//check it
			if($query=="1"){
				//save in the session
				$_SESSION["username"]= $username;
				redirect(base_url("home"));	
			}
			else{
				//user or pass incorrect
				$data=array('title'=>'Login');
				$this->load->view("header",$data);
				$this->load->view('login');
				$this->output->append_output( "<div class='error'>Username or Password Incorrect on Domain ".$_SERVER['SERVER_NAME']."! </div>");
				$this->load->view("footer");
			}
				
		}
		else{
			//validation error
			$data=array('title'=>'Login');
			$this->load->view("header",$data);
			$this->load->view('login');
			$this->load->view("footer");
		}

	}
	
	public function logout(){
		session_destroy();
		redirect(base_url("login"));
	}
		
	private function Curl_download($Url,$username,$password,$site){
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
	 	
			curl_setopt ($ch, CURLOPT_POSTFIELDS, array("username"=>$username,'password'=>$password,'siteaddress'=>$site)); 
	 
		    // Download the given URL, and return output
		    $output = curl_exec($ch);
		 
		    // Close the cURL resource, and free system resources
		    curl_close($ch);
		 
		    return $output;
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */