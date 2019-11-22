<?php
	$sql="SELECT * FROM product ORDER BY id";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
	<tr>
		<td>ID </td>
		<td>Name Product </td>
		<td>Image </td>
		<td>Price </td>
		<td>Type Product </td>
		<td>STT </td>
		<td colspan="2">Manage: </td>
	</tr>
	<?php
	$i=0;
	while ($dong=mysqli_fetch_array($run)) {
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['name'];?></td>
		<td><img src="Frontend/ManagePDDetail/Upload/<?php echo $dong['img']?>" width="60" height="60"></td>
		<td><?php echo $dong['price'];?></td>
		<td><?php echo $dong['type_id'];?></td>
		<td><?php echo $dong['quantity'];?></td>
		<td><a href="index.php?manage=ManagePDDetail&ac=edit&id=<?php echo $dong['id']?>">EDIT</a></td>
		<td><a href="Frontend/ManagePDDetail/xuly.php?id=<?php echo $dong['id']?>">DELETE</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>