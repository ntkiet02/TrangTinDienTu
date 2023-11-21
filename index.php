<?php
require_once 'ketnoi.php';
require_once 'thuvien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Hãy đọc tin tức mõi ngày giúp bạn tốn thời gian" /><!-- Hiện cái n-->
	<meta name="author" content="Nguyễn Trí Kiệt" />
	<title>Trang chủ - iOlds</title>
	<link href="css/app.css" rel="stylesheet" />
</head>

<body>
	<php include_once "index_header.php" ?>
	<main class="main pt-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<?php
						$sqlBV = 'SELECT a.*, b.TenChuDe 
							FROM tbl_baiviet a, tbl_chude b
							WHERE a.MaChuDe = b.ID AND KiemDuyet =1  
							ORDER BY NgayDang DESC LIMIT 12';
						$cmdBV = $conn->prepare($sqlBV);
						$cmdBV->execute();
						$BVlist = $cmdBV->fetchAll();
						foreach (array_chunk($BVlist, 4) as $valuecha) {
							echo '<div class="col-md-4">';
							foreach ($valuecha as $valuecon) {
								echo '	<article class="card mb-4">
											<header class="card-header">
												<div class="card-meta">
													<a href="#"><time class="timeago" datetime="' . $valuecon['NgayDang'] . '">26 october 2021</time></a> in <a href="page-category.html">' . $valuecon['TenChuDe'] . '</a>
												</div>
												<a href="baiviet_chitiet.php?id=' . $valuecon['ID'] . '">
													<h4 class="card-title">' . $valuecon['TieuDe'] . '</h4>
												</a>
											</header>
											<a href="baiviet_chitiet.php?id=' . $valuecon['ID'] . '">
												<img class="card-img" src="' . layhinhdautien($valuecon['NoiDung']) . '" alt="" />
											</a>
											<div class="card-body">
												<p class="card-text">' . $valuecon['TomTat'] . '</p>
											</div>
										</article>';
							}
							echo '</div>';
						}
						?>
						</article>
					</div>

				</div>
				<!-- Chèn thanh side bar nằm bên -->
				<?php include_once"index_sidebar.php"?>

			</div>
		</div>
	</main>
	<div class="site-newsletter">
		<div class="container">
			<div class="text-center">
				<h3 class="h4 mb-2">Subscribe to our newsletter</h3>
				<p class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</p>
				<div class="row">
					<div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ms-auto me-auto">
						<div class="input-group mb-3 mt-3">
							<input type="text" class="form-control" placeholder="Email address"
								aria-label="Email address" />
							<span class="input-group-btn">
								<button class="btn btn-secondary" type="button">Subscribe</button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-instagram">
		<div class="action"
			<a class="btn btn-light" href="#">
				Follow us @ Instagram
			</a>
		</div>
		<div class="row g-0">
			<div class="col-sm-6">
				<div class="row g-0">
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/1.jpg"
								alt="" /></a></div>
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/2.jpg"
								alt="" /></a></div>
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/3.jpg"
								alt="" /></a></div>
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/4.jpg"
								alt="" /></a></div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row g-0">
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/5.jpg"
								alt="" /></a></div>
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/6.jpg"
								alt="" /></a></div>
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/7.jpg"
								alt="" /></a></div>
					<div class="col-3"><a class="photo" href="#"><img class="img-fluid" src="images/instagram/8.jpg"
								alt="" /></a></div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once "footer.php"; ?>
	<script src="js/app.js"></script>
</body>

</html>