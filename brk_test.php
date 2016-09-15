<?php
/*
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
*/

//require_once ('includes/Mobile_Detect.php');
//$detect = new Mobile_Detect;
//include('includes/pageSettings.php'); 	

if(preg_match('/(?i)msie [8]/',$_SERVER['HTTP_USER_AGENT'])){
   //if IE<=8
   $device = 'ie8';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<?xml version="1.0" encoding="UTF-8"?>
<html>
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <!meta name="HandheldFriendly" content="true" />
    <!meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <title>Berkeley College</title>
    
    <!-- BEGIN CSS links -->
    <!--link href="css/LP-responsive.css" rel="stylesheet" type="text/css" />
    
    <!--link href="css/LP-2014-redesign-styles.css" rel="stylesheet" type="text/css" /-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <!-- END CSS links -->
    
    
    <!--style type="text/css">
		.required { display:none }
		.navTab { padding: 0 0 0 2.5em}
		#copyColumn li {line-height: 1.5;}

		@media only screen and ( max-width: 480px ) {
			.nav { display: none; }
			}
	</style-->
    
    <!-- Internet Explorer specific styles -->
    <!--[if IE]>
    <style type="text/css"> 
    /* place css fixes for all versions of IE in this conditional comment */
    #tabSlant {
    	display: none;
    }
    
    p.disclaimer {
    	margin-top: -20px;
    }
    
    </style>
    <![endif]-->
	
	
	<script language="JavaScript" type="text/javascript">
	<!--
	
	window.history.forward(1);
	
	function allowOnlyDigits(theEvent) {
		var charCode = (theEvent.which) ? theEvent.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57)) { return false; } else { return true; }
	}
	
	function checkPhone(theEvent) {
		var charCode = (theEvent.which) ? theEvent.which : event.keyCode
		
		if ( document.InfoReqForm.phone.value.length < 1 ) {
			if (charCode > 31 && (charCode < 50 || charCode > 57)) { return false; } else { return true; } // No 0 or 1 for first digit or non-digit.
		}
		else {
			if (charCode > 31 && (charCode < 48 || charCode > 57)) { return false; } else { return true; } // no non-digit.
		}
	}
	
	function CheckCampus(field) {
		if(field.value=="EMPTY" || field.selectedIndex == 0) {
			alert("You must enter a Campus Preference");
			field.focus();
			return false;
		}
		
		return true;
	}
	//-->
    </script>
    
  </head>
  
  <body ONLOAD="document.InfoReqForm.firstname.focus();">
  	<!-- BEGIN .container -->
    <div class="container">
      
      <!-- BEGIN .header -->
      <div class="header">
      	<!-- HEADER CONTENT goes here -->
        
        <!-- END HEADER CONTENT -->
      </div><!-- END .header -->
      
      
      
      <!-- NAV MENU -->
      <!-- BEGIN .nav -->
      <div class="nav">
      <!--
      	<div class="navTab" id="tabSlant" style="border-right: none; padding-right: 48px;">
        	<a href="StudentExp.asp"></a>
        </div>
        
        <div class="navTab" id="tabSlant">
        	<a href="Locations.asp"></a>
        </div>
        
        <div class="navTab" id="tabSlant">
       	<a href="WhyBerk.asp"></a></div>
        -->
        
        <div class="navTab" id="tabSlant" style="border: none; width: 100%;">
			<a style="color: #debe67;">
				<h3 style="margin: 2px;">Interior Design Workshop</h3>
			</a>
		</div>
        
        <!--
        <div class="navTab" id="tabSlant" style="border: none;"></div>
        
        -->
      
      </div><!-- END .nav -->
      <!-- END NAV MENU -->
      
      
      <!-- MAIN CONTENT CONTAINER -->
      <!-- BEGIN .content -->
      <div class="content" style="background: url('img/2015-LP-IDW.jpg') no-repeat;">
        <div id="copyColumn">
       	<!-- COPY CONTENT on right-hand side goes here -->
       	<h2>A hands-on workshop…
       	  and a look<br />
       	  at the future of interior design </h2>
        <p style="display:block;"><span style="display:block"><strong>Saturday, May 2 • 9:00 am – 3:00 pm (Lunch will be served)</strong></span></p>
        <p style="display:block;"><span style="display:block"><strong>Berkeley College, 44 Rifle Camp Road, Woodland Park, NJ </strong></span></p>
        <p style="display:block;"><span style="display:block; width:90%; margin-top: 20px">Sustainable design is the fastest growing segment of our industry because it focuses on being environmentally responsible and living healthy. This workshop will look at how interior design has progressed from traditional to modern sustainable designs.</span></p>
        <p style="display:block;"></p>
        <ul style="width:320px;">
          <p>As you work on a project to renovate a Victorian home, you'll learn about:</p>
          <li>How sustainable design focuses on being environmentally responsible and living healthy</li>
          <li>How interior design has progressed </li>
          <p>Presented by members of the Berkeley College Interior Design faculty, including TV personality (and former Berkeley student) <strong>Vanessa DeLeon</strong>, you'll also hear about: </p>
          <li style="line-height:16px;">What's involved in beginning a career in interior design</li>
          <li>The types of firms that hire interior designers, and more </li>
        </ul>
        <p style="display:block; width:330px"><strong>Seating is limited for this fun, informative hands-on workshop. 
          To reserve your place, submit this form today! </strong></p>
        <!-- END #copyColumn -->      	</div>
        <div id="formColumn">
        <div id="formWrap">
        
        <!-- Mobile only copy -->
              <p class="mobile-only mobile-copy">A hands-on workshop… and a look at the future of interior design! 
