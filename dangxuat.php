<?php
	session_start();
	
	// Hủy SESSION
	unset($_SESSION['ID']);
	unset($_SESSION['HoVaTen']);
	unset($_SESSION['QuyenHan']);
	
	// Quay về trang chủ
	header("Location: index.php");
?>