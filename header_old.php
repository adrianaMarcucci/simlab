<div id="header">
	<div id="logo">
		<div class="left">
			<a href="index.php"><img src="images/logo.png" width="195" ></a>
		</div>
		<div class="right">
				<a href="http://www.sccer-crest.ch/" target="_blank"><img src="images/crest_white.png" width="140" ></a>
		</div>
	</div>
</div>
<div id="nav">
	<ul>
		<li class="<?php if ($current_page=="home") {echo "active"; }?>"><a href="index.php"> Home</a></li>
		<li class="<?php if ($current_page=="about") {echo "active"; }?>">  <a href="about.php">SimLab</a>	</li>
		<li class="<?php if ($current_page=="models") {echo "active"; }?>">  <a href="models.php">Models</a>	</li>
		<li class="<?php if ($current_page=="data") {echo "active"; }?>">  <a href="data.php">Data</a>	</li>
		<li class="<?php if ($current_page=="activities") {echo "active"; }?>">  <a href="activities.php">Activities</a>	</li>
		<li class="<?php if ($current_page=="glossary") {echo "active"; }?>">  <a href="glossary.php">Glossary</a>	</li>
		<li class="<?php if ($current_page=="team") {echo "active"; }?>">  <a href="team.php">Team</a>	</li>
	</ul>
</div>


<!--
<?php
if (!($current_page=="home")){
	echo "<div id='secondheader'>";
	echo "<a href=index.php>simlab</a> &raquo ";
	echo $current_page;
	echo "</div>";
	}
?>
-->