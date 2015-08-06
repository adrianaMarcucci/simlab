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
	<link rel="stylesheet" href="fileadmin/css/tabs.css">
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
$model = 'classes';
include('models_sideBar.php');
?>

<div id="mainBox">

<h1>
Model classsification
</h1>

<p>
Energy models aim at representing one or various aspects of the energy system, such as,
energy production and technological development; energy consumption and consumer behavior;
and linkages with the economy, other sectors and the climate.
</p>

<p>
Models can be classified according to different dimensions:
</p>


<div id="classes">
<ul id="tabs">
    <li><a href="#approach" name="approach">Analytical<br>approach</a></li>
    <li><a href="#purpose" name="purpose">Purpose</a></li>
    <li><a href="#methodology" name="methodology">Methodology</a></li>
    <li><a href="#stochastic" name="stochastic">Deterministic<br>vs. stochastic</a></li>
    <li><a href="#geography" name="geography">Geography</a></li>
	<li><a href="#sectors" name="sectors">Sectors</a></li>
	<li><a href="#dynamic" name="dynamic">Static vs.<br>dynamic</a></li>
</ul>
<div id="content">
    <div id="approach" class="tab-content">
	  <p><model>Top-down models</model> include a detailed representation of the economy and model
	  the energy sector with an aggregate production function. General equilibrium models are typical top-down models.
	  </p>

	  <p><model>Bottom-up models </model> feature a detailed
	  description of the energy technologies and have exogenous assumptions on the development of the
	  economy.
	  </p>

	  <p><model>Hybrid models</model> aim at including a detailed representation of both the econony and the energy sector by combining top-down and bottom-up approaches.
	  </p>

	  <p><model>System dynamics</model> is a methodology to model systems using stocks and flows and emphasizing
	  their feedback loops.
	  </p>
	</div>

    <div id="purpose" class="tab-content">
    <p>Models are usually developed to address specific questions and are therefore only suitable
		  for the purpose they were designed for. General purposes reflect how the future is addressed in the
		  model.</p>

		  <p> <model>Forecasting models</model> extrapolate the historical trends into the future to
		  forecast the development of the energy system.
		  </p>
		  <p> Exploring the futureis done by <model>scenario analysis</model> , in which a limited number of "intervention"
		  scenarios are compared with a "business as usual" reference scenario.
		  </p>
		  <p> <model>"Backcasting" models</model> construct visions of desired futures by interviewing experts in the fields and subsequently look at
		  what needs to be changed to accomplish such futures.
	  	  </p>
    </div>

    <div id="methodology" class="tab-content">
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
    </div>

    <div id="stochastic" class="tab-content"><p>A <model>deterministic</model> model has no probabilitic elements while in a
    <model>stochastic</model> one or more variables are random.
    A stochastic model estimates the probability of ocurrance of different outputs.</p>
    </div>

    <div id="geography" class="tab-content">
     <p>Geographical coverage: Single region, multi-region and global</p>
    </div>

    <div id="sectors" class="tab-content">
     <p>Single and multi-sectoral</p>
    </div>

    <div id="dynamic" class="tab-content">
     <p>A <model>dynamic</model> model represents the time dependent changes in the system while a
     <model>static</model> model is time-invariant. <model>Dynamic</model> models can have short-
     and long- time horizons.</p>
    </div>

</div>

</div><!--Closes classes-->


</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->

<!--SCRIPTS: Include scripts at the end so the pages load faster-->
<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>

<script>
	//this loads the first tab and has the click event
	$(document).ready(function() {
		var $tabContent = $(".tab-content"),
			$tabsVar = $("#tabs li");

		$tabContent.hide();

		// Find the anchor element in the hash and load it
		$tabsVar.find('a[href=' + window.location.hash + ']').parent().attr("id","current"); // Activate this
	    $(window.location.hash).show(); // Show content for the current tab

	    $('#tabs a').click(function(e) {
	    	e.preventDefault();
			if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
	         return;
	        }
	        else{
	          $tabContent.hide();// Hide all content
	          $tabsVar.attr("id",""); //Reset id's
	          $(this).parent().attr("id","current"); // Activate this
	          $('#' + $(this).attr('name')).show(); // Show content for the current tab
	          window.location.hash = $(this).closest("a").attr("href"); //change hash in url
	        }
	    });

	    //This allows back and fwd
		$(window).on('hashchange', function() {
			var activeLi = $("#tabs li[id='current']").find('a').attr('href');
			if (activeLi == window.location.hash){ //detection for current tab
			         return;
	        }
	        else {
	        	// Click the tab that the hash is referring to
				$tabsVar.find('a[href=' + window.location.hash + ']').click();
				}
		});
	});
</script>
<?php
	$containers = array("mainBox");
	include('glossaryTooltip_include.php'); //This activates the glossary tooltip, requires jquery.min.js
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


</body>
</html>
