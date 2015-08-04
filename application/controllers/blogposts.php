<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start();
if(empty($_SESSION["username"]))
	exit("You Should Login First!");
	
include_once("getcmsinfo.php");

class Blogposts extends CI_Controller {
	public function index(){
		$data=array('title'=>'Manage Blog Posts');
		$this->load->view("header",$data);
		
		$cmsdata= getcmsinfo();
		$cnn= mysql_connect($cmsdata['dbhost'],$cmsdata['dbuser'],$cmsdata['dbpass']);
		mysql_select_db($cmsdata['dbname'],$cnn);
		mysql_query('SET NAMES \'utf8\'');
		mysql_set_charset('utf8');
		
		$sql="select * from ".$cmsdata['tbl_prefix']."content";

		$posts=mysql_query($sql,$cnn);
		
		$data=array('posts'=>$posts);
		$this->load->view("blogposts",$data);
		$this->load->view("footer");
	}
	
	public function remove($id){
		$this->load->helper("url");
		$cmsdata= getcmsinfo();
		
		//connect ot db
		$cnn= mysql_connect($cmsdata['dbhost'],$cmsdata['dbuser'],$cmsdata['dbpass']);
		mysql_select_db($cmsdata['dbname'],$cnn);
		mysql_query('SET NAMES \'utf8\'');
		mysql_set_charset('utf8');
		
		mysql_query("delete from ".$cmsdata['tbl_prefix']."content where id=".$id,$cnn);
		
		redirect(base_url( "blogposts"));
	}
	
}