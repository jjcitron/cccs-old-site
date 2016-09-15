<?php if($lang=='es'){echo '<div class="estimator hline" id="estimator">
	<h1>Cómo se pueden comparar los pagos hechos a través de un programa de consejería de crédito</h1>
	<p>Típicamente, las personas con más deudas pagan altos intereses y hacen pagos mensuales más altos que una persona con buen crédito y poca deuda. Usted conoce cuanto paga mensualmente por sus deudas. Ahora déle un vistazo a lo que pagaría un cliente típico si este estuviera en un programa de manejo de deudas. ¡Ingrese la deuda total de sus tarjetas de crédito y chequee los resultados!</p></br>
	<form class="calcForms middle" id="e-calc" name="formDebt" action="formDebt" >
		<div class="formTitle"><h2>Ingrese el total de sus deudas de tarjetas de crédito y obtenga un estimado del pago</br>que obtendría con el programa de manejo de deudas</h2></div>
		<span class="currency"><input type="text" required="" placeholder="Monto de la deudas" name="formDebtAmount" class="formDebtInput" id="formDebtAmount"/></span>
		<input type="submit" class="online" name="submitDebt" value="Ahorros" id="submitDebt"/>
	</form>
</div>';
}else{echo '<div class="estimator hline" id="estimator">
	<h1>How do Credit Counseling Payments compare?</h1>
	<p>Typically, individuals with more debt pay higher interest rates and have higher monthly payments than individuals with good credit and low debt. You know what your monthly payment is. Now take a look and see what a typical client would pay if they were on a debt management program. Enter your current credit card debt now and see the results!</p></br>
	<form class="calcForms middle" id="e-calc" name="formDebt" action="formDebt" >
		<div class="formTitle"><h2>Estimate your new card payment by entering your total credit card balance</h2></div>
		<span class="currency"><input type="text" required="" placeholder="Debt Amount" name="formDebtAmount" class="formDebtInput" id="formDebtAmount"/></span>
		<input type="submit" class="online" name="submitDebt" value="See Savings" id="submitDebt"/>
	</form>
</div>';
}
?>