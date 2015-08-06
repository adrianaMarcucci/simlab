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

<tr>
<td><a href='cepe.php'>CEPE</a></td>
<td>A hybrid model of the bottom-up Swiss electricity sector and the European economy
<a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a>
<div class='details'>
<ul>
<li><a href='classification.php#approach'>Analytical approach</a>: Hybrid</li>
<li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li>
<li><a href='classification.php#methodology'>Methodology</a>: Optimization</li>
<li><a href='classification.php#stochastic'>Deterministic</a></li>
<li>Regions: Switzerland and Europe</li><li>Sectors: Electricity</li>
<li><a href='classification.php#dynamic'>Static</a></li>
<li>Time horizon: 2010</li><li>Developer: ENEC, ETHZ</li>
</ul>
<span class='more'><a href='cepe.php'>Read more &gt;&gt;</a></span>
</div>
</td>
</tr>
<tr  class='odd'><td>CITE</td><td>A multi-sector general equilibrium model with fully endogenous growth  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: Top-down, general equilibrium</li><li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li><li><a href='classification.php#methodology'>Methodology</a>: Optimization</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland, Global</li><li>Sectors: 12 economic sectors</li><li><a href='classification.php#dynamic'>Dynamic</a></li><li>Time horizon: 2010-2050</li><li>Developer: RESEC, ETHZ</li></ul><span class='more'><a href='cite.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td>GEMINI-E3</td><td>A multi-country, multi-sector recursive general equilibrium model  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: Top-down, general equilibrium</li><li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li><li><a href='classification.php#methodology'>Methodology</a>: Optimization</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland and other main economies regions (defined according to study, up to 20)</li><li>Sectors: Defined according to study (up to 30)</li><li><a href='classification.php#dynamic'>Dynamic</a></li><li>Time horizon: 2008-2050</li><li>Developer: EPFL</li></ul><span class='more'><a href='geminie3.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td>SCS</td><td>A simulation model of the Swiss electricity sector  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: Bottom-up</li><li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li><li><a href='classification.php#methodology'>Methodology</a>: Simulation</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland</li><li>Sectors: Electricity</li><li><a href='classification.php#dynamic'>Static</a></li><li>Time horizon: 2010</li><li>Developer: Supercomputing Systems AG</li></ul><span class='more'><a href='scs.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td>STEM</td><td>A bottom-up (TIMES) model of the Swiss energy system  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: Bottom-up</li><li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li><li><a href='classification.php#methodology'>Methodology</a>: Optimization</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland</li><li>Sectors: Electricity</li><li><a href='classification.php#dynamic'>Dynamic</a></li><li>Time horizon: 2000-2100</li><li>Developer: Energy Economics Group, PSI</li></ul><span class='more'><a href='stem.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td>Swissmod</td><td>A Swiss electricity market model and the neighboring countries  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: Bottom-up</li><li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li><li><a href='classification.php#methodology'>Methodology</a>: Optimization</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland and neighboring countries</li><li>Sectors: Electricity</li><li><a href='classification.php#dynamic'>Static</a></li><li>Time horizon: 2010</li><li>Developer: Unibasel</li></ul><span class='more'><a href='swissmod.php'>Read more &gt;&gt;</a></span></div></td></tr><tr><td>SwissRes</td><td>An energy efficiency database and model of the Swiss residential sector  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: Bottom-up</li><li><a href='classification.php#purpose'>Purpose</a>: </li><li><a href='classification.php#methodology'>Methodology</a>: Simulation</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland</li><li>Sectors: Fuel/Heat and electricity</li><li><a href='classification.php#dynamic'>Static</a></li><li>Time horizon: 2010</li><li>Developer: Unigeneva</li></ul><span class='more'><a href='swissres.php'>Read more &gt;&gt;</a></span></div></td></tr><tr  class='odd'><td>TREES</td><td>A system dynamics model of the Swiss energy sector  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li><a href='classification.php#approach'>Analytical approach</a>: System dynamics</li><li><a href='classification.php#purpose'>Purpose</a>: Scenario analysis</li><li><a href='classification.php#methodology'>Methodology</a>: Simulation</li><li><a href='classification.php#stochastic'>Deterministic</a></li><li>Regions: Switzerland</li><li>Sectors: Energy</li><li><a href='classification.php#dynamic'>Dynamic</a></li><li>Time horizon: 2000-2050</li><li>Developer: ZHAV</li></ul><span class='more'><a href='trees.php'>Read more &gt;&gt;</a></span></div></td></tr>
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
		console.log("we are here");

	});
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	$('.details').hide();
	$('.moreInfo').click(function(e) {
		e.preventDefault();
		console.log("estamos aca");
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



</body>
</html>
