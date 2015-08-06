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
$current_page = 'models';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<?php
$model = 'models';
include('models_sideBar.php');
?>

<div id="mainBox">

<table class="column-options">
<col width="100">
<tr>
	<th>Model</th>
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
$sqlModels = "SELECT * FROM  `model_info`
    ORDER BY  short_name ASC";
$resultModels = $conn->query($sqlModels);

/*
 * Display all the terms in the glossary
 */

if (!$resultModels) {
 		echo "Sorry, a connection with the database occured, please try later";
 		exit;
}
else{
	$odd = "even";
	while($row = $resultModels->fetch_assoc()) {
			if ($odd == "even"){
				echo "<tr>";
				$odd = "odd";
				}
			else {
				echo "<tr  class='odd'>";
				$odd = "even";
			}
			echo "<td><a href='".$row["page"]."'>".$row["short_name"]."</a></td>";
			echo "<td>".$row["description"]."  <a href=# class='moreInfo'><span class='icon icon-plus-sign' id='icon'></span></a>";
			echo "<div class='details'>";
			echo "<br><ul>";
			echo "<li>Analytical approach: " . $row["approach"]. "<a href='classification.php#approach'><span class='icon icon-question-sign' id='iconDef'></span></a></li>";
			echo "<li>Purpose: " . $row["purpose"]. "<a href='classification.php#purpose'><span class='icon icon-question-sign' id='iconDef'></span></a></li>";
			echo "<li>Methodology: " . $row["methodology"]. "<a href='classification.php#methodology'><span class='icon icon-question-sign' id='iconDef'></span></a></li>";
			echo "<li>" . $row["stochastic"]. "<a href='classification.php#stochastic'><span class='icon icon-question-sign' id='iconDef'></span></a></li>";
			echo "<li>Regions: " . $row["regions"]. "</li>";
			echo "<li>Sectors: " . $row["sectors"]. "</li>";
			echo "<li>" . $row["dynamic"]. "<a href='classification.php#dynamic'><span class='icon icon-question-sign' id='iconDef'></span></a></li>";
			echo "<li>Time horizon: " . $row["time_hor"]. "</li>";
			echo "<li>Developer: " . $row["developer"]. "</li>";
			//echo "<li>Contact: <a href=mailto:".$row["contact_email"].">". $row["contact_name"]. "</a></li>";
			echo "</ul>";
			echo "<span class='more'><a href='".$row["page"]."'>Read more &gt;&gt;</a></span>";
			echo "</div>";
			echo "</td></tr>";
    }
}

$conn->close();

?>

</table>

<!--
<p>
An integrated modeling framework to analyze the Swiss energy transition requires linking model-based analyses
along a number of dimensions and different model resolution. The Figure above maps the interfaces between the models in SimLab.
</p>

<figure>
<img src="images/interac.bmp" width="600" height="450" alt="">
<figcaption>2 Dimensional map of existing models in SimLab: micro/macro analysis and supply/demand
</figcaption>
</figure>
-->

<!--The models in the Simulation Lab... <A href="#" onMouseOver="stm(Text[20],Style[20])" onMouseOut="htm()">title</a>-->


<br>
<p>
Disclaimer: The selection of models is not exhaustive and research teams that are not represented in this overview and are interested in being included are encouraged to <a href="mailto:simlab-at-ethz.ch">contact us</a>.
</p>

</div><!--Closes mainBox-->

</div><!--Closes main-->

<?php
include('footer.html');
?>

</div><!--Closes outer-->

<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>
<script type="text/javascript">
$(document).ready(function() {
	$('#submenu').hide();
	$('#dropMenu a').click(function(e) {
		e.preventDefault();

		if ($(this).attr("class") == "displayed"){
			$('#submenu').slideUp();
			$(this).attr("class","");
		}
		else{
			$('#submenu').slideDown();
			$(this).attr("class","displayed");
		}
	});
});
</script>

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
