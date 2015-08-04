<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
if(empty($_SESSION["username"]))
	exit("You Should Login First!");
	
class Page extends CI_Controller {
	public function index(){
		$this->load->helper("url");
		redirect(base_url("/page/selective"));
	}
	
	public function selective(){
		$this->load->helper("url");
		$pageid=$this->input->post("txtpageid");
		if($pageid)
			redirect("posts/show/$pageid/1");
			
		$data=array('title'=>'Show Popular Page Posts');
		$this->load->view("header",$data);
		$this->load->view("posts/posts_selective");
		$this->load->view("footer");
	}	
	
	public function custom(){
		$this->load->helper("url");
		$pageid=$this->input->post("txtpageid");
		if($pageid)
			redirect("posts/show/$pageid/1");
			
		$data=array('title'=>'Show Custom Page');
		$this->load->view("header",$data);
		$this->load->view("posts/posts_custom");
		$this->load->view("footer");
	}	
	
}