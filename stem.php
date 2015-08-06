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
$model = 'stem';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>Swiss TIMES Energy system Model (STEM)
</h1>

<p>
The Swiss TIMES energy system model (<i>STEM</i>) is a comprehensive and flexible model of
the Swiss energy system.  It is a bottom-up, technology-rich model built in the Integrated
MARKAL EFOM System (TIMES) framework (Loulou et al., 2005). The whole energy system of Switzerland
is represented from resource supply to end-use energy service demands (ESDs), such as space heating,
and personal/freight transport.  The model has a high level of technology detail, a long time
horizon (2010-2100), and an hourly representation of weekdays and weekends in three seasons.
The model is used to identify the least-cost combination of technologies and fuels to meet
exogenously given ESDs while fulfilling other technical, environmental and policy constraints.
The representation of the entire energy system enables STEM to determine the lowest-cost
configuration of the energy system accounting for cross-sectoral interactions and competition
for the allocation of energy carriers (for instance, the allocation of biomass to electricity,
heat or transport).
</p>

<figure>
<img src="images/models/stem.png" width="500"alt="" />
 <figcaption>Generic model structure</figcaption>
</figure>
</div><!--Closes box1-->


<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Socio-economic drivers for energy service demands (GDP, population, household, heating/ air-conditioned floor area)</li>
	<li>Technology characterization (capital and operational costs, efficiency, lifetime, lead time, availability)</li>
	<li>Renewable energy resources potential</li>
	<li>International energy prices (natural gas, oil, imported electricity, etc.)</li>
	<li>Energy conservation potentials (facade/roof insulation, window double glazing/replacement)</li>
	<li>Taxes/subsidies (CO2 price, transport fuel tax, heating fuel surcharge, feed in tariff, capital subsidy)</li>
	<li>Policies (e.g. nuclear phase out, emission targets, energy security objectives)</li>
	<li>Discount rate</li>
	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs
	</h2>
	<ul>
	<li class="first"> Fuel use in power sector (PJ)</li>
	<li>Renewable electricity generation (GWh)</li>
	<li>Hourly dispatch of electricity supply</li>
	<li>International electricity trade volume-  import and exports (GWh)</li>
	<li>Installed generation Capacity (GW)</li>
	<li>Sectoral electricity demands (GWh)</li>
	<li>Energy system cost by sector and application (fuel, investment, etc.) (CHF)</li>
	<li>CO2 Marginal costs (CHF/t-CO2)</li>
	<li>Number of cars by technology/fuel type</li>
	<li>Car fleet CO2 intensity (g-CO2/kWh)</li>
	<li>Fuel demand for car and non-car fleets (PJ)</li>
	<li>Primary energy demand (PJ)</li>
	<li>Final energy supply (by end use sectors, and fuel) (PJ)</li>
	<li>Energy use by end use applications </li>
	<li>CO2 emissions (Mt-CO2)</li>
	<li>Heat and electricity generation from CHPs (PJ)</li>
	<li>Fuel use in distributed / central CHPs</li>
	</ul>
</div>

<br class="clear" /><br class="clear" />

<h2>
References
</h2>
	<ul>
	<li class="first"> Kannan R., H. Turton (2014) Switzerland energy transition scenarios: Development and application of the Swiss TIMES Energy system Model (STEM), Final Report to Swiss Federal Office of Energy, Bern <a href="http://www.bfe.admin.ch/forschungewg/index.html?lang=de&dossier_id=02886" target="_blank">Link</a></li>
	<li>Kannan, R., Turton, H. (2014). Interplay between electricity and transport sectors: Integrating the Swiss car fleet and electricity system, IAEE European Energy Conference, Rome, Italy</li>
	<li>Kannan, R., Turton, H. (2014). Transition to a secure and low carbon Swiss energy system, 66th Semi-Annual IEA-ETSAP meeting, Copenhagen, Denmark</li>
	<li>Loulou R., Remne U., Kanudia A., Lehtila A., and Goldstein G. (2005) Documentation for the TIMES Model, Energy Technology Systems Analysis Programme</li>
	<li class="last">Swiss TIMES Energy system Model (STEM) documentation <a href="http://www.psi.ch/eem/stem" target="_blank">Link </a></li>
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


