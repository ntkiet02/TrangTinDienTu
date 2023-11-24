<?php
require_once 'ketnoi.php';
require_once 'thuvien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hãy đọc tin tức mỗi ngày giúp bạn mở rộng kiến thức!" /><!-- Hiện cái n-->
    <meta name="author" content="Nguyễn Trí Kiệt" />
    <title>Trang chủ - iOlds</title>
    <link href="css/app.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
            <div class="container">
                <button class="navbar-toggler order-2 order-md-1" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Chuyên mục</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <?php
                                $sqlCM = 'SELECT * FROM tbl_chude ORDER BY TenChuDe';
                                $cmdCM = $conn->prepare($sqlCM);
                                $cmdCM->execute();
                                $CMlist = $cmdCM->fetchAll();
                                foreach ($CMlist as $value) {
                                    echo '<a class="dropdown-item" href="#">' . $value['TenChuDe'] . '</a>';
                                }

                                ?>

                            </div>
                        </li>

                    </ul>
                </div>
                <a class="navbar-brand mx-auto order-1 order-md-3" href="index.php">iOlds</a>
                <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dangnhap.php">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dangky.php">Đăng ký</a>
                        </li>
                    </ul>
                    <form class="form-inline" role="search">
                        <input class="search js-search form-control form-control-rounded me-sm-2" type="text"
                            title="Bạn muốn tìm gì?" placeholder="Search.." aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="main pt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="text-center">
                        <h3>Kết quả tìm kiếm</h3>
                        <hr />
                    </div>
                    <?php
                    $tukhoa = "%" . trim($_POST['tukhoa']) . '%';
                    $sqlBV = "SELECT b.*, c.TenChuDe
                                FROM tbl_baiviet b, tbl_chude c
                                WHERE b.MaChuDe = c.ID AND b.KiemDuyet = 1 AND (b.TieuDe LIKE :TuKhoa OR b.TomTat LIKE :TuKhoa)
                                ORDER BY NgayDang DESC LIMIT 12";
                    $cmdBV = $conn->prepare($sqlBV);
                    $cmdBV->bindValue(':TuKhoa', $tukhoa);
                    $cmdBV->execute();
                    $resultBV = $cmdBV->fetchAll();
                    if ($resultBV) {
                        foreach ($resultBV as $value) {
                            echo '  <article class="card mb-4">
                                        <header class="card-header px-0">
                                                <div class="card-meta">
                                                    <a href="#"><time class="timeago" datetime="' . $value['NgayDang'] . '"></time></a>
                                                    thuộc <a href="baiviet_chude.php?id=' . $value['MaChuDe'] . '">' . $value['TenChuDe'] . '</a>
                                                </div>
                                                <a href="baiviet_chitiet.php?id=' . $value['ID'] . '">
                                                    <h4 class="card-title">' . $value['TieuDe'] . '</h4>
                                                </a>
                                        </header>
                                            <div class="card-body px-0 pt-0">
                                                <p class="card-text">' . $value['TomTat'] . '</p>
                                            </div>
                                    </article>';
                            }
                        }
                        else
                        {
                        echo '<div class="alert alert-primary" role="alert">
                                <h4 class="alert-heading">Rất tiếc!</h4>
                                <p>Đã tìm rất kỹ nhưng không có bài viết nào phù hợp.</p>
                                <hr>
                                        <div class="btn-list">
                                        <a class="btn btn-primary" type="button" href="index.php">Về trang chủ</a>
                                    </div>
                                </div>';
                        
                         }
                       
                    ?>
                    <div class="alert alert-primary" role="alert">
                    </div>

                </div>
            </div>
        </div>
        <?php include_once "index_sidebar.php"; ?>
    </main>

    <?php include_once "footer.php"; ?>
    <script src="js/app.js"></script>
</body>

</html>