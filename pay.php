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
        <link href="pay.css" rel="stylesheet" />
        <link href="stepp3.css" rel="stylesheet" />
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
                <a class="btn btn-primary btn-xl text-uppercase" href="#pay">Make a Payment</a>
                <button class="btn btn-primary btn-xl text-uppercase" name="cancel">Cancel Pay</button>
                <a class="btn btn-primary btn-xl text-uppercase" href="#toi">Contact Us</a>
            </form>
                <?php
                include("connect.php");
                    if(isset($_POST["cancel"])){
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
    <form action="QRcode.php" method="POST">
        <div class="container mt-5 px-5" id="pay">
            <div class="mb-4">
                <h2>Confirm and pay</h2>
            <span>please make the payment, after that you can enjoy .</span>                
            </div>
        <div class="row">
            <div class="col-md-8">                
                <div class="card p-3">
                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="numcard" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 
                            </div>                            
                        </div>
                        <div class="col-md-6">
                             <div class="d-flex flex-row">
                                 <div class="inputbox mt-3 mr-2"> <input type="date" name="expire" class="form-control" required="required"> </div>
                              <div class="inputbox mt-3 mr-2"> <input type="text" name="cvv" class="form-control" required="required"> <span>CVV</span> </div>                                 
                             </div>                            
                        </div>                    
                    </div>
                </div>
                <div class="mt-4 mb-4 d-flex justify-content-between">
                            <span>Price :</span>
                            <button class="btn btn-success px-3">Pay 6 DH</button>                            
                        </div>
                </div>

            <div class="col-md-4">

                <div class="card card-blue p-3 text-white mb-3">

                   <span>You have to pay</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h1 class="mb-0 yellow">6 DH</h1> 
                    </div>
                    <span>Complete the payment and Get your QRCODE</span>
                    <a href="#" class="yellow decoration">Know all the City</a>
                    <div class="hightlight">
                        <span>100% Guaranteed ...</span>                        
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
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" name="number"/>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required" name="msg"></textarea>
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