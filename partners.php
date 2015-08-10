<!--This is the link in the index if this page is included
		<a href="description.php"><div class="column"> <span class="icon icon-info-sign"></span>
			<div class="title">
				<h2>About SimLab</h2>
			</div>
			<p>Read about the Simulation Lab</p>
		</div></a>
-->

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
$current_page = 'about';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$content = 'partners';
include('simlab_sideBar.php');
?>

<div id="mainBox">
<h1>
Partners
</h1>
<ul class="imageList">
	<li class="first">
	<a href="https://www.unibas.ch/" rel="nofollow" target="_blank">
		<img class="left" src="images/groups/unibas.png" width="150" alt="" />
	</a>
	<span>
		<a href="https://fonew.unibas.ch/" rel="nofollow" target="_blank">
			Research Center for Sustainable Energy and Water Supply
		</a>
		<br>
		<a href="https://wwz.unibas.ch/" rel="nofollow" target="_blank">
			Factulty of Business and Economics
		</a>
		<br>
		Model: <a href="swissmod.php">SwissMod</a>
	</span>
	</li>

	<li>
	<a href="https://www.unige.ch/" rel="nofollow" target="_blank">
		<img class="left" src="images/groups/unigeneva.png" width="150" alt="" />
	</a>
	<span>
		<a href="https://www.unige.ch/efficience/efficiency/" rel="nofollow" target="_blank">
			Chair for Energy Efficiency
		</a>
		<br>
		Model: <a href="swissres.php">SwissRes</a><br><br>
	</span>
	</li>

	<li>
	<a href="http://www.zhaw.ch/" rel="nofollow" target="_blank">
		<img class="left" src="images/groups/zhaw.gif" width="150" alt="" />
	</a>
	<span>
		Future Energy Systems and Energy Regions Group<br>
		<a href="http://ine.zhaw.ch/en/engineering/institutes-centres/institute-of-sustainable-development.html" rel="nofollow" target="_blank">
			Institute of Sustainable Development
		</a>
		<br>
		Model: <a href="trees.php">Trees</a>
	</span>
	</li>
	<li class="last">
		<a href="https://www.ethz.ch/" rel="nofollow" target="_blank">
			<img class="left" src="images/groups/ethz.png" width="150" alt=""/>
		</a>
		<div id="box1">
			<a href="http://www.enec.ethz.ch/" rel="nofollow" target="_blank">
				Chair of Energy Economics
			</a>
			and
			<a href="http://www.cer.ethz.ch/resec" rel="nofollow" target="_blank">
				Chair of Resource Economics
			</a><br>
			<a href="http://www.cer.ethz.ch/" rel="nofollow" target="_blank">
				Center of Economic Research
			</a>
			<br>
			Models: <a href="cepe.php">CEPE</a> and <a href="cite.php">CITE</a>
		</div>
	</li>
</ul>

</div><!--Closes mainBox-->
</div><!--Closes main-->

<?php
include('footer.html');
?>

</div>

</body>
</html>
