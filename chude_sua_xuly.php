<?php
	require_once 'ketnoi.php';
	
	$ID = $_POST['ID'];
	$TenChuDe = $_POST['TenChuDe'];
	
	try
	{
		$sql = 'UPDATE tbl_chude SET TenChuDe = :TenChuDe WHERE ID = :ID';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':ID', $ID);
		$cmd->bindValue(':TenChuDe', $TenChuDe);
		$result = $cmd->execute();
		
		header("Location: chude.php");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>