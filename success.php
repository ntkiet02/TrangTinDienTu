<?php
	require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Hoàn thành - iOlds</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Hoàn thành</h5>
				<div class="card-body">
					<div class="alert alert-primary mb-0" role="alert">
						<i class="bi bi-check2-circle"></i> <?php echo $message; ?>
					</div>
				</div>
			</div>
			
			<?php include_once "footer.php"; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>