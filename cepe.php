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
$model = 'cepe';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">

<h1>CEPE
</h1>

<p>
<i>CEPE</i> (Computable General Equilibrium Model for Energy Policy and Economics) is a static
model of the world economy with a regional focus on Western Europe, in particular on Switzerland.
<i>CEPE</i> is designed to assess the implications of environmental and energy regulation in
particular in the electricity sector. While the main economic sectors are included, the electricity
sector is depicted in a detailed manner, i.e., with an hourly resolution for demand. Moreover,
special emphasis is put on the role of cross-border electricity trade and the restrictions imposed
by the trans-European transmission grid. As a macro-economic model, <i>CEPE</i>  includes
households which provide labor and capital. These factors are used by firms to produce
commodities which are either used by domestic industries or households or exported to other regions.
Given these features, <i>CEPE</i> is in particular well suited to analyze the macro-economic
consequences of regulatory instruments that affect the electricity sector such as emission trading
and renewable energy support schemes. Moreover, the role of and impacts on trans-European
electricity trade can be studied.
</p>

<figure>
<img src="images/models/cepe.png" width="320" height="320" alt="" />
<figcaption>2010 network capacities</figcaption>
</figure>
</div><!--Closes box1-->
<br class="clear" />

<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Social accounting matrices (GTAP, Narayanan et al. 2008)</li>
	<li>Hourly electricity generation (ENTSO-E, 2013a)</li>
	<li>Cross-border electricity transmission capacities (ENTSO-E, 2011)</li>
	<li>Electricity generation capacities (Platts, 2013)</li>
	<li class="last">Electricity generation from renewable sources (different transmission system operators, ENTSO-E, 2013b)</li>
	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs genetic
	</h2>
	<ul>
	<li class="first"> Macroeconomic aggregates (GDP, economic welfare)</li>
	<li>Production by economic sector and final demands</li>
	<li>Hourly electricity generation by technology</li>
	<li class="last">International trade (hourly basis for electricity)</li>
	</ul>
</div>

<br class="clear" />

<h2>
References
</h2>
For a detailed model description and sample application:
Abrell, J. and Rausch, S. (2015): Cross-Country Electricity Trade, Renewable Energy and Transmission Infrastructure Policy. Working Paper ETH Zurich. (LINK)


<br class="clear" />
<br class="clear" />
<h2>
Sources
</h2>
	<ul>
	<li class="first">ENTSO-E. 2011. <a href="https://www.entsoe.eu/publications/market-reports/ntc-values/ntc-matrix/Pages/default.aspx" target="_blank">Indicative values for Net Transfer Capacities (NTC) in Continental Europe</a></li>
	<li>ENTSO-E. 2013a. <a href="https://www.entsoe.eu/data/data-portal/consumption/ENTSO-E" target="_blank">Load data</a></li>
	<li>ENTSO-E. 2013b.  <a href="https://www.entsoe.eu/data/data-portal/production/Pages/default.aspx" target="_blank"> Monthly production for a specific year</a></li>
	<li>Narayanan, G., A. Badri, and R. McDougall, ed. 2012. Global Trade, Assistance, and Production: The GTAP 8 Data Base. Center for Global Trade Analysis, Purdue University.</li>
	<li class="last">Platts. 2013. "World Electric Power Plants Database (Version Spring 2013)"</li>
	</ul>

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
