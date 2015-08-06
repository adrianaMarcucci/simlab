<div id="sidebar">
	<!--<div class="titleAlone"><a href="models.php">Overview</a></div>-->
	<ul>
	<li class="first<?php if ($model=="models") {echo "Active"; }?>"><a href="models.php">Overview</a></li>
	<li id="dropMenu" class=""><a href=#>Models</a></li>
		<ul class="submenu" id="submenu">
		<li class="first<?php if ($model=="cepe") {echo "Active"; }?>"><a href="cepe.php">CEPE</a></li>
		<li class="<?php if ($model=="cite") {echo "active"; }?>"><a href="cite.php">CITE</a></li>
		<li class="<?php if ($model=="crosstem") {echo "active"; }?>"><a href="stem.php">CROSSTEM</a></li>
		<li class="<?php if ($model=="gemini-e3") {echo "active"; }?>"><a href="geminie3.php">GEMINI-E3</a></li>
		<li class="<?php if ($model=="scs") {echo "active"; }?>"><a href="scs.php">SCS</a></li>
		<li class="<?php if ($model=="stem") {echo "active"; }?>"><a href="stem.php">STEM</a></li>
  		<li class="<?php if ($model=="swissmerge") {echo "active"; }?>"><a href="swissmerge.php">SwissMerge</a></li>
		<li class="<?php if ($model=="swissmod") {echo "active"; }?>"><a href="swissmod.php">Swissmod</a></li>
		<li class="<?php if ($model=="swissres") {echo "active"; }?>"><a href="swissres.php">SwissRes</a></li>
		<li class="<?php if ($model=="trees") {echo "active"; }?>"><a href="trees.php">TREES</a></li>
		</ul>

	<li class="<?php if ($model=="classes") {echo "active"; }?>"><a href="classification.php#approach">Classification</a></li>
	</ul>
</div>



