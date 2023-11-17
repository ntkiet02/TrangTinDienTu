<?php
	// Tạo kết nối đến CSDL
	$dns = 'mysql:host=127.0.0.1;dbname=trangtin;charset=utf8mb4';
	$user = 'root';
	$pass = 'vertrigo';
	$option = ['PDO::ATTR_ERRMODE' => 'PDO::ERRMODE_EXCEPTION'];
	$conn = null;
	
	try
	{
		$conn = new PDO($dns, $user, $pass, $option);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
	session_start();
?>