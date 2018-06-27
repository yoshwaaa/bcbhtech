<?php


/**
 * Template Name: Test Page
 */


?>



<!DOCTYPE html>
<html lang="en" ng-app="appV2" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121055009-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121055009-1');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBK5JTW');</script>
<!-- End Google Tag Manager -->
<style>
	a, input {
		display: block;
		margin: 20px;
	}
	#business {
		display: none;
	}
</style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBK5JTW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<h1>Sample App</h1>
<h2>What type of loans?</h2>
<a href="#personal" id="personalButton">Personal Loan</a>
<a href="#business" id="businessButton">Business Loan</a>
<div id="personal">
	<input type="name" placeholder="Name" />
	<input type="text" placeholder="Date of Birth" />
	<input type="text" placeholder="Total Monthly Income" />
	<fieldset>
	    <legend>Are you a homeowner?</legend>
	    <div>
	        <input type="radio" id="yes" name="homeowner"
	               value="yes" />
	        <label for="yes">Yes</label>
	    </div>
	    <div>
	        <input type="radio" id="no" name="homeowner"
	               value="no" />
	        <label for="no">No</label>
	    </div>
	</fieldset>
	<fieldset>
	    <legend>Have you ever been in credit counseling or a settlement program</legend>
	    <div>
	        <input type="radio" id="yes" name="credit"
	               value="yes" />
	        <label for="yes">Yes</label>
	    </div>
	    <div>
	        <input type="radio" id="no" name="credit"
	               value="no" />
	        <label for="no">No</label>
	    </div>
	</fieldset>
	<div onclick="console.log('boom');" style="border: 1px solid black; height: 50px; width: 300px;">I am a button. Push me.</div>
</div>

<div id="business">
	<input type="name" placeholder="Name" />
	<input type="text" placeholder="Date of Birth" />
	<input type="text" placeholder="Business Monthly Income" />
	<input type="text" placeholder="Business Start Date" />
	<input type="text" placeholder="Business State" />
	
	    <legend>Have you ever been in credit counseling or a settlement program</legend>
	    <div>
	        <input type="radio" id="yes" name="credit"
	               value="yes" />
	        <label for="yes">Yes</label>
	    </div>
	    <div>
	        <input type="radio" id="no" name="credit"
	               value="no" />
	        <label for="no">No</label>
	    </div>
	</fieldset>
	<div style="border: 1px solid black; height: 50px; width: 300px;">I am a button. Push me.</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
	$('#personalButton').click(function(){
		$('#personal').css('display', 'block');
		$('#business').css('display', 'none');
		dataLayer.push({
		'event':'VirtualPageview',
		'virtualPageURL':'/sample-page#personal',
		'virtualPageTitle' : 'Personal Form'
		});
		ga('send', 'pageview', window.location.pathname + window.location.hash);
		console.log(window.location.pathname + window.location.hash);
	});
	$('#businessButton').click(function(){
		$('#personal').css('display', 'none');
		$('#business').css('display', 'block');
		dataLayer.push({
		'event':'VirtualPageview',
		'virtualPageURL':'/sample-page#business',
		'virtualPageTitle' : 'Business Form'
		});
		ga('send', 'pageview', window.location.pathname + window.location.hash);
		console.log(window.location.pathname + window.location.hash);
	});
</script>

</body>
</html>

