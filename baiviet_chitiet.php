<?php
	require_once 'ketnoi.php';
	require_once 'thuvien.php';
	$id = $_GET['id'];
 
	$sqlBV = 'SELECT b.*, c.TenChuDe
	FROM tbl_baiviet b, tbl_chude c
	WHERE b.MaChuDe = c.ID AND b.KiemDuyet = 1 AND b.ID = :ID';
	$cmdBV = $conn->prepare($sqlBV);
	$cmdBV->bindValue(':ID', $id);
	$cmdBV->execute();
	$resultBV = $cmdBV->fetch();
	
	// Xử lý tăng lượt xem
	if(!isset($_SESSION['DaXem' . $id]))
	{
		 $sqlTLX = 'UPDATE tbl_baiviet SET LuotXem = LuotXem + 1 WHERE ID = :ID';
		 $cmdTLX = $conn->prepare($sqlTLX);
		 $cmdTLX->bindValue(':ID', $id);
		 $cmdTLX->execute();
		 
		 // Đánh dấu đã xem
		 $_SESSION['DaXem' . $id] = 1;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Hãy đọc tin tức mỗi ngày giúp bạn mở rộng kiến thức!" /><!-- Hiện cái n-->
	<meta name="author" content="Nguyễn Trí Kiệt" />
	<title><?php echo $resultBV['TieuDe'];?> - iOlds</title>
	<link href="css/app.css" rel="stylesheet" />
</head>
<body>
	<?php include_once "index_header.php" ?>
	<main class="main pt-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
                    <article class="card mb-4">
                        <header class="card-header text-center">
                            <div class="card-meta">
                                <a href="#">Đăng vào <time class="timeago" datetime="<?php echo $resultBV['NgayDang']; ?>"></time></a> thuộc chủ đề <a href="baiviet_chude.php?id=<?php echo $resultBV['MaChuDe']; ?>"><?php echo $resultBV['TenChuDe']; ?></a>, có <?php echo $resultBV['LuotXem']; ?> lượt xem.
                            </div>
                            <a href="#">
                               <h3 class="card-title"><?php echo $resultBV['TieuDe']; ?></h3>
                            </a>
                        </header>
                        <div class="card-body">
                            <p class="fw-bold"><?php echo $resultBV['TomTat']; ?></p>
							<?php echo $resultBV['NoiDung']; ?>
						</div>
                    </article>
                </div>		
				</div>
				
			</div>
		</div>
	</main>
	
	<?php include_once "binhluan.php"?>
	
	<?php include_once "footer.php"; ?>
	<script src="js/app.js"></script>
</body>
</html>