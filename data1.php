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
$current_page = 'data';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<h1>
Shared data
</h1>



<table class="column-options">
<col width="150">
<tr>
	<th>Data</th>
	<th>Description</th>
</tr>

<tr><td><a name='entso_cons'><span></span></a>European electricity consumption</td><td>Hourly load curves and montly electricity consumption  <a href=#entso_cons class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.entsoe.eu/data/data-portal/consumption/Pages/default.aspx' target=_blank>ENTSO-E</a></li><li>Time resolution: 1994-2014</li><li>Unit: MW and GWh</li><li>Regions: Europe: 34 countries</li><li>Models: <a href='cepe.php'>CEPE</a>, <a href='swissmod.php'>Swissmod</a></li></ul></div></td></tr><tr  class='odd'><td><a name='entso_prod'><span></span></a>European electricity production</td><td>Monthly electricity production from different sources  <a href=#entso_prod class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.entsoe.eu/data/data-portal/production/Pages/default.aspx' target=_blank>ENTSO-E</a></li><li>Time resolution: 1991-2014</li><li>Unit: GWh</li><li>Regions: Europe: 34 countries</li><li>Models: <a href='cepe.php'>CEPE</a></li></ul></div></td></tr><tr><td><a name='entso_cap'><span></span></a>European net transfer capacity</td><td>Cross-border electricity transmission capacities in summer and winter  <a href=#entso_cap class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.entsoe.eu/publications/market-reports/ntc-values/ntc-matrix/Pages/default.aspx' target=_blank>ENTSO-E</a></li><li>Time resolution: 1990-2011</li><li>Unit: MW</li><li>Regions: Europe</li><li>Models: <a href='cepe.php'>CEPE</a>, <a href='swissmod.php'>Swissmod</a></li></ul></div></td></tr><tr  class='odd'><td><a name='gtap'><span></span></a>Social accounting matrices (SAM)</td><td>Social accounting matrices represent  transactions between production activities, factors of production, and institutions. SAM are used to calibrate general equilibrium models  <a href=#gtap class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.gtap.agecon.purdue.edu/databases/v8/' target=_blank>GTAP database</a></li><li>Time resolution: 2004 and 2007</li><li>Unit: Dollars</li><li>Regions: Global data: 129 regions</li><li>Models: <a href='cepe.php'>CEPE</a>, <a href='cite.php'>CITE</a>, <a href='gemini-e3.php'>GEMINI-E3</a></li></ul></div></td></tr><tr><td><a name='bfe_elecStats'><span></span></a>Swiss electricity statistics</td><td>Electricity production, trading and consumption in Switzerland  <a href=#bfe_elecStats class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='http://www.bfe.admin.ch/themen/00526/00541/00542/00630/index.html?lang=en' target=_blank>Swiss Federal Office of Energy</a></li><li>Time resolution: 1998-2014</li><li>Unit: GWh, others</li><li>Regions: Switzerland</li><li>Models: <a href='swissmod.php'>Swissmod</a></li></ul></div></td></tr><tr  class='odd'><td><a name='ch_IOT'><span></span></a>Swiss Energy Input Output Table (IOT)</td><td>Swiss input-output table with disaggregated energy sectors   <a href=#ch_IOT class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='http://www.bfe.admin.ch/forschungewg/02544/04997/index.html?lang=en&dossier_id=05008' target=_blank>Swiss Federal Office of Energy</a></li><li>Time resolution: 2001, 2005 and 2008</li><li>Unit: Swiss Francs</li><li>Regions: Switzerland</li><li>Models: <a href='cite.php'>CITE</a></li></ul></div></td></tr><tr><td><a name='swissgrid_eneStats'><span></span></a>Swiss Energy Statistic</td><td>Energy statistics including: energy production and consumption, power flows, imports and exports, prices  <a href=#swissgrid_eneStats class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.swissgrid.ch/swissgrid/en/home/experts/topics/energy_data_ch.html' target=_blank>Swissgrid</a></li><li>Time resolution: 2011-2014</li><li>Unit: Various</li><li>Regions: Switzerland</li><li>Models: <a href='swissmod.php'>Swissmod</a></li></ul></div></td></tr><tr  class='odd'><td><a name='bfe_hydro'><span></span></a>Swiss hydropower plants: statistics</td><td>Statistics of the Swiss hydropower plants including (among others): location, on-line date, status, function, installed power, max. available power, average production, generation capacity, energy consumption  <a href=#bfe_hydro class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='http://www.bfe.admin.ch/geoinformation/05061/05249/index.html?lang=en' target=_blank>Swiss Federal Office of Energy</a></li><li>Time resolution: 1977-2014</li><li>Unit: Various</li><li>Regions: Switzerland</li><li>Models: <a href='swissmod.php'>Swissmod</a></li></ul></div></td></tr><tr><td><a name='swissgrid_grid'><span></span></a>Swiss tranmission grid</td><td>&#39Energiewende: Uebertragungsnetz mit Schluesselrolle&#39  <a href=#swissgrid_grid class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.swissgrid.ch/swissgrid/de/home/company/publications.html' target=_blank>Swissgrid</a></li><li>Time resolution: 2012</li><li>Unit: Various</li><li>Regions: Switzerland</li><li>Models: <a href='swissmod.php'>Swissmod</a></li></ul></div></td></tr><tr  class='odd'><td><a name='platts_powerplants'><span></span></a>World Electric Power Plants Database</td><td>Global inventory of electric power generation plants: geographic location, capacity, age, technology, fuel, manufacturers  <a href=#platts_powerplants class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='http://www.platts.com/products/world-electric-power-plants-database' target=_blank>Platts</a></li><li>Time resolution: Yearly updated</li><li>Unit: Various</li><li>Regions: Global</li><li>Models: <a href='cepe.php'>CEPE</a></li></ul></div></td></tr>
</table>





<!--
<svg width="600" height="400" >
<path stroke="darkslategray" stroke-width="6" fill="none"
stroke-linecap="round"
d="M50,100
A100,50 0 0 1 250,100
A80,40 0 0 1 90,100
A60,30 0 0 1 210,100
A40,20 0 0 1 130,100
A20,10 0 0 1 170,100" />
</svg>
-->

</div>

<?php
include('footer.html');
?>

</div>



<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>


<!--This is the function to add the plus minus option-->
<script type="text/javascript">
$(document).ready(function() {
	$('.details').hide();
	// Find the anchor element in the hash and load it
	var $varData = $("a[href='"+window.location.hash+"']");
	$varData.find('.icon').attr("class","icon icon-minus-sign");
	$varData.parent().find('.details').show();


	$('.moreInfo').click(function(e) {
		e.preventDefault();
		if ($(this).find('.icon').attr("class") == "icon icon-plus-sign"){
			$(this).find('.icon').attr("class","icon icon-minus-sign");
			$(this.parentNode).find('.details').show();
			window.location.hash = $(this).closest("a").attr("href"); //change hash in url
			}
		else {
			$(this).find('.icon').attr("class","icon icon-plus-sign");
			$(this.parentNode).find('.details').hide();
			window.location.hash ='';
		}
	});

	//This allows back and fwd
	$(window).on('hashchange', function() {
	     $('html, body').animate({
	           'scrollTop':   $("a[href='"+window.location.hash+"']").offset().top
	         }, 0);
    });

});
</script>

</body>
</html>
