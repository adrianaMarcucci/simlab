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

<table class="column-options">
<col width="150">
<tr>
	<th>Data</th>
	<th>Description</th>
</tr>

<?php

/*
 * Connect to MySQL and return the connect var
 */
function connectToMySQL() {
    $servername = 'mysql5-master.ethz.ch';
    $username =  'simlab';
    $password = "simDataCREST";
    $database = 'simlab';

// Create connection
   	$conn = new mysqli($servername, $username, $password, $database);


// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    return $conn;
}
$conn = connectToMySQL();


/*
 *  Get all the terms in the glossary
 */
$sqlData= "SELECT * FROM  `data`
    ORDER BY  long_name ASC";
$resultData = $conn->query($sqlData);

/*
 * Display all the terms in the glossary
 */

if (!$resultData) {
 		echo "Sorry, an error connecting with the database occured, please try later";
 		exit;
}
else{
	$odd = "even";
	while($row = $resultData->fetch_assoc()) {
			if ($odd == "even"){
				echo "<tr>";
				$odd = "odd";
				}
			else {
				echo "<tr  class='odd'>";
				$odd = "even";
			}
			echo "<td><a name='".$row["short_name"]."'><span></span></a>".$row["long_name"]."</td>";
			echo "<td>".$row["description"]."  <a href=#".$row["short_name"]. " class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a>";
			echo "<div class='details'>";
			echo "<br><ul>";
			echo "<li>Database: <a href='".$row["url"]."' target=_blank>" . $row["source"]. ", " . $row["long_name"]. "</a></li>";
			echo "<li>Time resolution: " . $row["time"]. "</li>";
			echo "<li>Unit: " . $row["unit"]. "</li>";
			echo "<li>Regions: " . $row["regions"]. "</li>";
			echo "<li>Models: ";

			$models = explode(',',$row["models"]);
			foreach($models as $key){
				echo "<a href='". strtolower($key). ".php'>". $key . "</a>";
				if ($key != end($models))
        			echo ", ";

			}
			echo "</li>";

			echo "</ul>";
			echo "</div>";
			echo "</td></tr>";
    }
}

$conn->close();

?>

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

<!--This is the function to add the plus minus option-->
<script type="text/javascript">
$(document).ready(function() {
	$('.details').hide();
	// Find the anchor element in the hash and load it
	var $varData = $("a[href='"+window.location.hash+"']");
	$varData.find('.icon').attr("class","icon icon-minus-sign");
	$varData.parent().find('.details').show();


	$('.moreInfo').click(function(e) {
		e.preventDefault();
		if ($(this).find('.icon').attr("class") == "icon icon-plus-sign"){
			$(this).find('.icon').attr("class","icon icon-minus-sign");
			$(this.parentNode).find('.details').show();
			window.location.hash = $(this).closest("a").attr("href"); //change hash in url
			}
		else {
			$(this).find('.icon').attr("class","icon icon-plus-sign");
			$(this.parentNode).find('.details').hide();
			window.location.hash ='';
		}
	});

	//This allows back and fwd
	$(window).on('hashchange', function() {
	     $('html, body').animate({
	           'scrollTop':   $("a[href='"+window.location.hash+"']").offset().top
	         }, 0);
    });

});
</script>

</body>
</html>
