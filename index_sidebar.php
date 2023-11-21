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
								$sqlBVhot = 'SELECT a.*, b.TenChuDe 
											FROM tbl_baiviet a, tbl_chude b
											WHERE a.MaChuDe = b.ID AND KiemDuyet =1  
											ORDER BY LuotXem DESC LIMIT 2';
								$cmdBVhot = $conn->prepare($sqlBVhot);
								$cmdBVhot->execute();
								$BVlisthot = $cmdBVhot->fetchAll();
								foreach ($BVlisthot as $hot) {
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