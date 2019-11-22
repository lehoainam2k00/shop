<?php  
	$sql="SELECT * FROM type WHERE type_id=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="Frontend/ManagePDTypes/xuly.php" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Edit Product Types</div></td>
	</tr>
	<tr>
		<td>Name: </td>
		<td>
			<input type="text" name="txtName" value="<?php echo $dong['txtName']?>">
		</td>
	</tr>
	<tr>
		<td>STT: </td>
		<td>
			<input type="text" name="txtSTT" value="<?php echo $dong['txtSTT']?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="btnEdit" id="Edit" value="Edit"></div></td>
	</tr>
</table>
</form>
