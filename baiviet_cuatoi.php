<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bài viết của tôi - iNews</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Bài viết của tôi</h5>
				<div class="card-body">
					
					<p><a href="baiviet_them.php" class="btn btn-info"><i class="bi bi-plus-lg"></i> Thêm mới</a></p>
					
					<table class="table table-sm table-hover table-striped table-bordered mb-0">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="15%">Chủ đề</th>
								<th width="50%">Tiêu đề</th>
								<th width="20%">Ngày đăng</th>
								<th width="5%" title="Tình trạng kiểm duyệt">D?</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = 'SELECT b.*, c.TenChuDe
										FROM tbl_baiviet b, tbl_chude c
										WHERE b.MaChuDe = c.ID AND b.MaNguoiDung = :MaNguoiDung';
								$cmd = $conn->prepare($sql);
								$cmd->bindValue(':MaNguoiDung', $_SESSION['ID']);
								$cmd->execute();
								$result = $cmd->fetchAll();
								
								$stt = 1;
								foreach($result as $value)
								{
									echo '<tr>
											<td>' . $stt++ . '</td>
											<td>' . $value['TenChuDe'] . '</td>
											<td>' . $value['TieuDe'] . '</td>
											<td>' . $value['NgayDang'] . '</td>
											<td>' . ($value['KiemDuyet'] == 1 ? "Đã duyệt" : "Chưa duyệt") . '</td>
											<td class="text-center"><a href="baiviet_sua.php?id=' . $value['ID'] . '"><i class="bi bi-pencil-square"></i></a></td>
											<td class="text-center"><a href="baiviet_xoa.php?id=' . $value['ID'] . '" onclick="return confirm(\'Bạn muốn xóa bài viết ' . $value['TieuDe'] . ' không?\')"><i class="bi bi-trash text-danger"></i></a></td>
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