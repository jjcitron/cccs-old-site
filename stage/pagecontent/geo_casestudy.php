<script>
	$('#form, #mapCanvas, .mapTitle').hide();	
</script>

<article class="content">
	<?php echo $caseStudy1; ?>
	<?php include('pagecontent/geo_calc-'.$lang.'.php'); ?>
	<?php echo $caseStudy2; ?>
	<?php include('pagecontent/geo_calc-'.$lang.'.php'); ?>
	<?php echo $caseStudy3; ?>
	<?php include('pagecontent/geo_calc-'.$lang.'.php'); ?>
	<div class="clear"></div>
</article>
<div class="clear"></div>
<hr/>

<div class="custom-phone">
	<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>
	<span><?php if($lang=='es'){echo 'Asistencia Inmediata';}else{echo 'Priority Assistance';} ?></span>
</div>

