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
$model = 'models';
include('models_sideBar.php');
?>

<div id="mainBox">

<table class="column-options">
<col width="100">
<!-- These are all the dimensions if wanted
  <col width="80">
  <col width="200">
  <col width="70">
  <col width="100">
  <col width="110">
  <col width="120">
  <col width="80">
  <col width="80">
-->
<tr>
	<th>Model</th>
	<th>Description</th>
<!-- These are all the dimensions if wanted
	<th>Analitical approach</th>
	<th>Purpose</th>
	<th>Methodology</th>
	<th>Deterministic vs. stochastic</th>
	<th>Geographical coverage</th>
	<th>Sectors</th>
	<th>Static vs. dynamic</th>
-->
</tr>

<tr><td><a href='cepe.php'>CEPE</a></td><td>A hybrid model of the bottom-up Swiss electricity sector and the European economy  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Hybrid</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland and Europe</li><li>Sectors: Electricity</li><li>Static<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2010</li><li>Developer: ENEC, ETHZ</li></ul><span class='more'><a href='cepe.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td><a href='cite.php'>CITE</a></td><td>A multi-sector general equilibrium model with fully endogenous growth  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Top-down, general equilibrium</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland, Global</li><li>Sectors: 12 economic sectors</li><li>Dynamic<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2010-2050</li><li>Developer: RESEC, ETHZ</li></ul><span class='more'><a href='cite.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td><a href='crosstem.php'>CROSSTEM</a></td><td>A bottom-up (TIMES) electricity model model of Switzerland and the neighboring countries  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Bottom-up</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Austria, Switzerland, Germany, France and Italy</li><li>Sectors: Electricity</li><li>Dynamic<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2000-2100</li><li>Developer: Energy Economics Group, PSI</li></ul><span class='more'><a href='crosstem.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td><a href='geminie3.php'>GEMINI-E3</a></td><td>A multi-country, multi-sector recursive general equilibrium model  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Top-down, general equilibrium</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland and other main economies regions (defined according to study, up to 20)</li><li>Sectors: Defined according to study (up to 30)</li><li>Dynamic<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2008-2050</li><li>Developer: EPFL</li></ul><span class='more'><a href='geminie3.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td><a href='scs.php'>SCS</a></td><td>A simulation model of the Swiss electricity sector  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Bottom-up</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Simulation</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland</li><li>Sectors: Electricity</li><li>Static<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2010</li><li>Developer: Supercomputing Systems AG</li></ul><span class='more'><a href='scs.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td><a href='stem.php'>STEM</a></td><td>A bottom-up (TIMES) model of the Swiss energy system  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Bottom-up</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland</li><li>Sectors: Energy</li><li>Dynamic<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2000-2100</li><li>Developer: Energy Economics Group, PSI</li></ul><span class='more'><a href='stem.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td><a href='swissmerge.php'>SwissMerge</a></td><td>A multi-region  model with a bottom-up energy sector and a top-down macroeconomic model   <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Hybrid</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Europe, Switzerland, Russia, Middle East, India, China, Japan, USA, CANZ and the Rest of the world</li><li>Sectors: Electricity and non-electric energy</li><li>Dynamic<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2010-2100</li><li>Developer: Energy Economics Group, PSI</li></ul><span class='more'><a href='swissmerge.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td><a href='swissmod.php'>Swissmod</a></td><td>A Swiss electricity market model and the neighboring countries  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Bottom-up</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Optimization</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland and neighboring countries</li><li>Sectors: Electricity</li><li>Static<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2010</li><li>Developer: Unibasel</li></ul><span class='more'><a href='swissmod.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td><a href='swissres.php'>SwissRes</a></td><td>An energy efficiency database and model of the Swiss residential sector  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: Bottom-up</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: </li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Simulation</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland</li><li>Sectors: Fuel/Heat and electricity</li><li>Static<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2010</li><li>Developer: Unigeneva</li></ul><span class='more'><a href='swissres.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td><a href='trees.php'>TREES</a></td><td>A system dynamics model of the Swiss energy sector  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Analytical approach<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a>: System dynamics</li><li>Purpose<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a>: Scenario analysis</li><li>Methodology<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a>: Simulation</li><li>Deterministic<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Regions: Switzerland</li><li>Sectors: Energy</li><li>Dynamic<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li><li>Time horizon: 2000-2050</li><li>Developer: ZHAV</li></ul><span class='more'><a href='trees.php'>Read more &gt;&gt;</a></span></div></td></tr>
</table>





<!--
<p>
An integrated modeling framework to analyze the Swiss energy transition requires linking model-based analyses
along a number of dimensions and different model resolution. The Figure above maps the interfaces between the models in SimLab.
</p>

<figure>
<img src="images/interac.bmp" width="600" height="450" alt="">
<figcaption>2 Dimensional map of existing models in SimLab: micro/macro analysis and supply/demand
</figcaption>
</figure>
-->

<!--The models in the Simulation Lab... <A href="#" onMouseOver="stm(Text[20],Style[20])" onMouseOut="htm()">title</a>-->


<br>
<p>
Disclaimer: The selection of models is not exhaustive and research teams that are not represented in this overview and are interested in being included are encouraged to <a href="mailto:simlab-at-ethz.ch">contact us</a>.
</p>

</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->

<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>

<!-- Script to open and close models list-->
<script type="text/javascript">
$(document).ready(function() {
	$('#submenu').hide();
	$('#dropMenu a').click(function(e) {
		e.preventDefault();

		if ($(this).attr("class") == "displayed"){
			$('#submenu').slideUp();
			$(this).attr("class","");
		}
		else{
			$('#submenu').slideDown();
			$(this).attr("class","displayed");
		}

	});
});
</script>

<!-- Script to expand and contract model description-->
<script type="text/javascript">
$(document).ready(function() {
	$('.details').hide();
	$('.moreInfo').click(function(e) {
		e.preventDefault();
		if ($(this).find('.icon').attr("class") == "icon icon-plus-sign"){
			$(this).find('.icon').attr("class","icon icon-minus-sign")
			$(this.parentNode).find('.details').show();
			}
		else {
			$(this).find('.icon').attr("class","icon icon-plus-sign")
			$(this.parentNode).find('.details').hide();
		}

	});
});
</script>

<?php
	include('floatingMenu.html');//This is the function to make the menu float
?>

</body>
</html>
