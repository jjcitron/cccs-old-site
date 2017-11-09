<?php
require_once ('includes/Mobile_Detect.php');
$detect = new Mobile_Detect;
include('includes/pageSettings.php'); 	
include('includes/pageContentSettings.php'); 	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FB47D7');</script>
<!-- End Google Tag Manager -->
<title>Consolidated Credit Counseling – Debt Counseling, Debt Consolidation</title>
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="viewport" content="<?php

if($detect->isTablet()){

if($detect->isAndroidOS()){
  // echo'minimum-scale=.60, maximum-scale=3.0'; 
  //echo'width=device-width, initial-scale=1.0, minimum-scale=0.70, maximum-scale=3.0';
  echo'width=1000, initial-scale=.6';
}

else{echo'width=1100';}
}
else{echo'width=device-width, initial-scale=1.0';}
?>"/>
<link rel="stylesheet" href="style.css" type="text/css"/>
 <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
  <script src="js/jquery.placeholder.js"></script>
  <script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.sudoSlider.js"></script>
 <link rel="stylesheet" type="text/css" media="screen" href="http://code.jquery.com/ui/jquery-ui-git.css" />
 <script src="http://code.jquery.com/ui/jquery-ui-git.js"></script>
 <?php echo $css;?>
<!--[if lt IE 9 ]> 
<style>
.point{left:auto; position:relative;}
.bpoint{display:none;}
.tpoint{display:none;}
.arrow{position:relative; top:auto;}
.arrow span{display:block;padding:5px 80px 5px 600px;}

</style>
<![endif]-->
<!--[if lt IE 8 ]> 
<style>
.content{height:600px;}
.footer{height:200px;}
</style>
<![endif]-->



</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FB47D7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include('includes/retargeting.php');?>
<div class="container">

<div class="header">
	<div class="content">
		<img src="img/logo.png" />
		<p class="bbb"><img src="img/united-way.png" />
		<img src="img/bbb.png" /></p>
		<div class="cta">Get help now. Call: <a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>"><?php echo $thePhoneNumber;?></a></div>
		
	</div>
</div>

<div class="body">
<div class="content">

    <!-- dynamic scroller -->
	
	<?php 
	if($currentPage=='thanks.php'){
	
	}
	else{

echo'
<script type="text/javascript" src="http://tools.consolidatedcredit.org/scrolling-leads?copy=%3Cspan%20class%3D%22visit%20visible%22%3E%5Bname%5D%20Got%20Help%20with%20%3Cspan%20class%3D%22dAmount%22%3E%5Bdebt%5D%3C%2Fspan%3E%20in%20debt%3C%2Fspan%3E%3Cspan%20class%3D%22visitAge%22%3E%20%5Btimeframe%5D%20ago%20in%20%5Bstate%5D%3C%2Fspan%3E">
</script>


	
                    
                    <div  class="scroller" >
					<span class="yana">YOU ARE NOT ALONE</span>
					<div class="content">
					<div id="dmp_scrolling_leads" >
                    </div>
					</div>
                    </div>
					
					<script>
	$(document).ready(function() {
		var sudoSlider = $("#dmp_scrolling_leads").sudoSlider({
		 
         auto: true,
		 pause: 2000,
         ease: "linear",
         continuous:true,
         prevNext: true,
         speed: 1000	          
      });
	  });
	  </script>	';
               
	}
	?>
<!-- end scroller -->	
		
	<?php echo $top; ?>
		
	<?php echo $mid; ?>		
	
	<?php echo $arrow; ?>		
		
	<?php echo $bottom; ?>

	
	
	<?php 
	if($currentPage=='thanks.php'){
	include('includes/thanks.php');
	}
	else{
	include('includes/form.php');
	}
	?>
	
</div><!--content-->
</div><!--body-->

<div class="footer">
	<div class="content">
		<p align="center"><img src="img/united-way.png" />
		<img src="img/bbb.png" /></p>
		<div class="disclaimer">
			<?php echo $footerText; ?>
		</div>
	</div>
</div>
<div class="content"><p style="text-align:center; clear:both; font-size:75%; margin-top:10px; color:#000">5701 West Sunrise Blvd. Fort Lauderdale, FL 33313 suite #100 <br/>Copyright &copy;Consolidated Credit, Inc. All rights reserved.</p></div>

</div><!--Container-->

<!--[if lt IE 8 ]> 
<script>
//fun ie hacks
$(function() {
       var zIndexNumber = 1000;
       // Put your target element(s) in the selector below!
       $("div").each(function() {
               $(this).css('zIndex', zIndexNumber);
               zIndexNumber -= 10;
       });
});
</script>
<![endif]-->
	<!--[if lt IE 10 ]> 
<script>
$('input, textarea').placeholder();
</script>
<![endif]-->



		
	


</body>


</html>