<div class="content">
	<?php  
		if (isset($_GET['manage'])) {
			$tam=$_GET['manage'];
		}else{
			$tam='';
		}if ($tam=='ManagePDTypes') {
			include ('Frontend/ManagePDTypes/main.php');
		}if($tam=='ManagePDDetail'){
			include ('Frontend/ManagePDDetail/main.php');
		}
	?>
<div class="clear"></div>