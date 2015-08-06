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
$current_page = 'home';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">
<!-- This is the slider and the text that appears just in the homepage-->
<!-- ****************************************************************************************************************** -->

<div id="slider">
	<div class="viewer">
		<div class="reel">
			<div class="slide">
				<img src="images/slider/wind2_small.jpg" alt=""/>
				<p>&copy Melanie Kluth / pixelio.de</p>
			</div>
			<div class="slide">
				<img src="images/slider/hydro_small.jpg" alt=""/>
				<p>&copy Rosel Eckstein  / pixelio.de</p>
			</div>
			<div class="slide">
				<img src="images/slider/highway_small.jpg" alt=""/>
 				<p>&copy Lutz Stallknecht / pixelio.de</p>
			</div>
			<div class="slide">
				<img src="images/slider/solar2_small.jpg" alt="" />
 				<p>&copy Rainer Sturm  / pixelio.de</p>
			</div>
			<div class="slide">
				<img src="images/slider/wind_small.jpg" alt="">
 				<p>&copy Q.pictures / pixelio.de</p>
			</div>
			<div class="slide">
				<img src="images/slider/solar_small.jpg" alt=""/>
				<p>&copy Rainer Sturm  / pixelio.de</p>
			</div>
			<div class="slide">
				<img src="images/slider/car.jpg" alt="" />
				<p>&copy Daniel Boennighausen  / pixelio.de</p>
			</div>
		</div>
	</div>
	<div class="indicator">
		<ul>
			<li class="active">1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
			<li>7</li>
		</ul>
	</div>
</div>

<!-- ****************************************************************************************************************** -->
<div id="logoDiv">
<a href="http://www.sccer-crest.ch/" target="_blank"><img src="images/crest.png" width="150" ></a>
<br>
<a href="http://www.kti.admin.ch/energie" rel="nofollow" target="_blank"><img class="logoInner" src="images/cti.png" width="280" height="159" /></a>
</div>


<h1>Welcome to the Simulation Lab</h1>
<p>
The <b>Simulation Lab (<i>SimLab</i>)</b> is a virtual platform for sharing
knowledge about simulation models for socio-economic energy research in Switzerland. <span class="more"><a href="about.php">Read More &gt;&gt;</a></span>
</p>

<div id="featured-wrapper">
	<div id="featured" class="container">

			<div class="column"> <span class="icon icon-cogs"></span>
				<div class="title">
				<h2>Models</h2>
				</div>
				<p>SimLab includes a broad range of quantitative methods.  <span class="more"><a href="models.php">View the SimLab models &gt;&gt;</a></span></p>
			</div>

		<div class="column"> <span class="icon icon-signal"></span>
			<div class="title">
				<h2>Data</h2>
			</div>
			<p>SimLab provides an overview of the data used by the different models. <span class="more"><a href="data.php">View the SimLab data &gt;&gt;</a></span></p>
		</div>
		<div class="column"> <span class="icon icon-retweet"></span>
			<div class="title">
				<h2>Activities</h2>
			</div>
			<p>Read more about our training workshops, projects and publications. <span class="more"><a href="activities.php">Read more &gt;&gt;</a></span></p>
		</div></a>
	</div>
</div>


</div>
<?php
include('footer.html');
?>

</div>


<!--SCRIPTS: Include scripts at the end so the pages load faster-->
<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>
<!--This is the slidertron that requires jquery.min.js-->
<script type="text/javascript" src="fileadmin/java/jquery.slidertron-1.3.js"></script>
<script type="text/javascript">
	$('#slider').slidertron({
		viewerSelector: '.viewer',
		reelSelector: '.viewer .reel',
		slidesSelector: '.viewer .reel .slide',
		advanceDelay: 8000,
		speed: 'slow',
		indicatorSelector: '.indicator ul li'
	});
</script>

</body>
</html>
