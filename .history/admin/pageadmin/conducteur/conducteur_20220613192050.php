<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Driver config</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../assets/css/fromm.css">
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../../assets/img/faces/driver.png" type="image/x-icon">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="../Statistique.php" class="simple-text">
            Zone Admin Secure
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="../Statistique.php">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Statistics</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./conducteur.php">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Drivers</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="../client/client.php">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Admin</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="../deplacement/Deplacement.php">
                    <i class="nc-icon nc-atom"></i>
                    <p>Displacement</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="../notification/notifications.php">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="tab">
                    <button class="btn btn-info btn-fill pull-right" onclick="openCity(event, 'rm')">Remove Drivers</button>
                    <button class="btn btn-info btn-fill pull-right" onclick="openCity(event, 'add')">Add Drivers</button>
                    <button class="btn btn-info btn-fill pull-right" onclick="openCity(event, 'affiche')">Affiche Drivers</button>
                </div>
            </nav>
            <!-- Form Add Admin -->
        <div id="add" class="tabcontent">
            <div class="screen-1" id="body">
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300" height="300" viewbox="0 0 640 480" xml:space="preserve">
                </svg>
                <h3>ADD NEW Drivers</h3>
                <form action="" method="POST">
                     <div class="email">
                        <label for="id">ID</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="id" placeholder="NumId"/>
                        </div>
                    </div>
                    <div class="email">
                        <label for="name">Name</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="name" placeholder="Ahmed"  required/>
                        </div>
                    </div>
                    <div class="email">
                        <label for="name">Age</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="Age" placeholder="AGE" required/>
                        </div>
                    </div>
                    <div class="email">
                        <label for="line">Line</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="line" placeholder="Number of line" required/>
                        </div>
                    </div>
                    <div class="password">
                        <label for="password" name="numbus">Bus</label>
                        <div class="sec-2">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input class="pas" type="text" name="numbus" placeholder="Bus Number"  required/>
                            <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="email">
                        <label for="salary">Salary</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="salary" placeholder="Salary" required/>
                        </div>
                    </div>
                    <button class="login" name="ADD_driver">Add Driver</button> 
                </form> 
                <?php
                include("../../../connect.php");
                if(isset($_POST["ADD_driver"])){
                    $inser="insert into conducteur(id, nom , Age, line , bus , salaire (DH)) VALUES ('$_POST[id]','$_POST[name]','$_POST[Age]','$_POST[line]' , '$_POST[numbus]' , '$_POST[salary]')";
                    $add=mysqli_query($conn,$inser);
                }
                ?> 
            </div>
        </div>
        <div id="rm" class="tabcontent">
            <div class="screen-1" id="body">
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300" height="300" viewbox="0 0 640 480" xml:space="preserve">
                </svg>
                <h3>Remove a driver</h3>
                <form action="" method="POST">
                    <div class="email">
                        <label for="name">ID</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="id" placeholder="ID"/>
                        </div>
                    </div>
                    <div class="email">
                        <label for="email">Name</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="name" placeholder="Ahmed" required/>
                        </div>
                    </div>
                    <button class="login" name="remove">Remove Driver</button> 
                </form>
                <?php
                include("../../../connect.php");
                 if(isset($_POST["remove"])){
                    $delete="delete from conducteur where id='$_POST[id]'";
                    $rem=mysqli_query($conn,$delete);
                }
                ?> 
            </div>
        </div>
        <div id="affiche" class="tabcontent">
            <h3>ALL Drivers</h3>
            <?php
        include("../../../connect.php");
        $affiche="select *  from conducteur";
		 $res= mysqli_query($conn,$affiche);
				 echo"<div>";
				 echo"<table  border=1>";
				 echo"<tr>";
				 echo"<th>";echo"id"; echo"</th>";
				 echo"<th>";echo"Name"; echo"</th>";
                 echo"<th>";echo"Age"; echo"</th>";
                 echo"<th>";echo"Line"; echo"</th>";
                 echo"<th>";echo"Bus"; echo"</th>";
                 echo"<th>";echo"Salary (DH)"; echo"</th>";
				 echo"</tr>";
		 while($row=mysqli_fetch_array($res))
		 {
				 echo"<tr>";
				 echo"<td>"; echo $row["id"]; echo"</td>";
				 echo"<td>"; echo $row["nom"]; echo"</td>";
                 echo"<td>"; echo $row["Age"]; echo"</td>";
                 echo"<td>"; echo $row["line"]; echo"</td>";
                 echo"<td>"; echo $row["bus"]; echo"</td>";
                 echo"<td>"; echo $row["salaire (DH)"]; echo"</td>";
				 // echo"<td><a href=insert3.php?id=".$row['numero'].">supprimer</a></td>";
				 echo"</tr>";
		 }
		 echo"</table>";
		 echo"</div>";
	 ?>
        </div>
            <!-- Navbar -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    static
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="../Statistique.php">Creative with Ibn Tofail</a>, made with love for a better Life
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../../../js/getBus.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
