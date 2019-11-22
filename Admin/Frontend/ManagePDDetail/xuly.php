<?php
	include('../config.php');
	$id=$_GET['id'];
	$Name=$_POST['txtName'];
	$decription=$_POST['description'];
	$price=$_POST['txtPrice'];
	$type_id=$_POST['type'];
	$STT=$_POST['txtSTT'];
	$img=$_FILES['image']['name'];
	$img_tmp=$_FILES['image']['tmp_name'];
	move_uploaded_file($img_tmp, 'uploads/'.$img);
	if(isset($_POST['btnAdd'])){
		//add
		$sql="INSERT INTO product(`name`,`img`,`price`,`decription`,`type_id`,`quantity`) VALUES ('$Name','$img','$price','$decription','$type_id','$STT')";
		mysqli_query($conn,$sql);
		header('Location:../../index.php?manage=ManagePDDetail&ac=add');
	}elseif(isset($_POST['edit'])){
		if ($img!=''){
			$sql="UPDATE product SET id='$id',name='$Name',img='$img',price='$price',decription='$decription',type_id='$type_id',quantity='$STT' WHERE id='$id'"
		}else{
			$sql="UPDATE product SET id='$id',name='$Name',price='$price',decription='$decription',type_id='$type_id',quantity='$STT' WHERE id='$id'"
		}
		mysqli_query($conn,$sql);
		header('Location:../../index.php?manage=ManagePDDetail&ac=edit&id='.$id);
	}else{

		$sql="DELETE FROM product WHERE id='$id'";
		mysqli_query($conn,$sql);
		header('Location:../../index.php?manage=ManagePDDetail&ac=add');
	}
?>