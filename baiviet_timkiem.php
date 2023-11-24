<?php
require_once 'ketnoi.php';
require_once 'thuvien.php';
// Xử lý tìm kiếm
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $chude = isset($_GET['chude']) ? $_GET['chude'] : '';
    $tu_khoa = isset($_GET['tu_khoa']) ? $_GET['tu_khoa'] : '';

    $sql = 'SELECT b.*, c.TenChuDe, n.HoVaTen
            FROM tbl_baiviet b, tbl_chude c, tbl_nguoidung n
            WHERE b.MaChuDe = c.ID AND b.MaNguoiDung = n.ID';

    if (!empty($chude)) {
        $sql .= ' AND b.MaChuDe = :chude';
    }

    if (!empty($tu_khoa)) {
        $sql .= ' AND b.TieuDe LIKE :tu_khoa';
    }

    $cmd = $conn->prepare($sql);

    if (!empty($chude)) {
        $cmd->bindParam(':chude', $chude);
    }

    if (!empty($tu_khoa)) {
        $tu_khoa = '%' . $tu_khoa . '%';
        $cmd->bindParam(':tu_khoa', $tu_khoa);
    }

    $cmd->execute();
    $result = $cmd->fetchAll();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hãy đọc tin tức mõi ngày giúp bạn tốn thời gian" /><!-- Hiện cái n-->
    <meta name="author" content="Nguyễn Trí Kiệt" />
    <title>Kết quả tìm kiếm</title>
    <link href="css/app.css" rel="stylesheet" />

</head>

<body>
    <?php include 'index_header.php'; ?>
    
    <main class="main pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
                    
                    <div class="row">

    <form method="GET" action="">
        <label for="chude">Chủ đề:</label>
        <select name="chude" id="chude">
            <option value="">Tất cả chủ đề</option>
            <?php
            // Lấy danh sách chủ đề từ cơ sở dữ liệu
            $sql_chude = 'SELECT * FROM tbl_chude';
            $cmd_chude = $conn->prepare($sql_chude);
            $cmd_chude->execute();
            $chude_list = $cmd_chude->fetchAll();

            foreach ($chude_list as $chude_item) {
                $selected = ($chude_item['ID'] == $chude) ? 'selected' : '';
                echo '<option value="' . $chude_item['ID'] . '" ' . $selected . '>' . $chude_item['TenChuDe'] . '</option>';
            }
            ?>
        </select>
        <label for="tu_khoa">Từ khóa:</label>
        <input type="text" name="tu_khoa" id="tu_khoa" value="<?php echo $tu_khoa; ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($result)) : ?>
        <?php if (count($result) > 0) : ?>
            <ul class="baiviet-list">
                <?php foreach ($result as $baiviet) : ?>
                    <li class="baiviet-item">
                        <h3><a href="baiviet.php?id=<?php echo $baiviet['ID']; ?>"><?php echo $baiviet['TieuDe']; ?></a></h3>
                        <!-- <p>Chủ đề: ?php echo $baiviet['TenChuDe']; ?></p>
                        <p>Tác giả: ?php echo $baiviet['HoVaTen']; ?></p> -->
                     <?php   echo '<article class="card mb-4">
                                <header class="card-header">
                                <div class="card-meta">
                                <a href="#"><time class="timeago" datetime="' . $baiviet['NgayDang'] . '"></time></a>
                                thuộc <a href="baiviet_chude.php?id=' . $baiviet['MaChuDe'] . '">' . $value['TenChuDe'] . '</a>
                                </div>
                                <a href="baiviet_chitiet.php?id=' . $baiviet['ID'] . '">
                                <h4 class="card-title">' . $baiviet['TieuDe'] . '</h4>
                                </a>
                                </header>
                                <a href="baiviet_chitiet.php?id=' . $baiviet['ID'] . '">
                                <img class="card-img" src="' . LayHinhDauTien($baiviet['NoiDung']) . '" alt="" />
                                </a>
                                <div class="card-body">
                                <p class="card-text">' . $baiviet['TomTat'] . '</p>
                                </div>
                                </article>'; ?>

                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Không tìm thấy kết quả nào</p>
        <?php endif; ?>
    <?php endif; ?>
    </div>
                </div>
                     
            </div>	
        </div>>
        </main>
    <?php include 'footer.php'; ?>
</body>
<script src="js/app.js"></script>

</html>