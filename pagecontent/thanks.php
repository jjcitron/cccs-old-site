<?php

$top = '<div class="top"><p>Congratulations!<br/>You’ve just taken the first step to get free from your debt!</p></div>';
$mid = '<div class="mid"><p>
            One of our certified credit counselors will be in touch shortly to complete your
            Free Budget Analysis and answer any questions you have. For immediate assistance,
            call us at <span>'.$thePhoneNumber.'</span> to speak with a counselor during
            regular business hours.</p></div>';
$arrow = '';
	
$bottom = '<div class="bottom"><p style="padding-top:5px">
            Once we get in touch, the person you speak to will be your personal credit counselor
            for the rest of your journey out of debt with us. The first call will focus on getting
            the rest of the information we need to complete your Debt Analysis. You can get
            a head start by clicking the Continue Your Analysis button.</p>
			<p style="padding-top:5px">
            We are here to help, so please don’t hesitate to contact us with any questions or
            concerns you have. We’ll talk to you soon and look forward to helping you reach
            your goal to be debt-free.</p></div>';
			$footerText = '<p>For 20 years, Consolidated Credit Counseling Services has helped over 5 million people find solutions to their debt problems. Our exclusive FreedomQuest program can help pay bills and find options and solutions to your financial challenges.</br>Find debt consolidation options and real solutions to help your financial challenges. <span>Get help with your past due bills. Call today to speak to a debt consolidation specialist.</span></p>';
			
			$from='';
			if(isset($_GET['from'])){
			$from=$_GET['from'];
			$css='<link rel="stylesheet" href="pagecontent/'.$from.'.css" type="text/css"/>';
			}
			else{$css='';}

?>