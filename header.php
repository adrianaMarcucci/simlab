<div id="header">
	<div id="logo">
		<div class="left">
			<a href="index.php"><img src="images/logo.png" width="195" ></a>
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
	</ul>
</div>

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