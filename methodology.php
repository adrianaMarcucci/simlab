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
$current_page = 'method';
include('models_sideBar.php');
?>

<div id="mainBox">

<p><model>Econometric models</model> are frameworks that use statistical methods to extrapolate
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
</p>

</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->
</body>
</html>
