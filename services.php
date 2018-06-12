<?php 
	$page_id = 3; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>OrangeTree Production</title>

		<?php include dirname(__FILE__).'/includes/head.inc.php';?>

</head>
<body>

	<?php include dirname(__FILE__).'/includes/header.inc.php';?>

<!--for medium view-->
	<div class="uk-hidden-small uk-contrast uk-block uk-block-secondary">
	<div class="uk-container uk-container-center">
			<h1 class="uk-text-center">Services</h1>
	</div></div>

<!--for small view-->

	<div class="uk-visible-small uk-contrast uk-block uk-block-secondary">
	<div class="uk-container uk-container-center">
			<h1>Services</h1>
	</div></div>

<!--content: for both view-->

	<div class="uk-contrast uk-block uk-block-secondary">
	<div class="uk-container uk-container-center">

		<div class="uk-grid uk-grid-match uk-text-center" data-uk-grid-match="{target:'.uk-panel'}">
			
			<div class="uk-width-medium-1-3 uk-width-small-1-1 uk-margin-large-top">
			<div data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:300}">	
			<div class="tm-services uk-contrast uk-panel uk-panel-box">
					<h2 class="tm-services">We do not merely create products.</h2>
			</div></div></div>

			<div class="uk-width-medium-1-3 uk-width-small-1-1 uk-margin-large-top">
			<div data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:800}">
			<div class="tm-services uk-contrast uk-panel uk-panel-box">
				<h2 class="tm-services">We improve processes.</h2>
			</div></div></div>

			<div class="uk-width-medium-1-3 uk-width-small-1-1 uk-margin-large-top">
			<div data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:1300}">
			<div class="tm-services uk-contrast uk-panel uk-panel-box">
				<h2 class="tm-services">Let's work together.</h2>
			</div></div></div>
			

		</div>
	</div></div>



		<div class="uk-text-center uk-contrast uk-block uk-block-secondary">
		<div class="uk-container uk-container-center">
			
			<div class="uk-grid uk-grid-match" data-uk-grid-match="{target:'.uk-panel'}">

				<div class="uk-width-medium-1-3 uk-width-small-1-1 uk-margin-large-top">
			    	<div class="tm-services uk-contrast uk-panel uk-panel-box uk-panel-header uk-panel-box-secondary">
			    		<h3>Pre-production</h3>
			    		<ul class="tm-services uk-list uk-list-striped">
			    			<li>Cost Management</li>
			    			<li>Product Commercialization Strategy</li>
			    			<li>Creatives Development</li>
			    			<li>Talent Acquisition</li>
			    			<li>Media Research</li>
			    			<li>Media Acquisition</li>
			    			<li>Scheduling</li>
			    			<li>Copyrights & Licensing</li>
			    		</ul>
			    </div></div>

			    <div class="uk-width-medium-1-3 uk-width-small-1-1 uk-margin-large-top">
				    <div class="tm-services uk-contrast uk-panel uk-panel-box uk-panel-header uk-panel-box-secondary">
				    	<h3>Video & Audio Production</h3>
				    	<ul class="tm-services uk-list uk-list-striped">
			    			<li>T.V. Series</li>
			    			<li>Live Shows</li>
			    			<li>Game Shows</li>
			    			<li>Audio Shows (for the visually impaired)</li>
			    			<li>Telemovies</li>
			    			<li>Documentaries</li>
			    			<li>Trailers</li>
			    			<li>Corporate Videos</li>
			    			<li>Commercial Videos</li>
			    			<li>Aerial Videos</li>
			    		</ul>
				</div></div>

				<div class="uk-width-medium-1-3 uk-width-small-1-1 uk-margin-large-top">
				    <div class="tm-services uk-contrast uk-panel uk-panel-box uk-panel-header uk-panel-box-secondary">
				    	<h3>Post-production</h3>
				    	<ul class="tm-services uk-list uk-list-striped">
			    			<li>Offline Editing</li>
			    			<li>Online Editing</li>
			    			<li>Colour Grading</li>
			    			<li>HD Upconversion</li>
			    			<li>Motion Graphics</li>
			    			<li>Visual Effects</li>
			    			<li>C.G.I.</li>
			    			<li>Audio Mastering (Dolby 5.1)</li>
			    		</ul>
			 	</div></div>
			
		</div>
	</div></div>

		<div class="uk-text-center uk-contrast uk-block uk-block-secondary">
		<div class="uk-margin-large-top uk-grid uk-container uk-container-center">
			<div class="uk-badge uk-badge-success uk-align-center uk-hidden-small">Hover please</div>
			<figure class="uk-overlay">
			<img src="/htdocs-images/services-images/abstract-world.png">
			<figcaption class="tm-services uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-hidden-small"><a href="#"></a>
				<h1><p>Local charm.</p><br><p>Global standards.</p></h1>
			</figcaption>
			<figcaption class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-visible-small">
				<h3><p>Local charm.</p><br><p>Global standards.</p></h3>
			</figcaption>
			</figure>
		</div></div>

		<?php include dirname(__FILE__).'/includes/footer.inc.php';?>

</body>