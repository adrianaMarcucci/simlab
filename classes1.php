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
	<link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />
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
include('models_sideBar.php');
?>

<div id="mainBox">

<h1>
Model classification
</h1>

<p>
Energy models aim at representing one or various aspects of the energy system, such as,
energy production and technological development; energy consumption and consumer behavior;
and linkages with the economy, other sectors and the climate.
</p>

<p>
Models can be classified according to different dimensions, including: analytical approach; general purpose;
methodology; geographical and sectoral coverage and time horizon.
</p>


<table class="column-options">
  <col width="50">
  <col width="600">
<tr>
	<th>Dimension</th>
	<th>Types</th>
</tr>

<tr>
	<td>Analytical approach</td>

<td>
<p><model>Top-down models</model> include a detailed representation of the economy and model
the energy sector with an aggregate production function. General equilibrium models are typical top-down models.
</p>

<p><model>Bottom-up models </model> feature a detailed
description of the energy technologies and have exogenous assumptions on the development of the
economy.
</p>

<p><model>Hybrid models</model> aim at concealing top-down and bottom-up approaches by combining them.
</p>

<p><model>System dynamics</model> is a methodology to model systems using stocks and flows and emphasizing
their feedback loops.
</p></td>
</tr>

<tr class="odd">
	<td>Purpose</td>
	<td>

<p>Models are usually developed to address specific questions and are therefore only suitable
for the purpose they were designed for. General purposes reflect how the future is addressed in the
model.</p>

<p> <model>Forecasting models</model> extrapolate the historical trends into the future to
forecast the development of the energy system.
</p>
<p> <model>Exploring the future</model> is done by scenario analysis, in which a limited number of "intervention"
scenarios are compared with a "business as usual" reference scenario.
</p>
<p> <model>"Backcasting" models</model> construct visions of desired futures by interviewing experts in the fields and subsequently look at
what needs to be changed to accomplish such futures.
</p>
</td>

<tr>
	<td>Methodology</td>
  	<td><p><model>Econometric models</model> are frameworks that use statistical methods to extrapolate
past market behavior into the future.</p>

<p><model>Optimization</model> techniques are used in a large range of energy system models to determine an optimal
development or state of the economy or the energy system. Partial, general equilibrium and optimal
growth models use optimization techniques. Partial equilibrium models focus on equilibria in parts
of the economy, such as the equilibrium between energy demand and supply.
General equilibrium models are particularly concerned with the conditions which allow for
simultaneous equilibrium in all markets.  Optimal growth models maximize intertemporal welfare
subject to equilibrium constraints and, in most cases, assume perfect foresight about future
production and consumption.</p>

<p><model>Simulation models</model> are descriptive models based on a logical
representation of a system.
</p></td>
</tr>
<tr class="odd">
	<td>Deterministic vs. stochastic</td>
	<td>A <model>deterministic</model> model has no probabilitic elements while in a <model>stochastic</model> one or more variables are random. A stochastic model estimates the probability of ocurrance of different outputs.
	</td>
</tr>
<tr>
	<td>Geographical coverage</td>
	<td>Single region, multi-region and global</td>
</tr>
<tr class="odd">
	<td>Sectoral coverage</td>
	<td>Single and multi-sectoral</td>
</tr>
<tr>
	<td>Static vs. dynamic</td>
	<td>A <model>dynamic</model> model represents the time dependent changes in the system while a <model>static</model> model is time-invariant.</td>
</tr>
<tr class="odd">
	<td>Time horizon</td>
	<td>Short and long-time horizon</td>
</tr>
</table>

</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->
</body>
</html>
