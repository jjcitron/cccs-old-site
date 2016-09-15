<div class="testimonials study">
	<div class="con">
		<h1><?php echo $csTitle; ?></h1>
		<div class="testimonialWrapper">
		
			<div class="testimonial study t1">
				<div class="testimonialImg study">
                    <div class="testimonialAsterisk">*</div>
					<?php echo $csImg1; ?>
                </div>
                <div class="source study">
					<?php echo $csName1; ?>
                </div>
                <p><?php echo $csQuote1; ?></p>	
					<?php echo $csTable1; ?>
			</div>
			
			<div class="testimonial study t2">
				<div class="testimonialImg study">
                    <div class="testimonialAsterisk">*</div>
					<?php echo $csImg2; ?>
                </div>
                <div class="source study">
					<?php echo $csName2; ?>
                </div>
                <p><?php echo $csQuote2; ?></p>
					<?php echo $csTable2; ?>
			</div>
			
			<div class="testimonial study t3">
				<div class="testimonialImg study">
                    <div class="testimonialAsterisk">*</div>
					<?php echo $csImg3; ?>
                </div>
                <div class="source study">
					<?php echo $csName3; ?>
                </div>
                <p><?php echo $csQuote3; ?></p>
					<?php echo $csTable3; ?>
			</div>

		</div>
		<div class="testimonialDisc">*All testimonials are from our clients. We respect the privacy of our clients. At their request, some of the pictures depicted may not be the actual client giving the recommendation.</div>
			
		<?php include('pagecontent/geo_estimator.php'); ?>
		
		<div class="custom-phone">
			<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>
			<script type="text/javascript">
				if ($(window).width() >= 1024){
					$(".ShowPhoneNumber").removeAttr("href");
				}
			</script>
			<span>Priority Assistance</span>
		</div>
		
	</div>
</div>