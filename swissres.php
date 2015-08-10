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
	<link rel="stylesheet" href="fileadmin/css/tooltip.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div id="outer">

<?php
$current_page = 'models';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$model = 'swissres';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>Model of the Swiss Residential Sector
</h1>

<p>
A bottom-up simulation model is being prepared on the use of fuel/heat and electricity in the
Swiss residential sector. So far, the development focusses on thermal energy use for space
heat and hot water. The model is composed of three parts, i.e. i) quantitative description of
the existing residential building stock, ii) preparation of an inventory of energy efficiency
measures and iii) simulation of future energy use depending on the boundary conditions.
Within the first part (i), the residential building stock is characterized in terms of single
versus multi-family dwellings, construction periods, envelope factor and floor area. The total
external surface is broken down into external walls, windows, roofs and ground area.
By accounting for representative insulation values of each of these components, the energy demand
of the dwellings per construction period can be reconstructed. This part of the model has been
finalized while work is ongoing on the subsequent two parts (ii and iii).
</p>
</div><!--Closes box1-->

<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Physical data on the residential sector per canton (from a variety of sources)</li>
	<li>Physical data and cost data of partially implemented and of novel energy efficiency measures</li>
	<li>Exogenous data on the future development of floor space</li>
	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs
	</h2>
	<ul>
	<li class="first"> Final energy demand (per year) per building type and age group</li>
	<li>Costs (investment, energy costs and other costs)</li>
	<li>Scenario projections</li>
	</ul>
</div>

</div><!--Closes mainBox-->
</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->

<!--SCRIPTS: Include scripts at the end so the pages load faster-->
<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
	$containers = array("box1","box2","box3");
	include('glossaryTooltip_include.php'); //This activates the glossary tooltip, requires jquery.min.js
	include('floatingMenu.html');//This is the function to make the menu float
?>

</body>
</html>
