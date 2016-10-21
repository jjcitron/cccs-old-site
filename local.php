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

<!-- Unique Content -->
<?php 
	if(preg_match('/thanks-.*/', $currentPage)){$pageType = "thanks";}
	else if (preg_match('/clients.*/', $currentPage)){$pageType = "clients";}
	else{$pageType = "";}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--[if IE 8 ]>    <html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js <?php echo $device;?>" lang="<?php echo $lang ?>-US">
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
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<link rel="shortcut icon" href="http://www.consolidatedcredit.org/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="geo/default.css"/>
	

	

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="geo/scripts/jquery-1.9.1.min.js"><\/script>')</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="js/modernizr.js"></script>
	<!--Google Map-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-gmS9gY_2KrqnKV0aCL2PzcUPMPA88n0"></script>
	<script type="text/javascript" src="gmap/js/infobox.js"></script>
	<script type="text/javascript" src="gmap/data.php?loc=<?php echo $currentPage;?>&lang=<?php echo $lang;?>"></script>
	<script>var thelocations = theData;</script>
	
	<!-- eKomiLoader START, only needed once per page -->
	<script type="text/javascript" src="geo/scripts/ekomi.js"></script>
	
	<?php if($lang=="es"){echo '<link rel="stylesheet" type="text/css" href="geo/styles-'.$lang.'.css"/>';}
		else{echo '<link rel="stylesheet" type="text/css" href="geo/styles-'.$lang.'.css"/>';}
	?>
	<!-- Scripts -->
	<script type="text/javascript" src="geo/scripts/main.js"></script>
</head>


