<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0051)file:///C:/Users/Mohsen/Desktop/Untitled2/page.html -->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en" class="chrome chrome35"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $title; ?></title>
	
<?php
$this->load->helper('url');

?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	
	<link rel="stylesheet" href="<?php echo $this->config->item('folder_url').'css/mystyles.css' ; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo $this->config->item('folder_url').'css/style.css' ; ?>" type="text/css" media="screen">
    <!--[if IE 6]><link rel="stylesheet" href="<?php echo $this->config->item('folder_url').'css/style.ie6.css'; ?>" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo $this->config->item('folder_url').'css/style.ie7.css'; ?>" type="text/css" media="screen" /><![endif]-->
<link rel="shortcut icon" href="<?php echo $this->config->item('folder_url').'favicon.ico'; ?>" type="image/x-icon">
    <script type="text/javascript" src="<?php echo $this->config->item('folder_url').'js/jquery.js' ; ?>"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('folder_url').'js/script.js' ; ?>"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('folder_url').'js/datepick/ts_picker.js' ; ?>"></script>

</head>
<body>
<div id="art-page-background-glare-wrapper">
    <div id="art-page-background-glare"></div>
</div>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-header">
                <div class="art-logo">
                                                 <h1 class="art-logo-name"><a href="">Facebook To Blog</a></h1>
                                                                         <h2 class="art-logo-text">Publish Top Posts Of Facebook to Your Blog</h2>
                                                </div>
                
            </div>
            <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
	<ul class="art-hmenu">
    <?php
	@session_start();
	if(!empty($_SESSION["username"])){
	?>
		<li>
			<a href="<?php echo base_url("/home"); ?>" class="active">Home</a>
		</li>	
		<li>
			<a href="<?php echo base_url("/page"); ?>">Facebook Pages</a>
			<ul>
				<li>
                    <a href="<?php echo base_url("/page/selective"); ?>">See Popular Pages</a>
                </li>
				
				<li>
                    <a href="<?php echo base_url("/page/custom"); ?>">See Custom Page</a>

                </li>
			</ul>
		</li>	
		
		<li>
			<a href="<?php echo base_url("blogposts"); ?>">Manage Blog Posts</a>
		</li>	
        
		<li>
			<a href="<?php  echo $this->config->item('folder_url')."configuration.php"; ?>">Configuration</a>
		</li>
		
		<li>
			<a href="<?php echo base_url("login/logout"); ?>">Logout</a>
		</li>	
     <?php } ?>
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-layout-wrapper" style="padding-left:30px;padding-top:20px; ">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">