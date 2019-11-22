<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../Style/css.css">
    <style type="text/css">
    h1{
            text-align: center;
        }
        p{
            text-align: center;
        }
        body {
     font-family:Arial, Sans-Serif;
}
.clearfix:before, .clearfix:after{
     content: "";
     display: table;
}
.clearfix:after{
     clear: both;
}
a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.form{
     width: 300px;
     margin: 0 auto;
}
input[type='text'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color: red;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid pink;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
input[type='submit']:hover {
     background-color: #024978;
}
</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<img src="../../Image/banner.jpg" width="100%" height="240px">
		</div>
		<div class="menu">
			<ul>
        			<li><a href="../../Shop/main.php">Shop</a>
            			<ul class="sub-menu">
            				<li><a href="#">All</a></li>
            				<li><a href="#">Tops</a></li>
            				<li><a href="#">Bottoms</a></li>
            				<li><a href="#">Accessories</a></li>
      					</ul>
    				</li>
        		<li><h2><i><a href="../../index.php">H.n.vmmm</a></i></h2></li>
        		<li><a href="../Login/login.php">Log In</a></li>
        		<li><a href="../../Backend/about.php">About Us</a></li>
      		</ul>
		</div>
		<div class="content" align="center">
			<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
    <table border="1">
    <tr>
        <td>
            <img src="../../Image/usericon.jpg" width="30px" height="30px">
        </td>
        <td>
            <input type="text" name="username" placeholder="Username" required />
        </td>
    </tr>
    <tr>
        <td>
            <img src="../../Image/mailicon.jpg" width="30px" height="30px">
        </td>
        <td>
            <input type="email" name="email" placeholder="Email" required />
        </td>
    </tr>
    <tr>
        <td>
            <img src="../../Image/password-icon.jpg" width="30px" height="30px">
        </td>
        <td>
            <input type="password" name="password" placeholder="Password" required />
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="Register" />
        </td>
    </tr>
    </table>
    

</form>
</div>
<?php } ?>
		</div>
		<div class="footer"> 
            <h4>Contact me:</h4>
            <img src="../../Image/facebook1.jpg" width="35px" height="35px"><a href="https://www.facebook.com/nasickbb2k">Facebook</a>
            <br>
            <img src="../../Image/instagram.jpg" width="30px" height="30px"><a href="https://www.instagram.com/h.n.vmmmm/">Instagram</a>
            <br>
            <img src="../../Image/contact.jpg" width="30px" height="30px"><a href="">0965854288</a>
            <h5>© 2019, <a href="../../index.php">H.n.vmmm</a> </h5>
        </div>
	</div>
</body>
</html>