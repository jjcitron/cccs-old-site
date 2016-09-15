<?php
/*
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
*/
require_once ('includes/Mobile_Detect.php');
$detect = new Mobile_Detect;
include('includes/pageSettings.php'); 	


include('includes/GEOpageContentSettings.php'); 

if(preg_match('/(?i)msie [8]/',$_SERVER['HTTP_USER_AGENT'])){
   //if IE<=8
   $device = 'ie8';
}
?>

<!-- Show/Hide content -->
<?php 
	if(preg_match('/thanks-.*/', $currentPage)){$pageType = "thanks";}
	else if (preg_match('/clients.*/', $currentPage)){$pageType = "clients";}
	else{$pageType = "";}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--[if IE 8 ]>    <html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js <?php echo $device;?>"> 
<!--<![endif]-->

<head>
<title>Consolidated Credit Counseling – Debt Counseling, Debt Consolidation</title>

	<meta name="viewport" content="<?php
		if($detect->isTablet()){
			if($detect->isAndroidOS()){echo'width=1000, initial-scale=.6';}
			else{echo'width=1100';}
		}
		else{echo'width=device-width, initial-scale=1.0';}?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="shortcut icon" href="http://www.consolidatedcredit.org/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="http://www.consolidatedcredit.org/res/css/styles.css?ver=4.0">
	<link rel="stylesheet" type="text/css" href="geo/styles.css">
		
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="geo/scripts/jquery-1.9.1.min.js"><\/script>')</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!--Map-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-gmS9gY_2KrqnKV0aCL2PzcUPMPA88n0"></script>
	<script type="text/javascript" src="gmap/js/infobox.js"></script>
	<script type="text/javascript" src="gmap/data.php?loc=<?php echo $currentPage;?>"></script>
	<script>var thelocations = theData;</script>
	
	<script type="text/javascript" src="http://www.consolidatedcredit.org/res/js/common.js"></script>

 
</head>

