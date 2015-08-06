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
$model = 'crosstem';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>CROSs border Swiss TIMES Electricity Model (CROSSTEM)
</h1>

<p>
The Cross border Swiss TIMES Electricity Model (<i>CROSSTEM</i>) is a multiregional electricity model
of five countries, viz. Austria, Switzerland, Germany, France and Italy.
</p>

<figure>
<img src="images/models/crosstem1.png" width="300"alt="" />
 <figcaption>CROSSTEM regions</figcaption>
</figure>

<p>
The model optimises electricity supply for an exogenously given electricity demand over a long time horizon
(to account for long term policy goals and investment decisions) while simultaneously representing
sufficient intra-annual detail (i.e., seasonal, weekly and hourly) to account for variations in electricity
supply and demand.  The model encompasses the future electricity demand, a wide range of electricity
generation technologies and related electricity and environmental policies of all the five countries.
</p>


<figure>
<img src="images/models/crosstem2.png" width="460"alt="" />
 <figcaption>Intra-annual details in CROSSTEM</figcaption>
</figure>

<p>
The analytical framework used to develop the <i>CROSSTEM</i> model is the Integrated MARKAL/EFOM
System framework (TIMES). TIMES is a perfect foresight, technology rich, cost optimization modelling
framework, which identifies the "least-cost" combination of technologies based on their operation
characteristics to satisfy given demands under given technical and policy constraints
(Loulou, Remne, Kanudia, Lehtila and Goldstein, 2005). The <i>CROSSTEM</i> model is an extension to
the Swiss TIMES Electricity Model (Kannan and Turton, 2011).
</p>

</div><!--Closes box1-->


<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Technology characterization (capital and operational costs, efficiency, lifetime, availability)</li>
	<li>Renewable energy resources potential</li>
	<li>International energy prices (natural gas, oil, imported electricity, etc.)</li>
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
	<li class="first"> Annual Electricity generation mix</li>
	<li>Capacity investment decisions</li>
	<li>Final energy demand by fuel</li>
	<li>Hourly electricity demand and supply options</li>
	<li>CO2 emissions</li>
	<li>Average cost of electricity</li>
	<li>Hourly marginal costs of electricity</li>
	<li>Cross-border electricity trade patterns </li>
	</ul>
</div>

<br class="clear" /><br class="clear" />

<h2>
References
</h2>
The model has been used for various analyses including:
<ul>
	<li class="first"> Pattupara, R. and R. Kannan (2014, 22.05.2014). Alternative low carbon electricity
	pathways under a European nuclear phase-out - Achievement of Climate goals.
	Paper presented at the 53rd meeting of the EWGCFM & 2nd International Conference of RCEM, Chania, Greece.</li>
	<li class="last">Pattupara, R. and R. Kannan (2014, 31.10.2014). Exploring uncertainties in CCS -
	De-carbonization of the power sector & country-wise opportunities.
	Paper presented at the 14th IAEE European Energy Conference, Rome, Italy.</li>
	</ul>


<h2>
Sources
</h2>
	<ul>
	<li class="first"> Loulou, R., U. Remne, A. Kanudia, A. Lehtila and G. Goldstein (2005). Documentation for the TIMES model: Energy Technology Systems Analysis Programme.</li>
	<li>Kannan, R. and H. Turton(2011). Documentation on the Development of the Swiss TIMES Electricity Model (STEM-E). PSI Bericht Nr. 11-03. Villigen, Switzerland: Paul Scherrer Institute.</li>
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


