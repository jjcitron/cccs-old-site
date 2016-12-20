<?php 
include($_SERVER['DOCUMENT_ROOT'].'/includes/pageSettings.php');
?>
<!DOCTYPE html>
<html
<head>
	<title>Gracias</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <div class="container">
    	<div class="logo">
    		<img src="images/logo.png">
    	</div>
    	<div class="brands">
    		<img src="images/logo-cred.png">
    	</div>
        <div class="social">
        <a href="http://www.facebook.com/ConsolidarCredito" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-fc.png"></a> <a href="https://twitter.com/#!/ConsolidatedESP/" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-tw.png"></a> <a href="https://www.pinterest.com/consolidatedspa/" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-pt.png"></a> <a href="https://plus.google.com/b/100918713656573936496/100918713656573936496/posts" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-gp.png"></a> <a href="http://www.youtube.com/ConsolidatedEspanol" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-yt.png"></a>
        </div>
    	<div class="phone">
    		Llámanos al
    		<span><?php echo $thePhoneNumber ?></span>
    	</div>
    </div>	
</header>

<div class="banner-featured">
    <div class="container">
    	<div class="banner-img">
    		<img src="images/banner-header.jpg" class="banner-img-family" alt="¿Tienes deudas de tarjetas de crédito?">
    	</div>
    	<div class="banner-text">
    		<h1>¿Tienes deudas de
    		tarjetas de crédito?</h1>
    		<p>Conozca las opciones disponibles que lo ayudarán a eliminar sus deudas</p>
    	</div>
    </div>
</div>


<section class="home-form">
    <div class="container">

      <div class="steps">
        <div class="thankyouMsg hline">
        <h1>Hola, <?php echo $_COOKIE['firstname']; ?>!</h1>
          <p>Gracias por contactar a Consolidated Credit. Hemos ayudado a más de 5 millones de personas con necesidades similares a las suyas y estamos seguros de que podemos desarrollar un programa personalizado que se adapte a sus necesidades.</p>
          </br><p>En función de la información que usted nos suministró, estimamos que usted pagaría alrededor de <span class="phone-only">$ <?php echo $_COOKIE['savings'] ?></span> al mes si consolida la deuda de <span class="phone-only">$ <?php echo $_COOKIE['debtamount'] ?> </span> de tarjetas de crédito con nosotros.</p>
          </br><p>Un Consejero de Crédito Certificado se comunicará muy pronto con usted para iniciar su consulta. Cuando termine su consulta, usted podrá tendrá un plan concreto para liberarse de las deudas de una vez por todas. Si lo prefiere, puede llamarnos ahora mismo al <a class="phone-only" href="tel:'<?php str_replace("-", "", $thePhoneNumber) ?>'" class="ShowPhoneNumber"><?php echo $thePhoneNumber ?></a> y recibir atención inmediata.</p>
        </div>
      </div>

    </div>
</section>

