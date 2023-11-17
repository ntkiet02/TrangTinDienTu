<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Người dùng - iNews</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Người dùng</h5>
				<div class="card-body">
					
					<p><a href="nguoidung_them.php" class="btn btn-info"><i class="bi bi-plus-lg"></i> Thêm mới</a></p>
					
					<table class="table table-sm table-hover table-striped table-bordered mb-0">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th>Họ và tên</th>
								<th>Tên đăng nhập</th>
								<th>Quyền hạn</th>
								<th>Trạng thái</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = 'SELECT * FROM tbl_nguoidung';
								$cmd = $conn->prepare($sql);
								$cmd->execute();
								$result = $cmd->fetchAll();
								
								$stt = 1;
								foreach($result as $value)
								{
									echo '<tr>
											<td>' . $stt++ . '</td>
											<td>' . $value['HoVaTen'] . '</td>
											<td>' . $value['TenDangNhap'] . '</td>
											<td>' . ($value['QuyenHan'] == 1 ? "Quản trị viên" : "Thành viên") . '</td>
											<td>' . ($value['Khoa'] == 1 ? "Đang bị khóa" : "Hoạt động") . '</td>
											<td class="text-center"><a href="nguoidung_sua.php?id=' . $value['ID'] . '"><i class="bi bi-pencil-square"></i></a></td>
											<td class="text-center"><a href="nguoidung_xoa.php?id=' . $value['ID'] . '"><i class="bi bi-trash text-danger"></i></a></td>
										  </tr>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			
			<?php include_once 'footer.php'; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>