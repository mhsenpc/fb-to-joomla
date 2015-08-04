<script>
	function publishnow(postid)
	{
		var txt=$("#txt_"+ postid).val();
		var pic=$("#pic_" + postid).val();
		$.post( "<?php echo base_url('cms/publishnow'); ?>", { text: txt, image: pic })
		  .done(function( data ) {
			  $("#div_" + postid).html(data);
  			  //$("#div_" + postid).hide(400);
 		});
		
	}
	
	function publishin(postid)
	{
		
		var txt=$("#txt_"+ postid).val();
		var pic=$("#pic_" + postid).val();
		var publish =$("#txtdate_" + postid).val();

		if(publish===""){
			alert("Please Choose Date And Time Of Post Publication First!");
			return;
		}
		
		$.post( "<?php echo base_url('cms/publishin'); ?>", { text: txt, image: pic,publishdate: publish})
		  .done(function( data ) {
			  $("#div_" + postid).html(data);
			  //$("#div_" + postid).hide(400);
		});
		
	}
	
	function SendToQueue(postid)
	{
		var txt=$("#txt_"+ postid).val();
		var pic=$("#pic_" + postid).val();
		$.post( "<?php echo base_url('cms/sendtoqueue'); ?>", { text: txt, image: pic })
		  .done(function( data ) {
			$("#div_" + postid).html(data);
			//$("#div_" + postid).hide(400);
		});
		
	}
	
</script>
<?php  foreach ($posts as $item): ?>
<div class='thumb' style='width:400px;'  id='div_<?php  echo $item['id']; ?>'>
<input type='hidden' id='pic_<?php echo $item['id']; ?>' name='pic_<?php echo $item['id']; ?>' value='<?php echo $item['object_id']; ?>' /></a>

<?php 
if(isset($item['object_id'])){
	?>
<a href="<?php echo base_url("/posts/showlargeimage")."/".$item['object_id']  ?>" ><img name='img_<?php echo $item['id']; ?>' id='img_<?php echo $item['id']; ?>'  src='<?php echo $item['picture']; ?>'  /> </a>

<?php } ?>

<textarea id='txt_<?php echo $item['id']; ?>' cols='70' rows='10' ><?php if(!empty($item['message'])) echo $item['message']; ?></textarea>
<input type="button" class="btn btn-success" onclick="publishnow('<?php echo $item['id']; ?>');"  value="Publish Now" />

<input type="button" class="btn btn-default" onclick="SendToQueue('<?php echo $item['id']; ?>');"  value="Send To Queue" />
<form id="form_<?php echo $item['id']; ?>" name="form_<?php echo $item['id']; ?>">
Publish Post For Future: 
<input type="text"  id="txtdate_<?php echo $item['id']; ?>"  name="txtdate_<?php echo $item['id']; ?>" />

<a href="javascript:show_calendar('document.form_<?php echo $item['id']; ?>.txtdate_<?php echo $item['id']; ?>', document.form_<?php echo $item['id']; ?>.txtdate_<?php echo $item['id']; ?>.value);">

<img src="<?php echo  $this->config->item('folder_url').'js/datepick/cal.gif'; ?>" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>

<input type="button" class="btn btn-default" onclick="publishin('<?php echo $item['id']; ?>');"  value="Schedule" />

</form>
</div>
<br />
<br />
<hr />
<?php endforeach;?>
<?php echo @$error_message; ?>

<?php
if(!empty( $qr)){ ?>
<a class="btn btn-primary" href="<?php echo base_url("/posts/show/$pagename/".str_replace("=","", base64_encode( $previous)) ); ?>" >previous</a>
<?php } ?>
<?php if(!isset($error_message)){ ?>
<a class="btn btn-primary" href="<?php echo base_url("/posts/show/$pagename/".str_replace("=","", base64_encode( $next)) ); ?>" >Next</a>
<?php } ?>
