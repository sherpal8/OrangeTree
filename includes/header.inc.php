<!--start of the header-->

<nav class="tm-navbar uk-navbar">
	<div class="uk-container uk-container-center uk-grid">

		<span class="uk-navbar-brand uk-hidden-small">
	    	<svg width="100" height="100">
			<circle cx="75" cy="42" r="20" stroke="orange" stroke-width="8" fill="yellow">
			Sorry, your browser does not support inline SVG.</circle>
			</svg>
		</span>

	<ul class="uk-navbar-nav uk-hidden-small">
      <?php include dirname(__FILE__).'/menu.inc.php'; ?>
	</ul>

	<div class="uk-navbar-flip uk-hidden-small">
    	<ul class="uk-navbar-nav">
        <li><a href=""><i class="tm-icon-instagram uk-icon-small uk-icon-instagram"></i></a></li>
        <li><a href=""><i class="tm-icon-fb uk-icon-small uk-icon-facebook-square"></i></a></li>
		</ul>
	</div>

<!--for small screen-->

    <a href="#offcanvas-nav" class="uk-navbar-toggle uk-contrast uk-visible-small" data-uk-offcanvas></a> 
    <div class="uk-navbar-content uk-navbar-center uk-visible-small">
    	<svg width="100" height="100">
			<circle cx="40" cy="42" r="20" stroke="orange" stroke-width="8" fill="yellow" />
			Sorry, your browser does not support inline SVG.
		</svg>
	</div>
	</div></nav>

	<div id="offcanvas-nav" class="uk-offcanvas">
 		<div class="uk-offcanvas-bar">
 			<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
    		<?php include dirname(__FILE__).'/menu.inc.php'; ?>
			</ul>
 		</div>
	</div>

<!--end of the header-->
