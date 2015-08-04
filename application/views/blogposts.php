<h2>Manage Blog Posts</h2>
<br />
<table>
<tr>
	<td>Title</td>
    <td>Content</td>
    <td>Publish Date</td>
    <td></td>
</tr>
<?php
  while($record=mysql_fetch_assoc($posts))
  {
?>
<tr>
	<td><?php echo $record['title']; ?></td>
    <td><?php echo $record['introtext']; ?></td>
    <td><?php echo $record['publish_up']; ?></td>
    <td><a href="blogposts/Remove/<?php echo $record['id']; ?>" class="btn btn-danger" >Delete</a></td>
</tr>
<?php } ?>
</table>