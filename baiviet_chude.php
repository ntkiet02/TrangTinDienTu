
<?php require_once "ketnoi.php";
        require_once "thuvien.php";
    $maChuDe = $_GET['id'];
    $sqlCD = 'SELECT * FROM tbl_chude WHERE ID = :ID';
    $cmdCD = $conn->prepare($sqlCD);
    $cmdCD->bindValue(':ID', $maChuDe);
    $cmdCD->execute();
    $resultCD = $cmdCD->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Hãy đọc tin tức mõi ngày giúp bạn tốn thời gian" /><!-- Hiện cái n-->
	<meta name="author" content="Nguyễn Trí Kiệt" />
	<title>Bài viết thuộc chuyên mục <?php echo $resultCD['TenChuDe']; ?> - iOlds</title>
	<link href="css/app.css" rel="stylesheet" />
</head>
<body>
    <?php include_once "index_header.php" ?>
	<main class="main pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
                    <div class="text-center">
                        <span class="text-muted">Chuyên mục:</span>
                        <h3><?php echo $resultCD['TenChuDe'];?></h3>
                        <hr />
                    </div>
                    <div class="row">
                    <?php
                    $sqlBV = 'SELECT b.*, c.TenChuDe
                    FROM tbl_baiviet b, tbl_chude c
                    WHERE b.MaChuDe = c.ID AND b.KiemDuyet = 1 AND b.MaChuDe = :MaChuDe ORDER BY b.NgayDang DESC LIMIT 8';
                    $cmdBV = $conn->prepare($sqlBV);
                    $cmdBV->bindValue(':MaChuDe', $maChuDe);
                    $cmdBV->execute();
                    $resultBV = $cmdBV->fetchAll();

                    if ($resultBV) {
                        foreach (array_chunk($resultBV, 4) as $array) {
                            if (count($resultBV) <= 4)
                                echo '<div class="col-12">';
                            else
                                echo '<div class="col-md-6">';

                            foreach ($array as $value) {
                                echo '<article class="card mb-4">
                                <header class="card-header">
                                <div class="card-meta">
                                <a href="#"><time class="timeago" datetime="' . $value['NgayDang'] . '"></time></a>
                                thuộc <a href="baiviet_chude.php?id=' . $value['MaChuDe'] . '">' . $value['TenChuDe'] . '</a>
                                </div>
                                <a href="baiviet_chitiet.php?id=' . $value['ID'] . '">
                                <h4 class="card-title">' . $value['TieuDe'] . '</h4>
                                </a>
                                </header>
                                <a href="baiviet_chitiet.php?id=' . $value['ID'] . '">
                                <img class="card-img" src="' . LayHinhDauTien($value['NoiDung']) . '" alt="" />
                                </a>
                                <div class="card-body">
                                <p class="card-text">' . $value['TomTat'] . '</p>
                                </div>
                                </article>';
                            }
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Rất tiếc!</h4>
                            <p>Không có bài viết nào trong chuyên mục này.</p>
                            <hr>
                            <div class="btn-list">
                            <a class="btn btn-primary" type="button" href="index.php">Về trang chủ</a>
                            </div>
                            </div>';
                    }
                    ?>
                    </div>
                </div>
                <?php include_once "index_sidebar.php" ?>       
            </div>	
        </div>>
        </main>
        
    <?php include_once "footer.php"?>
	<script src="js/app.js"></script>
</body>
</html>