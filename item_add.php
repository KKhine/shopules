<?php
	
	require 'db_connect.php';
	$name = $_POST['name'];

	$codeno= $_POST['codeno'];

	$price = $_POST['price'];

	$discount = $_POST['discount'];

	$photo = $_FILES['photo'];

	$basepath = 'images/items/';

	$fullpath = $basepath.$photo['name'];

	move_uploaded_file($photo['tmp_name'], $fullpath);

	$description = $_POST['description'];

	$brand_id = $_POST['brand_id'];

	$subcategory_id = $_POST['subcategory_id'];
 
	$sql = "INSERT INTO items (name, codeno, price, discount, photo, description, brand_id, subcategory_id) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, :value7, :value8)";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':value1', $name);

	$stmt->bindParam(':value2', $codeno);

	$stmt->bindParam(':value3', $price);

	$stmt->bindParam(':value4', $discount);

	$stmt->bindParam(':value5', $fullpath);

	$stmt->bindParam(':value6', $description);

	$stmt->bindParam(':value7', $brand_id);

	$stmt->bindParam(':value8', $subcategory_id);

	$stmt->execute();

	header('location: item_list.php');
?>