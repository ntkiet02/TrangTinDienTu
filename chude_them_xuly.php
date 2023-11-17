<?php
	require_once 'ketnoi.php';
	
	$TenChuDe = $_POST['TenChuDe'];
	
	try
	{
		$sql = 'INSERT INTO tbl_chude(TenChuDe) VALUES (:TenChuDe)';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':TenChuDe', $TenChuDe);
		$result = $cmd->execute();
		
		header('Location: chude.php');
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>