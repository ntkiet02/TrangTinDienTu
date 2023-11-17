<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Sửa người dùng - iNews</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa người dùng</h5>
				<div class="card-body">
					<?php
						$id = $_GET['id'];
						
						$sql = 'SELECT * FROM tbl_nguoidung WHERE ID = :ID';
						$cmd = $conn->prepare($sql);
						$cmd->bindValue(':ID', $id);
						$cmd->execute();
						$result = $cmd->fetch();
					?>
					
					<form action="nguoidung_sua_xuly.php" method="post" class="needs-validation" novalidate>
						<input type="text" id="ID" name="ID" value="<?php echo $result['ID']; ?>" hidden />
						
						<div class="mb-3">
							<label for="HoVaTen" class="form-label">Họ và tên</label>
							<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" value="<?php echo $result['HoVaTen']; ?>" required />
							<div class="invalid-feedback">Họ và tên không được bỏ trống.</div>
						</div>
						
						<div class="mb-3">
							<label for="TenDangNhap" class="form-label">Tên đăng nhập</label>
							<input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" value="<?php echo $result['TenDangNhap']; ?>" required />
							<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
						</div>
						
						<div class="mb-3">
							<label for="MatKhau" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control" id="MatKhau" name="MatKhau" placeholder="Bỏ trống để giữ nguyên mật khẩu cũ." />
						</div>
						
						<div class="mb-3">
							<label for="XacNhanMatKhau" class="form-label">Xác nhận mật khẩu</label>
							<input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" placeholder="Bỏ trống để giữ nguyên mật khẩu cũ." />
						</div>
						
						<div class="mb-3">
							<label for="QuyenHan" class="form-label">Quyền hạn</label>
							<select class="form-select" id="QuyenHan" name="QuyenHan" required>
								<option value="">-- Chọn --</option>
								<option value="1" <?php echo ($result['QuyenHan'] == 1 ? 'selected' : ''); ?>>Quản trị viên</option>
								<option value="2" <?php echo ($result['QuyenHan'] == 2 ? 'selected' : ''); ?>>Thành viên</option>
							</select>
							<div class="invalid-feedback">Chưa chọn quyền hạn.</div>
						</div>
						
						<div class="mb-3">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="KhoaTaiKhoan" name="KhoaTaiKhoan" <?php echo ($result['Khoa'] == 1 ? 'checked' : ''); ?> />
								<label class="form-check-label" for="KhoaTaiKhoan">
									Khóa tài khoản.
								</label>
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Cập nhật</button>
					</form>
				</div>
			</div>
			
			<?php include_once 'footer.php'; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			(() => {
				'use strict';
				const forms = document.querySelectorAll('.needs-validation');
				Array.from(forms).forEach(form => {
					form.addEventListener('submit', event => {
						if (!form.checkValidity()) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			})();
		</script>
	</body>
</html>