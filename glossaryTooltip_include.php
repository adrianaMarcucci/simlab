<script src="fileadmin/java/tooltip.js"></script>
<script src="fileadmin/java/jquery.glossarize.js"></script>


<?php
/**
 * Take all elements in list container and apply the glossarizer
 */

echo("<script>");
echo("$(function(){");

foreach ($containers as $value) {
	echo("
		$(document.getElementById('".$value."')).glossarizer({
			sourceURL: 'readGlossary.php'");
	//Check if it is the last element in the list (the list doesnt have repeated elements)
	if ($value === end($containers))
		echo(",
			callback: function(){
					new tooltip();
				}
			");
	echo("
		});
	");
}

echo("});");

echo("$(function(){
		new tooltip();
})");

echo("</script>");
?>


<!--when applied to the whole page this can be done as: $(this).glossarizer({-->

<!--
<script type="text/javascript">
$(function(){
	$(document.getElementById("main")).glossarizer({
	sourceURL: 'java/glossary.json',
	callback: function(){
		new tooltip();
		}
	});
});

</script>-->
