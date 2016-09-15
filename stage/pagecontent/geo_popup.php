<?php 
if($lang=="es"){echo '							
	<div id="debtResult"></div>
	<div id="debtSavings">
		<div class="close">
			<a href="javascript:void();" id="debtSavingsClose">
				<img src="geo/img/button-close.png" />
			</a>
		</div>
		<div class="debtSavingsLeft">
			<h2>Yusted puede ahorrar! <br/>Llamada <span>'.$thePhoneNumber.'</span></h2>
			<p>Con esta cantidad de la deuda, que pagaría alrededor $<span id="debtSavingsAmount"></span> un mes en un plan de gestión de la deuda.</p>
			<a href="#theForm" class="debtConsult">Comienza Hoy</a>
		</div>
		<div class="debtSavingsGirl"><img src="geo/img/debtSavingsGirl.png" /></div>
		<p class="discSmall">Este cálculo compara el pago de su deuda de tarjeta de crédito por su cuenta contra el beneficio potencial del uso de un plan de gestión de la deuda hasta su terminación. No es una cita real. Estimación se basa en el 2,1% de su saldo adeudado. las tasas de interés reales pueden variar por el consumidor y el acreedor - la suya podría ser mayor o menor. Consolidated Credit podría ser capaz de reducir sus tasas de interés y tasas finales que le permite pagar su deuda de tarjetas de crédito más rápido (ya que más pagos se aplican a sus principales saldos, que le ahorra un montón de dinero en el largo plazo). Para completar el programa, debe realizar los pagos a tiempo cada mes. pagos atrasados o no pueden hacer que su programa sea cancelado y en tal caso, esta estimación no se aplicarían a usted.</p>
	</div>';
	}else{echo '							
	<div id="debtResult"></div>
	<div id="debtSavings">
		<div class="close">
			<a href="javascript:void();" id="debtSavingsClose">
				<img src="geo/img/button-close.png" />
			</a>
		</div>
		<div class="debtSavingsLeft">
			<h2>You can save! <br/>Call <span>'.$thePhoneNumber.'</span></h2>
			<p>With this amount of debt, you\'d pay around $<span id="debtSavingsAmount"></span> a month on a Debt Management Plan.</p>
			<a href="#theForm" class="debtConsult">Get Started Today</a>
		</div>
		<div class="debtSavingsGirl"><img src="geo/img/debtSavingsGirl.png" /></div>
		<p class="discSmall">This estimate compares paying your credit card debt on your own vs. the potential benefit of using a Debt Management Plan through completion. IT\'S NOT AN ACTUAL QUOTE. Estimate is based on 2.1% of your balance owed. Actual interest rates will vary by consumer and creditor - yours could be higher or lower. Consolidated Credit might be able to reduce your interest rates and late fees allowing you to pay off your credit card debt quicker (since more payments are applied to your principal balances, saving you lots of money in the long run). To complete the program, you must make on-time payments each month. Late or missed payments may cause your program to be cancelled and in that event, this estimate would not apply to you.</p>
	</div>';
	}
?>