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
	<li class="first"> Social accounting matrices (GTAP)</li>
	<li>Hourly electricity generation (ENTSO-E, b)</li>
	<li>Cross-border electricity transmission capacities (ENTSO-E, c)</li>
	<li>Electricity generation capacities (Platts)</li>
	<li class="last">Electricity generation from renewable sources (different transmission system operators and ENTSO-E, a)</li>
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
<h3>Detailed model description</h3>
Abrell, J. and Rausch, S. (2015): Cross-Country Electricity Trade, Renewable Energy and Transmission Infrastructure Policy. Working Paper ETH Zurich.


<br class="clear" />
<br class="clear" />
<h2>
Data sources
</h2>
	<ul>
	<li class="first">ENTSO-E, a. Electricity generation from renewable sources - monthly production for a specific year (2013). <a href=data.php#entso_prod><span class='icon icon-signal' id='iconLink'></span></a></li>
	<li>ENTSO-E, b.  Hourly electricity generation (2013). <a href=data.php#entso_cons><span class='icon icon-signal' id='iconLink'></span></a></li>
	<li>ENTSO-E, c. Indicative values for Net Transfer Capacities (NTC) in Continental Europe. Accessed in 2011. <a href=data.php#entso_cap><span class='icon icon-signal' id='iconLink'></span></a></li>
	<li>GTAP. Narayanan, G., A. Badri, and R. McDougall, ed. 2012. Global Trade, Assistance, and Production: The GTAP 8 Data Base. Center for Global Trade Analysis, Purdue University.  <a href=data.php#gtap><span class='icon icon-signal' id='iconLink'></span></a></li>
	<li class="last">Platts. World Electric Power Plants Database (Version Spring 2013).  <a href=data.php#platts_powerplants><span class='icon icon-signal' id='iconLink'></span></a></li>
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
	include('floatingMenu.html');//This is the function to make the menu float
?>

</body>
</html>
