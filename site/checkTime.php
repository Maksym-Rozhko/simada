<?php
	ini_set('display_errors', 1);

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$servername = "localhost";
		$username = "simada";
		$password = "xB1mW6oU5pgB9b";
		 
		// Connection
		$conn = mysqli_connect($servername, $username, $password);
		if (!$conn) {
		  die("Connection failed: "
			  . mysqli_connect_error());
		}
						
		$sql = $conn->query("SELECT * from `simada`.`orders` where date like '%" . $_POST['date'] . "%'"); 
		$results = mysqli_fetch_all($sql, MYSQLI_ASSOC); # all rows to array
		$dates = [];
		
		if($results){
			foreach($results as $res) {
				$dates[] = date('H:00', strtotime($res['date']));
			}
			
			echo json_encode($dates);
		}
	}

?>