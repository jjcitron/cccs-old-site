
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
				<div class="testimonialImg"><img src="geo/img/help-es.png"></div>
				<ul class="testimonial-list">
					<li>Estime su nuevo pago de tarjetas de crédito al ingresar el monto total de su deuda de tarjetas de crédito</li>
				</ul>

				<form class="calcForms" action="formDebt" name="formDebt" id="t-calc">
					<span class="currency"><input type="text" required="" placeholder="Monto de Deuda" name="formDebtAmount" class="formDebtInput" id="formDebtAmount"></span>
					<input type="submit" class="online" name="submitDebt" value="Ver Ahorros" id="submitDebt">
				</form>
			</div>
			
		</div><!--testimonialWrapper-->
		
		<div class="testimonialDisc">*Todos los testimonios son de nuestros clientes. Nosotros respetamos la privacidad de nuestros clientes. A petición de ellos, algunas de las fotos que estamos usando, quizás no pertenezcan al cliente que dio la recomendación.</div>
			
		<div class="custom-phone">
			<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>
			<span>Asistencia Inmediata</span>
		</div>
		
	</div>
</div>