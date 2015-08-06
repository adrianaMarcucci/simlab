<div id="sidebar">
	<div class="titleAlone"><a href="models.php">Overview</a></div>
	<div class="title">CREST models</div>
	<ul>
		<li class="first<?php if ($model=="cepe") {echo "Active"; }?>"><a href="cepe.php">CEPE</a></li>
		<li class="<?php if ($model=="cite") {echo "active"; }?>"><a href="cite.php">CITE</a></li>
		<li class="<?php if ($model=="swissmod") {echo "active"; }?>"><a href="swissmod.php">Swissmod</a></li>
		<li class="<?php if ($model=="swissres") {echo "active"; }?>"><a href="swissres.php">SwissRes</a></li>
		<li class="<?php if ($model=="trees") {echo "active"; }?>"><a href="trees.php">TREES</a></li>
	</ul>
	<div class="title">Other models</div>
	<ul>
		<li class="first<?php if ($model=="gemini-e3") {echo "Active"; }?>"><a href="geminie3.php">GEMINI-E3</a></li>
		<li class="<?php if ($model=="scs") {echo "Active"; }?>"><a href="scs.php">SCS</a></li>
		<li class="<?php if ($model=="stem") {echo "active"; }?>"><a href="stem.php">STEM</a></li>
	</ul>
	<div class="title"><a href="classes.php">Classification</a></div>
		<ul>
			<li class="first<?php if ($current_page=="type") {echo "Active"; }?>"><a href="type.php">Analytical approach</a></li>
			<li class="<?php if ($current_page=="purpose") {echo "active"; }?>"><a href="purpose.php">Purpose</a></li>
			<li class="<?php if ($current_page=="method") {echo "active"; }?>"><a href="methodology.php">Methodolody</a></li>
	</ul>

</div>

