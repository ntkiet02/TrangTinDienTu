<?php
require_once 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Đăng ký tài khoản - iNews</title>
    <link rel="shortcut icon" href="images/premium.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <?php include_once 'navbar.php'; ?>
        <div class="card mt-3">
            <h5 class="card-header">Đăng ký tài khoản</h5>
            <div class="card-body">
                <form action="dangky_xuly.php" method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="HoVaTen" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="HoVaTen" name="HoVaTen" required />
                        <div class="invalid-feedback">Họ và tên không được bỏ trống.</div>
                    </div>

                    <div class="mb-3">

                        <label for="TenDangNhap" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" required />
                        <div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
                    </div>

                    <div class="mb-3">

                        <label for="MatKhau" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="MatKhau" name="MatKhau" required />
                        <div class="invalid-feedback">Mật khẩu không được bỏ trống.</div>
                    </div>

                    <div class="mb-3">
                        <label for="XacNhanMatKhau" class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" required />
                        <div class="invalid-feedback">Xác nhận mật khẩu không được bỏ trống.</div>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Đăng ký</button>

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