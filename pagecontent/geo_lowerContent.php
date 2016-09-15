    <div class="lowerContent">
        <h1><?php echo $lowerTitle; ?></h1>
        <div class="testimonialWrapper">
            <div class="testimonial t1">
                 <?php echo $testimonial1; ?>
            </div>
            <div class="testimonial t2">
                <?php echo $testimonial2; ?>
            </div>
            <div class="testimonial t3">
                <div class="testimonialImg"><img src="geo/img/img-help.png" /></div>
                <div class="helpTitle">See What You Could Save Now!</div>
                <p class="helpAlert">Stop overpaying today with a customized debt management program.</p>
                


<form id="formDebt" name="formDebt" action="formDebt">
    <input type="text" id="formDebtAmount"  class="formDebtInput" name="formDebtAmount"
        placeholder="Amount of Debt" required/>
    <div class="formDebtBTN">
<!--	<a href="#" id="submitDebt" class="formDebtBTN">See Savings</a>-->
       <input id="submitDebt" type="submit" value="See Savings" name="submitDebt" class="online"  />
    </div>
</form>




            </div>
        </div>
        <p class="testimonialDisc">
            *All testimonials are from our clients. We respect the privacy of our clients. At
            their request, some of the pictures depicted may not be the actual client giving
            the recommendation.</p>
        <div class="lcPhone">
            <span>Get help now</span> 
           
			
			<a href="tel:<?php echo str_replace("-", "", $thePhoneNumber);?>" class="ShowPhoneNumber"><?php echo $thePhoneNumber;?></a>

<script type="text/javascript">

    if ($(window).width() >= 1024) {
        $(".ShowPhoneNumber").removeAttr("href");
    }

</script>
        </div>
    </div>
	
	
	<div id="debtResult">
</div>
<div id="debtSavings">
    <div class="close">
        <a href="javascript:void();" id="debtSavingsClose">
            <img src="geo/img/button-close.png" /></a></div>
    <div class="debtSavingsLeft">
        <h2> You can save! <br/>Call <span> <?php echo $thePhoneNumber;?></span></h2>
        <p>With this amount of debt, you'd pay around $<span id="debtSavingsAmount"></span> on a Debt Management Plan.</p>
           
        <a href="#theForm" class="debtConsult">Get Started Today</a>
    </div>
    <div class="debtSavingsGirl">
        <img src="geo/img/debtSavingsGirl.png" /></div>
    <p class="discSmall">This estimate compares paying your credit card debt on your own vs. the potential benefit of using a Debt Management Plan through completion. IT'S NOT AN ACTUAL QUOTE. Estimate is based on 2.1% of your balance owed. Actual interest rates will vary by consumer and creditor - yours could be higher or lower. Consolidated Credit might be able to reduce your interest rates and late fees allowing you to pay off your credit card debt quicker (since more payments are applied to your principal balances, saving you lots of money in the long run). To complete the program, you must make on-time payments each month. Late or missed payments may cause your program to be cancelled and in that event, this estimate would not apply to you.</p>
</div>
<script>
$("#formDebt").submit(function(event) {
					if($('#formDebtAmount').val()==''){return false;}
					var regex = /[0-9]|\./;
					if( !regex.test($('#formDebtAmount').val()) ) {return false;}
				var savings = $('#formDebtAmount').val() * .021;
				$('#debtAmount').html($('#formDebtAmount').val());

                $('#debtSavingsAmount').html(Math.ceil(savings));
				$('#debtamount').val($('#formDebtAmount').val());
				   $('#debtResult').show();
                $('#debtSavings').show();
				event.preventDefault();
				});
				
        $('#debtSavingsClose, .debtConsult').click(function (){
            $('#debtResult').hide();
            $('#debtSavings').hide();
			
            //return false;
        });
		</script>