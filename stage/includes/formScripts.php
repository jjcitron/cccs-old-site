<script type="text/javascript">

//stupid IE phone format checker for when its not required
if (Modernizr.input.required){
var tel = document.querySelector('input[type="tel"]');
tel.oninvalid = function(e) {
e.target.setCustomValidity("");
if (!e.target.validity.valid) { e.target.setCustomValidity("Please enter a valid telephone number"); }
};
}

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
			input.setCustomValidity("Please enter a valid US/Canada phone number (10 digits)");
			break;
			default:
			//console.log('something else found');
			console.log(input.id);
			switch(input.id){
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



var webkit = '';
var ua = navigator.userAgent.toLowerCase(); 
  if (ua.indexOf('safari') != -1) { 
    if (ua.indexOf('chrome') > -1) {
      webkit= "Chrome";
    } else {
      webkit= "Safari";
    }
  }
if (!Modernizr.input.required  || webkit=="Safari" ) {

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
	
	$("#form").tooltip({
		show: false,
		hide: false
	});

	// validate the comment form when it is submitted
	$("#form").validate();

	
})();
}

</script>	

<script>

$(document).ready(function() {
	
	var onFire = false;
	$("#form input, #contactform input").one("focus", function() {
if (!onFire){
	var img = new Image();
	img.onload = function(e){};
	img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?formEntry';
	 	  
	  onFire = true;
	}
});

	// process the form
	$("#form, #contactform").submit(function(event) {
		

$.post( "submit.php", $( "#form, #contactform" ).serialize())
.done(function( data ) {
//fix their json
data = data.replace("}1", "}");
var obj = jQuery.parseJSON(data);
console.log(obj);
console.log( "Data Status: " + obj["Status"]);

if( obj["Status"] =="Success"){
var img = new Image();
img.onload = function(e){ window.location = '<?php echo $thankYouPage; ?>#?id='+obj["LeadID"]+'&key='+obj["DebtAnalysisToken"];};
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?OID_'+obj["LeadID"];

}
if( obj["Status"] =="Errors"){
	var imgf = new Image();
	imgf.onload = function(e){ };
	imgf.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?formErrors';
	//parse the eror messages
	var errorMsg = obj["Errors"].toString().split(',')[0];
	if(errorMsg.split('|')[0]=='Duplicate'){
		var imgE = new Image();
	imgE.onload = function(e){ };
	imgE.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?Duplicate_'+errorMsg.split('|')[1];
var img = new Image();
img.onload = function(e){ window.location = '<?php echo $thankYouPage; ?>#?id='+obj["LeadID"]+'&key='+obj["DebtAnalysisToken"];};
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?OID_'+obj["LeadID"];

	}
	else{
		//disable the submit button, and alert the error out
	//	$('input[type="submit"]').prop('disabled', true);
	//	$('input[type="submit"]').css('opacity', .5);
		alert("There was a problem with your submissiion. Please refresh the page and try again Errors\n" + errorMsg);
	}
	
}

if( obj["Status"] =="Fail: Duplicate Lead"){
var imgf = new Image();
imgf.onload = function(e){ };
imgf.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?existingEmailFound';
//alert("Sorry, a record with your email address  is already in our system.\n Please visit https://www.consolidatedcredit.org/online-application/ to continue with your application,\n or check your email on the form and try again");
var img = new Image();
img.onload = function(e){ window.location = '<?php echo $thankYouPage; ?>#?id='+obj["LeadID"]+'&key='+obj["DebtAnalysisToken"];};
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?OID_'+obj["LeadID"];

}
if( obj["Status"] =="Errors" && obj["Errors"] =="Duplicate Lead"){
var imgf = new Image();
imgf.onload = function(e){ };
imgf.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?existingEmailFound';
//alert("Sorry, a record with your email address  is already in our system.\n Please visit https://www.consolidatedcredit.org/online-application/ to continue with your application,\n or check your email on the form and try again");
var img = new Image();
img.onload = function(e){ window.location = '<?php echo $thankYouPage; ?>#?id='+obj["LeadID"]+'&key='+obj["DebtAnalysisToken"];};
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?OID_'+obj["LeadID"];

}
if( obj["Status"] =="Fail: Bad Phone number"){
var img = new Image();
img.onload = function(e){ };
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?badPhoneNumber';
alert("Please check your phone number and try again. 10 digits only (area code + phone number)");
$('input[type="submit"]').prop('disabled', false);
$('input[type="submit"]').val('START NOW');
}
if( obj["Status"] =="Fail: Invalid e-mail address format"){
var img = new Image();
img.onload = function(e){ };
img.src = 'http://'+window.location.hostname+'/proxy-static/includes/trk.php?invalidEmailformat';
alert("Please check your email address and try again. (Format should match yourname@youremailprovider.com)");
$('input[type="submit"]').prop('disabled', false);
$('input[type="submit"]').val('START NOW');
}


});	
		event.preventDefault();//stop the form from posting via DOM
	});

});


</script>