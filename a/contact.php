<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Create Logo X,Graphics,Create Logo x,agency,multipurpose,Graphics Design,bootstrap4, Vector, Raster, Illuyrator, Adobe">
  
  <meta name="Nadia" content="createlogox.com">

  <title></title>
  <link rel="icon" href="images/logo-png.ico" type="image/x-icon">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
<script src="app.js"></script>


<!-- SEND EMAIL emailjs.com code -->


  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("r6sv3a5yk3u5n2zeU");
   })();
</script>
<script type="text/javascript">
    function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };

  const serviceID = "service_vtuefzn";
  const templateID = "template_vna2dkp";

    emailjs.send(serviceID, templateID, params)
    .then(res=>{
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("Your message sent successfully!!")

    })
    .catch(err=>console.log(err));

}

</script>

</head>

<body>
<!-- header.php with incude php --> 

<div class="main-wrapper ">
<section class="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">          
          <h1 class="text-capitalize mb-1 mt-3 text-lg text-white">Get in Touch</h1>          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form" method="post" action="contact.php">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                <h5><?=$result  ?></h5>
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <span class=" h5" id="send-us-message">Contact US </span>
                    <!-- <h3 class="text-md mb-4 text-magenta">Let's start discussing your new project !</h3> -->
                    <p class="text-sm mb-4 text-dark">Complete the form and we will get back to you!</p>

                <form action="" method="POST">

                    <div class="form-group">        
                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input name="email" id="email" type="email" class="form-control" placeholder="Email Address" required>
                    </div>                    

                    <!--<div class="form-group">-->
                    <!--    <input name="subject" id="subject" type="text" class="form-control" placeholder="subject">-->
                    <!--</div>-->

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter you Query" required></textarea>
                    </div>
                    </form>
                   
                    <button class="btn btn-main btn-round-full" name="submit" type="submit" onclick="sendMail()">Send Message</button>
                    
                </form>
            </div>
            

            <div class="col-lg-5 col-sm-12">
                <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                    <!-- <span class="text-muted">We are Professionals</span> -->
                    <h6 class="mb-5 mt-2">Justice Delayed Justice Denied.</h6>

                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-direction mr-3 text-magenta"></i>District & Sessions Court Jamshoro HQ.
                        </li>                        
                        <li>
                            <i class="ti-email mr-3 text-magenta"></i>Email: djjamshoro@sindhhighcourt.gov.pk
                        </li>
                        <li>
                            <i class="ti-mobile mr-3 text-magenta"></i>Phone:022-2110161
                        </li>
                    </ul>

                    <ul class="social-icons list-inline mt-5">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</section>




<!-- footer.php include php  -->
	<?php
		include 'footer.php';
    ?>

  </body>
  </html>