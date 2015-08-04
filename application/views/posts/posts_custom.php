<script>
function sendpage(){
          var pagename= document.getElementById("txtpageid").value;
          window.location="<?php echo base_url("/posts/show"); ?>" +"/" + pagename ;
}
</script>
<p>
  <label for="txtpageid">Write Page Name Or Page Id:</label>
  <input type="text" id="txtpageid" name="txtpageid" size="40" />
  <input type="button" class="btn btn-primary" value="Show Posts" onclick="sendpage();" /> 
</p>
<p>E.g: https://www.facebook.com/pages/Beautiful-pictures/109020272498573</p>
<p>Both <strong>Beautiful-pictures</strong> and <strong>109020272498573</strong> are accepable</p>
