<?php

	include 'db_connect.php';

	// january
	$janFirst = strtotime('first day of January');
	$janLast = strtotime('last day of January');

	$janStart = date('Y-m-d', $janFirst);
	$janEnd = date('Y-m-d', $janLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$janStart);
	$stmt->bindParam(':value2',$janEnd);
	$stmt->execute();
	$janResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// FEBRUARY
	$febFirst = strtotime('first day of February');
	$febLast = strtotime('last day of February');

	$febStart = date('Y-m-d', $febFirst);
	$febEnd = date('Y-m-d', $febLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$febStart);
	$stmt->bindParam(':value2',$febEnd);
	$stmt->execute();
	$febResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// Marchmar
	$marFirst = strtotime('first day of March');
	$marLast = strtotime('last day of March');

	$marStart = date('Y-m-d', $marFirst);
	$marEnd = date('Y-m-d', $marLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$marStart);
	$stmt->bindParam(':value2',$marEnd);
	$stmt->execute();
	$marResult = $stmt->fetch(PDO::FETCH_ASSOC);


	// April
	$aprFirst = strtotime('first day of April');
	$aprLast = strtotime('last day of April');

	$aprStart = date('Y-m-d', $aprFirst);
	$aprEnd = date('Y-m-d', $aprLast);
	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$aprStart);
	$stmt->bindParam(':value2',$aprEnd);
	$stmt->execute();
	$aprResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// May
	$mayFirst = strtotime('first day of May');
	$mayLast = strtotime('last day of May');

	$mayStart = date('Y-m-d', $mayFirst);
	$mayEnd = date('Y-m-d', $mayLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$mayStart);
	$stmt->bindParam(':value2',$mayEnd);
	$stmt->execute();
	$mayResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// June
	$junFirst = strtotime('first day of Junejun');
	$junLast = strtotime('last day of Junejun');

	$junStart = date('Y-m-d', $junFirst);
	$junEnd = date('Y-m-d', $junLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$junStart);
	$stmt->bindParam(':value2',$junEnd);
	$stmt->execute();
	$junResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// July
	$julFirst = strtotime('first day of July');
	$julLast = strtotime('last day of July');

	$julStart = date('Y-m-d', $julFirst);
	$julEnd = date('Y-m-d', $julLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$julStart);
	$stmt->bindParam(':value2',$julEnd);
	$stmt->execute();
	$julResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// Augest
	$augFirst = strtotime('first day of Augest');
	$augLast = strtotime('last day of Augest');

	$augStart = date('Y-m-d', $augFirst);
	$augEnd = date('Y-m-d', $augLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$augStart);
	$stmt->bindParam(':value2',$augEnd);
	$stmt->execute();
	$augResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// September
	$sepFirst = strtotime('first day of September');
	$sepLast = strtotime('last day of September');

	$sepStart = date('Y-m-d', $sepFirst);
	$sepEnd = date('Y-m-d', $sepLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$sepStart);
	$stmt->bindParam(':value2',$sepEnd);
	$stmt->execute();
	$sepResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// October
	$octFirst = strtotime('first day of October');
	$octLast = strtotime('last day of October');

	$octStart = date('Y-m-d', $octFirst);
	$octEnd = date('Y-m-d', $octLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$octStart);
	$stmt->bindParam(':value2',$octEnd);
	$stmt->execute();
	$octResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// November
	$novFirst = strtotime('first day of November');
	$novLast = strtotime('last day of November');

	$novStart = date('Y-m-d', $novFirst);
	$novEnd = date('Y-m-d', $novLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$novStart);
	$stmt->bindParam(':value2',$novEnd);
	$stmt->execute();
	$novResult = $stmt->fetch(PDO::FETCH_ASSOC);

	// December
	$decFirst = strtotime('first day of December');
	$decLast = strtotime('last day of December');

	$decStart = date('Y-m-d', $decFirst);
	$decEnd = date('Y-m-d', $decLast);

	$sql = "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE order_date BETWEEN :value1 AND :value2";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1',$decStart);
	$stmt->bindParam(':value2',$decEnd);
	$stmt->execute();
	$decResult = $stmt->fetch(PDO::FETCH_ASSOC);

	//---------------------------------------------

	$total = array(
		$janResult['total'],$febResult['total'],$marResult['total'],$aprResult['total'], $mayResult['total'], $junResult['total'], $julResult['total'], $augResult['total'], $sepResult['total'], $octResult['total'], $novResult['total'], $decResult['total']
	);

	// var_dump($total);

	echo json_encode($total);
?>