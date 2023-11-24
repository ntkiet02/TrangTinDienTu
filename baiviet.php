<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bài viết - iOlds</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Bài viết</h5>
				<div class="card-body">
					<p><a href="baiviet_them.php" class="btn btn-info"><i class="bi bi-plus-lg"></i> Thêm mới</a></p>
						<table class="table table-sm table-hover table-striped table-bordered mb-0">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="15%">Người đăng</th>
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
								
								$sql = 'SELECT b.*, c.TenChuDe, n.HoVaTen
										FROM tbl_baiviet b, tbl_chude c, tbl_nguoidung n
										WHERE b.MaChuDe = c.ID AND b.MaNguoiDung = n.ID';
								$cmd = $conn->prepare($sql);		
								$cmd->execute();
								$result = $cmd->fetchAll();
								$stt = 1; 
								foreach($result as $value)
								{
								echo '<tr>';
								echo '<td>' . $stt++ . '</td>';
								echo '<td>' . $value['HoVaTen'] . '</td>';
								echo '<td>' . $value['TenChuDe'] . '</td>';
								echo '<td>' . $value['TieuDe'] . '</td>';
								echo '<td>' . $value['NgayDang'] . '</td>';

								if($value['KiemDuyet'] == 1)
									echo '<td class="text-center"><a href="baiviet_duyet.php?id=' . $value['ID'] . '"><i class="bi bi-check-circle"></i></a></td>';
								else
									echo '<td class="text-center"><a href="baiviet_duyet.php?id=' . $value['ID'] . '"><i class="bi bi-x-circle text-danger"></i></a></td>';
								
								echo '<td class="text-center"><a href="baiviet_sua.php?id=' . $value['ID'] . '"><i class="bi bi-pencil-square"></i></a></td>';
								echo '<td class="text-center"><a href="baiviet_xoa.php?id=' . $value['ID'] . '"><i class="bi bi-trash text-danger"></i></a></td>';
								echo '</tr>';
								}
								?>
							</tbody>
						</table>
				</div>		
			</div>
			
			<?php include_once "footer.php"; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
