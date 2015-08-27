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
$model = 'swissmerge';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>Swiss MERGE-ETL (Model for Evaluating Regional and Global Effects of GHG reductions policies)
</h1>

<p>
<i>MERGE-ETL</i> is an integrated assessment model combining a bottom-up description of the energy system
disaggregated into electric and non-electric sectors, a top-down model based on a macroeconomic
production function, and a simplified climate cycle. MERGE-ETL has been progressively developed
from the MERGE model of Manne et al. (1995) (Kypreos 2007; Magne et al. 2010; Marcucci and Turton 2011;
Marcucci, 2012).
</p>

<figure>
<img src="images/models/merge_res.png" width="480"alt="" />
 <figcaption>Reference energy system MERGE-ETL</figcaption>
</figure>


<p>
The integrated approach in <i>MERGE-ETL</i> accounts for linkages between economic activity and
the energy sector, such that the model determines endogenously energy demands, prices, technology choice
and economic output. In addition, technological learning is represented in MERGE-ETL by two-factor
learning curves for technology investment costs, applying the paradigm of technology clusters described
in Seebregts et al. (2000).
</p>

<p>
The regional disaggregation in the Swiss MERGE-ETL includes 10 geopolitical regions: Europe, Switzerland, Russia, Middle East, India, China, Japan, USA, Canada and New Zealand and the Rest of the world. (Marcucci, 2012).
</p>

<figure>
<img src="images/models/merge_regions.png" width="460"alt="" />
 <figcaption>MERGE-ETL regions</figcaption>
</figure>


</div><!--Closes box1-->


<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Technology characterization (capital and operational costs, efficiency, lifetime, availability)</li>
	<li>Renewable energy resources potential</li>
	<li>Resource availability: supply curves for non-renewable resources and potentials for renewables</li>
	<li>Emission factors by energy carrier</li>
	<li>Elasticities of substitution</i>
	<li>Population</i>
	<li>Potential GDP</i>
	<li>Autonomous energy efficiency improvements</i>
	<li>Taxes/subsidies</li>
	<li>Policies (e.g. nuclear phase out, emission targets, energy security objectives)</li>
	<li>Discount rate</li>
	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs
	</h2>
	<ul>
	<li class="first"> Energy demand [EJ and PWh]</li>
	<li>Annual electricity generation mix [PWh] and non-electric energy production [EJ]</li>
	<li>Realized GDP [trillion dollars]</li>
	<li>Resource use and trading [EJ]</li>
	<li>Energy cost [dollars per EJ or PWh]</li>
	<li>GHG emissions [Gt CO2, CH4 and N2O] and atmospheric concentration [ppm, ppv]</li>
	<li>Carbon price [dollar per ton of CO2]</li>
	<li>Temperature increase [degrees]</li>
	</ul>
</div>

<br class="clear" /><br class="clear" />

<h2>
References
</h2>

<h3>Model description</h3>

<ul>
	<li class="first"> Kypreos, Socrates (2007). A MERGE model with endogenous technological change and the cost of carbon stabilization. Energy Policy 35: 5327-5336.</li>
	<li>Magne, Bertrand, Socrates Kypreos, and Hal Turton (2010). Technology options for low stabilization pathways with MERGE. The Energy Journal. Special Issue 1 31: 83-108.</li>
	<li>Manne, Alan, Robert Mendelsohn, and Richard Richels (1995). MERGE: A model for evaluating regional and global effects of GHG reduction policies. Energy Policy 23: 17-34. </li>
	<li> Marcucci, A. and H. Turton (2012): The MERGE-ETL model: Model documentation. Villigen, Switzerland: Paul Scherrer Institute. <a href='http://www.psi.ch/eem/ModelsEN/2012MergeDescription.pdf' target=_blank><span class='icon icon-external-link' id='iconLink'></span></a></li>
	<li class="last"> Marcucci, A. and H. Turton (2014): The MERGE-ETL model: 2014 Assumptions and model calibration. Villigen, Switzerland: Paul Scherrer Institute. <a href='http://www.psi.ch/eem/ModelsEN/2014MergeCalibration.pdf' target=_blank><span class='icon icon-external-link' id='iconLink'></span></a></li>
	</ul>

</ul>

<h3>Applications</h3>

<ul>
	<li class="first"> Marcucci, Adriana (2012). Realizing a Sustainable Energy System in Switzerland in a
	Global Context. Ph.D. thesis, ETH Zurich.</li>
	<li class="last">Marcucci, A. and H. Turton (2012). Swiss Energy Strategies under Global Climate Change
	and Nuclear Policy Uncertainty, The Swiss Journal of Economics and Statistics, Vol. 148 (2), pp. 317-345. </li>
</ul>

<!--
<h2>
Data sources
</h2>-->

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


