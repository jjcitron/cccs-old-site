<?php header('Content-Type: application/javascript');?>

var theData = {
	"pinLocations":[
    <?php if ($_GET['loc']=='local-florida.php'){
		echo' {
            "name":"Terri S.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Terri S.</br>Valrico, Florida</h2>Consolidated Credit has been amazing! They\'ve made getting out of debt not so painful! Thank you!</div></div></div></div>",
            "loc": {
                "lat":27.940833,
                "lng":-82.242500
            }
        },
        {
            "name":"Mary P.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Mary P.</br>Jacksonville, FL</h2>The best thing I ever did was calling Consolidated Credit! I paid off over $30K in three years.</div></div></div></div>",
            "loc": {
                "lat":30.332184,
                "lng":-81.655651
            }
        },
		{
			"name":"Taylor L.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Taylor L.</br>Florida</h2></div></div></div></div>",
            "loc": {
                "lat":30.167467,
                "lng":-85.661016
            }
        },
		{
			"name":"Dorinda F.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Dorinda F.</br>Florida</h2></div></div></div></div>",
            "loc": {
                "lat":25.761680,
                "lng":-80.19179
            }
        }'
	;} 
	if ($_GET['loc']=='local-california.php'){
		echo'
		{
			"name":"Raul D.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Raul D.</br>San Jose, CA</h2>It\'s been one year since I signed on to Consolidated Credit\'s debt management program and I must say it\'s been a wonderful experience. It\'s remarkable to see my credit card debt balances going down, and not to mention all the money I\'m saving on interest, which by the way, are applied to my balances. Did I mention that my credit score ratings are in the \'Excellent\' range? Very soon rather than later I will be debt free! Thank you very, very much Consolidated Credit.</div></div></div></div>",
            "loc": {
                "lat":37.340974,
                "lng":-121.884016
            }
        },
		{
			"name":"Elizabeth M.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Elizabeth M.</br>San Diego, CA</h2>My experience with Consolidated Credit has been amazing. When my husband and I signed on to the debt management program, we had over $15,000 in credit card debt. Today we\'ve paid off 3 credit cards and we\'re currently paying off our last credit card. It has been challenging but worth the sacrifice. And now, we are almost free of our credit card debt. Thank you Consolidated Credit!</div></div></div></div>",
            "loc": {
                "lat":32.714275,
                "lng":-117.133615
            }
        },
				{
			"name":"Claudia L.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Claudia L.</br>California</h2></div></div></div></div>",
            "loc": {
                "lat":38.581572,
                "lng":-121.494400
            }
        },
		{
			"name":"Roseann S.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Roseann S.</br>California</h2></div></div></div></div>",
            "loc": {
				"lat":34.892697,
                "lng":-115.765777
            }
        },
		{
			"name":"Clare B.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Clare B.</br>California</h2></div></div></div></div>",
            "loc": {
                "lat":34.304883,
                "lng":-118.479400
            }
        }'
		
	;}
	if ($_GET['loc']=='local-georgia.php'){
		echo'
		{
			"name":"Janet C.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Janet C.</br>Lafayette, GA</h2>We had been thinking about how we could get out of debt, and a Consolidated Credit commercial ran. So in February 2013, my husband and I made a phone call that changed our lives. We are on our way to being debt-free for the first time in our lives.</div></div></div></div>",
            "loc": {
                "lat":34.704802,
                "lng":-85.2819
            }
        },
		{
			"name":"Susie J.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Susie J.</br>San Diego, CA</h2>I was working at the time, commuting to Atlanta and called my Employee Assistance Program. I was nervous and upset, but the phone call was confidential and the person put me into contact with Consolidated Credit. The program forced us to live more financially responsible. We\'re very proud we made it out of this mess and we don\'t have any credit cards to this day.</div></div></div></div>",
            "loc": {
                "lat":33.380672,
                "lng":-84.799657
            }
        },
				{
			"name":"Wendy B.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Wendy B.</br>Georgia</h2></div></div></div></div>",
            "loc": {
                "lat":31.266245, 
                "lng":-83.849196
            }
        },
		{
			"name":"Clerance J.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Clerance J.</br>Georgia</h2></div></div></div></div>",
            "loc": {
                "lat":31.818666,
                "lng":-82.003493
            }
        },
		{
			"name":"Melese G.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Melese G.</br>Georgia</h2></div></div></div></div>",
            "loc": {
                "lat":33.584325,
                "lng":-82.179275
            }
        }'
	;}
	if ($_GET['loc']=='local-newjersey.php'){
		echo'
		{
			"name":"Stephen J.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Stephen J.</br>Garfield, NJ</h2>I recently enrolled in your debt management program and I must say the enrollment and application process was very easy. Thank you Consolidated Credit, I\'ve already recommended your program to my cousin and he will be enrolling as well.</div></div></div></div>",
            "loc": {
                "lat":40.881488,
                "lng":-74.113198
            }
        },
		{
			"name":"John M.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>John M.</br>Hackensack, NJ</h2>Your program is excellent and you have the greatest customer service. I\'m so glad I found you guys! Thank you Consolidated Credit!</div></div></div></div>",
            "loc": {
                "lat":40.885933,
                "lng":-74.043474
            }
        },
				{
			"name":"Donna D.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Donna D.</br>New Jersey</h2></div></div></div></div>",
            "loc": {
                "lat":39.989563,
                "lng":-74.286169
            }
        },
		{
			"name":"Annmarie S.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Annmarie S.</br>New Jersey</h2></div></div></div></div>",
            "loc": {
                "lat":39.896910,
                "lng":-74.978308
            }
        },
		{
			"name":"Sharon L.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Sharon L.</br>New Jersey</h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div></div></div></div>",
            "loc": {
                "lat":39.457217,
                "lng":-75.071692
            }
        }'
	;}
	if ($_GET['loc']=='local-newyork.php'){
		echo'
		{
			"name":"Carole L.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Carole L.</br>Esperance, NY</h2>Consolidated Credit, a close family member highly recommended your services, and now, so would I. I\'ve spoken to many staff members and I\'ve always been pleased with the services provided. They helped make going through an unpleasant financial situation less embarrassing. They\'ve always been very courteous and polite. Thank You!</div></div></div></div>",
            "loc": {
                "lat":42.761186,
                "lng":-74.256518
            }
        },
		{
			"name":"Larry L.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Larry L.</br>Massapequa Park, NY</h2>I enrolled with Consolidated Credit not too long ago and I must say, so far, so good. I\'m starting to pay off what I owe and it feels wonderful! Thank you Consolidated Credit for helping me get my debt under control!</div></div></div></div>",
            "loc": {
                "lat":40.680489,
                "lng":-73.455312
            }
        },
				{
			"name":"Randell H.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Randell H.</br>New York</h2></div></div></div></div>",
            "loc": {
                "lat":44.547639,
                "lng":-74.283997
            }
        },
		{
			"name":"Anell T.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Anell T.</br>New York</h2></div></div></div></div>",
            "loc": {
                "lat":42.916569,
                "lng":-75.886533
            }
        },
		{
			"name":"Sandra B.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Sandra B.</br>New York</h2></div></div></div></div>",
            "loc": {
                "lat":42.180055,
                "lng":-79.215390
            }
        }'
	;}
	if ($_GET['loc']=='local-texas.php'){
		echo'
		{
			"name":"Tammy D.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Tammy D.</br>Bivins, TX</h2>It has been a pleasure working with Consolidated Credit. The staff is always nice and pleasant and eager to help when I have questions. Thank you for being there.</div></div></div></div>",
            "loc": {
                "lat":33.019577,
                "lng":-94.199076
            }
        },
		{
			"name":"Jessica M.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Jessica M.</br>Palmview, TX</h2>I\'m very satisfied with Consolidated Credit! Thank you for helping me get through this difficult period.</div></div></div></div>",
            "loc": {
                "lat":26.233406,
                "lng":-98.370850
            }
        },
				{
			"name":"Agnes B.",
			"ico":"img/pinf.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Agnes B.</br>Texas</h2></div></div></div></div>",
            "loc": {
                "lat":33.773441,
                "lng":-101.878600
            }
        },
		{
			"name":"Terry U.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Terry U.</br>Texas</h2></div></div></div></div>",
            "loc": {
                "lat":29.891854,
                "lng":-95.638366
            }
        },
		{
			"name":"Richard A.",
			"ico":"img/pin.png",
			"content":"<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'><h2>Richard A.</br>Texas</h2></div></div></div></div>",
            "loc": {
                "lat":31.666241,
                "lng":-102.559753
            }
        }'
	;}
	
	?>
	]
}
	
