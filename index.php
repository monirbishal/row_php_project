<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INNOVA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Innova</a>
      <div class="phone"><span>Call Today</span>320-123-4321</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="login.php" class="page-scroll">Login</a></li>
        <li><a href="register.php" class="page-scroll">Sign Up</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->

<?php
require_once('db.php');
$query_string ="SELECT * FROM banner1 where status=1 order by id asc limit 6";
$db_return = mysqli_query($db_connection, $query_string);

foreach ($db_return as $db_return_single){

?>

<header id="header">
  <div class="intro" style ="background: url(img/intro-bg.jpg) center center no-repeat;">
    <div class="overlay">
      <div class="container">
        <div class="row">

          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?=$db_return_single['banner_name1']?><br>
              <?=$db_return_single['banner_name2']?></h1>
            <p><?=$db_return_single['banner_detail1']?></p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll"><?=$db_return_single['banner_detail2']?></a> </div>

        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->

<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3><?=$db_return_single['banner_name3']?></h3>
        <p><?=$db_return_single['banner_detail3']?></p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll"><?=$db_return_single['banner_detail4']?></a></div>
    </div>
  </div>
</div>

<?php
}
?>


<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <?php
      require_once('db.php');
      $query_string ="SELECT * FROM about where status=1 order by id asc limit 6";
      $db_return = mysqli_query($db_connection, $query_string);

      foreach ($db_return as $db_return_single){

      ?>
      <div class="col-xs-12 col-md-6"> <img src="aboutpicture/<?=$db_return_single['about_photo']?>" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?=$db_return_single['about_name']?></h2>
          <p><?=$db_return_single['about_detail']?></p>
          <h3><?=$db_return_single['about_name1']?></h3>
          <?php
          }
          ?>
          <div class="list-style">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <ul>
                <?php
                require_once('db.php');
                $query_string ="SELECT * FROM about1 where status=1 order by id asc limit 6";
                $db_return = mysqli_query($db_connection, $query_string);
                foreach ($db_return as $db_return_single){
                ?>
                <li><?=$db_return_single['about1_name']?></li>

                <?php
                }
                ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Section -->

<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    <div class="row">
      <?php
      require_once('db.php');
      $query_string ="SELECT * FROM services where status=1 order by id asc";
      $db_return = mysqli_query($db_connection, $query_string);

      foreach ($db_return as $db_return_single){

      ?>

      <div class="col-md-4">
        <div class="service-media"><img src="servicepicture/<?=$db_return_single['service_photo']?>" alt=" "></div>
        <div class="service-desc">
          <h3><?=$db_return_single['service_name']?></h3>
          <p><?=$db_return_single['service_detail']?></p>
        </div>
      </div>

      <?php
      }
      ?>

    </div>


    <div class="row">
      <?php
      require_once('db.php');
      $query_string ="SELECT * FROM services1 where status=1 order by id asc";
      $db_return = mysqli_query($db_connection, $query_string);

      foreach ($db_return as $db_return_single){

      ?>

      <div class="col-md-4">
        <div class="service-media"><img src="servicepicture1/<?=$db_return_single['service_photo1']?>" alt=" "></div>
        <div class="service-desc">
          <h3><?=$db_return_single['service_name1']?></h3>
          <p><?=$db_return_single['service_detail1']?></p>
        </div>
      </div>

      <?php
      }
      ?>

    </div>

  </div>
</div>



<!-- Testimonials Section -->


<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <div class="row">

      <?php
      require_once('db.php');
      $query_string ="SELECT * FROM testimonials where status=1 order by id asc limit 6";
      $db_return = mysqli_query($db_connection, $query_string);

      foreach ($db_return as $db_return_single){

      ?>

      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="testimonialpicture/<?=$db_return_single['testimonials_photo']?>" alt=" "></div>
          <div class="testimonial-content">
            <p><?=$db_return_single['testimonials_detail']?></p>
            <div class="testimonial-meta"><?=$db_return_single['testimonials_name']?></div>
          </div>
        </div>
      </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <?php
          require_once('db.php');
          $query_string ="SELECT * FROM contact where status=1 order by id asc limit 6";
          $db_return = mysqli_query($db_connection, $query_string);

          foreach ($db_return as $db_return_single){

          ?>

          <h2><?=$db_return_single['contact_name']?></h2>
          <p><?=$db_return_single['contact_detail']?></p>
          <?php
          }
          ?>

        </div>
        <form action="contactmessagepost.php" method="post" name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" name="guest_name" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" name="guest_email" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="guest_message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-1 contact-info">
      <?php
      require_once('db.php');
      $query_string ="SELECT * FROM contact1 where status=1 order by id asc limit 6";
      $db_return = mysqli_query($db_connection, $query_string);
      foreach ($db_return as $db_return_single){
      ?>

      <div class="contact-item">
        <h4><?=$db_return_single['contact1_name']?></h4>
        <p><span><?=$db_return_single['contact1_detail1']?></span><?=$db_return_single['contact1_detail2']?><br>
          <?=$db_return_single['contact1_detail3']?></p>
      </div>

      <?php
      }
      ?>

    </div>
    <div class="col-md-12">
      <div class="row">

        <div class="social">
          <ul>
            <?php
            require_once('db.php');
            $query_string ="SELECT * FROM socials";
            $db_return = mysqli_query($db_connection, $query_string);
            foreach ($db_return as $db_return_single){
            ?>
            <li><a href="<?=$db_return_single['social_link']?>" target="_blank"><i class="<?=$db_return_single['social_icon']?>"></i></a></li>
            <?php
            }
            ?>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2017 INNOVA. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
