<?php
	include('../config.php');
	$id=$_GET['id'];
	$Name=$_POST['txtName'];
	$STT=$_POST['txtSTT'];
	if(isset($_POST['btnAdd'])){
		//add
		$sql="INSERT INTO type(`type_name`,`type_num`) VALUES ('$Name','$STT')";
		mysqli_query($conn,$sql);
		header('Location:../../index.php?manage=ManagePDTypes&ac=add');
	}elseif(isset($_POST['edit'])){
		$sql="UPDATE type SET type_name='$Name',stt='$STT' WHERE type_id='$id'"
		mysqli_query($conn,$sql);
		header('Location:../../index.php?manage=ManagePDTypes&ac=edit&id='.$id);
	}else{

		$sql="DELETE FROM type WHERE type_id='$id'";
		mysqli_query($conn,$sql);
		header('Location:../../index.php?manage=ManagePDTypes&ac=add');
	}
?>