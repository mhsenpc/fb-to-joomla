<?php
	function getcmsinfo(){
		$filename="../configuration.php";
	    if(file_exists($filename)){
	        include_once($filename);
			$conf=new JConfig();
			
	        $cmsdata= array('dbhost'=>$conf->host,'dbname'=>$conf->db,'dbuser'=>$conf->user,'dbpass'=>$conf->password,'tbl_prefix'=>$conf->dbprefix,'connected'=>'1');
	    }
	    else{
	        $cmsdata=array('connected'=>'0');
	    }
		return $cmsdata;
	}

?>