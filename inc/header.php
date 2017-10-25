<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $pageTitle; ?> | NAIFA ClientCast&reg;</title>
    <meta name="description" content="NAIFA Client Cast by Real Wealth is a free monthly 24/7 podcast designed to Educate, Inspire and Motivate your clients and prospects to take action with you">
    <meta name="keywords" content="Naifa, Client Cast, Real Wealth, Financial advice">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/mediaelementplayer.css" />

    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <nav id="naifa-nav" class="container-fluid navbar navbar-inverse">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#naifa-clientcast-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="naifa-clientcast-nav">
        <ul class="nav navbar-nav">
          <li class="home <?php if($section == "home") {echo "active";} ?>"><a href="index.php">Home</a></li>
          <li class="webinar <?php if($section == "webinar") {echo "active";} ?>"><a href="webinar.php">Sample Webinar</a></li>
          <li class="podcast <?php if($section == "podcast") {echo "active";} ?>"><a href="podcast.php">Sample Podcast</a></li>
          <li class="service-options <?php if($section == "service-options") {echo "active";} ?>"><a href="service-options.php">Service Options</a></li>
          <li class="tutorial <?php if($section == "tutorial") {echo "active";} ?>"><a href="tutorial.php">Tutorial</a></li>
          <li class="leadership <?php if($section == "leadership") {echo "active";} ?>"><a href="leadership.php"> Leadership Tools</a></li>
          <li class="contact-us <?php if($section == "contact-us") {echo "active";} ?>"><a href="contact-us.php">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://twitter.com/realwealthmedia" title="Follow RealWealth On Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/company/6432984" title="Connect with Jim on Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://www.facebook.com/RealWealthMedia" title="Connect with Jim on Linkedin" target="_blank"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <header id="naifa-header" class="container">
      <div class="row">
        <div class="col-sm-12">
          <a id="home-logo" href="index.php" alt="Naifa Clientcast - Home"><img src="images/naifa-clientcast-logo.svg"alt="Naifa Clientcast logo" class="img-responsive"></a>
        </div>
      </div>
    </header>

  <div id="wrapper" class="container box-shadow">

    <div class="container site-content">
