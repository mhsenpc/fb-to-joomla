<?php
@session_start();
if(file_exists("configured")){
	if(empty($_SESSION["username"]))
		exit("You Should Login First!");
}

if(!empty($_POST['txtfolder']) && !empty($_POST['txtcms']) && !empty($_POST['txtinterval']) ){

	//start installing
	$sampleconfig=file_get_contents("sampleconfig.php");
	
	//check for slashes
	$txtfolder=$_POST['txtfolder']; 
	if(substr($txtfolder, -1) != "/" )
		$txtfolder .="/";
		
	$txtbaseurl=$txtfolder . "index.php";
	
	
	$txtcms=$_POST['txtcms'];
	if(substr($txtcms, -1) != "/" )
		$txtcms .="/";
		
		
	
	//put settings into it
	$settings= str_replace("<base_url>",$txtbaseurl ,$sampleconfig);
	$settings= str_replace("<folder_url>",$txtfolder,$settings);
	$settings= str_replace("<cms_url>",$txtcms,$settings);
	$settings= str_replace("<interval>",$_POST['txtinterval'],$settings);
	
	//save full config file
	file_put_contents("application/config/config.php",$settings);
	file_put_contents("configured","");
	header("location: ./");

}

$folder_url="http://". $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$folder_url = str_replace("configuration.php","",$folder_url);

$path=explode("/",$folder_url);

$cmsurl="";  //it should recognize cms path automatically
for($i=0;$i<count($path)-2;$i++)
	$cmsurl .=$path[$i] ."/";
?>


<form id="form1" name="form1" method="post" action="">
<p>Enter Required Fields Very Precise</p>
<p><a href="http://fbtoblog.com/how_to_configure.html"> You Can Use This Toturial For Config</a></p>
<table width="650" border="0">
  <tr>
    <td width="272">Cms Url</td>
    <td width="218"><label for="txtcms"></label>
      <input name="txtcms" type="text" id="txtcms" value="<?php echo $cmsurl; ?>" size="60" /></td>
    <td width="50"><img src="css/images/help.png" title="Place Where Your Cms(wordpress,joomla,drupal and ...) Is Installed.Include http://"   /></td>
    </tr>
  <tr>
    <td>FbToblog Installation Url</td>
    <td><input name="txtfolder" type="text" id="txtfolder" value="<?php echo $folder_url; ?>" size="60" /></td>
    <td><img src="css/images/help.png" title="Place Where Script Is Installed.Include http://"   /></td>
    </tr>
  <tr>
    <td>Interval Between Every Post In Queue (Hours)</td>
    <td><input name="txtinterval" type="text" id="txtinterval" value="5" size="10" />
      Hours</td>
    <td><img src="css/images/help.png" title="Hours Between Each queue Post"   /></td>
    </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Save" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>

</form>

