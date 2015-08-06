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
$model = 'scs';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>SCS (Super computing systems) energy model
</h1>

<p>
<i>SCS</i> is a year-around simulation of the Swiss electric energy supply that allows to calculate
and compare different energy scenarios, including the scenarios of the Bundesrat.
Main focus is on energy and power balance. The model is open to everybody and completely transparent
in order to allow for reviews and improvement by the community.
All rights are with SCS AG but licenses for research are provided.
</p>

<p>
The model's main components are:
<ol>
<li>An extensive set of parameters that can be adjusted in order to describe scenarios</li>
<li>Models of all types of electric energy supply, including water (dam, pumps), river flow, nuclear, gas, biomass, solar, wind with their respective real world parameters such as water flow, meteo conditions, etc.</li>
<li>An abstraction of the 7 layers of the grid in order to model electrical losses</li>
<li>Models of different consumption including time-variable consumption to allow for modeling of short time load-shifting </li>
<li>Models of electrical energy storages: pump stations, batteries</li>
<li>Meteorological information (wind and solar) for 40 geographical locations within the country as well as for 10 different years for sensitivity analysis</li>
<li>Basic economic calculations in order to estimate the economic impact of a scenario</li>
</ol>
</p>

<h2>Model structure</h2>
<p>
The model allows simulating a specific year in 15min time resolution. All available power sources
are operated by a priority list, giving priority to inflexible generation such as PV, wind,
river flow etc. - pump storage and batteries are operated such as to reach an maximum degree
of autonomy within the borders of Switzerland. Water dam storage is considered the most valuable
energy form since it is a seasonal storage; it is therefore used mainly to provide energy in winter
and spring.
</p>

<h2>Technology data</h2>
<p>
The model is implemented in Matlab. The simulation of an entire year takes several
seconds on an ordinary PC and extensive chart and graph material is provided.
All data has been researched by SCS and is publicly available.
The meteorological data is provided by Meteonorm; this data is the only licence-restricted
data within the model.
</p>


<h2>
References
</h2>

Some scenarios als well as more detailed explanations in German are provided <a href="http://www.scs.ch/fileadmin/images/tg/energie.pdf" target=_blank>here</a>.
</div><!--Closes box1-->

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
?>

</body>
</html>
