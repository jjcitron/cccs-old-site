<?php
include($_SERVER['DOCUMENT_ROOT'].'/includes/pageSettings.php');
$thankYouPage = $currentDir.'thankyou.php'

?>

<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <title>Consolidated Credit Counseling</title>
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="robots"  content="" />
    <meta charset="UTF-8" /> 
    <meta name="viewport"  content="width=device-width, initial-scale=1, maximun-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link href="content/Common.css" rel="stylesheet" type="text/css" />
    <link href="content/themes/Landing-Page-Campaign/Campaign.css" rel="stylesheet" type="text/css" />
    <link type="image/x-icon" href="content/themes/base/images/favicon.ico" rel="shortcut icon">
    <script src="../../../js/modernizr.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>
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
            <div class="st-col1">
                <h2>3 Simples Pasos:</h2>
                <ul>
                    <li>Crea tu an&aacute;lisis de deuda gratis.</li>
                    <li>Recibe nuestras opciones de consolidaci&oacute;n. </li>
                    <li>Disminuye tus pagos mensuales.</li>
                </ul>
            </div>
            <div class="st-col2">
                <h1>Obt&eacute;n tu consulta de deuda gratis, y analiza tus opciones</h1>
                <form class="formsteps" usetooltips="false" method="post" id="form">
                    <div class="col1">
                        <div>
                            <h3>Correo Electrónico</h3>
                            <input type="text" id="email" name="email" />
                        </div>
                        <!--<div>
                            <h3>Confirma tu email</h3>
                            <input name="" type="text">
                        </div>-->
                        <div class="subcol1">
                            <div>
                                <h3>Debo menos de: </h3>
                                
                                <select id="debtamount" name="debtamount">
                                        <option value="999">Menos de $1,000</option> 
                                        <option value="1000">$1,000.00</option> 
                                        <option value="1500">$1,500.00</option> 
                                        <option value="2000">$2,000.00</option> 
                                        <option value="2500">$2,500.00</option> 
                                        <option value="3000">$3,000.00</option> 
                                        <option value="3500">$3,500.00</option> 
                                        <option value="4000">$4,000.00</option> 
                                        <option value="4500">$4,500.00</option> 
                                        <option value="5000">$5,000.00</option> 
                                        <option value="5500">$5,500.00</option> 
                                        <option value="6000">$6,000.00</option> 
                                        <option value="6500">$6,500.00</option> 
                                        <option value="7000">$7,000.00</option> 
                                        <option value="7500">$7,500.00</option> 
                                        <option value="8000">$8,000.00</option> 
                                        <option value="8500">$8,500.00</option> 
                                        <option value="9000">$9,000.00</option> 
                                        <option value="9500">$9,500.00</option> 
                                        <option value="10000">$10,000.00</option> 
                                        <option value="10500">$10,500.00</option> 
                                        <option value="11000">$11,000.00</option> 
                                        <option value="11500">$11,500.00</option> 
                                        <option value="12000">$12,000.00</option> 
                                        <option value="12500">$12,500.00</option> 
                                        <option value="13000">$13,000.00</option> 
                                        <option value="13500">$13,500.00</option> 
                                        <option value="14000">$14,000.00</option> 
                                        <option value="14500">$14,500.00</option> 
                                        <option value="15000">$15,000.00</option> 
                                        <option value="15500">$15,500.00</option> 
                                        <option value="16000">$16,000.00</option> 
                                        <option value="16500">$16,500.00</option> 
                                        <option value="17000">$17,000.00</option> 
                                        <option value="17500">$17,500.00</option> 
                                        <option value="18000">$18,000.00</option> 
                                        <option value="18500">$18,500.00</option> 
                                        <option value="19000">$19,000.00</option> 
                                        <option value="19500">$19,500.00</option> 
                                        <option value="20000">$20,000.00</option> 
                                        <option value="20500">$20,500.00</option> 
                                        <option value="21000">$21,000.00</option> 
                                        <option value="21500">$21,500.00</option> 
                                        <option value="22000">$22,000.00</option> 
                                        <option value="22500">$22,500.00</option> 
                                        <option value="23000">$23,000.00</option> 
                                        <option value="23500">$23,500.00</option> 
                                        <option value="24000">$24,000.00</option> 
                                        <option value="24500">$24,500.00</option> 
                                        <option value="25000">$25,000.00</option> 
                                        <option value="25500">$25,500.00</option> 
                                        <option value="26000">$26,000.00</option> 
                                        <option value="26500">$26,500.00</option> 
                                        <option value="27000">$27,000.00</option> 
                                        <option value="27500">$27,500.00</option> 
                                        <option value="28000">$28,000.00</option> 
                                        <option value="28500">$28,500.00</option> 
                                        <option value="29000">$29,000.00</option> 
                                        <option value="29500">$29,500.00</option> 
                                        <option value="30000">$30,000.00</option> 
                                        <option value="30500">$30,500.00</option> 
                                        <option value="31000">$31,000.00</option> 
                                        <option value="31500">$31,500.00</option> 
                                        <option value="32000">$32,000.00</option> 
                                        <option value="32500">$32,500.00</option> 
                                        <option value="33000">$33,000.00</option> 
                                        <option value="33500">$33,500.00</option> 
                                        <option value="34000">$34,000.00</option> 
                                        <option value="34500">$34,500.00</option> 
                                        <option value="35000">$35,000.00</option> 
                                        <option value="35500">$35,500.00</option> 
                                        <option value="36000">$36,000.00</option> 
                                        <option value="36500">$36,500.00</option> 
                                        <option value="37000">$37,000.00</option> 
                                        <option value="37500">$37,500.00</option> 
                                        <option value="38000">$38,000.00</option> 
                                        <option value="38500">$38,500.00</option> 
                                        <option value="39000">$39,000.00</option> 
                                        <option value="39500">$39,500.00</option> 
                                        <option value="40000">$40,000.00</option> 
                                        <option value="40500">$40,500.00</option> 
                                        <option value="41000">$41,000.00</option> 
                                        <option value="41500">$41,500.00</option> 
                                        <option value="42000">$42,000.00</option> 
                                        <option value="42500">$42,500.00</option> 
                                        <option value="43000">$43,000.00</option> 
                                        <option value="43500">$43,500.00</option> 
                                        <option value="44000">$44,000.00</option> 
                                        <option value="44500">$44,500.00</option> 
                                        <option value="45000">$45,000.00</option> 
                                        <option value="45500">$45,500.00</option> 
                                        <option value="46000">$46,000.00</option> 
                                        <option value="46500">$46,500.00</option> 
                                        <option value="47000">$47,000.00</option> 
                                        <option value="47500">$47,500.00</option> 
                                        <option value="48000">$48,000.00</option> 
                                        <option value="48500">$48,500.00</option> 
                                        <option value="49000">$49,000.00</option> 
                                        <option value="49500">$49,500.00</option> 
                                        <option value="50000">$50,000.00</option> 
                                        <option value="50500">$50,500.00</option> 
                                        <option value="51000">$51,000.00</option> 
                                        <option value="51500">$51,500.00</option> 
                                        <option value="52000">$52,000.00</option> 
                                        <option value="52500">$52,500.00</option> 
                                        <option value="53000">$53,000.00</option> 
                                        <option value="53500">$53,500.00</option> 
                                        <option value="54000">$54,000.00</option> 
                                        <option value="54500">$54,500.00</option> 
                                        <option value="55000">$55,000.00</option> 
                                        <option value="55500">$55,500.00</option> 
                                        <option value="56000">$56,000.00</option> 
                                        <option value="56500">$56,500.00</option> 
                                        <option value="57000">$57,000.00</option> 
                                        <option value="57500">$57,500.00</option> 
                                        <option value="58000">$58,000.00</option> 
                                        <option value="58500">$58,500.00</option> 
                                        <option value="59000">$59,000.00</option> 
                                        <option value="59500">$59,500.00</option> 
                                        <option value="60000">$60,000.00</option> 
                                        <option value="60500">$60,500.00</option> 
                                        <option value="61000">$61,000.00</option> 
                                        <option value="61500">$61,500.00</option> 
                                        <option value="62000">$62,000.00</option> 
                                        <option value="62500">$62,500.00</option> 
                                        <option value="63000">$63,000.00</option> 
                                        <option value="63500">$63,500.00</option> 
                                        <option value="64000">$64,000.00</option> 
                                        <option value="64500">$64,500.00</option> 
                                        <option value="65000">$65,000.00</option> 
                                        <option value="65500">$65,500.00</option> 
                                        <option value="66000">$66,000.00</option> 
                                        <option value="66500">$66,500.00</option> 
                                        <option value="67000">$67,000.00</option> 
                                        <option value="67500">$67,500.00</option> 
                                        <option value="68000">$68,000.00</option> 
                                        <option value="68500">$68,500.00</option> 
                                        <option value="69000">$69,000.00</option> 
                                        <option value="69500">$69,500.00</option> 
                                        <option value="70000">$70,000.00</option> 
                                        <option value="70500">$70,500.00</option> 
                                        <option value="71000">$71,000.00</option> 
                                        <option value="71500">$71,500.00</option> 
                                        <option value="72000">$72,000.00</option> 
                                        <option value="72500">$72,500.00</option> 
                                        <option value="73000">$73,000.00</option> 
                                        <option value="73500">$73,500.00</option> 
                                        <option value="74000">$74,000.00</option> 
                                        <option value="74500">$74,500.00</option> 
                                        <option value="75000">$75,000.00</option> 
                                        <option value="75500">$75,500.00</option> 
                                        <option value="76000">$76,000.00</option> 
                                        <option value="76500">$76,500.00</option> 
                                        <option value="77000">$77,000.00</option> 
                                        <option value="77500">$77,500.00</option> 
                                        <option value="78000">$78,000.00</option> 
                                        <option value="78500">$78,500.00</option> 
                                        <option value="79000">$79,000.00</option> 
                                        <option value="79500">$79,500.00</option> 
                                        <option value="80000">$80,000.00</option> 
                                        <option value="80500">$80,500.00</option> 
                                        <option value="81000">$81,000.00</option> 
                                        <option value="81500">$81,500.00</option> 
                                        <option value="82000">$82,000.00</option> 
                                        <option value="82500">$82,500.00</option> 
                                        <option value="83000">$83,000.00</option> 
                                        <option value="83500">$83,500.00</option> 
                                        <option value="84000">$84,000.00</option> 
                                        <option value="84500">$84,500.00</option> 
                                        <option value="85000">$85,000.00</option> 
                                        <option value="85500">$85,500.00</option> 
                                        <option value="86000">$86,000.00</option> 
                                        <option value="86500">$86,500.00</option> 
                                        <option value="87000">$87,000.00</option> 
                                        <option value="87500">$87,500.00</option> 
                                        <option value="88000">$88,000.00</option> 
                                        <option value="88500">$88,500.00</option> 
                                        <option value="89000">$89,000.00</option> 
                                        <option value="89500">$89,500.00</option> 
                                        <option value="90000">$90,000.00</option> 
                                        <option value="90500">$90,500.00</option> 
                                        <option value="91000">$91,000.00</option> 
                                        <option value="91500">$91,500.00</option> 
                                        <option value="92000">$92,000.00</option> 
                                        <option value="92500">$92,500.00</option> 
                                        <option value="93000">$93,000.00</option> 
                                        <option value="93500">$93,500.00</option> 
                                        <option value="94000">$94,000.00</option> 
                                        <option value="94500">$94,500.00</option> 
                                        <option value="95000">$95,000.00</option> 
                                        <option value="95500">$95,500.00</option> 
                                        <option value="96000">$96,000.00</option> 
                                        <option value="96500">$96,500.00</option> 
                                        <option value="97000">$97,000.00</option> 
                                        <option value="97500">$97,500.00</option> 
                                        <option value="98000">$98,000.00</option> 
                                        <option value="98500">$98,500.00</option> 
                                        <option value="99000">$99,000.00</option> 
                                        <option value="99500">$99,500.00</option> 
                                        <option value="100000">Mas que $100,000</option> 
                                </select>
                            </div>
                            <div>
                                <h3>Estado </h3>
                                
                                <select id="state" name="state">
                                        <option value="">Seleccione</option> 
                                        <option value="AL">AL</option> 
                                        <option value="AK">AK</option> 
                                        <option value="AZ">AZ</option> 
                                        <option value="AR">AR</option> 
                                        <option value="CA">CA</option> 
                                        <option value="CO">CO</option> 
                                        <option value="CT">CT</option> 
                                        <option value="DE">DE</option> 
                                        <option value="DC">DC</option> 
                                        <option value="FL">FL</option> 
                                        <option value="GA">GA</option> 
                                        <option value="GU">GU</option> 
                                        <option value="HI">HI</option> 
                                        <option value="ID">ID</option> 
                                        <option value="IL">IL</option> 
                                        <option value="IN">IN</option> 
                                        <option value="IA">IA</option> 
                                        <option value="KS">KS</option> 
                                        <option value="KY">KY</option> 
                                        <option value="LA">LA</option> 
                                        <option value="ME">ME</option> 
                                        <option value="MD">MD</option> 
                                        <option value="MA">MA</option> 
                                        <option value="MI">MI</option> 
                                        <option value="MN">MN</option> 
                                        <option value="MS">MS</option> 
                                        <option value="MO">MO</option> 
                                        <option value="MT">MT</option> 
                                        <option value="NE">NE</option> 
                                        <option value="NV">NV</option> 
                                        <option value="NH">NH</option> 
                                        <option value="NJ">NJ</option> 
                                        <option value="NM">NM</option> 
                                        <option value="NY">NY</option> 
                                        <option value="NC">NC</option> 
                                        <option value="ND">ND</option> 
                                        <option value="OH">OH</option> 
                                        <option value="OK">OK</option> 
                                        <option value="OR">OR</option> 
                                        <option value="PA">PA</option> 
                                        <option value="PR">PR</option> 
                                        <option value="RI">RI</option> 
                                        <option value="SC">SC</option> 
                                        <option value="SD">SD</option> 
                                        <option value="TN">TN</option> 
                                        <option value="TX">TX</option> 
                                        <option value="UT">UT</option> 
                                        <option value="VT">VT</option> 
                                        <option value="VA">VA</option> 
                                        <option value="VI">VI</option> 
                                        <option value="WA">WA</option> 
                                        <option value="WV">WV</option> 
                                        <option value="WI">WI</option> 
                                        <option value="WY">WY</option> 
                                </select>
                            </div>
                        </div>
                        <div id="optIn">
                            <input type="checkbox" id="opt_in" name="opt_in"  value="false"/> S&iacute;, me gustar&iacute;a recibir notificaciones de <br />Consolidated Credit.
                        </div>
                    </div>
                    <div class="col2">
                        <div class="subcol2">
                            <div>
                                <h3>Nombre </h3>
                                <input type="text" id="first_name" name="firstname" />
                            </div>
                            <div>
                                <h3>Apellido </h3>
                                <input type="text" id="last_name" name="lastname" />
                            </div>
                        </div>
                        <div class="subcol3">
                            <div>
                                <h3>Tel&eacute;fono  </h3>
                                <input type="text" id="primary_phone" name="phone_home" maxlength="10"/>
                            </div>
                            <div>
                                <h3>C&oacute;digo postal </h3>
                                <input type="text" id="zip" name="zip"  maxlength="5" />
                            </div>
                        </div>
                        <div class="btnsubmit"><input id="submitButton" type="submit" value="" name="submitButton" class="online" ></div>
                        <div class="msg">&iquest;Ya hab&iacute;as comenzado? <a href="http://www.consolidatedcredit.org/debt-analysis-spanish/userlogin/?partnerid=2106">Contin&uacute;a aqu&iacute;</a></div>
                    </div>