<br><br>Saturday, May 2 • 9:00 am – 3:00 pm<br>(Lunch will be served)
<br>Berkeley College, 44 Rifle Camp Road, Woodland Park, NJ
<br><br>Seating is limited for this fun, informative hands-on workshop. To reserve your place, submit this form today!</p>
			  <!-- END Mobile only copy -->
        
        
              <!-- FORM CONTENT on right-hand side goes here -->
              <p class="intro">Take the first step toward a brighter future! Complete the short form below.</p> 
              </p>        
              
		
<FORM NAME="LeadImportForm" ACTION="brk_submit.php" METHOD="POST">
<TABLE ALIGN="center">
<TR>
<TD>First Name</TD><TD>
<INPUT TYPE="TEXT" NAME="firstname"
MAXLENGTH=30> <sub><b>30</b></sub> required<BR>
</TD>
</TR><TR>
<TD>Last Name</TD><TD>
<INPUT TYPE="TEXT" NAME="lastname"
MAXLENGTH=30> <sub><b>30</b></sub> required<BR>
</TD>
</TR><TR>
<TD>Address 1</TD><TD>
<INPUT TYPE="TEXT" NAME="address1"
MAXLENGTH=55> <sub><b>55</b></sub> required<BR>
</TD>
</TR><TR>
<TD>City</TD><TD>
<INPUT TYPE="TEXT" NAME="city"
MAXLENGTH=30> <sub><b>30</b></sub> required<BR>
</TD>
</TR><TR>
<TD>State</TD><TD>
<INPUT TYPE="TEXT" NAME="state"
MAXLENGTH=2> <sub><b>2</b></sub> required<BR>
</TD>
</TR><TR>
<TD>Zip</TD><TD>
<INPUT TYPE="TEXT" NAME="zip"
MAXLENGTH=5> <sub><b>5</b></sub> required<BR>
</TD>
</TR><TR>
<TD>E-mail</TD><TD>
<INPUT TYPE="TEXT" NAME="email"
MAXLENGTH=70> <sub><b>70</b></sub> required<BR>
</TD>
</TR>
<TR>
<TD>Military</TD><TD>
<input type="checkbox" name="military" value="1" />
</TD>
</TR>
</TABLE>
</FONT>

</td><td width="48%" align="left" valign="top">

