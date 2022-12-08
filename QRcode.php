<?php
include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$email = $_POST['mail'];
	$subject =  $_POST['subject'];
	$filename = getUsernameFromEmail($email);
	$body =  $_POST['msg'];
	$codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body); 
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
include("connect.php");
session_start();
$username=$_SESSION['nom'];
$numcard=$_POST['numcard'];
$expire=$_POST['expire'];
$cvv=$_POST['cvv'];
$insert="insert into payment(name , numcard , expire , cvv) values ('$username','$numcard','$expire','$cvv')";
$resultat=mysqli_query($conn,$insert);
if(empty($numcard) or empty($expire) or empty($cvv)){
}
else{
    
}
?>
<!DOCTYPE html>
<html lang="en-US">
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
	<link href="Step4.css" rel="stylesheet" />
    <link rel="stylesheet" href="libs/stylee.css" rel="stylesheet" />
	<link href="https://file.myfontastic.com/mhAQBEMwFowTXqccZ6VfgX/icons.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body class="signup-1 signup-2 signup-3 signup-4">
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
                <a class="btn btn-primary btn-xl text-uppercase" href="#moi">Get your QR code</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="#toi">Contact Us</a>
            </div>
        </header>
		<div class="progress-bar-wrapper">
                    <ul class="progress-bar">
                         <li>Get Your reservation</li>
                        <li>Chose Your Bus</li>
                        <li>Buy Your Ticket</li>
                        <li>Get Your QRCOde</li>
        </div>
		<div>
			<h3><strong>This code can be used on the same bus or same line </strong></h3>
			<div class="input-field">
			</div>
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="qr-field" id="moi">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>

		</div>
	</body>
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
	<footer>	
			<div class = "dllink" style="text-align:center;margin:-100px 0px 50px 0px;">
				<h4>Developed By Tarik Chemmi && Ilyas Soussi</h4>
			</div>
	</footer>
</html>