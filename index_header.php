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
					<?php
					if(isset($_SESSION['ID'])) // Nếu đã đăng nhập
					{
				?>
						<?php
							if($_SESSION['QuyenHan'] == 1) // Nếu là Quản trị viên
							{
						?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="bi bi-database-gear"></i> Quản lý
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="chude.php"><i class="bi bi-diagram-2"></i> Chủ đề</a></li>
										<li><a class="dropdown-item" href="nguoidung.php"><i class="bi bi-people"></i> Người dùng</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="baiviet.php"><i class="bi bi-stickies"></i> Bài viết</a></li>
									</ul>
								</li>
						<?php
							}
							else
							{
						?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-person-circle"></i> <?php echo $_SESSION['HoVaTen']; ?>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="baiviet_them.php"><i class="bi bi-pencil-square"></i> Đăng bài viết</a></li>
									<li><a class="dropdown-item" href="baiviet_cuatoi.php"><i class="bi bi-person-badge"></i> Bài viết của tôi</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="nguoidung_doimatkhau.php"><i class="bi bi-key"></i> Đổi mật khẩu</a></li>
								</ul>
							</li>
						<?php
							}
						?>
						
						<li class="nav-item">
							<a class="nav-link" href="dangxuat.php"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a>
						</li>
				<?php
					}
					else // Nếu chưa đăng nhập
					{
				?>
						<li class="nav-item">
							<a class="nav-link" href="dangky.php"><i class="bi bi-person-plus"></i> Đăng ký</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="dangnhap.php"><i class="bi bi-box-arrow-in-right"></i> Đăng nhập</a>
						</li>
				<?php
					}
				?>

						<!-- <li class="nav-item">
							<a class="nav-link" href="dangnhap.php">Đăng nhập</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="dangky.php">Đăng ký</a>
						</li> -->
					</ul>
					<form class="form-inline" role="search">
						<input class="search js-search form-control form-control-rounded me-sm-2" type="text"
							title="Bạn muốn tìm gì?" placeholder="Search.." aria-label="Search">
					</form>
				</div>
			</div>
		</nav>
	</header>