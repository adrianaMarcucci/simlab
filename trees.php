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
$model = 'trees';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>Transition of Regional Energy Systems (TREES)
</h1>

<p>
<i>TREES</i> is a System Dynamics based simulation platform (Sterman (2000) and Forrester (1961))
for actors in regional energy systems, such as cities / municipalities, utility companies, technology developers and investors.
<i>TREES</i>  can be used as a virtual energy system to test strategies for a successful energy transition
under different scenarios. A focus is set on the diffusion of system solutions for renewable energies,
such as prosumer systems, microgrids, energy hubs, storage, virtual power plants, and the causal
interrelations with business models and its impact on the achievement of energy system goals over time,
such as share of renewables, CO2-emission reduction, economics, or autarky levels.
</p>

<figure>
<img src="images/models/trees.png" width="500" alt="">
 <figcaption>Generic model structure</figcaption>
</figure>

<p>
<i>TREES</i>  is based on a socio-technical transition framework that consists of a set of
generic models that capture decisive processes of transition challenges in regional energy systems.
The generic models can be used for case specific applications.
The structure of the models is built based on insights from participatory workshops with stakeholders and
results from case specific applications. Technically, the model is a set of differential,
integral and auxiliary equations that is continuously simulated over the simulation time span
of 2000 to 2050.
</p>
</div><!--Closes box1-->

<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Regional potential and boundaries, such as physical limits or land use regulations</li>
	<li>Technology specific cost and social acceptance  </li>
	<li>Regional specific initial conditions for energy consumption, decentral production, central capacities, etc. </li>
	<li>Policies such as incentives, subsidies, tariffs, and charges </li>
	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs
	</h2>
	<ul>
	<li class="first"> Local energy production</li>
	<li>Share of decentral energy production</li>
	<li>Success and dominance shifts of business models</li>
	<li>Development of central energy infrastructure and costs as well as the diffusion of smart grid technology</li>
	</ul>
</div>
<br class="clear" />

<h2>
Literature
</h2>
	<ul>
	<li class="first">Sterman, J. (2000): Business Dynamics.McGraw-Hill.</li>
	<li>Forrester, J.W. (1961): Industrial Dynamics. Cambridge, MA: The M.I.T. Press.</li>
	<li class="last">Kirchner, A. et al (2012): Energy Perspectives for Switzerland until 2050 [German], Prognos AG,  Basel.</li>
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
