<?php  
	$sql="SELECT * FROM type ORDER BY type_id";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
	<tr>
		<td>ID: </td>
		<td>Name:</td>
		<td>STT:</td>
		<td colspan="2">Manage</td>
	</tr>
	<?php  
	$i=0;
	while ($dong=mysqli_fetch_array($run)) {
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $dong['type_name'] ?></td>
			<td><?php echo $dong['type_num'] ?></td>
			<td><a href="index.php?manage=ManagePDTypes&ac=edit&id=<?php echo $dong['type_id']?>">EDIT</a></td>
			<td><a href="Frontend/ManagePDTypes/xuly.php?id=<?php echo $dong['type_id']?>">DELETE</a></td>
		</tr>
	<?php 
	$i++; 
	}
	?>
</table>