<TABLE>
<TR>
<TD COLSPAN=2>&nbsp;</TD>
</TR><TR>
<TD>&nbsp;</TD>
<TD>At least 1 valid phone number is required.</TD>
</TR><TR>
<TD>Phone</TD><TD>
<INPUT TYPE="TEXT" NAME="phone"
MAXLENGTH=10> <sub><b>10</b></sub> 10 digits required<BR>
</TD>
</TR><TR>
<TD>Phone Cell</TD><TD>
<INPUT TYPE="TEXT" NAME="phonecell"
MAXLENGTH=10> <sub><b>10</b></sub> 10 digits required<BR>
</TD>
</TR><TR>
<TD COLSPAN=2>&nbsp;</TD>
</TR><TR>
<TD>Grad Year</TD><TD>
<INPUT TYPE="TEXT" NAME="gradyear"
MAXLENGTH=4> <sub><b>4</b></sub> numeric only<BR>
</TD>
</TR><TR>
<TD>Campus</TD><TD>
<INPUT TYPE="TEXT" NAME="campus"
MAXLENGTH=3> <sub><b>3</b></sub> campus code<BR>
</TD>
</TR><TR>
<TD>Source 1</TD><TD>
<INPUT TYPE="TEXT" NAME="src1"
MAXLENGTH=3> <sub><b>3</b></sub> vendor 3 character i.d.<BR>
</TD>
</TR><TR>
<TD>Vendor Lead</TD><TD>
<INPUT TYPE="TEXT" NAME="vendorlead"
MAXLENGTH=20> <sub><b>20</b></sub> vendor's lead number<BR>
</TD>
</TR><TR>
<TD>Inr1</TD><TD>
<INPUT TYPE="TEXT" NAME="inr1"
MAXLENGTH=3> <sub><b>3</b></sub> program of interest code<BR>
</TD>
</TR><TR>
<TD>Comments</TD><TD>
<INPUT TYPE="TEXT" NAME="comments"
MAXLENGTH=66> <sub><b>66</b></sub><BR>
</TD>
</TR><TR>
<TD>Password</TD><TD>
<INPUT TYPE="PASSWORD" NAME="password"
MAXLENGTH=12> <sub><b>12</b></sub> required<BR>
</TD>
</TR>


<TR>
<TD>&nbsp</TD>
<TD>
<BR><INPUT TYPE="SUBMIT" VALUE="Submit">
</TD>
</TR>
</TABLE>
</FORM>
    
<!-- begin Source Code input --> 
<script>
	// Input Source Code in between the quotes after .value =
	// ex: .value = 'WEB';
	document.getElementById('srcCode').value = 'YB2';

		//Input Program of Interest value
		//ex: .value = "AC"
		document.getElementById('interestField').value = 'ID';
</script>
   
<p class="disclaimer">Berkeley College is pleased to provide you with additional information about the college and its programs. When you press the <em>submit</em> button, you give us permission to use either direct-dialed, autodialed and/or pre-recorded telemarketing to call or text you at the phone number you provided. You are not required to provide this permission as a condition of purchase.</p>
              
              <!-- END FORM CONTENT -->
          </div><!-- END #formWrap -->
        </div><!-- END #formColumn -->
        
        
        <img class="logo" src="img/berkeley-logo-white-525x82.png" />
      </div><!-- END .content -->
      <!-- END MAIN CONTENT CONTAINER -->
      
      <!-- BEGIN .footer -->
      <div class="footer">
          <!-- FOOTER CONTENT goes here -->
          <a class="privacy" href="https://www.berkeleycollege.edu/Privacy_Policy/index.htm" target="_blank">Privacy Policy</a>
          
          <p class="copyright">Copyright &copy; 2015 Berkeley College</p>
<br />
<br />
<p class="footer-disclaimer">Berkeley College reserves the right to add, discontinue, or modify its programs and policies at any time. Modifications subsequent to the original publication of this information may not be reflected here. For the most up-to-date information, please visit <a href="http://berkeleycollege.edu" target="_blank">BerkeleyCollege.edu</a>. For more information about Berkeley College graduation rates, the median debt of students who completed programs, and other important disclosures, please visit <a href="http://berkeleycollege.edu/disclosures" target="_blank">BerkeleyCollege.edu/disclosures.</a></p>
<br/>
          <!-- END FOOTER CONTENT -->
      </div><!-- END .footer -->
      
  </div><!-- END .container -->
        


<!-- Begin Google tracking code -->
<!--

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
_uacct = "UA-244858-1";
urchinTracker();
</script>

-->
<!-- end Google tracking code -->


<!-- Site Improve tracking script -->
<!--

<script type="text/javascript">
/*<![CDATA[*/
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//us1.siteimprove.com/js/siteanalyze_10949.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>

-->
<!-- end Site Improve tracking script -->

<!-- Begin Ai Media tracking code -->
<script src="https://tracking.aimediagroup.com/aipx_berkeley.js" type="text/javascript"></script>
<script type="text/javascript">
_startSecureTrack("Oo0MQmqTJ4ZRX79CU0");
</script>
<!-- end Ai Media tracking code -->

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 979322548;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">s</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/979322548/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- end Google Remarketing Tag -->


<!-- get jQuery from BC Server -->
<script src="js/jquery-v1-11-1.js"></script>

<!-- Reference location swapper script -->
<script src="js/location_options_swapper.js"></script>
<!-- end location swapper script -->

  </body>
</html>
