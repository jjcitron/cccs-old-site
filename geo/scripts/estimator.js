$(".calcForms").submit(function(event) {
	var inpt = $(this).find('#formDebtAmount');
	if(inpt.val()==''){return false;}
		var regex = /[0-9]|\./;
		if( !regex.test(inpt.val()) ) {return false;}
			var savings = inpt.val() * .021;
			$('#debtSavingsAmount').html(Math.ceil(savings));
			$('#debtResult').show();
			$('#debtSavings').show();
			event.preventDefault();
});	
$('#debtSavingsClose, .debtConsult').click(function (){
	$('#debtResult').hide();
	$('#debtSavings').hide();

});
