<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Password Change</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./styles.css">
    <link rel="shortcut icon" href="image/izar.jpeg" type="image/x-icon">
    <style>
a:link, a:visited {
  background-color: #573b8a;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
}

a:hover, a:active {
  background-color: red;
}
a{
    cursor: pointer;
    margin: 10px auto;
    width: 15px;

}
.b{
    padding-top: 15px;
    text-align: center;
    margin: 10px auto;
}
h2{
    text-align: center;
    color: white;
    text-shadow: white;
}
</style>
</head>
<body>
<div>
	<video autoplay muted loop id="myVideo">
		  <source src="video/bus1.mp4	" type="video/mp4">
	</video>
 </div>
    <div class="signup">
				<form action=" "  method="GET"> 
					<label for="chk" aria-hidden="true">CHange Password</label>
					<input type="email" placeholder="Email" name="ro" required="">
                    <input type="password"  placeholder="New Password" name="b" required="">
					<input type="password"  placeholder="Confirm Password" name="c" required="">
					<button name="change">Change</button>
				</form>
        <?php
            include('connect.php');     
            
            if(isset($_GET["change"])){
                $nvpass=$_GET["b"];
                $dataaa="select * from zone_client where email='".$_GET["ro"]."'";
                $check=mysqli_query($conn,$dataaa);
                $checkk=mysqli_fetch_row($check);
                    if($checkk==true){
                                if($_GET["b"]==$_GET["c"]){
                                    $req="update zone_client set password = '".$nvpass."'  WHERE email = '".$_GET["ro"]."'";
                                    $reqq="update zone_client set conf_password = '".$nvpass."'  WHERE email = '".$_GET["ro"]."'";
                                    $result=mysqli_query($conn,$req);
                                    $resultt=mysqli_query($conn,$reqq);
                                    echo '<h2>SUCCESS CHANGE</h2>';
                                    echo '<div class="b"><a href="http://localhost/bus/login/login.html">Return</a></div>';
                                }
                                else{
                                    echo '<h2>new password and confirmation password is not same</h2>';
                                }
                        }
                    else{
                        echo '<h2>this mail is not exist in daba base please entre your mail or GET OUT</h2>';
                        echo '<div class="b"><a href="http://localhost/bus/login/login.html">Return</a></div>';
                    }
            }
        ?>
    </div>
</body> 
</html>