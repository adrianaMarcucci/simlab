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
$current_page = 'type';
include('models_sideBar.php');
?>

<div id="mainBox">

<p>
Models have been historically classified according to their analytical approach
in three groups: top-down, bottom-up and hybrid models. The distinction between top-down and bottom-up
models relates to the level of detail of the economy and the energy sector.
</p>

<p><model>Top-down models</model> include a detailed representation of the economy and model
the energy sector with an aggregate production function
</p>

<p><model>Bottom-up models </model> feature a detailed
description of the energy technologies and have exogenous assumptions on the development of the
economy.
</p>

<p><model>Hybrid models</model> aim at concealing top-down and bottom-up approaches by combining them.
</p>
<p>


<p><model>System dynamics</model> is a methodology to model systems using stocks and flows and emphasizing
their feedback loops.
</p>

</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->
</body>
</html>
