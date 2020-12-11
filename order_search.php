<?php
	require 'db_connect.php';

	$start = $_POST['start'];
	$end = $_POST['end'];
	//echo $start; die();
	$sql = 'SELECT * FROM orders WHERE order_date Between :value1 AND :value2';

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $start);
	$stmt->bindParam(':value2', $end);
	$stmt->execute();

	$searchResults = $stmt->fetchAll();
	//var_dump($searchResults); die();
	echo json_encode($searchResults);





 ?>