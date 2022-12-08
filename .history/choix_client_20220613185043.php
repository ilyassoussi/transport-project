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
        <link href="loading.css" rel="stylesheet" />
        <link href="step2.css" rel="stylesheet" />
        <link href="https://file.myfontastic.com/mhAQBEMwFowTXqccZ6VfgX/icons.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body id="page-top" class="signup-1 signup-2 signup-3 signup-4">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="image/lightand.png" alt="..." /></a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
            <form action="" method="POST">
                <div class="masthead-subheading">Welcome To Our Services ...</div>
                <div href="choix_client.php" class="masthead-heading text-uppercase">
                    <span> It's Nice To Meet You</span> 
                    
                </div>
                <a class="btn btn-primary btn-xl text-uppercase" href="choix_client.php?deconnexion=true">Log Out</a>
                <button name="edit" class="btn btn-primary btn-xl text-uppercase">Edit your Reservation</button>
                <a class="btn btn-primary btn-xl text-uppercase" href="#toi">Contact Us</a>
            </form>
            <?php
                include("connect.php");
                    if(isset($_POST["edit"])){
                        $drop="delete from choix_clientt WHERE id = ( SELECT MAX(id) FROM choix_clientt)";
                        $dropp=mysqli_query($conn,$drop);
                        header('Location: http://localhost/bus/login/zone_clien.php');
                    }
                ?>
            </div>
        </header>
        <div class="progress-bar-wrapper">
                    <ul class="progress-bar">
                        <li>Get Your reservation</li>
                        <li>Chose Your Bus</li>
                        <li>Buy Your Ticket</li>
                        <li>Get Your QRCOde</li>
        </div>
                <!-- Portfolio Grid-->
                <section class="page-section bg-light" id="portfolio" >
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">LINES</h2>
                    <h3 class="section-subheading text-muted">Your comfort is our priority</h3>
                </div> 

                <div>
            
                <?php
                     include("connect.php");
                     if(isset($_GET['deconnexion']))
                     { 
                        if($_GET['deconnexion']==true)
                        {  
                           session_unset();
                           header("location:http://localhost/bus/login/login.html");
                        }
                     }
                     session_start();

                    $from=$_SESSION['from'];
                    $to=$_SESSION['to'];
                     switch($from){
                        case "Facultes" :   if($to=="Oulad"){
                                                    echo '<div class="col-lg-4 col-sm-6 mb-4">
                                                    <!-- Portfolio item 7-->
                                                    <div class="portfolioitem" id="item7">
                                                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                                            <div class="portfolio-hover">
                                                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                            </div>
                                                            <img class="img-fluid" src="assets/img/portfolio/bus14.png" alt="..." />
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <div class="portfolio-caption-heading">LINE #14</div>
                                                            <div class="portfolio-caption-subheading text-muted">Long-line</div>
                                                        </div>
                                                    </div>
                                                </div>';
                                                echo '<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                                <!-- Portfolio item 4-->
                                                <div class="portfolioitem" id="item4">
                                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                                        <div class="portfolio-hover">
                                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                        </div>
                                                        <img class="img-fluid" src="assets/img/portfolio/bus34.png" alt="..." />
                                                    </a>
                                                    <div class="portfolio-caption">
                                                        <div class="portfolio-caption-heading">LINE #34</div>
                                                        <div class="portfolio-caption-subheading text-muted">Long-line</div>
                                                    </div>
                                                     </div>
                                                 </div>';
                                                 //Dijkstra algorithm en PHP    

                                                 //définir le tableau de distance
                                                 $_distArr = array();
                                                 $_distArr[0][1] = 2;
                                                 $_distArr[0][3] = 8;
                                                 $_distArr[1][2] = 3;
                                                 $_distArr[2][5] = 1.5;
                                                 $_distArr[3][4] = 9;
                                                 $_distArr[4][5] = 10;
                                                 $_distArr[5][6] = 0;
                                                 
                                                 //le début et la fin
                                                 $a = 0;
                                                 $b = 5;
                                                 $fromm=$from;
                                                 $too=$to;
                                                 //initialiser le tableau pour stocker
                                                 $S = array();//le chemin le plus proche avec son parent et son poids
                                                 $Q = array();//les nœuds de gauche sans le chemin le plus proche
                                                 foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;//La boucle foreach ne fonctionne que sur les tableaux et est utilisée pour parcourir chaque paire clé/valeur d'un tableau.
                                                 $Q[$a] = 0;
                                                 
                                                 //commencer à calculer
                                                 while(!empty($Q)){
                                                     $min = array_search(min($Q), $Q);//le poids le plus min
                                                     if($min == $b) break;
                                                     foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
                                                         $Q[$key] = $Q[$min] + $val;
                                                         $S[$key] = array($min, $Q[$key]);
                                                     }
                                                     unset($Q[$min]);//la fonction unset() detruire la variable 
                                                 }
                                                 
                                                 //lister le chemin
                                                 $path = array("idriss","bir rami","oulad wjih");
                                                 $pos = $b;
                                                 while($pos != $a){
                                                     $path[] = $pos;
                                                     $pos = $S[$pos][0];
                                                 }
                                                $path[] = $fromm;
                                                $path = array_reverse($path);
                                                 
                                                 //ecrire les resultats
                                                 echo '<h2 class="text-center"> SHORT PATH </h2>';
                                                 echo "<h5><br />From $fromm to $too</h5>";
                                                 echo "<br />The length is ".$S[$b][1].' KM';
                                                 echo "<br />The Best and Fast Path is Line 14 </br>FACULTES --> Clinique El-Idrissi --> Rue Mohhamed 5 --> Rue Oulad Oujih ";
                                            }
                                            elseif($to=="Sidi"){
                                                echo '<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                                <!-- Portfolio item 4-->
                                                <div class="portfolioitem" id="item4">
                                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                                        <div class="portfolio-hover">
                                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                        </div>
                                                        <img class="img-fluid" src="assets/img/portfolio/bus34.png" alt="..." />
                                                    </a>
                                                    <div class="portfolio-caption">
                                                        <div class="portfolio-caption-heading">LINE #34</div>
                                                        <div class="portfolio-caption-subheading text-muted">Long-line</div>
                                                    </div>
                                                     </div>
                                                 </div>';
                                                 
                                            }
                                            else{
                                                echo '<h4><center>SORRY this path is not disponible NOW!!<br>You Can Contact Us if you have any problems.<br>THANK YOU</center></h4>';
                                            }
                                            break;
                        case "SEBAA"    :      if($to=="kenitra"){
                                                         echo '<div class="col-lg-4 col-sm-6 mb-4">
                                                            <!-- Portfolio item 2-->
                                                            <div class="portfolioitem" id="item2">
                                                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                                                    <div class="portfolio-hover">
                                                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                                 </div>
                                                                 <img class="img-fluid" src="assets/img/portfolio/bus1.png" alt="..." />
                                                             </a>
                                                                <div class="portfolio-caption">
                                                                 <div class="portfolio-caption-heading">LINE #1</div>
                                                                <div class="portfolio-caption-subheading text-muted">First-line</div>
                                                                </div>
                                                         </div>
                                                     </div>';
                                            }
                                            elseif($to=="youssef"){
                                                        echo ' <div class="col-lg-4 col-sm-6 mb-4">
                                                        <!-- Portfolio item 3-->
                                                        <div class="portfolioitem" id="item3">
                                                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                                                <div class="portfolio-hover">
                                                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                                </div>
                                                                <img class="img-fluid" src="assets/img/portfolio/bus3.png" alt="..." />
                                                            </a>
                                                            <div class="portfolio-caption">
                                                                <div class="portfolio-caption-heading">LINE #3</div>
                                                                <div class="portfolio-caption-subheading text-muted">Third-line</div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                }
                                            else{
                                                echo '<h4><center>SORRY this path is not disponible NOW!!<br>You Can Contact Us if you have any problems.<br>THANK YOU</center></h4>';
                                            }
                                            break;
                        case "Cite"     :   if($to=="facultes"){
                                                      echo '<div class="col-lg-4 col-sm-6 mb-4">
                                                              <!-- Portfolio item 1-->
                                                               <div class="portfolioitem" id="item1">
                                                               <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                                                 <div class="portfolio-hover">
                                                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x">
                                                               </i>
                                                                </div>
                                                                </div>
                                                                <img class="img-fluid" src="assets/img/portfolio/bus6.png" alt="..." />
                                                               </a>
                                                                <div class="portfolio-caption 
                                                                <div class="portfolio-caption-heading">LINE #6 
                                                                                       </div>
                                                               <div class="portfolio-caption-subheading text-muted">Best-line 
                                                               </div>
                                                               </div>
                                                               </div>
                                                             </div>';  
                                            }
                                            else{
                                                echo '<h4><center>SORRY this path is not disponible NOW!!<br>You Can Contact Us if you have any problems.<br>THANK YOU</center></h4>';
                                            }
                                            break;
                        case "Bir"      :   if($to=="hay"){
                                                        echo '<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                                                        <!-- Portfolio item 5-->
                                                        <div class="portfolioitem" id="item5" >
                                                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                                                <div class="portfolio-hover">
                                                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                                </div>
                                                                <img class="img-fluid" src="assets/img/portfolio/bus12.png" alt="..." />
                                                            </a>
                                                            <div class="portfolio-caption">
                                                                <div class="portfolio-caption-heading">LINE #12</div>
                                                                <div class="portfolio-caption-subheading text-muted">Long-line</div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            }
                                            elseif($to=="kasba"){
                                                        echo ' <!-- Portfolio item 8-->
                                                        <div class="portfolioitem" id="item8">
                                                           <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                                               <div class="portfolio-hover">
                                                                   <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                               </div>
                                                               <img class="img-fluid" src="assets/img/portfolio/bus13.png" alt="..." />
                                                           </a>
                                                           <div class="portfolio-caption">
                                                               <div class="portfolio-caption-heading">LINE #14</div>
                                                               <div class="portfolio-caption-subheading text-muted">Long-line</div>
                                                           </div>
                                                       </div>';
                                            }
                                            else{
                                                        echo '<h4><center>SORRY this path is not disponible NOW!!<br>You Can Contact Us if you have any problems.<br>THANK YOU</center></h4>';
                                            }
                                            break;
                        case "Bassatin" :   if($to=="Oulad"){
                                                        echo '<div class="col-lg-4 col-sm-6">
                                                        <!-- Portfolio item 6-->
                                                        <div class="portfolioitem" id="item6">
                                                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                                                <div class="portfolio-hover">
                                                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                                                </div>
                                                                <img class="img-fluid" src="assets/img/portfolio/bus16.png" alt="..." />
                                                            </a>
                                                            <div class="portfolio-caption">
                                                                <div class="portfolio-caption-heading">LINE #16</div>
                                                                <div class="portfolio-caption-subheading text-muted">Best-line</div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            }
                                            else{
                                                echo '<h4><center>SORRY this path is not disponible NOW!!<br>You Can Contact Us if you have any problems.<br>THANK YOU</center></h4>';
                                            }
                    }
                    ?>
                </div>
                </div>
            </div>
        </section>
    <form action="pay.php" method="get"> 
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">the path of bus #6</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus6.png" alt="..." />
                                    <p>From "Cite Universitaire ES-Saknia" to the second station "MOUSTACHFA AL-IDRISSI" and to the last station "Les Facultes"</p>
                                    <p><strong> EVERY 15 MINUTE </strong> </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Students
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Best-line
                                        </li>
                                    </ul>
                                   <button class="btn btn-primary btn-xl text-uppercase"> Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">the path of bus #1</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus1.png" alt="..." />
                                    <p>FACULTES --> Clinique El-Idrissi --> Rue Mohhamed 5 --> Rue Oulad Oujih </p>
                                    <p><strong> EVERY 15 MINUTE </strong> </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            First-line
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase"> Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">THE PATH OF BUS #3</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus3.png" alt="..." />
                                    <p>From "AIN SEBAA" to "Moulay Youssef"</p>
                                    <p><strong> EVERY 15 MINUTE </strong> </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Third-line
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase"">Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">THE PATH OF BUS #34</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus34.png" alt="..." />
                                    <p>From "Sidi Alal Tazi" to "Les Facultes"</p>
                                    <p><strong> EVERY 15 MINUTE </strong> </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Students
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            SK4
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase">Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">THE PATH OF BUS #12</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus12.png" alt="..." />
                                    <p>From "Bir-Anzaran" to "Hay Alions"</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Long-line
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase">Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">THE PATH OF BUS #16</h2>
                                    <p class="item-intro text-muted">Informations</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus16.png" alt="..." />
                                    <p>From "Bassatin El-Hajje-Manssor" to "Oulad Oujih"</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Every-Body
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Best-line
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase">Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">the path of bus #14</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus14.png" alt="..." />
                                    <p>From "Les Facultes" to the second station "MOUSTACHFA AL-IDRISSI" to "Cite Universitaire" and "Hay BIR RAMI" to the last station "HAY Oulad Oujih"</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Best-line
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase">Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">the path of bus #13</h2>
                                    <p class="item-intro text-muted">Information</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/bus13.png" alt="..." />
                                    <p>From "Bir-Anzaran" to the second station "MOUSTACHFA AL-IDRISSI" and to the last station "kasbat el mehdia"</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            beatch
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Long-line
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase">Selected and Get My QrCode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Contact-->
    <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">your claim has priority .</h3>
                </div>
                <!-- * * SB Forms Contact Form * *-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="reclamation.php" method="post">
                    <div class="row align-items-stretch mb-5" id="toi">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" name="name" required/>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" name="email" required/>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" name="number" required/>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required" name="msg" required></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!--div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></!--div-->
                    <!-- Submit Button-->
                    <div class="text-center"><input class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" value="Send Message"></input></div>
                </form>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/getBus.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> 
        <script src="js/scriptss.js"></script>  
    </body>
</html>
