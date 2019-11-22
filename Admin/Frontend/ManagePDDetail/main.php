<style type="text/css">
	.left{
	width: auto;
	height: auto;
	border: 1px solid black;
	float: left;
}
.right{
	width: auto;
	height: auto;
	border: 1px solid black;
	float: left;
	margin-left: 10px;
}
</style>

<div class="left">
	<?php 
	if (isset($_GET['ac'])) {
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}if ($tam=='add') {
		include('Frontend/ManagePDDetail/add.php');
	}if($tam=='edit'){
		include('Frontend/ManagePDDetail/edit.php');
	}
	?>
</div>
<div class="right">
	<?php  
		include('Frontend/ManagePDDetail/lietke.php');
	?>
</div>