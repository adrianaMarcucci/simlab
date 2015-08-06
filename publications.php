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
$current_page = 'activities';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$current_page = 'pub';
include('activities_sideBar.php');
?>

<div id="mainBox">


</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->
</body>
</html>
