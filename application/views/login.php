<form action="" method="post" >
    	
	<table>
		<tr>
			<td><label for="txtusername">Username:</label></td>
			<td><input type="text" name="txtusername" class="form-control" id="txtusername" /></td>
		</tr>
		
		<tr>
			<td><label   for="txtpassword">Password:</label></td>
			<td><input  type="password" name="txtpassword" class="form-control" id="txtpassword" /></td>
		</tr>
		
		
	</table>
	<input type="submit" class="btn btn-primary"  value="Login"/>
    Haven't Any Account?<a href="http://fbtoblog.com/register.php" > Register</a>
</form>
<div class="error" > <?php echo validation_errors(); ?> </div>