<!--div class="history" id="history"-->
<?php if($lang=='es'){echo '<div class="history hline">
		<h1>Consolidated credit tiempo y experiencia comprobada</h1>
		<p>Consolidated Credit Counseling Services ha ayudado a más de 5 millones de personas a ahorrar miles de dólares con sus deudas de tarjetas de crédito desde que fue fundada hace más de 20 años atrás. Nuestra misión, como una de las agencias de consejería de crédito más grande del país es la de ayudarlo con un plan que se ajuste a sus  circunstancias financieras futuras y actuales.</br>
		</br>Llámenos a cualquier momento al <a href="tel:'.str_replace("-", "", $thePhoneNumber).'" class="ShowPhoneNumber phone-only" >'.$thePhoneNumber.'</a> para recibir un análisis de deudas y presupuesto completamente gratis y personalizado. Estamos listos para trabajar con usted.</p></br>
	</div>';
	}
	else{echo '<div class="history hline">
		<h1>Time Tested. Customer Trusted. Consolidated Credit.</h1>
		<p>Consolidated Credit Counseling Services has helped more than 5 million people save thousands of dollars on their credit card debt since our conception over 20 years ago.</br>
		</br>Our mission, as one of the Nations largest registered credit counseling agencies, is to help you develop a customized program that’s right for your current and future financial circumstances.</br>
		</br>Call us anytime at <a href="tel:'.str_replace("-", "", $thePhoneNumber).'" class="ShowPhoneNumber phone-only" >'.$thePhoneNumber.'</a> to receive  a Free confidential personalized Budget & Debt Analysis. We look forward to working with you.</p></br>
	</div>';
	} 
?>