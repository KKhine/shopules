<?php

	require 'db_connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$codeno = $_POST['codeno'];
	$price = $_POST['price'];
	$oldphoto = $_POST['oldphoto'];
	$newphoto = $_FILES['photo'];

	if ($newphoto['size'] > 0) {

	$basepath = 'image/items/';
	$fullpath = $basepath.$newphoto['name'];
	move_uploaded_file($newphoto['tmp_name'], $fullpath);
	}
	else{
		$fullpath = $oldphoto;
	}
	$discount = $_POST['discount'];
	$description = $_POST['description'];
	$brand_id = $_POST['brand_id'];
	$subcategory_id = $_POST['subcategory_id'];

	$sql = "UPDATE items SET name=:value1, codeno=:value2, price=:value3, photo=:value4, discount=:value5, description=:value6, brand_id=:value7, subcategory_id=:value8 WHERE id=:value9";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $name);
	$stmt->bindParam(':value2', $codeno);
	$stmt->bindParam(':value3', $price);
	$stmt->bindParam(':value4', $fullpath);
	$stmt->bindParam(':value5', $discount);
	$stmt->bindParam(':value6', $description);
	$stmt->bindParam(':value7', $brand_id);
	$stmt->bindParam(':value8', $subcategory_id);
	$stmt->bindParam(':value9', $id);
	$stmt->execute();

	header('location: item_list.php');

?>