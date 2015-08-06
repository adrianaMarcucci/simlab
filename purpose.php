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

<!--tooltip-->
 <DIV id="TipLayer" style="visibility:hidden;position:absolute;z-index:1000;top:-100;"></DIV>
 <SCRIPT language="JavaScript1.2" src="java/style.js" type="text/javascript"></SCRIPT>
<!--end tooltip-->


<div id="outer">

<?php
$current_page = 'models';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$current_page = 'purpose';
include('models_sideBar.php');
?>

<div id="mainBox">

<p>
Models are usually developed to address specific questions and are therefore only suitable
for the purpose they were designed for. General purposes reflect how the future is addressed in the
model.




<p> <model>Forecasting models</model> extrapolate the historical trends into the future to
forecast the development of the energy system.
</p>
<p> <model>Exploring the future</model> is done by scenario analysis, in which a limited number of "intervention"
scenarios are compared with a "business as usual" reference scenario.
</p>
<p> <model>"Backcasting" models</model> construct visions of desired futures by interviewing experts in the fields and subsequently look at
what needs to be changed to accomplish such futures.
</p>

</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->
</body>
</html>
