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
$current_page = 'glossary';
include('header.php');
?>

<!-- ****************************************************************************************************************** -->
<div id="main">

<h1>
Glossary
</h1>


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
$sqlGloss = "SELECT long_name, definition
    FROM  glossary
    ORDER BY  long_name ASC";
$resultGloss = $conn->query($sqlGloss);

/*
 * Display all the terms in the glossary
 */

if (!$resultGloss) {
 		echo "Sorry, a connection with the database occured, please try later";
 		exit;
}
else{
	while($row = $resultGloss->fetch_assoc()) {
	        echo "<div class='term'>";
	        echo "<a href=#><span class='icon icon-plus-sign' id='icon'></span>";
	        echo "<span class='title'>" . $row["long_name"]. "</span></a>";
	        echo "<p class='definition'>" . $row["definition"]. "</p>";
	        echo "</div>";
    }
}

$conn->close();

?>

</div>

<?php
include('footer.html');
?>

</div>

<!--SCRIPTS: Include scripts at the end so the pages load faster-->
<?php
	include('jqueryMin_include.php');//This has to be active if the library jquery.min.js is needed
?>
<script type="text/javascript">
$(document).ready(function() {
	$('.term .definition').hide();
	$('.term a').click(function(e) {
		e.preventDefault();
		if ($(this).find('.icon').attr("class") == "icon icon-plus-sign"){
			$(this).find('.icon').attr("class","icon icon-minus-sign")
			$(this.parentNode).find('.definition').show();
			}
		else {
			$(this).find('.icon').attr("class","icon icon-plus-sign")
			$(this.parentNode).find('.definition').hide();
		}

	});
});
</script>
</body>
</html>
