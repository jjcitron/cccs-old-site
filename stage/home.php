<?php
require_once ('includes/Mobile_Detect.php');
$detect = new Mobile_Detect;
include('includes/pageSettings.php'); 	
include('includes/pageContentSettings.php'); 	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23415831-39', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</head>

<body>
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



		
	


<script src="https://tracking.aimediagroup.com/aipx_secure.js" type="text/javascript"></script>
<script type="text/javascript">
	// for domain gus-lp.aiprx.consolidatedcredit.org
	var cid = "";
	_setAitrkCookie("WICOCdEC4LHTtrECWc");
</script>	
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5189530"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5189530&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
  
</body>


</html>