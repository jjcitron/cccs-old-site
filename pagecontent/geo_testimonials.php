<div class="testimonials">
	<div class="con">
	
		<h1><?php echo $tTitle; ?></h1>
		<div class="testimonialWrapper">
	
			<div class="testimonial t1">
				<div class="testimonialImg">
                    <div class="testimonialAsterisk">*</div>
					<?php echo $tImg1; ?>
                </div>
                <div class="source ">
					<?php echo $tName1; ?>
                </div>
                <p><?php echo $tQuote1; ?></p>
			</div>
			
			<div class="testimonial t2">
				<div class="testimonialImg">
                    <div class="testimonialAsterisk">*</div>
					<?php echo $tImg2; ?>
                </div>
                <div class="source">
					<?php echo $tName2; ?>
                </div>
                <p><?php echo $tQuote2; ?></p>
			</div>
			
			<div class="testimonial t3">
				<div class="testimonialImg"><img src="geo/img/help.png"></div>
				<ul class="testimonial-list">
					<li>Estimate Your New Credit Card Payment by entering Your Total Credit Card Balance</li>
				</ul>

				<form class="calcForms" action="formDebt" name="formDebt" id="t-calc">
					<span class="currency"><input type="text" required="" placeholder="Amount of Debt" name="formDebtAmount" class="formDebtInput" id="formDebtAmount"></span>
					<input type="submit" class="online" name="submitDebt" value="See Savings" id="submitDebt">
				</form>
			</div>
			
		</div><!--testimonialWrapper-->
		
		<div class="testimonialDisc">*All testimonials are from our clients. We respect the privacy of our clients. At their request, some of the pictures depicted may not be the actual client giving the recommendation.</div>
			
		<div class="custom-phone">
			<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>
			<span>Priority Assistance</span>
		</div>
		
	</div>
</div>