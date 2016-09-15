<?php
require_once ('includes/Mobile_Detect.php');
$detect = new Mobile_Detect;
include('includes/pageSettings.php'); 
?>
<?php
switch($currentPage){
//define content for page
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title>Consolidated Credit Counseling – Debt Counseling, Debt Consolidation</title>
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
<link type="text/css" href="cccs.css" rel="stylesheet"/>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/jquery.sudoSlider.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<?php //include('includes/headerScripts.php');?>
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
<body style="background#ccc">


<?php //include('includes/bodyScripts.php');?>

<form action="submit.php" method="post" id="contactform" class="form-horizontal" style="width:400px; background:#fff; position:relative; margin:0px auto;">
<fieldset>
			
           <input type="hidden" name="SuccessURL" value="thanks.php" />   
         


			<h3>Tell us about yourself</h3>
			<p align="center">
			<input class="form-control" type="text" name="firstname" value="" placeholder="First Name*" required/>
			<input class="form-control"  type="text" name="lastname" value="" placeholder="Last Name*" required />
			<input class="form-control"  type="email" name="email" value="" placeholder="Contact Email*" required/>
			<input type="hidden" name="country" value="usa" />
			</p>
			<div class="stateContainer">
				<select  class="form-control" name="state" required>
					<option value=""  selected >State*</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
				</select>
			</div>
			<input class="form-control"  type="text" name="debtamount" value="" placeholder="Debt Amount" />
			<input class="form-control"  type="tel" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" name="phone" value="" placeholder="Contact phone*" required/>
			 <label class="checkbox-inline">
			<input type="radio" name="xcx" value="_cell" checked="true" />Cell
			<input type="radio" name="xcx" value="_home" />Home
			<input type="radio" name="xcx" value="_work" />Work
			<br/>testing stuff <br/>
			    <input type="radio" name="phonetype" value="_cell" required />Cell
				<input type="radio" name="phonetype" value="_home" />Home
				<input type="radio" name="phonetype" value="_work" />Work
				</label>
			
			</p>
			<p align="center">
				<button type="submit" class="btn btn-primary"/>Get Help Now </button>
			</p>
				</fieldset>
		
      </form>

</body>
</html>