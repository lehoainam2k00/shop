<?php
$sql="SELECT * FROM product WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);
?>
<form action="Frontend/ManagePDDetail/xuly.php?id=<?php echo $dong['id']?>"
method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Edit detail product</div></td>
	</tr>
	<tr>
		<td>Name Product: </td>
		<td><input type="text" name="txtName" value="<?php echo $dong['name'] ?>"></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="txtPrice" value="<?php echo $dong['price'] ?>"</td>
	</tr>
	<tr>
		<td>Image: </td>
		<td><input type="file" name="image"> <img src="Frontend/ManagePDDetail/Upload/<?php echo $dong['img']?>"width="60" height="60"</td>
	</tr>
	<tr>
		<td>Description: </td>
		<td><textarea name="description" cols="40" rows="12"<?php echo $dong['description']?></textarea></td>
	</tr>
	<?php  
		$sql="SELECT * FROM type";
		$run=mysqli_query($conn,$sql);
	?>
	<tr>
		<td>Category: </td>
		<td><select name="type">
		<?php  
		while ($dong_type=mysqli_fetch_array($run)) {
			if ($dong['type_id']==$dong_type['type_id']) {
		?>
			<option selected="selected"> value="<?php echo $dong_type['type_id'] ?>"><?php echo $dong_type['type_name']?></option>
		<?php  
	}else{
		?>
		<option value="<?php echo $dong_type['type_id'] ?>"><?php echo $dong_type['type_name']?></option>
		<?php
	}
	}
		?>
		</select></td>
	</tr>
	<tr>
		<td>STT: </td>
		<td><input type="text" name="txtSTT" value="<?php echo $dong['quantity'] ?>"</td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><button name="btnEdit" value="edit">EDIT</button></div></td>
	</tr>
</table>
</form>