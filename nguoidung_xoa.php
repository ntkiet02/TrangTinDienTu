<?php
	require_once 'ketnoi.php';
	
	$id = $_GET['id'];
	
	try
	{
		$sql = 'DELETE FROM tbl_nguoidung WHERE ID = :ID';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':ID', $id);
		$result = $cmd->execute();
		
		header("Location: nguoidung.php");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>