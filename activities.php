<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Design by TEMPLATED
	http://templated.co
	Released for free under the Creative Commons Attribution License

	Name       : Serious Face
	Version    : 1.0
	Released   : 20130222

-->
<head>
	<?php
	include('global_head_include.php');//This is the heading for all pages
	?>
	<link rel="stylesheet" href="fileadmin/css/timeline.css"  rel="stylesheet" class="lazyload" charset="utf-8">

</head>
<body>

<div id="outer">

<?php
$current_page = 'activities';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$current_page = 'activities';
include('activities_sideBar.php');
?>

<div id="mainBox">

<!--<div id = "timeframe">
<iframe src='//cdn.knightlab.com/libs/timeline/latest/embed/index.html?source=1cg0QwawLpy147K7YxoIcW4rKGbLxLmGQ6uEu4lP0yGM&font=Georgia-Helvetica&maptype=toner&lang=en&start_zoom_adjust=2&height=650' width='100%' height='650' frameborder='0'></iframe>
</div>-->

<div id="my-timeline"></div>

<!--SCRIPTS: Include scripts at the end so the pages load faster-->
<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>
<script src="fileadmin/java/timeline-min.js" class="lazyload" charset="utf-8"></script>

<!-- HTML5 shim, for IE6-8 support of HTML elements--><!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<script type="text/javascript" src="fileadmin/java/storyjs-embed-cdn.js"></script>
<script>
	$(document).ready(function() {
		createStoryJS({
			type:       'timeline',
			width:      '700',
			height:     '600',
			source:     'fileadmin/timeline.json',
			//start_zoom_adjust:  '3',
			//start_at_end:       false,                          //OPTIONAL START AT LATEST DATE
            start_at_slide:     '1',                            //OPTIONAL START AT SPECIFIC SLIDE
            //start_zoom_adjust:  '3',                            //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
           	hash_bookmark:      true,                           //OPTIONAL LOCATION BAR HASHES
            //font:               'Bevan-PotanoSans',             //OPTIONAL FONT
            embed_id:   'my-timeline'
			});
	});
</script>
<!-- END TimelineJS -->


</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->
</body>
</html>
