<?php
	require_once 'ketnoi.php';
	
	$id = $_GET['id'];
	
	try
	{
		$sql = 'DELETE FROM tbl_baiviet WHERE ID = :ID';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':ID', $id);
		$result = $cmd->execute();
		
		$message = 'Đã xóa bài viết thành công rùi!';
		include_once 'success.php';
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>