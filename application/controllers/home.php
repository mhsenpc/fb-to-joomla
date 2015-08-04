<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
if(empty($_SESSION["username"]))
	exit("You Should Login First!");

	
include_once("curl.php");
include_once("getcmsinfo.php");
class Home extends CI_Controller {
	public function index(){
		$cmsdata= getcmsinfo();
		$data=array('title'=>'Home');
		$this->load->view("header",$data);
		$this->load->view("home",$cmsdata);
		$this->load->view("footer");
	}
}