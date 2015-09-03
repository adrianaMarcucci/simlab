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
$current_page = 'eduWS';
include('activities_sideBar.php');
?>

<div id="mainBox">

<h1>Educational Workshops</h1>
<p>
SimLab "Educational Workshops" are aimed at promoting the exchange of modelling knowledge for socio-economic,
energy-related research in Switzerland. They further intend to strengthen the network of research groups in
the Swiss energy modelling community.  The workshops give young researchers (PhDs and PostDocs) and
interested researchers the opportunity to learn about existing modeling techniques and frameworks,
to appreciate their usefulness and limitations in research, and to present and discuss their on-going work.
</p>

<p>
"Educational Workshops" are half-day events held in an informal setting that take place in differing locations
across Switzerland. They typically consist of a main lecture given by an expert from one of the Swiss modeling
teams and a series of presentations by young researchers (or interested researchers).
</p>

<h2>1st Educational Workshop, 1st of October, 2015, ETH Zurich</h2>

<h3>Program</h3>

<table class='column-options'>
<col width='95'>
<col width='560'>
<tr class='even'>
<td>8:30 - 9:00</td>
<td>Welcome and registration</td>
</tr>

<tr class='odd'>
<td>9:00 - 10:00</td>
<td>Introduction to computable general equilibrium modeling<br><strong1>Renger van Nieuwkoop</strong1>, ETH Zurich</td>
</tr>

<tr class='even'><td>10:30 - 10:45</td><td>Break</td></tr>

<tr class='odd'>
<td>10:45 - 11:30</td>
<td>Equity and efficiency of climate policy under evolving consumption patterns: the case of China
<br><strong1>Giacomo Schwarz</strong1> (ETH Zurich), Justin Caron, and Valerie Karplus</td></tr>

<tr class='even'>
<td>11:30 - 12:15</td>
<td>Long-term evolution of the Swiss electricity system under a European electricity market:
Development and application of a cluster of TIMES electricity models
<br><strong1>Rajesh Pattupara</strong1>, Kannan Ramachandran, Paul Scherrer Institute</td></tr>

<tr class='odd'>
<td>12:15 - 13:00</td>
<td>Swissmod: A model of the Swiss electricity market
<br><strong1>Ingmar Schlecht</strong1>, UniBasel</td></tr>

</table>

<br>
<strong1>Registration</strong1>: By email at <a href=mailto:simlab-at-ethz.ch>simlab-at-ethz.ch</a> until 21.09.2015


<!--This is the timeline version-->
<!--<div id="my-timeline"></div>-->

<!--SCRIPTS: Include scripts at the end so the pages load faster-->
<!--<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>
<script src="fileadmin/java/timeline-min.js" class="lazyload" charset="utf-8"></script>

<!-- HTML5 shim, for IE6-8 support of HTML elements--><!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--
<script type="text/javascript" src="fileadmin/java/storyjs-embed-cdn.js"></script>
<script>
	$(document).ready(function() {
		createStoryJS({
			type:       'timeline',
			width:      '700',
			height:     '600',
			source:     'fileadmin/eduWS.json',
			//start_at_end:       false,                          //OPTIONAL START AT LATEST DATE
            //start_at_slide:     '1',                            //OPTIONAL START AT SPECIFIC SLIDE
            //start_zoom_adjust:  '3',                            //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
           	hash_bookmark:      true,                           //OPTIONAL LOCATION BAR HASHES
            //font:               'Bevan-PotanoSans',             //OPTIONAL FONT
            embed_id:   'my-timeline'
			});
	});
</script>-->

<!-- END TimelineJS -->


</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->

<?php
	include('floatingMenu.html');//This is the function to make the menu float
?>
</body>
</html>
