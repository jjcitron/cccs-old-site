
<script>
	(function (b) { b.support.touch = "ontouchend" in document; if (!b.support.touch) { return; } var c = b.ui.mouse.prototype, e = c._mouseInit, a; function d(g, h) { if (g.originalEvent.touches.length > 1) { return; } g.preventDefault(); var i = g.originalEvent.changedTouches[0], f = document.createEvent("MouseEvents"); f.initMouseEvent(h, true, true, window, 1, i.screenX, i.screenY, i.clientX, i.clientY, false, false, false, false, 0, null); g.target.dispatchEvent(f); } c._touchStart = function (g) { var f = this; if (a || !f._mouseCapture(g.originalEvent.changedTouches[0])) { return; } a = true; f._touchMoved = false; d(g, "mouseover"); d(g, "mousemove"); d(g, "mousedown"); }; c._touchMove = function (f) { if (!a) { return; } this._touchMoved = true; d(f, "mousemove"); }; c._touchEnd = function (f) { if (!a) { return; } d(f, "mouseup"); d(f, "mouseout"); if (!this._touchMoved) { d(f, "click"); } a = false; }; c._mouseInit = function () { var f = this; f.element.bind("touchstart", b.proxy(f, "_touchStart")).bind("touchmove", b.proxy(f, "_touchMove")).bind("touchend", b.proxy(f, "_touchEnd")); e.call(f) } })(jQuery);
	Number.prototype.formatMoney = function (c, d, t) { var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "." : d, t = t == undefined ? "," : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0; return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "") };

	$(function () {
		if ($('#form #slider').length) {
			$('#form #slider').slider({
				value: parseInt($('#form #debtamount').val()),
				max: 50000,
				min: 1000,
				step: 150,
				slide: function (e, u) {
					$('#form #debtamount').val(u.value);
					$('#form .amt').html((u.value == 1000 ? '<' : '') + '$' + u.value.formatMoney().replace('.00', '') + (u.value == 50000 ? '+' : ''))
				}
			});
			$('#form #slider').draggable();
		}
	});
</script>

<a name="theForm" id="theForm"></a>
<form action="submit.php" method="post" usetooltips"false' id="form">
        <div class="top">
            <p>I am <span class="amt" id="debtAmount">$7000</span> in debt <span class="locate">(Slide Below)</span></p>
            <div class="slider-border">
                <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                    <a href="#" class="ui-slider-handle ui-state-default ui-corner-all"></a>
                </div>
                <div class="slider-bg"></div>
            </div>
        </div>
        <input type="text" id="firstname" class="formInput" name="firstname" pattern="^[A-Za-z]+$" value="" onchange="check(this)" placeholder="First Name"  required/>
        <input type="text" id="lastname" class="formInput" name="lastname" pattern="^[A-Za-z]+$" value="" onchange="check(this)"  placeholder="Last Name"  required/>
        <input type="tel" id="phone_home" class="formInput" name="phone_home" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" name="phone_home"  value="" onchange="check(this)" placeholder="Best Number" required/>
        <input type="tel" id="phone_work" class="formInput" name="phone_work" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" name="phone_home"  value="" onchange="check(this)" placeholder="Alternate Number" />
        <input type="email" id="email" class="formInput" name="email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address"   required onchange="check(this)" required/>
        <select id="state" class="formSelect" name="state" required>
			<option value="">Select State</option> 
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
		 <hr/>
		 
		<div class="clear"></div>
		<div class="ticker">
			<div class="form_con">
				<p class="title">You&apos;re not alone<span class="ico"></span></p>
				<p class="item"><span class="next"></span></p>
			</div>
		</div>
		<div class="clear"></div>
        <hr/>
        <div class="formLower">
            <div class="formLeft">
                <div class="checkBox">
                    <input type="hidden" id="optout" class="formCheckBox" name="optout" value="false" />
                    <input type="checkbox" id="newsletter" class="formCheckBox" name="newsLetter" checked />
                    <div class="formCheckLabel">Receive our Newsletter</div>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="language" class="formCheckBox" name="language" value="sp" />
                    <div class="formCheckLabel">Desea hablar en Espa&#241;ol</div>
                </div>
            </div>
            <div class="formRight">
                <input id="submitButton" type="submit" value="Start Now" processtext="Processing" name="submitButton" class="online" />

            </div>
			
				<div class="consent">
<p>By submitting your information above you consent by electronic signature to: receive calls from Consolidated Credit from a live agent, artificial or prerecorded voice, and/or SMS text (standard cellular rates may apply) at my residential or cellular number, dialed manually or by autodialer. I understand that I am under no obligation to purchase anything.</p>
<p class="">We take your <a style="color:inherit" href="http://www.consolidatedcredit.org/privacy-policy/" target="_blank">privacy</a> seriously</p>
                </div>
			<div class="eKomi" id="eKomiWidget_default"></div>
        </div>

        <input type="hidden" id="debtamount" name="debtamount" value="7000" />
        <input type="hidden" id="partnerid" name="partnerid" value="2355" />
        <input type="hidden" id="country" name="country" value="USA" />
		<input type="hidden" name="SuccessURL" value="<?php echo $currentDir + $thankYouPage;?>" />  
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
</form>
<?php include('formScripts.php'); ?>
<!--theForm-->