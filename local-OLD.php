<?php
require_once ('includes/Mobile_Detect.php');
$detect = new Mobile_Detect;
include('includes/pageSettings.php'); 	
include('includes/GEOpageContentSettings.php'); 

if(preg_match('/(?i)msie [8]/',$_SERVER['HTTP_USER_AGENT']))
{
    // if IE<=8
   $device = 'ie8';
}

?>

<?php if(isset($_GET['thanks'])){$pageType = "thanks";}else{$pageType = "";}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--[if IE 8 ]>    <html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js <?php echo $device;?>"> <!--<![endif]-->
<head>
    <title>Consolidated Credit Counseling</title>
	
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

    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/> 
    <link href="geo/Common.css" rel="stylesheet" type="text/css" />
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" href="geo/style.css" type="text/css"/>
	
	<!--jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="geo/scripts/jquery-1.9.1.min.js"><\/script>')</script>
		
	<!--Map-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-gmS9gY_2KrqnKV0aCL2PzcUPMPA88n0"></script>
	<script type="text/javascript" src="gmap/js/infobox.js"></script>
	<script type="text/javascript" src="gmap/data.php?loc=<?php echo $currentPage;?>"></script>
	<script>var thelocations = theData;</script>
	
	
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
  <script src="js/jquery.placeholder.js"></script>
  <script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.sudoSlider.js"></script>
 <link rel="stylesheet" type="text/css" media="screen" href="http://code.jquery.com/ui/jquery-ui-git.css" />
 <script src="http://code.jquery.com/ui/jquery-ui-git.js"></script>
	<!--<script src="geo/scripts/Common.js?ver=1.85" type="text/javascript"></script>-->


	
</head>
<body>
  <?php include('includes/retargeting.php');?>          
	<!-- begin tracking scripts in body -->
	<!-- end tracking scripts in body -->
	
	<script>
		(function (b) { b.support.touch = "ontouchend" in document; if (!b.support.touch) { return; } var c = b.ui.mouse.prototype, e = c._mouseInit, a; function d(g, h) { if (g.originalEvent.touches.length > 1) { return; } g.preventDefault(); var i = g.originalEvent.changedTouches[0], f = document.createEvent("MouseEvents"); f.initMouseEvent(h, true, true, window, 1, i.screenX, i.screenY, i.clientX, i.clientY, false, false, false, false, 0, null); g.target.dispatchEvent(f); } c._touchStart = function (g) { var f = this; if (a || !f._mouseCapture(g.originalEvent.changedTouches[0])) { return; } a = true; f._touchMoved = false; d(g, "mouseover"); d(g, "mousemove"); d(g, "mousedown"); }; c._touchMove = function (f) { if (!a) { return; } this._touchMoved = true; d(f, "mousemove"); }; c._touchEnd = function (f) { if (!a) { return; } d(f, "mouseup"); d(f, "mouseout"); if (!this._touchMoved) { d(f, "click"); } a = false; }; c._mouseInit = function () { var f = this; f.element.bind("touchstart", b.proxy(f, "_touchStart")).bind("touchmove", b.proxy(f, "_touchMove")).bind("touchend", b.proxy(f, "_touchEnd")); e.call(f) } })(jQuery);
		Number.prototype.formatMoney = function (c, d, t) { var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "." : d, t = t == undefined ? "," : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0; return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "") };

		$(function () {
			if ($('#form #slider').length) {
				$('#form #slider').slider({
					value: parseInt($('#form #debtamount').val()),
					max: 50000,
					min: 1000,
					step: 150,
					slide: function (e, u) {
						$('#form #debtamount').val(u.value);
						$('#form .amt').html((u.value == 1000 ? '<' : '') + '$' + u.value.formatMoney().replace('.00', '') + (u.value == 50000 ? '+' : ''))
					}
				});
				$('#form #slider').draggable();
			}
		});


	</script>
	<!-- eKomiLoader START, only needed once per page -->
	<script type="text/javascript">
		(function () {
			eKomiIntegrationConfig = new Array(
				{ certId: '5A7C3B39379AA97' }
			);
			if (typeof eKomiIntegrationConfig != "undefined") {
				for (var eKomiIntegrationLoop = 0; eKomiIntegrationLoop < eKomiIntegrationConfig.length; eKomiIntegrationLoop++) {
					var eKomiIntegrationContainer = document.createElement('script');
					eKomiIntegrationContainer.type = 'text/javascript'; eKomiIntegrationContainer.defer = true;
					eKomiIntegrationContainer.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//connect.ekomi.de/integration_1407942882/" + eKomiIntegrationConfig[eKomiIntegrationLoop].certId + ".js";
					document.getElementsByTagName("head")[0].appendChild(eKomiIntegrationContainer);
				}
			} else { if ('console' in window) { console.error('connectEkomiIntegration - Cannot read eKomiIntegrationConfig'); } }
		})();
	</script>
	<!-- eKomiLoader END, only needed once per page -->
		
