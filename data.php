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

<h1>
Shared data
</h1>


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
    ORDER BY  name ASC";
$resultData = $conn->query($sqlData);

/*
 * Display all the terms in the glossary
 */

if (!$resultData) {
 		echo "Sorry, a connection with the database occured, please try later";
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
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["description"]."  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a>";
			echo "<div class='details'>";
			echo "<br><ul>";
			echo "<li>Database: <a href='".$row["url"]."' target=_blank>" . $row["source"]. "</a></li>";
			echo "<li>Time resolution: " . $row["time"]. "</li>";
			echo "<li>Unit: " . $row["unit"]. "</li>";
			echo "<li>Regions: " . $row["regions"]. "</li>";
			echo "<li>Models: " . $row["models"]. "</li>";
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

<script type="text/javascript">
$(document).ready(function() {
	$('.details').hide();
	$('.moreInfo').click(function(e) {
		e.preventDefault();
		console.log("estamos aca");
		if ($(this).find('.icon').attr("class") == "icon icon-plus-sign"){
			$(this).find('.icon').attr("class","icon icon-minus-sign")
			$(this.parentNode).find('.details').show();
			}
		else {
			$(this).find('.icon').attr("class","icon icon-plus-sign")
			$(this.parentNode).find('.details').hide();
		}

	});
});
</script>

</body>
</html>