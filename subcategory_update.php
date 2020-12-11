<?php

	require 'db_connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$category = $_POST['categoryid'];

	$sql = "UPDATE subcategories SET name=:value1, category_id=:value2 WHERE id=:value3";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $name);
	$stmt->bindParam(':value2', $category);
	$stmt->bindParam(':value3', $id);
	$stmt->execute();

	header('location: subcategory_list.php');

?>