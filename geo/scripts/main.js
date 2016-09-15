
var doc = $(document),
	win = $(window);

doc.ready(function (){
	
	//Remove href
	if ($(window).width() >= 1024){
		$(".ShowPhoneNumber").removeAttr("href");
	}

	//Menu
	var $menu = $('.menu'), 
	$menulink = $('.menu-link');
	$menulink.click(function () {
		$menulink.toggleClass('active');
		$menu.toggleClass('active');
	return false;
	});


	//Savings Calculator
	$(".calcForms").submit(function(event) {
		var input = $(this).find('#formDebtAmount');
		if(input.val()==''){return false;}
			var regex = /[0-9]|\./;
			if( !regex.test(input.val()) ) {return false;}
				var savings = input.val() * .021;
				$('#debtAmount').html($(this).find('#formDebtAmount').val());
				$('#debtSavingsAmount').html(Math.ceil(savings));
				$('#debtamount').val($(this).find('#formDebtAmount').val());
				$('#debtResult').show();
				$('#debtSavings').show();
				
				$('#form #slider').slider({
				value: parseInt($('#form #debtamount').val()),
				max: 50000,
				min: 1000,
				step: 150,
				
			});
				
				
				event.preventDefault();
	});	
	$('#debtSavingsClose, .debtConsult').click(function (){
		$('#debtResult').hide();
		$('#debtSavings').hide();
		
		$('#form, #mapCanvas, .mapTitle').show();
		$("#form #firstname").focus();
		$("#form #firstname").css("background", "#f1a006");
		$("#form #firstname").focus(function() {
			$("#form #firstname").css("background", "white");
		});
		google.maps.event.trigger(mapCanvas, 'resize');

	});
	

	$('#close').click(function (){
		$('.blackout').hide();
		$('.popup').hide();
		//$("body").css("overflow", "auto");
		//return false;
	});
	
	$('#policy').click(function (){
		$('.blackout').show();
		$('.popup').show();
		//$("body").css("overflow", "hidden");
		//return false;
	});

});

//Find custom div - load widget twice
win.load(function () {
	$('#eKomi_custom').attr('src',$('#eKomiWidget_default').find('img').attr('src'));
});