<section class="testimonials">
	<div class="container text-center">
	        Consolidated Credit ha ayudado a m&aacute;s de <span>5 millones de personas </span> con sus problemas de deudas.
        <div class="testimonios">
        <div class="box box-01">
            <div>
                <p class="testimonio-text">“Consolidated Credit me ha salvado la vida. Estoy muy agradecida por toda su ayuda.”</p>
                <img src="images/testimonios/01.jpg">
                <p class="author">- Johanna S.</p>
            </div>
        </div>

        <div class="box box-02">
            <div>
                <p class="testimonio-text">“Es maravilloso ver nuestros balances disminuir cada mes!. Gracias Consolidated Credit!”</p>
                <img src="images/testimonios/02.jpg">
                <p class="author">- Agnes S.</p>
            </div>
        </div>

        <div class="box box-03">
            <div>
                <p class="testimonio-text">“¡Es un placer trabajar con Consolidated Credit y su servicio al cliente es genial!”</p>
                <img src="images/testimonios/03.jpg">
                <p class="author">- S. Tapia.</p>
            </div>
        </div>

        <div class="box box-04">
            <div>
            <p class="testimonio-text">“¡Excelente servicio!. Estamos a punto de terminar el programa de manejo de deudas de Consolidated Credit. Nos salvó de la ruina financiera.”</p>
            <img src="images/testimonios/04.jpg">
            <p class="author">- Eduardo W.</p>
            </div>
        </div>

        <div class="box box-05">
            <div>
                <p class="testimonio-text">“Consolidated credit me ayudó a saldar mis deudas y ahora puedo mantener mi  cabeza en alto porque, estoy pagando mis cuentas a tiempo. Gracias Consolidated Credit.”</p>
                <img src="images/testimonios/05.jpg">
                <p class="author">- Angela W.</p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="podemos-ayudarte">
    <div class="container">
    <p>Podemos ayudarte a ...</p>
        <div class="item">
        <img src="images/iconos/01.png" alt="Eliminar tus deudas en un plazo de 36-60 meses">
        <strong>Eliminar</strong> tus deudas en un plazo de 36-60 meses
        </div>
        <div class="item">
        <img src="images/iconos/02.png" alt="Consolidar tus deudas en un solo pago mensual">
        <strong>Consolidar</strong> tus deudas en un solo pago mensual</div>
        <div class="item">
        <img src="images/iconos/03.png" alt="Reducir tus deudas de tarjetas de crédito">
        <strong>Reducir</strong> tus deudas de tarjetas de crédito</div>
        <div class="item">
        <img src="images/iconos/04.png" alt="Bajar las tasas de interés">
        <strong>Bajar</strong> las tasas de interés</div>
        <div class="item">
        <img src="images/iconos/05.png" alt="Evitar la bancarrota y Reconstruir tu Crédito">
        <strong>Evitar</strong> la bancarrota y Reconstruir tu Crédito</div>
    </div>
</section>

<section class="orange">
    <div class="container">
        Reduzca su pago total de tarjetas de crédito hasta un 30% o un 50%
    </div>  
</section>

<section class="daniel-rita">
    <div class="container">
        <div class="episodios">
            <h2>Educación Financiera</h2>
            <h3>“La historia de Daniel el </br>gastador y Rita la ahorradora”</h3>
            <div class="thumb-ep">

<a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-1_mi-primer-tarjeta-de-credito/">
<div><figure><img src="images/daniel-rita/EP01.png"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
</a>
<a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-2_mi-primer-estado-de-cuenta/">
<div><figure><img src="images/daniel-rita/EP02.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
</a>
<a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-3-pagar-la-universidad/">
<div><figure><img src="images/daniel-rita/EP03.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
</a>
<a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-4-robo-de-identidad/">
<div><figure><img src="images/daniel-rita/EP04.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
</a>
<a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-5-presupuesto-para-halloween/">
<div><figure><img src="images/daniel-rita/EP05.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
</a>

            </div>
        </div>
        <div class="img-daniel-rita text-center">
            <a href="#"><button>Ver todos los episodios</button></a>
        </div>
    </div>
</section>


<section class="logos">
    <div class="container">
        <p>Cómo lo vió:</p>
        <img src="images/logos/logo-telemundo-transparent.png">
        <img src="images/logos/hola-logo.png">
        <img src="images/logos/univision-logo.png">
    </div>
</section>

<footer class="text-center">
    <div class="container">
        <div class="links">
        <a href="http://www.consolidatedcredit.org/debt-analysis-spanish/userlogin/?partnerid=2106">Acceso Clientes </a> | <a href="http://espanol.consolidatedcredit.org/politica-de-privacidad/?partnerid=2106">Política de Privacidad</a> | <a href="http://espanol.consolidatedcredit.org/aprendizaje-sobre-deudas/?partnerid=2106">Aprendizaje sobre Deudas</a> | <a href="http://espanol.consolidatedcredit.org/quienes-somos/?partnerid=2106">Conózcanos</a>
        </div>
    </div>
    <div class="container">
        <img src="images/logos/logos-footer.png" class="logos">
        <div class="copyright">
Copyright © Consolidated Credit Counseling Services, Inc. <br> Todos los derechos reservados.<br> 5701 West Sunrise Blvd. Fort Lauderdale, FL 33313
</div>
    </div>
</footer>

</body>
</html>
