
//Slide Toggle
$('.closed').hide();
$('.moreless').html( "+Más" );
$('.moreless').click(function(){
	$(".closed").slideToggle();
	$('.moreless').toggleClass("opened");
		if ($('.moreless').hasClass("opened")){
			$('.moreless').html( "-Menos" );
		}
		else{$('.moreless').html( "+Más" );}
});

//ekomi customer rating
(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js,fjs)}(document, 'script', 'facebook-jssdk'));
//"not alone" scroller
$(function(){$.getScript('//tools.consolidatedcredit.org/scrolling-leads/?copy=[name] fue ayudado con [debt] en [state]',function(){$('#dmp_scrolling_leads div').each(function(){var val=$(this).text().match(/\$(\d+)\s/)[1];$(this).text( $(this).text().replace(val,parseFloat(val.replace(/0-9./g)).formatMoney().replace('.00','')));var eq=0;$('.ticker .item .next').text($('#dmp_scrolling_leads .dmp_scrolling_leads:eq('+eq+')').text()).animate({top:0},function(){$('.ticker .item .next').removeClass('next').addClass('current');$('.ticker .item').append('<span class="next"></span>')});var ticker=setInterval(function(){eq=$('#dmp_scrolling_leads .dmp_scrolling_leads:eq('+(eq+1)+')').length?eq+1:0;$('.ticker .item .current').animate({top:-$('.ticker .item').height()+'px'},function(){$('.ticker .item .current').remove()});$('.ticker .item .next').text($('#dmp_scrolling_leads .dmp_scrolling_leads:eq('+eq+')').text()).animate({top:0},function(){$('.ticker .item .next').removeClass('next').addClass('current');$('.ticker .item').append('<span class="next"></span>')})},7000)})})});
	