<div class="mainWrapper">

    <div class="mastHead">
        <div class="mhLogo"><img src="geo/img/logo-cccs.png" /></div>
		<div class="mhPhoneHR"><hr/></div>
        <div class="mhPhone">
			<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>
			<script type="text/javascript">
				if ($(window).width() >= 1024){
					$(".ShowPhoneNumber").removeAttr("href");
				}
			</script>
			<span>Get help now</span>
        </div>
        <div class="credLogos">
            <img src="geo/img/logos-mh-credibility.png" />
        </div>
        <div class="mhPhoneOuter">
            <div class="mhPhoneMobile">
			<div class="mhPhoneWrapper">
				<div class="icon"><img src="geo/img/mobile-icon-phone.png" /></div>
				<a class="ShowPhoneNumber" href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>"><?php echo $thePhoneNumber;?></a>
			</div>
            </div>
            <p>Get Help Now</p>
        </div>
    </div><!--mastHead-->
	
	<div id="scrolling-container">      
	<!-- begin scrolling leads -->
	<!-- dynamic scroller -->
	<script type="text/javascript" src="http://tools.consolidatedcredit.org/scrolling-leads?copy=%3Cspan%20class%3D%22visit%20visible%22%3E%5Bname%5D%20Got%20Help%20with%20%3Cspan%20class%3D%22dAmount%22%3E%5Bdebt%5D%3C%2Fspan%3E%20in%20debt%3C%2Fspan%3E%3Cspan%20class%3D%22visitAge%22%3E%20%5Btimeframe%5D%20ago%20in%20%5Bstate%5D%3C%2Fspan%3E"></script>
                
	<div class="scroller" ><span class="yana">You're not alone</span>
		<div class="content">
			<div id="dmp_scrolling_leads" ></div>
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
	 </script>	
	<!-- end scroller -->	
	<!-- end scrolling leads -->
    </div>
	
    <div class="banner">
        <h1>
		<?php 
		if($pageType == "thanks"){ 
			echo'Thanks! Let\'s Get Started'; 
			}
			else{ 
				echo'Reduce Your Total Credit Card Payments by up to 30% to 50%'; 
			}
		?>
		</h1>
	
		<div class="heroImg<?php if($pageType == "thanks"){ echo' thanks'; }?>" >
			<?php 
			switch($currentPage){
				case 'local-florida.php':
				default:
					$pgName = 'Florida';
					break;
				case 'local-california.php':
					$pgName = 'California';
					break;
				case 'local-georgia.php':
					$pgName = 'Georgia';
					break;
				case 'local-newjersey.php':
					$pgName = 'New Jersey';
					break;
				case 'local-newyork.php':
					$pgName = 'New York';;
					break;
				case 'local-texas.php':
					$pgName = 'Texas';
					break;
				case 'local-mn.php':
					$pgName = 'Minnesota';
					break;
				case 'local-ne.php':
					$pgName = 'Nebraska';
					break;
				case 'local-il.php':
					$pgName = 'Illinois';
					break;
				case 'local-ma.php':
					$pgName = 'Massachusetts';
					break;
				case 'local-ok.php':
					$pgName = 'Oklahoma';
					break;				
				case 'local-sd.php':
					$pgName = 'South Dakota';
					break;
			}
			?>
			
			<div class="mapTitle">Some&nbsp;<span>&nbsp;<?php echo $pgName?>&nbsp;</span>&nbsp;Residents we've hepled...</div>
			<?php include('includes/map.php');?> 
			<div id="mapCanvas"></div>
		</div>
		
			<div class="bannerNews"><img src="geo/img/news-logos.png" /></div>
			<div class="bannerNewsMobile"><img src="geo/img/mobile-icons-news.png" /></div>
    </div>
	
	<?php 
	if($pageType == "thanks"){
		
		include('includes/geo_thanks.php');
		}
	
	else{include('includes/geo_form.php');}
	?>
	
	<?php 
	if($pageType == "thanks"){
		include('pagecontent/geo_thanksBody.php');
		}
	
	else{include('pagecontent/geo_takeAction.php');}
	?>
	
	<?php 
	if($pageType == "thanks"){
		//show nothing
		}
	
	else{include('pagecontent/geo_lowerContent.php');}
	?>
