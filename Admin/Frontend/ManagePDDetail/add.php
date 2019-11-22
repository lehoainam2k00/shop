
<form action="Frontend/ManagePDDetail/xuly.php"
method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Add detail product</div></td>
	</tr>
	<tr>
		<td>Name Product: </td>
		<td><input type="text" name="txtName"></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="txtPrice"></td>
	</tr>
	<tr>
		<td>Image: </td>
		<td><input type="file" name="image"></td>
	</tr>
	<tr>
		<td>Description: </td>
		<td><textarea name="description" cols="40" rows="12"></textarea></td>
	</tr>
	<?php  
		$sql="SELECT * FROM type";
		$run=mysqli_query($conn,$sql);
	?>
	<tr>
		<td>Category: </td>
		<td><select name="type">
		<?php  
			while ($dong=mysqli_fetch_array($run)) {
		?>
			<option value="<?php echo $dong['type_id'] ?>"><?php echo $dong['type_name']?></option>
		<?php  
			}
		?>
		</select></td>
	</tr>
	<tr>
		<td>STT: </td>
		<td><input type="text" name="txtSTT"></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><button name="btnAdd" value="Add">ADD</button></div></td>
	</tr>
</table>
</form>