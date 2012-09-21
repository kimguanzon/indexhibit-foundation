<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{site_lang}}"> <!--<![endif]-->
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><last:ndxz_title /> : {{obj_name}}</title>
<last:page:meta />
<last:page:css />
<last:page:javascript />
<last:page:onready /><plugin:backgrounder />
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="{{baseurl}}/ndxzsite/{{obj_theme}}/stylesheets/foundation.css">
	<link rel="stylesheet" href="{{baseurl}}/ndxzsite/{{obj_theme}}/stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->

	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<last:page:css />
	<last:page:javascript />
	<last:page:onready /><plugin:backgrounder />
</head>

<body class='section-<%section_id%>'>
	
<div class='container'>
	<div class='row'>
	
		<div id='menu' class='three columns'>
			<div class='idxz_container'>

				<div class="top-section">
					{{obj_itop}}
				</div>
				<div class="hide-on-phones">
					<last:page:append_index />
				</div>

				<!-- you must provide a link to Indexhibit on your site someplace - thank you -->
				<ul class="built hide-on-phones">
					<li>Built with <a href='http://www.indexhibit.org/'>Indexhibit</a></li>
				</ul>

				<ul class="bottom-section hide-on-phones">
					{{obj_ibot}}
				</ul>
			</div>	
		</div>

		<div id='content' class='nine columns'>
			<div class='idxz_container'>

				<!-- text and image -->
				<plugin:page:exhibit />
				
				<!-- end text and image -->
		
			</div>
		</div>

		<div class="show-on-phones">
			<div class="mobile_buttons"><plug:front_index /></div>
			<p>Built with <a href='http://www.indexhibit.org/'>Indexhibit</a></p>
			{{obj_ibot}}
		</div>

	</div>
</div>

<plugin:page:append_page />
<plugin:page:closing />
	
	
	<!-- Included JS Files (Uncompressed) -->
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.accordion.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.alerts.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.buttons.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.forms.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.navigation.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.orbit.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.reveal.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.tabs.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.foundation.tooltips.js"></script>
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/jquery.placeholder.js"></script>
	<!-- Application Javascript, safe to override -->
	<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/javascripts/foundation/app.js"></script>

</body>
</html>