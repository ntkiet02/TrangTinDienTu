<header>
		<nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
			<div class="container">
				<button class="navbar-toggler order-2 order-md-1" type="button" data-bs-toggle="collapse"
					data-bs-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
					<ul class="navbar-nav me-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Chuyên mục</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
								<?php
								$sqlCM = 'SELECT * FROM tbl_chude ORDER BY TenChuDe';
								$cmdCM = $conn->prepare($sqlCM);
								$cmdCM->execute();
								$CMlist = $cmdCM->fetchAll();
								foreach ($CMlist as $value) {
									echo '<a class="dropdown-item" href="baiviet_chude.php?id=' . $value['ID'] . '">' . $value['TenChuDe'] . '</a>';
								}
								?>

							</div>
						</li>

					</ul>
				</div>
				<a class="navbar-brand mx-auto order-1 order-md-3" href="index.php">iOlds</a>
				<div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link" href="dangnhap.php">Đăng nhập</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="dangky.php">Đăng ký</a>
						</li>
					</ul>
					<form class="form-inline" role="search">
						<input class="search js-search form-control form-control-rounded me-sm-2" type="text"
							title="Bạn muốn tìm gì?" placeholder="Search.." aria-label="Search">
					</form>
				</div>
			</div>
		</nav>
	</header>