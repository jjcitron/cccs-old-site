


<div class="theForm">
	<form action="submit.php" method="post" id="contactform" >
	<fieldset>
		<input type="hidden" name="SuccessURL" value="thanks.php?from=<?php echo $thanks;?>" />  
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
		



 		
		<h2>Reduce Your Debt!</h2>
		<h3>Complete the form below to get help with your finances and a <br/><b>FREE</b> Budget Analysis!!</h3>
		<p align="center">
		<input class="form-control" type="text" name="firstname" value="" placeholder="First Name*" required/>
		<input class="form-control"  type="text" name="lastname" value="" placeholder="Last Name*" required />
		<input class="form-control"  type="email" name="email" value="" placeholder="Email*" required/>
		<input type="hidden" name="country" value="usa" />

		
		<input class="form-control"  type="tel" name="phone_home" value="" placeholder="Best Number*" required/>
		<input class="form-control"  type="tel" name="phone_work" value="" placeholder="Alternate Number" />
		
		
		<input class="form-control"  type="text" id="debtamount" name="debtamount"  value="" placeholder="Debt Amount*" required />
		<div class="stateContainer">
			<select  class="form-control" name="state" required>
				<option value=""  selected >State*</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
			</select>
		</div>
		</p>
		
		<p class="consent">By clicking "Click Here to get help reducing your debt", I consent to receive calls from Consolidated Credit through the use of an automatic dialing system at the telephone number provided above. I understand that I am never under any obligation to purchase anything.</p>
		<p align="center"><button class="button" type="submit" class="btn btn-primary">START NOW</button></p>
		
		<div class="yel">
			<input class="checkbox" type="checkbox" name="language" value="sp"/>
			<p>Haga clic aqu&iacute; si desea hablar con un consejero que hable espa&ntilde;ol</p></br>
			<p class="fcta">Call right now and speak to a debt specialist</br></br><a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>"><?php echo $thePhoneNumber;?></a></p>
		</div>
	</fieldset>
	</form>               
	</div>
<script type="text/javascript">
$('#debtamount').keypress(function(e) {
    var a = [];
    var k = e.which;
	a.push(8);
    for (i = 48; i < 58; i++)
        a.push(i);

    if (!(a.indexOf(k)>=0))
        e.preventDefault();
});

var webkit = '';
var ua = navigator.userAgent.toLowerCase(); 
  if (ua.indexOf('safari') != -1) { 
    if (ua.indexOf('chrome') > -1) {
      webkit= "Chrome";
    } else {
      webkit= "Safari";
    }
  }
if (!Modernizr.input.required ||  $.browser.msie || webkit=="Safari" ) {
 console.log('this browser sucks');
$.validator.setDefaults({
	
	showErrors: function(map, list) {
		// there's probably a way to simplify this
		var focussed = document.activeElement;
		if (focussed && $(focussed).is("input, textarea")) {
			$(this.currentForm).tooltip("close", { currentTarget: focussed }, true)
		}
		this.currentElements.removeAttr("title").removeClass("ui-state-highlight");
		$.each(list, function(index, error) {
			$(error.element).attr("title", error.message).addClass("ui-state-highlight");
		});
		if (focussed && $(focussed).is("input, textarea")) {
			$(this.currentForm).tooltip("open", { target: focussed });
		}
	}
	
});

(function() {
	// use custom tooltip; disable animations for now to work around lack of refresh method on tooltip
	
	$("#contactform").tooltip({
		show: false,
		hide: false
	});

	// validate the comment form when it is submitted
	$("#contactform").validate();

	
})();
}
</script>	

<script>
if (Modernizr.input.required){
/*
var number = document.querySelector('input[type="number"]');
number.oninvalid = function(e) {
e.target.setCustomValidity("");
if (!e.target.validity.valid) { e.target.setCustomValidity("Please enter a number only"); }
}; */
var tel = document.querySelector('input[type="tel"]');
tel.oninvalid = function(e) {
e.target.setCustomValidity("");
if (!e.target.validity.valid) { e.target.setCustomValidity("Please enter a valid telephone number"); }
};
}

$(document).ready(function() {

	// process the form
	$("#contactform").submit(function(event) {
$.post( "submit.php", $( "#contactform" ).serialize())
.done(function( data ) {
//fix their json
data = data.replace("}1", "}");
var obj = jQuery.parseJSON(data);

//alert( "Data Status: " + obj["Status"]);

if( obj["Status"] =="Fail: Duplicate Lead"){
var img = new Image();
img.onload = function(e){ };
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?duplicateLead';
alert("Sorry, a record with your email adress is already in our system.\n Please visit https://www.consolidatedcredit.org/online-application/ to continue with your application,\n or check your email on the form and try again");
}
if( obj["Status"] =="Success"){
var img = new Image();
img.onload = function(e){ window.location = 'thanks.php?from=<?php echo $thanks;?>#?id='+obj["LeadID"]+'&key='+obj["DebtAnalysisToken"];};
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?OID_'+obj["LeadID"];

}

});	
		event.preventDefault();//stop the form from posting via DOM
	});

});


</script>
	

	
	
	<!--theForm-->