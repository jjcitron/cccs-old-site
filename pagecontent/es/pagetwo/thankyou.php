
<?php
include($_SERVER['DOCUMENT_ROOT'].'/includes/pageSettings.php');
?>

<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <title>Gracias</title>
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="robots"  content="" />
    <meta charset="UTF-8"> 
    <meta name="viewport"  content="width=device-width, initial-scale=1, maximun-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link href="content/Common.css" rel="stylesheet" type="text/css" />
    <link href="content/themes/Landing-Page-Campaign/Campaign.css" rel="stylesheet" type="text/css" />
    <link type="image/x-icon" href="content/themes/base/images/favicon.ico" rel="shortcut icon">
    <script src="Scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery.tooltipster.min.js" type="text/javascript"></script>
    <script src="Scripts/placeholder.js" type="text/javascript"></script>
    <script src="Scripts/CommonMarketingSpanish.js?ver=1.0" type="text/javascript"></script>
    <script src="content/themes/Landing-Page-Campaign/Campaign.js" type="text/javascript"></script>
    <script src="http://tools.consolidatedcredit.org/Javascript905/LoadScript?partnerid=2106" type="text/javascript"></script>
    <!-- Begin Google Analytics-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-367902-28', 'auto');
    ga('send', 'pageview');
 
</script>
<!-- End Google Analytics -->