<div class="btnDisclaimer">Al enviar la información que se muestra arriba, usted autoriza mediante su firma electrónica a: Recibir llamadas de Consolidated Credit a través de un agente en vivo, voz artificial o pregrabada, y /o mensaje de texto SMS (tarifas estándar de celulares pueden ser aplicadas) a mi número residencial o celular, a través de llamadas realizadas en forma manual o mediante marcador automático. Yo entiendo que no estoy bajo ninguna obligación de comprar nada.</div>
		<input type="hidden" name="SuccessURL" value="<?php echo $thankYouPage;?>" />  
		<input type="hidden" name="submissionurl" value="<?php echo $submissionurl;?>" /> 
		<input type="hidden" name="partnerid" value="<?php echo $partnerid;?>" />  		
		<input type="hidden" name="ppc_keyword" value="<?php echo $ppc_keyword;?>" />  
		<input type="hidden" name="ppc_matchtype" value="<?php echo $ppc_matchtype;?>" />
		<input type="hidden" name="ppc_network" value="<?php echo $ppc_network;?>" />  
		<input type="hidden" name="ppc_placement" value="<?php echo $ppc_placement;?>" />
		<input type="hidden" name="ppc_adgroup" value="<?php echo $ppc_adgroup;?>" />
		<input type="hidden" name="ppc_adtag" value="<?php echo $ppc_adtag;?>" />
		<input type="hidden" name="ckm_campaign_id" value="<?php echo $ckm_campaign_id;?>" />
		<input type="hidden" name="ckm_key" value="<?php echo $ckm_key;?>" />
