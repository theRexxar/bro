<?php 
  $BASEURL = 'http://'.$_SERVER['HTTP_HOST'].'/brochallenge/';
?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $title; ?></title>
  <meta name="title" content="BroChallenge - tunggu tantangan berhadiah dari kami">
  <meta name="author" content="BroChallenge">
  <meta name="description" content="Wahai para traveller, tunggu tantangan berhadiah dari kami. Siapkan hati yang besar dan dada bidang. Travelling itu bukan cuma pergi, terus pulang bawa angan-angan! Tapi... Travelling itu pergi, terus jalanin kita punya tantangan! Jadi, lo bisa pulang bawa buah tangan!">

  <meta name="keywords" content="brochallenge, tantangan, gokil, gila, bro, brai, jhon, jon, www.brochallenge.com, boleh juga lo, canggih jon, mantep bro, oke juga brai">

  <!-- for Facebook share -->          
  <meta property="og:title" content="BroChallenge - tunggu tantangan berhadiah dari kami" />
  <meta property="og:image" content="http://www.brochallenge.com/brochallenge.png" />
  <meta property="og:url" content="http://www.brochallenge.com" />
  <meta property="og:description" content="Wahai para traveller, tunggu tantangan berhadiah dari kami. Siapkan hati yang besar dan dada bidang. Travelling itu bukan cuma pergi, terus pulang bawa angan-angan! Tapi... Travelling itu pergi, terus jalanin kita punya tantangan! Jadi, lo bisa pulang bawa buah tangan!" />


  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=1">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php echo $BASEURL ?>favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $BASEURL ?>apple-touch-icon.png">
  
  <!-- CSS: implied media="all" -->      
  <link rel="stylesheet" href="<?php echo $BASEURL ?>assets/css/app.css">  

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="assets/css/handheld.css">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?php echo $BASEURL ?>assets/js/libs/modernizr-2.0.min.js"></script>
  
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    
</head>

<body>

  <div id="container">