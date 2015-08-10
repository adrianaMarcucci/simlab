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
$content = 'team';
include('simlab_sideBar.php');
?>

<div id="mainBox">

<h1>Coordination team</h1>

<ul class="imageList">
	<li class="first">
	<img class="left" src="images/people/landis.png" width="60" height="75" alt="" />
	<span>
	<strong>Dr. Florian Landis</strong><br>
	SimLab co-leader<br>
	<a href="http://www.enec.ethz.ch/" rel="nofollow" target="_blank">Chair of Energy Economics</a>, ETHZ
	</span>
	</li>
	<li>
	<img class="left" src="images/people/marcucci.jpg" width="60" height="75" alt="" />
	<span>
	<strong>Dr. Adriana Marcucci</strong><br>
	SimLab co-leader<br>
	<a href="http://www.cer.ethz.ch/resec" rel="nofollow" target="_blank">Chair of Resource Economics</a>, ETHZ
	</span>
	</li>

	<li>
	<img class="left" src="images/people/rausch.jpg" width="60" height="75" alt="" />
	<span>
	<strong>Prof. Dr. Sebastian Rausch</strong>
	<br><a href="http://www.enec.ethz.ch/" rel="nofollow" target="_blank">Chair of Energy Economics</a>, ETHZ
	</span>
	</li>
	<li class="last">
	<img class="left" src="images/people/bretschger.jpg" width="60" height="75" alt="" />
	<span>
	<strong>Prof. Dr. Lucas Bretschger</strong><br>
	<a href="http://www.cer.ethz.ch/resec" rel="nofollow" target="_blank">Chair of Resource Economics</a>, ETHZ
	</span>
	</li>
</ul>

<br><br>


<h1>Contact</h1>

<b>For all enquiries please contact</b>:
<br>
Florian Landis or Adriana Marcucci
<br>
E-mail: simlab-at-ethz.ch

</div><!--Closes mainBox-->
</div><!--Closes main-->

<?php
include('footer.html');
?>

</div>

</body>
</html>
