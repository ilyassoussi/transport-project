<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            session_start();
        ?>
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
        <link href="step1.css" rel="stylesheet" />
        <link href="https://file.myfontastic.com/mhAQBEMwFowTXqccZ6VfgX/icons.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
            h3{
                color: white;
            }
        </style>
    </head>
    <body id="page-top" class="signup-1">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="image/lightand.png" alt="..." /></a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our services ...</div>
                <div href="choix_client.php" class="masthead-heading text-uppercase">
                    <span> It's Nice To Meet You</span> 
                </div>
                <a class="btn btn-primary btn-xl text-uppercase" href="choix_client.php?deconnexion=true">Log Out</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Make a Reservation</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="#toi">Contact-Us</a>
            </div>
        </header>
        <div class="progress-bar-wrapper">
                    <ul class="progress-bar">
                        <li>Make a reservation</li>
                        <li>Chose Your Bus</li>
                        <li>Buy Your Ticket</li>
                        <li>Get Your QRCOde</li>
        </div>
        <!-- Services-->
        <section class="page-section" id="services">
            <div id="booking" class="section">
                <div class="section-center">
                    <div class="container">
                        <div class="row">
                            <div class="booking-form">
                                <div class="form-header">
                                    <h1>Make your reservation</h1>
                                </div>
                                <form action="" method="POST">
                                    <div class="form-group"> 
                                        <select class="form-select form-control" id="inputGroupSelect01" name="station">
                                            <option value="Facultes"> Les Facultes</option>
                                            <option value="SEBAA">AIN SEBAA</option>
                                            <option value="Cite">Cite Universitaire ES-Saknia</option>
                                            <option value="Bir">Bir-Anzaran</option>
                                            <option value="Bassatin">Bassatin El-Hajje-Manssor</option>
                                        </select>  
                                    </div>
                                    <div class="form-group" id="from"> 
                                        <select class="form-select form-control" id="inputGroupSelect02" name="tostation">
                                            <option value="Oulad">Oulad Oujih</option>
                                            <option value="facultes">Les Facultes </option>
                                            <option value="kenitra">Gare Kenitra</optionval>
                                            <option value="youssef">Moulay Youssef</option>
                                            <option value="Sidi">Sidi Alal Tazi</option>
                                            <option value="hay">Hay Alions</optionv>
                                            <option value="kasba">kasbat el mehdia</option>
                                        </select>  
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" class="cen">
                                                 <input class="form-control" type="date" name="date" required >
                                                  <span class="form-label">Date</span> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" id="cen">  
                                                <input class="form-control" type="email" placeholder="Enter your Email" name="email" required>  
                                                <span class="form-label">Email</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab"> <input name="check" type="submit" class="submit-btn" id="mybtm" value="Check now"></input></div>      
                                </form>
                              <?php
                              include('connect.php');
                               if(isset($_POST["check"])){
                                    $username=$_SESSION['nom'];
                                    $from=$_POST['station'];
                                    $to=$_POST['tostation'];
                                    $date=$_POST['date'];
                                    $a=$_POST['email'];
                                    $email=$a;
                                    $insertStation="insert into choix_clientt(username, from_station, to_station, date, email) values('$username', '$from', '$to', '$date', '$email')";
                                    $resultat=mysqli_query($conn,$insertStation);
                                    $req="select from_station , to_station from choix_clientt where email='".$_SESSION['email']."' and id=(SELECT max(id) FROM choix_clientt)";
                                    $reqq=mysqli_query($conn,$req);
                                    $roww=mysqli_fetch_assoc($reqq);
                                    if($a==$_SESSION['email']){
                                        $_SESSION['from']=$roww['from_station'];
                                        $_SESSION['to']=$roww['to_station'];
                                        echo '<script> location.href="http://localhost/bus/login/choix_client.php" </script>';
                                    }
                                    else{
                                        $drop="delete from choix_clientt WHERE id = ( SELECT MAX(id) FROM choix_clientt)";
                                        $dropp=mysqli_query($conn,$drop);
                                        echo '<h3><center>Check Your Email</center></h3>';
                                    }
                                 }
                                ?>  
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">your claim has priority.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="reclamation.php" method="post">
                    <div class="row align-items-stretch mb-5" id="toi">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" name="name"/>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" name="email"/>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone * (+212)" data-sb-validations="required" name="number"/>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *(4 000 000 Words)" data-sb-validations="required" name="msg"></textarea>
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
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; MoroccanProud 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/getBus.js"></script>
        <script>
            $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow");
            });
        </script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> 
        <script src="js/scriptss.js"></script>  
    </body>
</html>
