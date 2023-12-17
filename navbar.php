<nav class="navbar navbar-expand-lg bg-info" data-bs-theme="light">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php"><i class="bi bi-moon-stars"></i>iOlds</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="index.php"><i class="bi bi-cup-hot"></i> Tin mới nhất</a>
				</li>
				<?php
					if(isset($_SESSION['ID']))
					{
				?>
						<?php
							if($_SESSION['QuyenHan'] == 1)
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
							<a class="nav-link" href="dangxuat.php"><i class="bi bi-box-arrow-in-right"></i> Đăng xuất</a>
						</li>
				<?php
					}
					else
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
			</ul>
			<!-- <form method="GET" action="baiviet_timkiem.php" class="mb-3">
					< ?php if (isset($chude)) : ?>
						<input type="hidden" name="chude" value="< ?php echo $chude; ?>">
					< ?php endif; ?>

					<div class="input-group">
						<input class= "search js-search form-control form-control-rounded me-sm-2" type="text" name="tu_khoa" class="form-control" placeholder="Nhập từ khóa tìm kiếm" value="<?php echo isset($tu_khoa) ? $tu_khoa : ''; ?>" />

						<button type="submit" class="btn btn-primary">Tìm kiếm</button>
					</div>
			</form> -->
			</ul>
		</div>
	</div>
</nav>