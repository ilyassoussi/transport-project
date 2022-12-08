<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IrizaBus</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="image/izar.jpeg" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="cssZoneClient/styles.css" rel="stylesheet" />
        <link href="step1.css" rel="stylesheet" />
        <link href="https://file.myfontastic.com/mhAQBEMwFowTXqccZ6VfgX/icons.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body id="page-top" class="signup-1 signup-2 signup-3 signup-4">
        <?php
    include("connect.php");
    $id=random_int(1,100);
    $username =$_GET['txt'];
    $email =$_GET['email'];
    $password=$_GET['pswd'];
    $cnf_password=$_GET['confirm_password'];
    $repeat="select * from zone_client where email='".$email."'";
    $repeatt=mysqli_query($conn,$repeat);
    $check=mysqli_fetch_row($repeatt);
    if($check==false){
            if($cnf_password==$password){
                $insertUser="insert into zone_client(id,username,email,password,conf_password) values( '$id', '$username', '$email', '$password', '$cnf_password')";
                $result=mysqli_query($conn,$insertUser);
                    if($result==true){
                        echo '<header class="masthead">
                        <div class="container">
                            <h3> Registre Success....</h3>
                            <a class="btn btn-primary btn-xl text-uppercase" href="javascript: history.go(-1)">Return</a>
                            </div>
                            </header>';
                    }
                    
            }
            else{
                        echo 'erreur lors de la creation de compte';
                    }
        }
    else{
        echo '<header class="masthead">
                        <div class="container">
                            <h3> THIS MAIL IS ALREADY EXIST PLEASE ENTRE ANOTHER MAIL....</h3>
                            <a class="btn btn-primary btn-xl text-uppercase" href="javascript: history.go(-1)">Return</a>
                            </div>
                            </header>';
    }
?>
    </body>
</html>