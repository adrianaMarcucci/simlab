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
 *  Get the information about the model
 */

$sqlModel = "SELECT * FROM  `model_info` WHERE short_name='$model'";
$resultModel = $conn->query($sqlModel);

/*
 * Display the model information
 */

if (!$resultModel) {
 		echo "Sorry, a connection with the database occured, please try later";
 		exit;
}
else{
	//This while has just one iteration
	while($row = $resultModel->fetch_assoc()) {
		echo "<div id='rightContent'>";
		echo "<div id='infoBox'>";
		echo "<ul>";
		echo "<li><a href='classification.php#approach'>Analytical approach</a>: " . $row["approach"]. "</li>";
		echo "<li><a href='classification.php#purpose'>Purpose</a>: " . $row["purpose"]. "</li>";
		echo "<li><a href='classification.php#methodology'>Methodology</a>: " . $row["methodology"]. "</li>";
		echo "<li><a href='classification.php#stochastic'>" . $row["stochastic"]. "</a></li>";
		echo "<li>Regions: " . $row["regions"]. "</li>";
		echo "<li>Sectors: " . $row["sectors"]. "</li>";
		echo "<li><a href='classification.php#dynamic'>" . $row["dynamic"]. "</a></li>";
				echo "<li>Time horizon: " . $row["time_hor"]. "</li>";
		echo "</ul>";
		echo "</div>";
		echo "<br>";
		echo "<div id='infoBox'>";
		echo "<ul>";
		echo "<li>Developer: " . $row["developer"]. "</li>";
		echo "<li>Contact: <a href=mailto:".$row["contact_email"].">". $row["contact_name"]. "</a></li>";
		echo "</ul>";
		echo "</div>";
		echo "</div>";

		}

}


$conn->close();

?>