</div><!--mainWrapper-->

<div class="footer">
    <div class="footerCredibility">
        <img src="geo/img/logos-cred-footer.jpg" />
    </div>
    <div class="footWrapInner">
        <div class="footCopyright">Copyright &copy; Consolidated Credit, Inc. All rights reserved.<br />
            <a href="http://www.consolidatedcredit.org/privacy-policy/" target="_blank">View PrivacyPolicy</a><br/><br/>
        </div>
        <div class="footAddress">
            <div class="footAdd">5701 West Sunrise Blvd. Fort Lauderdale, FL 33313</div>
            <div class="footSocMed">
                <div class="footSmIcon">
                    <a href="http://www.youtube.com/consolidatedcreditcs" target="_blank">
                        <img src="geo/img/foot-soc-med-yt.png" /></a></div>
                <div class="footSmIcon">
                    <a href="http://twitter.com/#!/consolidatedus" target="_blank">
                        <img src="geo/img/foot-soc-med-tw.png" /></a></div>
                <div class="footSmIcon">
                    <a href="http://www.facebook.com/consolidatedcredit" target="_blank">
                        <img src="geo/img/foot-soc-med-fb.png" /></a></div>
                <div class="footSmIcon">
                    <a href="http://www.consolidatedcredit.org/feed/" target="_blank">
                        <img src="geo/img/foot-soc-med-rss.png" /></a></div>
            </div>
        </div>
        <p>
            *This estimate compares paying your credit card debt on your own vs. the potential
            benefit of using a Debt Management Plan through completion. IT'S NOT AN ACTUAL QUOTE.
            Estimate is based on 2.1% of your balance owed. Actual interest rates will vary
            by consumer and creditor - yours could be higher or lower. Consolidated Credit might
            be able to reduce your interest rates and late fees allowing you to pay off your
            credit card debt quicker (since more payments are applied to your principal balances,
            saving you lots of money in the long run). To complete the program, you must make
            on-time payments each month. Late or missed payments may cause your program to be
            cancelled and in that event, this estimate would not apply to you.
        </p>
    </div>
</div>

	<script src="https://tracking.aimediagroup.com/aipx_secure.js" type="text/javascript"></script>
	<script type="text/javascript">
		// for domain gus-lp.aiprx.consolidatedcredit.org
		var cid = "";
		_setAitrkCookie("WICOCdEC4LHTtrECWc");
	</script>
	<!--script src="js/map.js"></script-->
	
</body>
</html>