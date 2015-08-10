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
<i>TREES</i> is a simulation platform for the strategic planning of regional energy systems,
which is developed by the Future Energy Systems group at the Institute of Sustainable Development
of ZHAW. The simulation model addresses the dynamic interactions between technical, economic,
legislative, and social factors emerging in regional energy systems in a generic manner.
A System Dynamics (Sterman (2000) and Forrester (1961)) approach is used. Business models and
region specific circumstances are the central coordination mechanism in the model.
The model provides an endogenous simulation of likely transition patterns of decentralization
tendencies, central capacity expansion and smart technology diffusion.
The simulation horizon is from 2000 to 2050. The essential variables of the generic system
dynamics model are shown in the Figure.
</p>

<figure>
<img src="images/models/trees.png" width="400" alt="">
 <figcaption>Generic model structure</figcaption>
</figure>

<p>
The model is based on real data from public sources (Kirchner, 2012) and will be adapted
to the case specific circumstances with participative workshops applying group model building
techniques (Richardson, 1995) and local data. Strategies and development paths can be tested
and varied for different scenarios. For example the influence of social acceptance on timely
capacity development or the influence of a rising share of decentral energy supply systems
on central energy supply or grid charges and tariffs. Simulation results and the gained insights
will be useful for political decision-makers in regional energy systems, utility companies and
technology developers.
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
	<li>Kirchner, A. et al (2012): Energy Perspectives for Switzerland until 2050 [German], Prognos AG,  Basel.</li>
	<li class="last">Richardson, G.P. and D.F. Andersen (1995): Teamwork in group model building. System Dynamics Review, 11(2): p. 113-137.</li>
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
