<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Sửa chủ đề - iOlds</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa chủ đề</h5>
				<div class="card-body">
					<?php
						$id = $_GET['id'];
						
						$sql = 'SELECT * FROM tbl_chude WHERE ID = :ID';
						$cmd = $conn->prepare($sql);
						$cmd->bindValue(':ID', $id);
						$cmd->execute();
						$result = $cmd->fetch();
					?>
					
					<form action="chude_sua_xuly.php" method="post" class="needs-validation" novalidate>
						<input type="text" id="ID" name="ID" value="<?php echo $result['ID']; ?>" hidden />
						
						<div class="mb-3">
							<label for="TenChuDe" class="form-label">Tên chủ đề</label>
							<input type="text" class="form-control" id="TenChuDe" name="TenChuDe" value="<?php echo $result['TenChuDe']; ?>" required />
							<div class="invalid-feedback">Tên chủ đề không được bỏ trống.</div>
						</div>
						
						<button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Cập nhật</button>
					</form>
				</div>
			</div>
			
			<?php include_once "footer.php"; ?>
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