<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return; n = f.fbq = function () {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        }; if (!f._fbq) f._fbq = n;
        n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
        t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
    } (window,
    document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1471387589840642');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=1471387589840642&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->


</head>
<body>
    <!-- begin tracking scripts in body -->
<!-- end tracking scripts in body -->

    <link href="content/themes/ppc-sindeudas/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
<meta name="robots" content="nofollow, noindex">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>
    $(function () {
        /* adds validation method for simple 5 digit number format */
        jQuery.validator.addMethod('zipcheck', function (value, element) {
            return value.match(/^[0-9]{5}$/);
        }, 'Por favor, entre un código postal.');

        $("#zip").rules("add", {
            zipcheck: true
        });

        $("#debtamount").rules("add", {
            digits: true
        });


        $('#opt_in').on('click', function () {
            $(this).val(this.checked ? true : false);

        });
    });
</script>
<div id="top">
    <div class="wrap"></div>
</div>
<div id="header">
    <div class="wrap">
        <div class="logo"><a href="http://espanol.consolidatedcredit.org/" class="logo-cc"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/logo.png" /></a>
        <div class="logo-cred"><img src="content/themes/ppc-sindeudas/logo-cred-2.png"/></div></div>
        <div class="phoneContainer">
        <div class="phoneIntro">Llámanos al</div>
        <div class="phone">   <span><?php echo $thePhoneNumber ?></span>
<script type="text/javascript">

    if ($(window).width() >= 641) {
        $(function () {
            setTimeout(function(){

                $(".ShowPhoneNumber").removeAttr("href");
            }, 
            2000);

        })
    }

</script>
</div>
        </div>
        <div class="block">
            <div class="topheader-left">
                <span>&iquest;Tienes deudas de tarjetas de cr&eacute;dito?</span>
                <span>Conozca las opciones disponibles que lo ayudarán <br />a eliminar sus deudas</span>
            </div>
            <div class="topheader-right">
                <div><span><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/bbba-logo.jpg"></span> <span>since 06/25/1998</span></div>
                <div class="social">
                    <a href="http://www.facebook.com/ConsolidarCredito" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-fc.png"></a> <a href="https://twitter.com/#!/ConsolidatedESP/" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-tw.png"></a> <a href="https://www.pinterest.com/consolidatedspa/" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-pt.png"></a> <a href="https://plus.google.com/b/100918713656573936496/100918713656573936496/posts" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-gp.png"></a> <a href="http://www.youtube.com/ConsolidatedEspanol" target="_blank"><img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/ico-yt.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block bl1">
    <div class="wrap"></div>
</div>

<div class="block bl2">
    <div class="wrap">
        <div class="steps">
          <div class="thankyouMsg hline">
          <h1>Hola, <?php echo $_COOKIE['firstname']; ?>!</h1>
            <p>Gracias por contactar a Consolidated Credit. Hemos ayudado a más de 5 millones de personas con necesidades similares a las suyas y estamos seguros de que podemos desarrollar un programa personalizado que se adapte a sus necesidades.</p>
            </br><p>En función de la información que usted nos suministró, estimamos que usted pagaría alrededor de <span class="phone-only">$ <?php echo $_COOKIE['savings'] ?></span> al mes si consolida la deuda de <span class="phone-only">$ <?php echo $_COOKIE['debtamount'] ?> </span> de tarjetas de crédito con nosotros.</p>
            </br><p>Un Consejero de Crédito Certificado se comunicará muy pronto con usted para iniciar su consulta. Cuando termine su consulta, usted podrá tendrá un plan concreto para liberarse de las deudas de una vez por todas. Si lo prefiere, puede llamarnos ahora mismo al <a class="phone-only" href="tel:'<?php str_replace("-", "", $thePhoneNumber) ?>'" class="ShowPhoneNumber"><?php echo $thePhoneNumber ?></a> y recibir atención inmediata.</p>
          </div>
        </div>
    </div>
</div>

<div class="block bl3">
    <div class="wrap">
    <div class="spacer"></div>
    </div>
</div>

<div class="block bl7">
    <div class="wrap">
        Consolidated Credit ha ayudado a m&aacute;s de <span>5 millones de personas </span> con sus problemas de deudas.

        <div class="testimonios">
        <div class="box box-01">
            <div>
                <p class="testimonio-text">“Consolidated Credit me ha salvado la vida. Estoy muy agradecida por toda su ayuda.”</p>
                <img src="content/themes/ppc-sindeudas/testimonios/01.jpg">
                <p class="author">- Johanna S.</p>
            </div>
        </div>

        <div class="box box-02">
            <div>
                <p class="testimonio-text">“Es maravilloso ver nuestros balances disminuir cada mes!. Gracias Consolidated Credit!”</p>
                <img src="content/themes/ppc-sindeudas/testimonios/02.jpg">
                <p class="author">- Agnes S.</p>
            </div>
        </div>

        <div class="box box-03">
            <div>
                <p class="testimonio-text">“¡Es un placer trabajar con Consolidated Credit y su servicio al cliente es genial!”</p>
                <img src="content/themes/ppc-sindeudas/testimonios/03.jpg">
                <p class="author">- S. Tapia.</p>
            </div>
        </div>

        <div class="box box-04">
            <div>
            <p class="testimonio-text">“¡Excelente servicio!. Estamos a punto de terminar el programa de manejo de deudas de Consolidated Credit. Nos salvó de la ruina financiera.”</p>
            <img src="content/themes/ppc-sindeudas/testimonios/04.jpg">
            <p class="author">- Eduardo W.</p>
            </div>
        </div>

        <div class="box box-05">
            <div>
                <p class="testimonio-text">“Consolidated credit me ayudó a saldar mis deudas y ahora puedo mantener mi  cabeza en alto porque, estoy pagando mis cuentas a tiempo. Gracias Consolidated Credit.”</p>
                <img src="content/themes/ppc-sindeudas/testimonios/05.jpg">
                <p class="author">- Angela W.</p>
            </div>
        </div>
        </div>

    </div>
</div>

<!-- <div class="block bl4">
    <div class="wrap"></div>
</div> -->

<div class="block bl5">
  <div class="wrap">
        <h2>Reduzca su pago total de tarjetas de crédito hasta un 30% o un 50%</h2>
        <img src="content/themes/ppc-sindeudas/educacion-financiera.jpg">
    <div class="bl5part2">
    <h3>Podemos ayudarte a ...</h3>  
        <ul>
          <li><strong>Eliminar</strong> tus deudas en un plazo de 36-60 meses</li>
          <li><strong>Consolidar</strong> tus deudas en un solo pago mensual</li>
          <li><strong>Reducir</strong> tus deudas de tarjetas de cr&eacute;dito</li>
          <li><strong>Bajar</strong> las tasas de inter&eacute;s</li>
          <li><strong>Evitar</strong> la bancarrota y Reconstruir tu Cr&eacute;dito</li>
        </ul>
    </div>
  </div>
</div>

<!-- <div class="block bl6">
    <div class="wrap"></div>
</div> -->



<div class="block bl8">
    <div class="wrap"></div>
</div>

<div class="block bl9">
    <div class="wrap">
        "¡Excelente servicio! Consolidated Credit me ha ayudado a consolidar mis cuentas en un sólo pago mensual con tasas de interés reducidas. ¡Realmente funciona!"
        <span>William M</span>
    </div>
</div>

<div class="block bl10">
    <div class="wrap"></div>
</div>

<!--<div class="block bl11">
  <div class="wrap">
         <img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/screen-news.png">
        <h2>Educaci&oacute;n Financiera </h2>
        <h3>Consolidated Credit en las noticias  y en la comunidad Latina</h3>
        <span>Consolidated Credit provee herramientas financieras en su sitio web, as&iacute; como a trav&eacute;s de columnas editoriales en Huffington VOCES, Univision y HolaCiudad.com. Haga click en los logos correspondientes para leer m&aacute;s. </span> 
  </div>
</div>-->


<div class="block bl11 daniel-rita">
    <div class="wrap">
    <h2>Educaci&oacute;n Financiera </h2>
    <h3>La historia de Daniel el gastador y Rita la ahorradora</h3>
        <a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-1_mi-primer-tarjeta-de-credito/">
        <div><figure><img src="content/themes/ppc-sindeudas/daniel-rita/EP01.png"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
        </a>

        <a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-2_mi-primer-estado-de-cuenta/">
        <div><figure><img src="content/themes/ppc-sindeudas/daniel-rita/EP02.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
        </a>

        <a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-3-pagar-la-universidad/">
        <div><figure><img src="content/themes/ppc-sindeudas/daniel-rita/EP03.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
        </a>
        
        <a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-4-robo-de-identidad/">
        <div><figure><img src="content/themes/ppc-sindeudas/daniel-rita/EP04.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
        </a>

        <a href="http://espanol.consolidatedcredit.org/daniel-y-rita/episodio-5-presupuesto-para-halloween/">
        <div><figure><img src="content/themes/ppc-sindeudas/daniel-rita/EP05.jpg"></figure><span class="text-img">Hacer clic para ver este episodio</span></div>
        </a>

    </div>
</div>

<div class="block bl12">
    <div class="wrap">
    </div>
</div>

<div class="block bl13">
    <div class="wrap">
    <p style="text-align: left;padding-left: 40px;padding-top: 10px;font-size: 1.2em;color: #6f6666;font-weight: 200;">Como lo vió:</p>
        <img src="content/themes/ppc-sindeudas/logo-telemundo-transparent.png" border="0"> <img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/hola-logo.png" border="0"> <img src="http://debtfree.consolidatedcredit.org/content/themes/ppc-sindeudas/univision-logo.png" border="0">
    </div>
</div>

<div class="block bl14">
    <div class="wrap"></div>
</div>

<div class="block bl15">
    <div class="wrap">
        <div class="links">
            <a href="http://www.consolidatedcredit.org/debt-analysis-spanish/userlogin/?partnerid=2106">Acceso Clientes </a> | <a href="http://espanol.consolidatedcredit.org/politica-de-privacidad/?partnerid=2106">Pol&iacute;tica de Privacidad</a> | <a href="http://espanol.consolidatedcredit.org/aprendizaje-sobre-deudas/?partnerid=2106">Aprendizaje sobre Deudas</a> | <a href="http://espanol.consolidatedcredit.org/quienes-somos/?partnerid=2106">Con&oacute;zcanos</a>
        </div>
        <div class="block foot">
            <div>
                <img src="content/themes/ppc-sindeudas/logos-footer.png">
            </div>
            <div>
                Copyright © Consolidated Credit Counseling Services, Inc. <br> Todos los derechos reservados.<br> 5701 West Sunrise Blvd. Fort Lauderdale, FL 33313
            </div>
        </div>
    </div>
</div>

<script>
    $stateOpt = $('select[id*="state"]');

    var first_option_removed = false;
    $stateOpt.change(function () {
        if (!first_option_removed) {
            if ($stateOpt.find("option:first").attr("value") == $stateOpt.val()) {
                $stateOpt.find("option[value='" + $stateOpt.val() + "']").remove();
                first_option_removed = true;
            }
        }
    });
</script>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 967159847;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://debtfree.consolidatedcredit.org//googleads.g.doubleclick.net/pagead/viewthroughconversion/967159847/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


    
        <!-- begin tracking scripts in footer before </BODY> tag -->

        <!-- AI marketing site wide tracking script, add to bottom of page in body tag -->
        <script src="https://tracking.aimediagroup.com/aipx_secure.js" type="text/javascript"></script>
        <script type="text/javascript">
            _startSecureTrack("WICOCdEC4LHTtrECWc");
        </script>
        <!-- AI marketing site wide end tag -->
        
        <!--  MouseFlow:Begin  -->
        <script type="text/javascript">
            var _mfq = _mfq || [];
            (function () {
                var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
                mf.src = "//cdn.mouseflow.com/projects/86351cc8-0e3a-4403-9e9a-b67705e6a4c1.js";
                document.getElementsByTagName("head")[0].appendChild(mf);
            })();

            _mfq.push(["setVariable", "error", "true"]);
            _mfq.push(["setVariable", "Failed Validations", "true"]);
        </script>
        <!--  MouseFlow:End  -->


        
        <!-- Formisimo tracking on all pages -->
        <script src="//cdn-static.formisimo.com/tracking/js/tracking.js"></script>
        <!-- Formisimo tracking  on all pages- END -->

        <!-- end tracking scripts in footer -->
</body>
</html>
