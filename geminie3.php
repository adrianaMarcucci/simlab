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
$model = 'gemini-e3';
include('models_sideBar.php');
include('models_infoBox.php');
?>


<div id="mainBox">

<div id="box1">
<h1>GEMINI-E3</h1>

<p>
<i>GEMINI-E3</i> (General Equilibrium Model of International-National Interactions between Economy, Energy and the Environment)
is a multi-country, multi-sector, recursive computable general equilibrium model. The model is specifically designed for the analysis
of climate change and energy policies. The model is a global one, as the future evolution of the Swiss economy obviously depends on the world economy,
and is built on the GTAP database and the Swiss input-output table.
</p>

<p>
The standard model is based on the assumption of total flexibility in all markets, both the macroeconomic markets such as the capital and the exchange
markets (with the associated prices being the real rate of interest and the real exchange rate, which are endogenous), and the microeconomic or sector
markets (goods, factors of production). For each sector, the model computes the demand for its production on the basis of household consumption,
government consumption, exports, investment, and intermediate uses. Total demand is then divided between domestic production and imports,
using the Armington assumption. Under this convention a domestic product is distinguished from an imported product of the same industry.
Production technologies are described using nested Constant Elasticity of Substitution (CES) functions.
</p>

<p>
In this model, time periods are linked through endogenous real interest rates that equate savings and investment.
Capital is not mobile across regions. National and regional models are linked by endogenous real exchange rates resulting from constraints on foreign
trade deficits or surpluses.  <i>GEMINI-E3</i> is recursive dynamic, with backward looking (adaptative) expectations.
The model computes also emissions of greenhouse gases (CO2, CH4, N2O and fluorinated gases).
</p>

<p>
Since 20 years, <i>GEMINI-E3</i> has been used extensively to simulate national and international climate
policies, more than 20 scientific publications have been done using <i>GEMINI-E3</i>
(see <a href="http://gemini-e3.epfl.ch/" target=_blank>http://gemini-e3.epfl.ch/</a>).
<i>GEMINI-E3</i> was involved in several EU projects and in the Energy Modeling Forum. <i>GEMINI-E3</i> has recently been extended to analyse adaptation strategies to alleviate impacts of climate change
on health, energy sector, agriculture, water and coastal zones and islands.
</p>
</div><!--Closes box1-->

<br class="clear" />
<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Social accounting matrices </li>
	<li>Energy balance sheets</li>
	<li>GHG emissions database</li>
	<li>Power plant capacities</li>
	<li>Elasticities</li>
	<li class="last">Population</li>
	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs genetic
	</h2>
	<ul>
	<li class="first"> Macroeconomic aggregates (GDP, imports, exports, consumption, ...)</li>
	<li>Welfare</li>
	<li>International trade matrices</li>
	<li>Production, demand and price by sectors
	<li>Exchange rates, CO2 prices (tax or/and permits)</li>
	<li>Energy consumption in toe</li>
	<li class="last">GHG emissions in CO2-eq</li>
	</ul>
</div>

<br class="clear" />

<h2>
Applications and references
</h2>


<h3>Detailed model description</h3>
<ul>
<li class="first">
A. Bernard and M. Vielle, <i>GEMINI-E3, A General Equilibrium Model of International-National Interactions between Economy, Energy and the Environment</i>.
Computational Management Science, Volume 5, number 3, May 2008, pp 173-206.
</li>
<li>
A. Bernard and M. Vielle, <i>Measuring the Welfare Cost of Climate Change Policies: A Comparative Assessment Based on the Computable General Equilibrium Model GEMINI-E3</i>.
Environmental Modeling and Assessment, Volume 8, Number 3, pp 199-217, September, 2003.
</li>
</ul>

<h3>Representative Swiss applications</h3>
<ul>
<li class="first">
P. Thalmann and M. Vielle, <i>La Suisse sur la voie de la d&eacute;carbonisation profonde</i>. La Vie &eacute;conomique 6/2015.
</li>
<li>
A-K. Faust, C. Gonseth and M. Vielle, <i>The economic impact of climate driven changes in water availability in Switzerland</i>. Water Policy to appear 2015.
</li>
<li>
A. Sceia, J-C. Altamirano-Cabrera, M. Vielle and Nicolas Weidmann, <i>Assessment of Acceptable Swiss post-2012 Climate Policies</i>. Swiss Journal of Economics and Statistics, Volume 148, 2012, pp 347-380.
</li>
</ul>

<h3>Other representative studies</h3>
<ul>
<li class="first">
S. Joshi, M. Vielle, F. Babonneau, N. Edwards and P. Holden, <i>Physical and economic consequences of sea-level rise: A coupled GIS and CGE analysis under uncertainties</i>. Environmental and Resource Economics, accepted for publication, 2015.
</li>
<li>
A. Bernard and M. Vielle, <i>Assessment of European Union transition scenarios with a special focus on the issue of carbon leakage</i>. Energy Economics, Vol 31, Supplement 2, December 2009, pp S274-S284.
</li>
<li>
M. Vielle and L. Viguier, <i>On the climate change effects of high oil prices</i>. Energy Policy, Volume 35, Issue 2, pp 844-849, February, 2007.
</li>
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