<body class="wrapper">

	<!-- Retargeting -->
	  <?php include('includes/retargeting.php');?>          
	<!-- End Retargeting -->

	<!-- Debt Savings -->
	<?php include('pagecontent/geo_popup.php');?>
	
	<!-- Disclaimer -->
	<?php include('pagecontent/geo_privacy.php');?>

	<header id="header">
		<div class="con">
			<div class="custom-logo"><?php echo ('<img src="geo/img/logo-'.$lang.'.png" />') ?></div>
			<div><img class="cred-logos" src="geo/img/logo-cred.png" /></div>
			<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber" ><div class="custom-phone">
				<span><?php if($lang=='es'){echo 'Asistencia Inmediata';}else{echo 'Priority Assistance';} ?></span>
				<img class="icon" src="geo/img/mobile-icon-phone.png" />
				<p class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></p></div>
			</a>
			<div class="eKomi"><img id="eKomi_custom" src="" alt="Loading..."/></div>
			<div class="language">
				<!--?php if($lang=='es'){ echo '<a href="'.$currentPage.'?lang=en" onclick="aitrkClick(\'languageSwitched_en\')">Inglés</a>'; }
					else{ echo'<a href="'.$currentPage.'?lang=es" onclick="aitrkClick(\'languageSwitched_es\')">Español</a>'; }
				?-->
				<!--Code will only fire in proxy, because of the pixel src 'img.src' below -->
				<script>
					function change(val){
						var lang = val.options[val.selectedIndex].value
						var img = new Image();
						img.onload = function(){window.location = '?lang='+ lang; console.log('switched!!')};
						img.src = '/proxy-static/includes/trk.php?languageSwitched_'+lang;
					}
				</script>

				<select class="lang" onchange="change(this)">
					<?php if($lang=='en'){ echo '<option value="en">Inglés</option><option value="es" >Español</option>'; }
					else{ echo '<option value="es" >Español</option><option value="en" >Inglés</option>'; }?> 
				</select>​
			</div>
		</div>
	</header>

	<nav id="nav" class="menu">
		<div class="con" class="menu">	
			<ul>
			<?php if($lang=='es'){
				echo 
				'<li><a href="'.$currentDir.'local-'.$location.'">Incio</a></li>
				<li><a href="'.$currentDir.'history-'.$location.'">20 A&#241;os De Historia</a></li>
				<li><a href="'.$currentDir.'questions-'.$location.'">Preguntas</a></li>
				<li><a href="'.$currentDir.'estimator-'.$location.'">Simulador De Ahorros</a></li>
				<li><a href="'.$currentDir.'clients-'.$location.'">Clientes Que Hemos Ayudado</a></li>';
				}else{
					echo
					'<li><a href="'.$currentDir.'local-'.$location.'">Home</a></li>
					<li><a href="'.$currentDir.'history-'.$location.'">Our 20 Year History</a></li>
					<li><a href="'.$currentDir.'questions-'.$location.'">Typical Questions</a></li>
					<li><a href="'.$currentDir.'estimator-'.$location.'">Savings Estimator</a></li>
					<li><a href="'.$currentDir.'clients-'.$location.'">Clients We\'ve Helped</a></li>';
					}
				?>
			</ul>
		</div>
		<div class="navbar l"></div>
		<div class="navbar r"></div>
		<div class="navbot"></div>
	</nav>
	<div class="mnav"><a class="menu-link " href="#menu"></a></div>
		
	<div class="home">	
		<div class="con">
			<?php 
				if($pageType == "thanks" ){
					include('includes/geo_thanks.php');
				}else{
					switch($currentPage){
						case (preg_match('/history.*/', $currentPage) ? true : false) :
							include('pagecontent/geo_history.php');
							break;
						case (preg_match('/questions.*/', $currentPage) ? true : false) :
							include('pagecontent/geo_questions.php');
							break;
						case (preg_match('/estimator.*/', $currentPage) ? true : false) :
							include('pagecontent/geo_estimator.php');
							break;
						default:
							if($lang=="es"){ echo ('<div class="hline"><h1>Reduzca su pago total de tarjetas de cr&#233;dito hasta un 30% o un 50%</h1></div>'); }
								else{
									echo ('<div class="hline"><h1>Reduce your total credit card payments by up to 30% to 50%</h1></div>'); 
								}
							break;
						}
					include('includes/map.php'); 
					include('includes/geo_form-'.$lang.'.php');
				}
			?>
		</div>
		<div class="bar l"></div>
		<div class="bar r"></div>
	</div>

	<div class="home-featured-bar"></div>
	<div class="home-featured">
		<div class="con">
			<?php 
				switch($currentPage){
					case (preg_match('/history.*/', $currentPage) ? true : false) :
						echo ('<p align="center"><img class="news-logos" src="geo/img/news-logos-'.$lang.'.png"/></p>');
						break;
					default:
						echo('<p align="center"><img class="news-logos" src="geo/img/bank-logos-'.$lang.'.png"/></p>');
						break;
				}
			?>
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
		<div class="con">
			<?php
			switch($currentPage){
				case (preg_match('/local.*/', $currentPage) ? true : false) :
					default:
						include('pagecontent/geo_home-'.$lang.'.php');
					break;
				case (preg_match('/history.*/', $currentPage) ? true : false) :
					break;
				case (preg_match('/questions.*/', $currentPage) ? true : false) :
					break;
				case (preg_match('/estimator.*/', $currentPage) ? true : false) :
					break;	
				case (preg_match('/clients.*/', $currentPage) ? true : false) :
					include('pagecontent/geo_casestudy.php');
					break;
			}
			?>	
		</div>
	</div>

	<?php 
	if($pageType == "thanks" || $pageType == "clients"){
		//show nothing
		}else{ include('pagecontent/geo_testimonials-'.$lang.'.php'); }
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
			switch($lang){
				case ('en'):
				default:
					echo('<p class="disclaimer">*This estimate compares paying your credit card debt on your own vs. the potential benefit of using a Debt Management Plan through completion. IT\'S NOT AN ACTUAL QUOTE. Estimate is based on 2.1% of your balance owed. Actual interest rates will vary by consumer and creditor - yours could be higher or lower. Consolidated Credit might be able to reduce your interest rates and late fees allowing you to pay off your credit card debt quicker (since more payments are applied to your principal balances, saving you lots of money in the long run). To complete the program, you must make on-time payments each month. Late or missed payments may cause your program to be cancelled and in that event, this estimate would not apply to you.</p>');
				break;
				case ('es'):
					echo('<p class="disclaimer">*Los estimados comparan las opciones de pagar sus tarjetas de crédito por su cuenta versus el beneficio potencial de usar y completar un programa de manejo de deudas. ESTO NO ES UN ESTIMADO REAL. El estimado está basado en el 2.1% del balance que usted debe. Las tasas de interés varían de acuerdo al consumidor y el acreedor - sus tasas y deudas pueden ser más altas o más bajas. Consolidated Credit puede lograr reducir sus tasas de interés y pagos atrasados permitiéndole de esta manera pagar sus deudas de tarjetas de crédito más rápidamente (ya que los pagos irán en mayor proporción a reducir el capital y no al pago de interés, lo cual le ahorrará dinero a largo plazo). Para completar el programa, usted deberá hacer un único pago al mes. Los pagos tardíos o que no haga, pueden causar que el programa sea cancelado y si este es el caso, el presente estimado, no podrá ser aplicado a usted.</p>');
				break;
			}
			echo('<div class="socialContainer">
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
		if($pageType == "clients"){
			switch($lang){
				case ('en'):
				default:
					echo('<p class="disclaimer">*Current plan uses our historical average interest rate of all our customers prior to joining a debt management plan; monthly payment is based upon 2.5% of the customer’s total outstanding debt. Years to pay off and interest accumulated assume no additional charges, no changes in interest rates and no late fees being assessed.</p>');
				break;
				case ('es'):
					echo('<p class="disclaimer">*El plan actual utiliza el promedio histórico de las tasas de interés de todos nuestros clientes antes de que participen en el programa de manejo de deudas; el pago mensual es basado en el 2.5% del total adeudado por el cliente. El lapso en años para cancelar la deuda y los intereses acumulados no toman en cuenta cargos adicionales, tampoco se toman en cuenta cambios en las tasas de interés y cargos o penalidades por atrasos en los pagos.</p>');
				break;
			}
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
		</address>
		</span>
		
		<span class="corner t r"></span>
		<span class="corner t l"></span>
		<div class="bar l"></div>
		<div class="bar r"></div>
		<div class="grad"></div>
	</div>
	</footer>
	
	<div id="dmp_scrolling_leads"></div>
	
	<?php if($lang=="es"){echo '<script type="text/javascript" src="geo/scripts/scrolling_leads-'.$lang.'.js"></script>';}
		else{echo '<script type="text/javascript" src="geo/scripts/scrolling_leads-'.$lang.'.js"></script>';}
	?>
	
	<script src="https://tracking.aimediagroup.com/aipx_secure.js" type="text/javascript"></script>
	<script type="text/javascript">
		// for domain gus-lp.aiprx.consolidatedcredit.org
		var cid = "";
		_setAitrkCookie("WICOCdEC4LHTtrECWc");
	</script>
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5189530"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5189530&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</body>
</html>