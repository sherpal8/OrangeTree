<?php 
	$page_id = 6; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>OrangeTree Production</title>

		<?php include dirname(__FILE__).'/includes/head.inc.php';?>

</head>
<body>

	<?php include dirname(__FILE__).'/includes/header.inc.php';?>

<!---START: for  medium screen-->
	<div class="uk-hidden-small uk-block uk-block-secondary">
	<div class="uk-container uk-container-center uk-contrast">
		<h1 class="tm-people uk-text-center">Product Reel</h1>
	</div></div>

<!--START: for small screen-->

	<div class="uk-visible-small tm-people-block uk-block uk-block-secondary">
	<div class="uk-container uk-container-center uk-contrast">
		<h1>Product Reel</h1>
	</div></div>

<!--iFrame-->
	<div class="uk-block uk-block-secondary">
	<div class="uk-container uk-container-center uk-contrast">

	<div class="uk-grid">

	<div class="uk-width-medium-1-2 uk-width-small-1-1 uk-margin-large-bottom uk-responsive-width">
		<div class="tm-product-responsive">
			<iframe class="tm-product-responsive" name="box" src="https://www.youtube.com/embed/b07XHFkFsWM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div></div>

<!--list of videos-->

		<div class="uk-width-medium-1-2 uk-width-small-1-1">

			<div class="uk-grid">
				<div class="uk-width-1-3 tm-product-background-1"><a href="https://player.vimeo.com/video/264551767" target="box"><img class="uk-thumbnail text-align-center" src="/htdocs-images/product-images/test-file.webp"></a></div>
				<div class="uk-width-2-3"><h4>Test-file</h4><p>Lorem ipsum dolor capitum.</p></div>
			</div>
			
			<hr/>

			<div class="uk-grid">
				<div class="uk-width-1-3 tm-product-background-2"><a href="https://player.vimeo.com/video/264551767" target="box"><img class="uk-thumbnail" src="/htdocs-images/product-images/test-file.webp"></a>
				</div>
				<div class="uk-width-2-3"><h4>Test-file</h4><p>Lorem ipsum dolor capitum.</p></div>
			</div>

			<hr/>

			<div class="uk-grid">
				<div class="uk-width-1-3 tm-product-background-3"><a href="https://player.vimeo.com/video/264551767" target="box"><img class="uk-thumbnail" src="/htdocs-images/product-images/test-file.webp"></a>
				</div>
				<div class="uk-width-2-3"><h4>Test-file</h4><p>Lorem ipsum dolor capitum.</p></div>
			</div>

			<hr/>

			<div class="uk-grid">
				<div class="uk-width-1-3 tm-product-background-4"><a href="https://player.vimeo.com/video/264551767" target="box"><img class="uk-thumbnail" src="/htdocs-images/product-images/test-file.webp"></a>
				</div>
				<div class="uk-width-2-3"><h4>Test-file</h4><p>Lorem ipsum dolor capitum.</p></div>
			</div>


	</div>
	</div></div></div>

	<!--Award-->

	<div class="uk-block uk-block-secondary tm-product-award">
	<div class="uk-container uk-container-center uk-contrast uk-margin-large-top">

	<div class="uk-clearfix uk-flex uk-flex-middle uk-flex-center">

	<div class="uk-float-left">
		<blockquote><p class="uk-h3"><i class="uk-icon-quote-left uk-icon-medium"></i>
			To have the team recognised for years of sincerity & hardwork <br/> - feeling humbled
			<i class="uk-icon-quote-right"></i></p>
			<small>Pn. Nor Aishah Shahidi<br/>
			Chief Operations Officer - OrangeTree Production</small>
		</blockquote>
	</div>

	<div class="uk-float-right uk-text-center uk-margin-top">
		<a href="https://ms.wikipedia.org/wiki/My_Sweet_Lavender">
		<div>
			<img src="/htdocs-images/product-images/Anugerah-Skrin-2017.png">
			<img src="/htdocs-images/product-images/pemenang-award.png">
		</div>
		<div class="uk-contrast">Drama Rantaian Terbaik - My Sweet Lavender 2017</div>
	</a>
	</div>

	</div>

	</div></div>


	<?php include dirname(__FILE__).'/includes/footer.inc.php';?>

</body>