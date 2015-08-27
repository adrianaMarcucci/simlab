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
	<!--tooltip-->
	<script language="JavaScript1.2" src="fileadmin/java/main.js" type="text/javascript"></script>
	<!--end tooltip-->
</head>

<body>

<!--tooltip-->
 <DIV id="TipLayer" style="visibility:hidden;position:absolute;z-index:1000;top:-100;"></DIV>
 <SCRIPT language="JavaScript1.2" src="fileadmin/java/style.js" type="text/javascript"></SCRIPT>
<!--end tooltip-->


<div id="outer">

<?php
$current_page = 'models';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$model = 'cite';
include('models_sideBar.php');
include('models_infoBox.php');
?>

<div id="mainBox">

<div id="box1">
<h1>CITE
</h1>

<p>
<i>CITE</i> (Computable Induced Technical change and Energy) is a dynamic general equilibrium model of the world economy
with special focus on Switzerland and energy commodities.
In <i>CITE</i>  households provide capital and labor to firms which use these factors
to produce commodities. These commodities are either sold to domestic industries as intermediate
input and consumers or exported to other regions. <i>CITE</i>  includes the main economic sectors
in the different regions. Recently, the model has been extended to include a detailed electricity
production module with different generation technologies. <i>CITE</i>  is a dynamic model including
(endogenous) economic growth elements. I.e. consumers save money which is lend to firms which invest
in either physical capital (new machines) or knowledge which increases the productivity of capital
and labor. Given the described features, <i>CITE</i>  is well suited for the assessment of
environmental and climate regulation in particular within in the electricity sector in a dynamic
framework.
</p>


<figure>
<img src="images/models/cite.bmp" width="380" height="280" alt="" />
 <figcaption>Sectoral output</figcaption>
</figure>

<!--<img class="left" src="images/models/cite.png" alt="" width="300" usemap="#citeDiag" />
	<map name="citeDiag" id="citeDiag">
		<area shape="rect" coords="126,0,246,48" onmouseover="stm(Text[20],Style[20])" onmouseout="htm()" href="#" />
		<area shape="rect" coords="0,133,125,177" onmouseover="stm(Text[21],Style[20])" onmouseout="htm()" href="#" />

	</map>-->
	<!--		<area shape="poly" coords="56,216,55,179,49,177,61,162,70,179,66,179,68,218,55,217" onmouseover="stm(Text[84],Style[14])" onmouseout="htm()" href="#nogo" />-->

</div><!--Closes box1-->


<div id="box2">
	<h2>
	Model inputs
	</h2>
	<ul>
	<li class="first"> Social accounting matrices (GTAP)</li>
	<li>Swiss input/output table (Swiss Federal Office of Energy)</li>
	<li>Elasticities: MIT Emissions Prediction and Policy Analysis (EPPA) model (Paltsev et al, 2005) </li>
	<li class="last">For spillovers: EPO World Patent Statistical Database (PATSTAT) and OECD Patents Database (OECD) </li>

	</ul>
</div>

<div id="box3">
	<h2>
	Model outputs
	</h2>
	<ul>
	<li class="first"> Welfare</li>
	<li>Consumption</li>
	<li>Economic growth, sectoral growth</li>
	<li>Investment: Physical and Knowledge</li>
	<li class="last">Production by economic sector</li>
	</ul>
</div>

<br class="clear" />

<h2>
References
</h2>
<h3>Detailed model description</h3>
Bretscher, L, Ramer, R. and Schwark, F. (2011): Growth effects of carbon policies: Applying a fully dynamic CGE model with heterogeneous capital. Resource and Energy Economics, 33(4), 963-980. <a href="http://www.sciencedirect.com/science/article/pii/S0928765511000431#" target=_blank><span class='icon icon-external-link' id='iconLink'></span></a><br><br>

<h3>Recent application</h3>
For a recent application: Bretschger, L., Ramer, R., and Zhang, L. (2012): Economic effects of a nuclear phase-out policy: A CGE analysis. Economics Working Paper Series 12/167, ETH Zurich. <a href="http://www.cer.ethz.ch/research/WP-12-167.pdf" target=_blank><span class='icon icon-external-link' id='iconLink'></span></a>



<br class="clear" />
<br class="clear" />

<h2>
Data sources
</h2>
<ul>
<li class="first">GTAP. Narayanan, G., A. Badri, and R. McDougall, ed. 2012. Global Trade, Assistance, and Production: The GTAP 8 Data Base. Center for Global Trade Analysis, Purdue University. <a href=data.php#gtap><span class='icon icon-signal' id='iconLink'></span></a></li>
<li> OECD, OECD Patent Database. <a href=data.php#oecd_patents><span class='icon icon-signal' id='iconLink'></span></a></li>
<li> Paltsev, S., J.M. Reilly, H.D. Jacoby, R.S. Eckaus, J. McFarland, M. Sarofim, M. Asadoorian and M. Babiker, 2005.  The MIT Emissions Prediction and Policy Analysis (EPPA) Model: Version 4, MIT Joint Program on the Science and Policy of Global Change Report 125, Cambridge, MA. <a href="http://web.mit.edu/globalchange/www/MITJPSPGC_Rpt125.pdf" target=_blank><span class='icon icon-external-link' id='iconLink'></a></li>
<li> PATSTAT, European Patent Office (EPO), Worldwide Patent Statistical Database (PATSTAT). <a href=data.php#patstat><span class='icon icon-signal' id='iconLink'></span></a></li>
<li class="last">Swiss Federal Office of Energy. Peter M., van Nieuwkoop R., Nathani C., Sutter D., Kraner S.(2013): "Energy related disaggregation of the Swiss IOT 2008 and revision of energy-IOT 2001 and 2005", EWG Publication 290843, Bern. <a href=data.php#ch_IOT><span class='icon icon-signal' id='iconLink'></span></a></li>
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
