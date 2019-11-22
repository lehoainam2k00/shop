<div class="content">
    <div class="left">
        <?php
            include('left/list.php');
        ?>
    </div>
	<div class="right">
        <?php
            if(isset($_GET['xem'])){
                $tam=$_GET['xem'];
            }else{
                $tam='';
            }if ($tam=='detailtypePD') {
                include ('right/detailtypePD.php');
            }elseif ($tam=='detailPD') {
                include ('right/detailPD.php');
            }else{
                include ('right/allproduct.php');
            }
        ?>
    </div>
</div>
<div class="Clear"></div>