<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Thêm chủ đề - iOlds</title />
		<link rel="shortcut icon" href="images/premium.png" type="image/x-icon" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	</head>
	<body>
		<div class="container">
			<?php include_once "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm chủ đề</h5>
				<div class="card-body">
					<form action="chude_them_xuly.php" method="post" class="needs-validation" novalidate>
						<div class="mb-3">
							<label for="TenChuDe" class="form-label">Tên chủ đề</label>
							<input type="text" class="form-control" id="TenChuDe" name="TenChuDe" required />
							<div class="invalid-feedback">Tên chủ đề không được bỏ trống.</div>
						</div>
						
						<button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Thêm vào CSDL</button>
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