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

<tr><td>Social accounting matrices (SAM)</td>
<td><span class='description'>Social accounting matrices represent  transactions between production activities,
factors of production, and institutions. SAM are used to calibrate general equilibrium models</span>
<a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a><div class='details'><br><ul><li>Database: <a href='https://www.gtap.agecon.purdue.edu/databases/v8/' target=_blank>GTAP database</a></li><li>Time resolution: 2004 and 2007</li><li>Unit: Dollars</li><li>Regions: Different regions</li><li>Models: Cite, Cepe</li></ul></div></td></tr>
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
