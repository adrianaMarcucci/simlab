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
$model = 'swissmod';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>Swissmod
</h1>

<p>
<i>Swissmod</i> is a numerical model of the of the Swiss electricity market. It covers the Swiss
high voltage transmission network (220 and 380kV) as well as a detailed representation of the
Swiss hydropower structure. The latter includes specific characteristics of run-of-river,
yearly storage and pumped storage power plants and their hydraulic coupling via the Swiss river
and water stream system. Although the regional focus of <i>Swissmod</i> is Switzerland, surrounding
countries are included to capture the impact of European market developments on the Swiss
electricity system. In total <i>Swissmod</i> covers about 200 nodes within Central Europe, about 150
of which are within Switzerland, and about 400 transmission lines.
</p>

<figure>
<img src="images/models/swissmod.png" width="450" alt="" />
<figcaption>Swiss electricity network in 2010</figcaption>
</figure>

<p>
With its current model structure <i>Swissmod</i> is well suited to provide numerical
quantifications of different development scenarios for the Swiss electricity markets given
assumptions on the market and regulatory design, renewable support, or generation and transmission
investments.
</p>
</div><!--Closes box1-->

<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Hydraulic system of Switzerland (SwissTopo) </li>
	<li> Electricity transmission grid (Swissgrid, 2012) and international exchange capacities (ENTSO-E, 2013)</li>
	<li> Conventional (BFE, 2013) and hydro generation capacities (BFE, 2012)</li>
	<li>Electricity demand (ENTSOE, 2015; SwissGrid, 2015)</li>

	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs
	</h2>
	<ul>
	<li class="first"> Hourly generation by power plant</li>
	<li>Hourly electricity prices </li>
	<li>Electricity flows on the Swiss transmission grid</li>
	</ul>
</div>

<br class="clear" />

<h2>
References
</h2>
For a detailed model description:
Schlecht, I. and Weigt, H. (2014): Swissmod: A Model of the Swiss Electricity Market. FoNEW Discussion Paper 2014/01. <a href = "https://fonew.unibas.ch/fileadmin/fonew/redaktion/Paper/FoNEW_2014_01.pdf">Download</a>

<br class="clear" />
For a sample application:
Schlecht, I. and Weigt, H. (2014): Linking Europe: The Role of the Swiss Electricity Transmission Grid until 2050. FoNEW Discussion Paper 2014/03. <a href="https://fonew.unibas.ch/fileadmin/fonew/redaktion/Paper/FoNEW_2014_03.pdf">Link</a>

<br class="clear" />
<br class="clear" />
<h2>
Literature
</h2>
	<ul>
	<li class="first">Swissgrid (2012). <a href="http://www.swissgrid.ch/dam/swissgrid/company/publications/de/Energiewende\_de.pdf" target="_blank">Energiewende. Uebertragungsnetz mit Schluesselrolle. Netzdaten 2012.</a></li>
	<li>Swissgrid (2015). <a href="http://www.swissgrid.ch/dam/dataimport/energy_data/en/EnergieUebersichtCH_2014.xls" target="_blank">Energy Statistics Switzerland 2014</a></li>
	<li>ENTSO-E (2013). Yearly Statistics & Adequacy Retrospect 2012. Brussels: European Network of Transmission System Operators for Electricity.</li>
	<li>ENTSO-E (2015). <a href="https://www.entsoe.eu/data/data-portal/consumption/Pages/default.aspx" target="_blank">Consumption Data</a></li>
	<li>BFE (2013). Schweizerische Elektrizitaetsstatistik 2012. Swiss Federal Office of Energy.</li>
	<li class="last">BFE (2012). <a href="http://www.bfe.admin.ch/geoinformation/05061/05249/index.html?lang=de" target="_blank"> Statistik der Wasserkraftanlagen (WASTA). Swiss Federal Office of Energy</li>
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
