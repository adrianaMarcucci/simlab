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

<h1>
Simulation Lab
</h1>

<p>
<i>SimLab</i> is a virtual platform for sharing knowledge about simulation models for socio-economic energy research in Switzerland.
The SimLab is a shared infrastructure of <a href="http://www.sccer-crest.ch/" target="_blank">SCCER-CREST</a> hosted by the Center for Energy Policy and Economics (CEPE) at ETH Zurich.
</p>

<h1>What do we do?</h1>

<ul>
<li class="first"> Obtain, develop and maintain quantitative models & data for socio-economic energy research
<li> Provide a shared resource and virtual knowledge platform
<li> Improve individual simulation models and establish interfaces to other models
</ul>


<h1>
Why is this important?
</h1>

<ul>
<li class="first">Simulation-based quantitative analysis is an important research method to understand and evaluate the socio-economic impacts of energy and economic policies. The <i>SimLab</i> provides comprenhensive information about the existing models in Switzerland.
<li>
Developing simulation models is a demanding process due (i) the complex underlying concepts and (ii) the need to incorporate different data sources, to identify empirically plausible specifications, and to address computational aspects. The <i>Simlab</i> facilitates this process by providing a platform for sharing knowledge, expertise, and data.
</ul>


</div>

<?php
include('footer.html');
?>

</div>
</body>
</html>
