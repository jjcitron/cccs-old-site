<div class="theForm">
	<form action="submit.php" method="post" id="contactform" >
	<fieldset>
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
		
		<h2>Reduce Your Debt!</h2>
		<h3>Complete the form below to get help with your finances and a <br/><span><b>FREE</b> Budget Analysis!!</span></h3>
		<p align="center">
		<input class="form-control" type="text" name="firstname" pattern="^[A-Za-z]+$" value="" onchange="check(this)"  placeholder="First Name*" required/>
		<input class="form-control"  type="text" name="lastname" pattern="^[A-Za-z]+$" value="" onchange="check(this)" placeholder="Last Name*" required />
		<input class="form-control"  type="email" name="email" value="" placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" onchange="check(this)"  required/>
		<input type="hidden" name="country" value="usa" />

		<input class="form-control"  type="tel" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" onchange="check(this)" name="phone_home"  value="" placeholder="Best Number*" required/>
		<input class="form-control"  type="tel" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$" onchange="check(this)" name="phone_work"  value="" placeholder="Alternate Number" />
	
		<input class="form-control"  type="text" id="debtamount" name="debtamount"  value="" placeholder="Debt Amount*" required />
		<div class="stateContainer">
			<select  class="form-control" name="state" required>
				<option value=""  selected >State*</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
			</select>
		</div>
		</p>
		
		<p class="consent">By submitting your information above you consent by electronic signature to: receive calls from Consolidated Credit from a live agent, artificial or prerecorded voice, and/or SMS text (standard cellular rates may apply) at my residential or cellular number, dialed manually or by autodialer. I understand that I am under no obligation to purchase anything.</p>
		<p align="center"><button class="button" type="submit" class="btn btn-primary">START NOW</button></p>
		
		<div class="yel">
			<input class="checkbox" type="checkbox" name="language" value="sp"/>
			<p>Haga clic aqu&iacute; si desea hablar con un consejero que hable espa&ntilde;ol</p></br>
			<p class="fcta">Call right now and speak to a debt specialist</br></br><a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>"><?php echo $thePhoneNumber;?></a></p>
			<p class="">We take your <a style="color:inherit" href="http://www.consolidatedcredit.org/privacy-policy/" target="_blank">privacy</a> seriously</p>
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

function check(input) {  


console.log(input.value);

    if(input.validity.patternMismatch ){  
	//console.log(input);console.log(input.type);
	switch(input.type){
		
		case 'email':
		//console.log('email found');
		input.setCustomValidity("Please enter a valid Email");
		break;
		case 'tel':
		//console.log('tel found');
		input.setCustomValidity("Please enter a valid US/ Canada phone number (10 digits)");
		break;
		default:
		//console.log('something else found');
		console.log(input.name);
		switch(input.name){
			
			case 'firstname':
			input.setCustomValidity("Please enter your first name");
			break;
			case 'lastname':
			input.setCustomValidity("Please enter your last name");
			break;
			default:
			input.setCustomValidity("Please enter the required information");
			break;
		}
		
		break;
		
		
		
	}
	
   }  
    else {  
        input.setCustomValidity("");  
    }                 
} 
</script>

<?php include('formScripts.php'); ?>
	

	
	
	<!--theForm-->
