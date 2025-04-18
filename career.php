<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="utf-8">
<title>Lance Tech Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<link href="css/style.css" rel="stylesheet">


<!-- <link href="css/responsive.css" rel="stylesheet"> -->

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body
>
<div class="page-wrapper">

<!-- Preloader -->
<div class="preloader"></div> 
 <?php include('header.php')?>


<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
  <div class="auto-container">
    <div class="title-outer">
      <h1 class="title">Career</h1>
      <ul class="page-breadcrumb">
        <li><a href="index.php">Home</a></li>
        <!-- <li><a href="#">Pages</a></li> -->
        <li>Career</li>
      </ul>
    </div>
  </div>
</section>
<!-- end main-content -->
<div class="contact-section-five pt-0" id="contact">
<div class="bg bg-image" style="background-image: url(images/background/contact-1.jpg)"></div>
<div class="auto-container">
    <div class="row g-0">
    <!-- Form Column -->
    <div class="form-column col-lg-6 offset-lg-6">
        <div class="inner-column">
        <!-- Contact Form -->
        <div class="contact-form">
            <div class="sec-title">
            <h2>Get in touch</h2>
            <div class="text">Vestibulum lectus mauris ultrices eros in. Cursus sit amet dictum sit</div>
            </div>

            <!--Contact Form-->
            <form method="post" action="https://html.kodesolution.com/2024/binso-php/get" id="contact-form">
            <div class="row">

                <div class="form-group col-lg-6 col-md-6">
                <input type="text" name="name" placeholder="Your Name" required="">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                <input type="email" name="email" placeholder="Email" required="">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                <input type="tel" name="phone_num" placeholder="Phone Number" required="">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                <input type="file" name="CV" placeholder="Upload Your CV" required="">
                </div>
                <div class="form-group col-lg-12">
                <textarea name="textarea" placeholder="Write your message here..." rows="2"></textarea>
                </div>
                <div class="form-group col">
                <button type="submit" class="theme-btn btn-style-one" name="submit-form"><span class="btn-title">Submit Now</span></button>
                </div>
            </div>
            </form>
        </div>
        <!--End Contact Form -->
        </div>
    </div>
    </div>
</div>
</div>

<!-- Main Footer -->
 <?php include('footer.php')?>
</html>  