<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title;?></title>
<link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/x-icon">
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet" />
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/nivo-slider.css'); ?>" type="text/css" media="screen" />
<script src="<?php echo base_url('assets/js/jquery.nivo.slider.pack.js'); ?>" type="text/javascript"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.mousewheel-3.0.6.pack.js"); ?>"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url("source/jquery.fancybox.js?v=2.1.5"); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("source/jquery.fancybox.css?v=2.1.5"); ?>" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
	<style type="text/css">
    .fancybox-custom .fancybox-skin {
        box-shadow: 0 0 50px #222;
    }
    </style>

<script type="text/javascript">
$(window).load(function() {
    $('#slider2').nivoSlider({
		controlNav: false,
		prevText: ' ', 
        nextText: ' ',
pauseTime: 12000,
		effect: 'fade'
		});
});
</script>

<script type="text/javascript">
$(document).ready(function(e) {
  $(".kid1").fadeIn(2500);
  $(".kid2").fadeIn(2500);
  $(".extra2").fadeIn(2600);
});
</script>

</head>
<body>

<div class="menu-fix">
<div class="menu-holder"></div>
<div class="row1">
  <div class="menu">
    <ul>
      <li <?php if($page=="home") echo 'class="active"'; ?> ><a href="<?php echo base_url(); ?>">Home</a></li>
      <!--<li <?php if($page=="aboutm") echo 'class="active"'; ?>><a href="<?php echo site_url('site/aboutm'); ?>">about us</a></li>-->
      <li <?php if($page=="centres") echo 'class="active"'; ?>><a href="<?php echo site_url('site/centres'); ?>">Our Centres</a></li>
     <!-- <li <?php if($page=="testimonials") echo 'class="active"'; ?>><a href="<?php echo site_url('site/testimonials'); ?>">testimonials</a></li> -->
     
      <li <?php if($page=="contact") echo 'class="active"'; ?>><a href="<?php echo site_url('site/contact'); ?>">Contact Us</a></li>
    </ul>
  </div>
</div>
</div>
<div class="wrapper">


<div class="text-slider">
  <div class="extra_text"> <div class="extra2"></div> <span class="styleText1">did you know ?</span> <span class="styleText2"> </span> </div>
  
  
  <!--<span style="color:#4d4b4b;">What happens when kids create something together?<br />
Working as a group force kids to pay attention to each other's efforts, communicate, negotiate, and cooperate. Do these social skills activities make a difference? Indeed they do..</span>-->

  
  
 <div id="slider2" class="nivoSlider">
   <img src="<?php echo base_url('assets/img/t1.jpg');?>" alt=""/> 
   <img src="<?php echo base_url('assets/img/t2.jpg');?>" alt=""/> 
   <img src="<?php echo base_url('assets/img/t3.jpg');?>" alt=""/> 
   </div>
    </div>
<a href="<?php echo base_url(); ?>"><div class="logo"> </div></a>