<div class="wrapper">
<body>


	<header id="header">
		<div class="ticker">
			<div class="con">
				<!--ul class="external">
					<li><a target="_blank" href="//espanol.consolidatedcredit.org/">Espa&ntilde;ol</a></li>
					<li><a target="_blank" href="//www.consolidatedcredit.ca/">Canada</a></li>
					<li class="last"><a href="#" onclick="popSurvey();">Members</a></li>
				</ul-->
				<p class="title">You&apos;re not alone<span class="ico"></span></p>
				<p class="item"><span class="next"></span></p>
			</div>
		</div>	
		
		<div class="con">
			<div class="custom-logo"><img src="geo/img/logo-cccs.png" /></div>
			<div><img class="cred-logos" src="geo/img/logos-mh-credibility.png" /></div>
			<div class="custom-phone">
				<img class="icon" src="geo/img/mobile-icon-phone.png" /><a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>
				<script type="text/javascript">
					if ($(window).width() >= 1024){
						$(".ShowPhoneNumber").removeAttr("href");
					}
				</script>
				<span>Get help now</span>
			</div>
		</div>
	</header>


	<nav id="nav" class="menu">
		<div class="con" class="menu">
			<ul>
				<li><a href="<?php echo $currentDir; ?>local-<?php echo  $location;?>">Home</a></li>
				<li><a href="<?php echo $currentDir; ?>history-<?php echo  $location;?>#history">Our 20 Year History</a></li>
				<li><a href="<?php echo $currentDir; ?>questions-<?php echo $location;?>#questions">Typical Questions</a></li>
				<li><a href="<?php echo $currentDir; ?>estimator-<?php echo $location;?>#estimator">Savings Estimator</a></li>
				<li><a href="<?php echo $currentDir; ?>clients-<?php echo $location;?>">Clients We've Helped</a></li>
			</ul>
		</div>
		<div class="navbar l"></div>
		<div class="navbar r"></div>
		<div class="navbot"></div>
	</nav>
	<div class="mnav"><a class="menu-link " href="#menu"></a></div>
		

	<div class="home">
		<div id="debtResult"></div>
		<div id="debtSavings">
			<div class="close">
				<a href="javascript:void();" id="debtSavingsClose">
					<img src="geo/img/button-close.png" />
				</a>
			</div>
			<div class="debtSavingsLeft">
				<h2> You can save! <br/>Call <span> <?php echo $thePhoneNumber;?></span></h2>
				<p>With this amount of debt, you'd pay around $<span id="debtSavingsAmount"></span> on a Debt Management Plan.</p>
				<a href="#theForm" class="debtConsult">Get Started Today</a>
			</div>
			<div class="debtSavingsGirl"><img src="geo/img/debtSavingsGirl.png" /></div>
			<p class="discSmall">This estimate compares paying your credit card debt on your own vs. the potential benefit of using a Debt Management Plan through completion. IT'S NOT AN ACTUAL QUOTE. Estimate is based on 2.1% of your balance owed. Actual interest rates will vary by consumer and creditor - yours could be higher or lower. Consolidated Credit might be able to reduce your interest rates and late fees allowing you to pay off your credit card debt quicker (since more payments are applied to your principal balances, saving you lots of money in the long run). To complete the program, you must make on-time payments each month. Late or missed payments may cause your program to be cancelled and in that event, this estimate would not apply to you.</p>
		</div>
		<script>
		$("#formDebt").submit(function(event) {
							if($('#formDebtAmount').val()==''){return false;}
							var regex = /[0-9]|\./;
							if( !regex.test($('#formDebtAmount').val()) ) {return false;}
						var savings = $('#formDebtAmount').val() * .021;
						$('#debtAmount').html($('#formDebtAmount').val());

						$('#debtSavingsAmount').html(Math.ceil(savings));
						$('#debtamount').val($('#formDebtAmount').val());
						   $('#debtResult').show();
						$('#debtSavings').show();
						event.preventDefault();
						});
						
				$('#debtSavingsClose, .debtConsult').click(function (){
					$('#debtResult').hide();
					$('#debtSavings').hide();
					
					//return false;
				});
		</script>
		<div class="con">
			<?php 
				if($pageType == "thanks" ){
					include('includes/geo_thanks.php');
				}
				else{
					echo('<div class="hline"><h1>Reduce Your Total Credit Card Payments by up to 30% to 50%</h1></div>');
					include('includes/map.php'); 
					include('includes/geo_form.php');
				}
			?>
		</div>
		<div class="bar l"></div>
		<div class="bar r"></div>
	</div>

	<div class="home-featured-bar"></div>
	<div class="home-featured">
		<div class="con">
			<p align="center"><img class="news-logos" src="geo/img/news-logos.png"/></p>
			<!--span class="ico feat"></span>
			<span class="ico cnn"></span>
			<span class="ico for"></span>
			<span class="ico kip"></span>
			<span class="ico msn"></span>
			<span class="ico usa"></span>
			<span class="ico yah"></span--> 
		</div>
		<div class="bar l"></div>
		<div class="bar r"></div>
	</div>

	<div class="home-btf">
		<div class="con" id="midContent">
			
			<?php
			switch($currentPage){
				case (preg_match('/local.*/', $currentPage) ? true : false) :
					default:
						include('pagecontent/geo_home.php');
					break;
				case (preg_match('/history.*/', $currentPage) ? true : false) :
					include('pagecontent/geo_history.php');
					break;
				case (preg_match('/questions.*/', $currentPage) ? true : false) :
					include('pagecontent/geo_questions.php');
					break;
				case (preg_match('/estimator.*/', $currentPage) ? true : false) :
					include('pagecontent/geo_estimator.php');
					break;	
				case (preg_match('/clients.*/', $currentPage) ? true : false) :
					include('pagecontent/geo_study.php');
					break;
			}
			?>	
		</div>
	</div>

	<?php 
	if($pageType == "thanks" || $pageType == "clients"){
		//show nothing
		}
	
	else{include('pagecontent/geo_testimonials.php');}
	?>
	
	<div class="footer-logos">
		<div class="con">
		    <div class="footer-cred">
				<img class="cred-logos" src="geo/img/logos-cred-footer.jpg" />
			</div>
			<!--div class="strip">
				<a class="ico uni first" id="uni" href="javascript:void(0)"></a>
				<a class="ico cfc" id="cfc" href="javascript:void(0)"></a>
				<a class="ico eif" id="eif" href="javascript:void(0)"></a>
				<a class="ico nis" id="nis" href="javascript:void(0)"></a>
				<a class="ico ver" id="ver" href="javascript:void(0)"></a>
				<a class="ico bvc" id="bvc" href="javascript:void(0)"></a>
				<a class="ico bbb" id="bbb" href="javascript:void(0)"></a>
				<a class="ico ana" id="ana" href="javascript:void(0)"></a>
				<a class="ico eho last" id="eho" href="javascript:void(0)"></a>
			</div-->
			<span class="corner t r"></span>
			<span class="corner t l"></span>
	
		</div>
		<div class="bg"></div>
		<div class="bar l"></div>
		<div class="bar r"></div>
	</div>
	
	<footer id="footer">
	<div class="con">
		<?php
		if($pageType == "thanks"){
			echo('<p class="disclaimer">*This estimate compares paying your credit card debt on your own vs. the potential benefit of using a Debt Management Plan through completion. IT\'S NOT AN ACTUAL QUOTE. Estimate is based on 2.1% of your balance owed. Actual interest rates will vary by consumer and creditor - yours could be higher or lower. Consolidated Credit might be able to reduce your interest rates and late fees allowing you to pay off your credit card debt quicker (since more payments are applied to your principal balances, saving you lots of money in the long run). To complete the program, you must make on-time payments each month. Late or missed payments may cause your program to be cancelled and in that event, this estimate would not apply to you.</p>
			<div class="socialContainer">
				<div class="social">
					<a target="_blank" class="ico gp" href="https://plus.google.com/u/0/110405716817784509562"></a>
					<a target="_blank" class="ico pn" href="http://www.pinterest.com/consolidatedcs/"></a>
					<a target="_blank" class="ico li" href="https://www.linkedin.com/company/consolidated-credit-counseling-services-inc.?trk=top_nav_home"></a>
					<a target="_blank" class="ico yt" href="http://www.youtube.com/consolidatedcreditcs"></a>
					<a target="_blank" class="ico tw" href="http://twitter.com/#%21/consolidatedus"></a>
					<a target="_blank" class="ico fb" href="http://www.facebook.com/consolidatedcredit"></a>
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<!-- <div class="addthis_sharing_toolbox"></div> -->
					<a target="_blank" class="ico rss" href="http://www.consolidatedcredit.org/feed/"></a>
					<div class="clear"></div>
				</div>
			</div>');
		}
		?>

		<span>
		<address>
			<p>
				<span>5701 West Sunrise Blvd.</span>
				<span>Fort Lauderdale</span>, <span>FL</span> <span>33313</span>
			</p>
			<p>Copyright &copy; Consolidated Credit, Inc. All rights reserved.</p>
			<p class="copy"><a href="javascript:void();" id="policy">Privacy Policy</a></p>
			
			
				<div class="blackout"></div>
				<div class="popup">
					<div class="close">
						<a href="javascript:void();" id="close"><img src="geo/img/button-close.png" /></a>
					</div>
					<?php include('pagecontent/geo_privacy.php');?>
				</div>
				<script>
					$('#close').click(function (){
							$('.blackout').hide();
							$('.popup').hide();
							$("body").css("overflow", "auto");
							//return false;
						});
						
				$('#policy').click(function (){
							$('.blackout').show();
							$('.popup').show();
							$("body").css("overflow", "hidden");
							//$("*").css("z-index", "0");
							
							//return false;
						});
				</script>
				
		</address>
		</span>
		
		<span class="corner t r"></span>
		<span class="corner t l"></span>
		<div class="bar l"></div>
		<div class="bar r"></div>
		<div class="grad"></div>
	</div>
	</footer>
	
	<script>
		$(document).ready(function () {
			var $menu = $('.menu'), 
			$menulink = $('.menu-link');
			$menulink.click(function () {
				$menulink.toggleClass('active');
				$menu.toggleClass('active');
			return false;
			});

		
		//Slide Toggle
		$('.hidden').hide();
		$('.moreless').click(function(){
			//$('.hidden').slideUp();
			$(".hidden").slideToggle();
		});
		
	});
	</script>
	
	<div id="dmp_scrolling_leads"></div>
	<script type="text/javascript" src="//tools.consolidatedcredit.org/Javascript905/LoadScript"></script>
	<script type="text/javascript">
	  (function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js,fjs)}(document, 'script', 'facebook-jssdk'));
	  $(function(){$.getScript('//tools.consolidatedcredit.org/scrolling-leads/?copy=We have helped with [debt] in [state]',function(){$('#dmp_scrolling_leads div').each(function(){var val=$(this).text().match(/\$(\d+)\s/)[1];$(this).text( $(this).text().replace(val,parseFloat(val.replace(/0-9./g)).formatMoney().replace('.00','')));var eq=0;$('.ticker .item .next').text($('#dmp_scrolling_leads .dmp_scrolling_leads:eq('+eq+')').text()).animate({top:0},function(){$('.ticker .item .next').removeClass('next').addClass('current');$('.ticker .item').append('<span class="next"></span>')});var ticker=setInterval(function(){eq=$('#dmp_scrolling_leads .dmp_scrolling_leads:eq('+(eq+1)+')').length?eq+1:0;$('.ticker .item .current').animate({top:-$('.ticker .item').height()+'px'},function(){$('.ticker .item .current').remove()});$('.ticker .item .next').text($('#dmp_scrolling_leads .dmp_scrolling_leads:eq('+eq+')').text()).animate({top:0},function(){$('.ticker .item .next').removeClass('next').addClass('current');$('.ticker .item').append('<span class="next"></span>')})},7000)})})});
	</script>

</body>
</div>
</html>