<input type="hidden" id="country" name="country" value="USA">
<input type="hidden" id="language" name="language" value="sp">
<input type="hidden" id="thank_you_url" name="thank_you_url" value="<?php echo $thankYouPage;?>">
<input type="hidden" id="channel" name="channel" value="">
<input type="hidden" id="ckm_request_id" name="ckm_request_id" value="">
<input type="hidden" id="vid" name="vid" value="107">
<input type="hidden" id="ckm_subid" name="ckm_subid" value="2106">
<input type="hidden" id="ckm_subid_2" name="ckm_subid_2" value="">
<input type="hidden" id="ckm_subid_3" name="ckm_subid_3" value="">
<input type="hidden" id="ckm_subid_4" name="ckm_subid_4" value="">
<input type="hidden" id="ckm_subid_5" name="ckm_subid_5" value="">
<input type="hidden" id="aff_id" name="aff_id" value="1242">
<input type="hidden" id="route_type" name="route_type" value="data_direct">
  <script>


    $("#form, #contactform").submit(function(event) {

      $.post("../../../submit.php", $("#form, #contactform").serialize())
            .done(function(data) {
                console.log(data);
                //fix their json
                data = data.replace("}1", "}");
                var obj = jQuery.parseJSON(data);
                console.log(obj);
                console.log("Data Status: " + obj["Status"]);

                if (obj["Status"] == "Success") {
                    var img = new Image();
                    img.onload = function(e) {
                        console.log('<?php echo $thankYouPage; ?>');
                    };
                    img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?OID_' + obj["LeadID"];
                    window.location = '<?php echo $thankYouPage; ?>#?id=' + obj["LeadID"] + '&key=' + obj["DebtAnalysisToken"];
                }
                if (obj["Status"] == "Errors") {
                    var imgf = new Image();
                    imgf.onload = function(e) {};
                    imgf.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?formErrors';
                    //parse the eror messages
                    var errorMsg = obj["Errors"].toString().split(',')[0];
                    if (errorMsg.split('|')[0] == 'Duplicate') {
                        var imgE = new Image();
                        imgE.onload = function(e) {};
                        imgE.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?Duplicate_' + errorMsg.split('|')[1];
                        var img = new Image();
                        img.onload = function(e) {
                        };
                        img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?OID_' + obj["LeadID"];
                        window.location = '<?php echo $thankYouPage; ?>#?id=' + obj["LeadID"] + '&key=' + obj["DebtAnalysisToken"];

                    } else {
                        //disable the submit button, and alert the error out
                        //	$('input[type="submit"]').prop('disabled', true);
                        //	$('input[type="submit"]').css('opacity', .5);
                        alert("There was a problem with your submisiion. Please refresh the page and try again Errors\n" + errorMsg);
                    }

                }

                if (obj["Status"] == "Fail: Duplicate Lead") {
                    var imgf = new Image();
                    imgf.onload = function(e) {};
                    imgf.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?existingEmailFound';
                    //alert("Sorry, a record with your email address  is already in our system.\n Please visit https://www.consolidatedcredit.org/online-application/ to continue with your application,\n or check your email on the form and try again");
                    var img = new Image();
                    img.onload = function(e) {
                        window.location = '<?php echo $thankYouPage; ?>#?id=' + obj["LeadID"] + '&key=' + obj["DebtAnalysisToken"];
                    };
                    img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?OID_' + obj["LeadID"];

                }
                if (obj["Status"] == "Errors" && obj["Errors"] == "Duplicate Lead") {
                    var imgf = new Image();
                    imgf.onload = function(e) {};
                    imgf.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?existingEmailFound';
                    //alert("Sorry, a record with your email address  is already in our system.\n Please visit https://www.consolidatedcredit.org/online-application/ to continue with your application,\n or check your email on the form and try again");
                    var img = new Image();
                    img.onload = function(e) {
                        window.location = '<?php echo $thankYouPage; ?>#?id=' + obj["LeadID"] + '&key=' + obj["DebtAnalysisToken"];
                    };
                    img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?OID_' + obj["LeadID"];

                }
                if (obj["Status"] == "Fail: Bad Phone number") {
                    var img = new Image();
                    img.onload = function(e) {};
                    img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?badPhoneNumber';
                    alert("Please check your phone number and try again. 10 digits only (area code + phone number)");
                    $('input[type="submit"]').prop('disabled', false);
                    $('input[type="submit"]').val('START NOW');
                }
                if (obj["Status"] == "Fail: Invalid e-mail address format") {
                    var img = new Image();
                    img.onload = function(e) {};
                    img.src = 'http://' + window.location.hostname + '/proxy-static/includes/trk.php?invalidEmailformat';
                    alert("Please check your email address and try again. (Format should match yourname@youremailprovider.com)");
                    $('input[type="submit"]').prop('disabled', false);
                    $('input[type="submit"]').val('START NOW');
                }


            });
        event.preventDefault(); //stop the form from posting via DOM
    });
  </script>
                </form>
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
