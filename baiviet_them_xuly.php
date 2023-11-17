<?php
	require_once 'ketnoi.php';
	
	$MaChuDe = $_POST['MaChuDe'];
	$TieuDe = $_POST['TieuDe'];
	$TomTat = $_POST['TomTat'];
	$NoiDung = $_POST['NoiDung'];
	
	try
	{
		// Mã người dùng
		$MaNguoiDung = $_SESSION['ID'];
		
		// Kiểm quyệt
		$KiemDuyet = $_SESSION['QuyenHan'] == 1 ? 1 : 0;
		
		$sql = 'INSERT INTO tbl_baiviet(MaChuDe, MaNguoiDung, TieuDe, TomTat, NoiDung, NgayDang, LuotXem, KiemDuyet)
				VALUES (:MaChuDe, :MaNguoiDung, :TieuDe, :TomTat, :NoiDung, :NgayDang, :LuotXem, :KiemDuyet)';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':MaChuDe', $MaChuDe);
		$cmd->bindValue(':MaNguoiDung', $MaNguoiDung);
		$cmd->bindValue(':TieuDe', $TieuDe);
		$cmd->bindValue(':TomTat', $TomTat);
		$cmd->bindValue(':NoiDung', $NoiDung);
		$cmd->bindValue(':NgayDang', date('Y-m-d H:i:s'));	// Lấy giờ hiện tại của server
		$cmd->bindValue(':LuotXem', 0);						// Mặc định lượt xem là 0
		$cmd->bindValue(':KiemDuyet', $KiemDuyet);
		$result = $cmd->execute();
		
		$message = 'Đăng bài viết thành công!';
		include_once 'success.php';
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>