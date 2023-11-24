<?php include_once "ketnoi.php" ?>
<?php include_once "index_header.php" ?>
<div class="col-md-3 ms-auto">
	<aside class="sidebar sidebar-sticky">
		<div class="card mb-4">
			<div class="card-body">
				<h4 class="card-title">Chủ đề nổi bật</h4>
				<?php
				foreach ($CMlist as $value) {
					echo '<a class="btn btn-light btn-sm mb-1 me-1" href="baiviet_chude.php?id=' . $value['ID'] . '">' . $value['TenChuDe'] . '</a>';
				}
				?>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<h4 class="card-title">Tin tức đọc nhiều nhất</h4>
				<?php
				$sqlXNN = 'SELECT b.*, c.TenChuDe
							FROM tbl_baiviet b, tbl_chude c
							WHERE b.MaChuDe = c.ID AND b.KiemDuyet = 1 ORDER BY b.LuotXem DESC LIMIT 2';
											$cmdXNN = $conn->prepare($sqlXNN);
											$cmdXNN->execute();
											$resultXNN = $cmdXNN->fetchAll();

											foreach ($resultXNN as $value) {
												echo '<a href="baiviet_chitiet.php?id=' . $value['ID'] . '" class="d-inline-block mt-3">
							<h4 class="h6">' . $value['TieuDe'] . '</h4>
							<img class="card-img" src="' . LayHinhDauTien($value['NoiDung']) . '" alt="" />
							</a>';

					echo '<time class="timeago" datetime="' . $value['NgayDang'] . '"></time> thuộc ' . $value['TenChuDe'];
				}
				?>
			</div>
		</div>
	</aside>
</div>