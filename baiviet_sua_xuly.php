<?php
	require_once 'ketnoi.php';
	$ID = $_POST['ID'];
	$MaChuDe = $_POST['MaChuDe'];
	$TieuDe = $_POST['TieuDe'];
	$TomTat = $_POST['TomTat'];
	$NoiDung = $_POST['NoiDung'];
	try
	{	
		$sql = 'UPDATE tbl_baiviet
			SET	MaChuDe = :MaChuDe,
				TieuDe = :TieuDe,
				TomTat = :TomTat,
				NoiDung = :NoiDung
			WHERE  ID = :ID';

		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':ID', $ID);
		$cmd->bindValue(':MaChuDe', $MaChuDe);
		$cmd->bindValue(':TieuDe', $TieuDe);
		$cmd->bindValue(':TomTat', $TomTat);
		$cmd->bindValue(':NoiDung', $NoiDung);
		
		$result = $cmd->execute();
		
		$message = 'Sửa bài viết thành công!';
		include_once 'success.php';
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>