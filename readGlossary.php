<?php

/*
 * Connect to MySQL and return the connect var
 */
function connectToMySQL() {
    $servername = "mysql5-master.ethz.ch";
    $username = "simlab";
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
$sqlPdo = "SELECT short_name, tooltip, definition
    FROM  glossary
	";
$resultPdo = $conn->query($sqlPdo);

/*
 * Create the PDO file
 */

//Create an array
$json_response = array();

if (!$resultPdo) {
 		echo "Sorry, a connection with the database occured, please try later";
 		exit;
}
else{
	while($row = $resultPdo->fetch_assoc()) {
		if ($row["tooltip"] == 'Yes'){
			$row_array['term'] = $row["short_name"];
			$row_array['description'] = $row["definition"];
			//push the values in the array
			array_push($json_response,$row_array);
		}
    }
}

echo json_encode($json_response);

$conn->close();

?>
