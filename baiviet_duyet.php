<?php
	require_once 'ketnoi.php';
	
	$id = $_GET['id'];
	
	try
	{
		$sql = 'UPDATE tbl_baiviet SET KiemDuyet = 1 - KiemDuyet WHERE ID = :ID';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':ID', $id);
		$result = $cmd->execute();
		
		header('Location: baiviet.php');
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>