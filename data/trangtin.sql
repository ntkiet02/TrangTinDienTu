-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 02, 2023 lúc 11:11 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trangtin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

DROP TABLE IF EXISTS `tbl_baiviet`;
CREATE TABLE IF NOT EXISTS `tbl_baiviet` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `MaChuDe` int NOT NULL,
  `MaNguoiDung` int NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TomTat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDang` datetime NOT NULL,
  `LuotXem` int NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `MaChuDe` (`MaChuDe`),
  KEY `MaNguoiDung` (`MaNguoiDung`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`ID`, `MaChuDe`, `MaNguoiDung`, `TieuDe`, `TomTat`, `NoiDung`, `NgayDang`, `LuotXem`, `KiemDuyet`) VALUES
(16, 17, 1, 'Hàng loạt ôtô mới sắp ra mắt tháng 10', 'Toyota Innova Cross, Peugeot 408, Suzuki Jimny và Honda CR-V là những mẫu xe mới sẽ trình làng khách Việt trong tháng 10.', '<p style=\"text-align:justify;\">Sau giai đoạn hoàng kim doanh số gắn chặt với hình ảnh một chiếc MPV phổ thông ít trang bị nhưng bền, không gian rộng rãi, <a href=\"https://vnexpress.net/oto-xe-may/v-car/dong-xe/toyota-innova-152\">Innova</a> trở lại với định vị mới, một chiếc xe đa dụng cỡ C thiên hướng crossover, đi kèm là hậu tố Cross. Toyota Innova Cross sẽ ra mắt vào 12/10 tới, nhập khẩu Indonesia. Những mẫu Innova phom cũ, số sàn tiếp tục lắp ráp trong nước, bán song song bản mới.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-vnexpress.vnecdn.net/2023/10/10/innova-cross-1696910436-169691-2194-4164-1696911413.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Oce3lLzC2Qfouv8YMFj5UQ\" alt=\"Innova Cross tại triển lãm Indonesia, tháng 8/2023. Ảnh: Ánh Dương\"></p><p style=\"text-align:center;\">Innova Cross tại triển lãm Indonesia, tháng 8/2023. Ảnh: <i>Ánh Dương</i></p><p style=\"text-align:justify;\">Innova Cross sử dụng khung gầm liền (unibody), dẫn động cầu trước thay cho khung thang rời, cầu sau như thế hệ trước. Xe có hai tùy chọn động cơ là máy xăng và hybrid.</p><p style=\"text-align:justify;\">Động cơ xăng 2.0 với công nghệ VVT-i, công suất 171 mã lực và mô-men xoắn cực đại 204 Nm. Bản hybrid với động cơ 2.0 công suất 149 mã lực và mô-men xoắn 187 Nm, kết hợp môtơ điện 111 mã lực và mô-men xoắn 205 Nm, tổng công suất 183 mã lực. Tất cả đi kèm hộp số CVT.</p>', '2023-10-10 10:12:50', 1, 1),
(17, 22, 3, 'Musk muốn X trở thành ứng dụng hẹn hò', 'Elon Musk đang đề ra nhiều ý tưởng mới cho X, trong đó bổ sung tính năng hẹn hò vào nền tảng này.', '<p>Theo Business Insider, hai nguồn tin giấu tên đã tiết lộ nội dung cuộc họp kỷ niệm một năm Elon Musk mua lại X hôm 26/10. Trong đó, tỷ phú Mỹ liệt kê hàng loạt thay đổi với nền tảng này và đề ra những ý tưởng mới cho năm 2024.</p><p>\"Musk tỏ ra hào hứng với hình ảnh mới của X trong năm tới. Ông ấy khẳng định nền tảng sẽ trở thành \'ứng dụng hẹn hò toàn diện\' và <a href=\"https://vnexpress.net/musk-tham-vong-thay-the-ngan-hang-bang-x-4670083.html\">ngân hàng kỹ thuật số</a>\", một người nói.</p><p>Tỷ phú Elon Musk không đề cập chi tiết cách biến X thành ứng dụng hẹn hò, cũng như liệu người dùng có nhu cầu sử dụng tính năng này hay không. Tuy nhiên, ý tưởng phù hợp với nỗ lực của ông nhằm triển khai những tính năng đòi hỏi người dùng trả tiền.</p><p>Phát ngôn viên X chưa bình luận về thông tin.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-sohoa.vnecdn.net/2023/10/28/elon-musk-4862-1698486470.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=TnQ0wK4J9zqff9WnJgSUCA\" alt=\"Elon Musk tại một sự kiện ở Na Uy hồi năm 2022. Ảnh: Reuters\"></p><p style=\"text-align:center;\">Elon Musk tại một sự kiện ở Na Uy năm 2022. Ảnh: <i>Reuters</i></p><p>Thu hút người dùng cung cấp thông tin ngân hàng gắn liền với nỗ lực của Musk nhằm mang đến dịch vụ thanh toán toàn diện trên X, một phần trong tham vọng biến nền tảng này thành siêu ứng dụng giống như WeChat. \"Ông ấy muốn người dùng trả tiền cho mọi thứ. Musk kỳ vọng X có thể vận hành như ngân hàng từ năm sau, nhưng điều này có vẻ không phải thứ mà người dùng muốn\", một nguồn tin nói.</p><p>Người dùng mới tại New Zealand và Philippines đang phải trả phí một USD mỗi năm để dùng những tính năng cơ bản nhất của X. Con số này không tác động nhiều tới doanh thu, nhưng có thể giúp hãng thu thập dữ liệu tài chính của người dùng và đưa vào hệ thống thanh toán trong tương lai.</p>', '2023-10-31 14:25:02', 0, 1),
(18, 22, 3, 'AI rút ngắn việc lập trình từ bốn tuần xuống 7 phút', 'Một đội bot, trong đó có cả CEO AI, chỉ tốn vài phút để hoàn thành lượng công việc tương đương hàng trăm giờ làm của các lập trình viên.', '<p>ChatDev, đội ngũ gồm các kỹ sư Trung Quốc và Mỹ, cho biết đã đạt bước tiến mới trong việc áp dụng trí tuệ nhân tạo vào lập trình. Thay vì dùng một AI duy nhất, các kỹ sư tập hợp nhiều AI thành nhóm, giúp đẩy nhanh quá trình code.</p><p>Cụ thể, ChatDev phát triển các AI dựa trên mô hình <a href=\"https://vnexpress.net/chatgpt-ra-tinh-nang-tro-chuyen-xu-ly-hinh-anh-4657436.html\">ChatGPT</a> 3.5, sau đó thiết lập để chúng phối hợp với nhau giống như thành viên trong một công ty công nghệ. Mỗi AI đảm nhiệm vai trò riêng, phân cấp từ lớn đến nhỏ, bao gồm giám đốc điều hành (CEO), giám đốc công nghệ (CTO), giám đốc sản phẩm (CPO), nhà thiết kế đồ họa, nhân viên kiểm tra mã, nhân viên lập trình. AI cấp thấp phải nghe lệnh của AI cấp trên.</p><p>\"Chúng tôi chỉ đưa ra yêu cầu. Nhóm <a href=\"https://vnexpress.net/chu-de/tri-tue-nhan-tao-ai-1980\">AI</a> sẽ tự thảo luận để tìm giải pháp. Cuối cùng, chúng sẽ thống nhất về ngôn ngữ lập trình, giao diện phần mềm, kết quả đầu ra, đồng thời thực hiện chỉnh sửa nếu cần\", đại diện ChatDev nói.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-sohoa.vnecdn.net/2023/10/28/image-29-1024x354-8048-1698476041.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=mBrPdmPojCQ_ZE7Mtlkd2g\" alt=\"Sơ đồ phân cấp nhiệm vụ trong nhóm AI. Ảnh: ChatDev\"></p><p style=\"text-align:center;\">Sơ đồ phân cấp nhiệm vụ trong nhóm AI. Ảnh: <i>ChatDev</i></p><p>Các kỹ sư phát hiện nhiều điểm thú vị khi quan sát hoạt động của nhóm trí tuệ nhân tạo. Ví dụ, các AI đã thống nhất loại CEO khỏi các vấn đề mang tính kỹ thuật. Nói cách khác, CEO \"ảo\" chỉ đưa ra thông tin ban đầu và cung cấp phản hồi tóm tắt. Các lập trình viên và nhà thiết kế AI có thể yên tâm thực hiện công việc mà không chịu nhiều tác động.</p><p>\"Việc CEO không can thiệp sâu sẽ tránh xung đột trong nhóm. Điều này khác hoàn toàn với thế giới thực của chúng ta\", đại diện ChatDev nói. Nhóm AI cũng tổ chức thảo luận nhằm tự đánh giá mỗi khi hoàn thiện một công đoạn của sản phẩm.</p><p>ChatDev đã giao 70 nhiệm vụ khác nhau cho nhóm AI. Kết quả, hơn 86% nhiệm vụ được thực hiện tốt, số còn lại gặp lỗi do hạn chế về API của ChatGPT. Mỗi nhiệm vụ tốn trung bình 6 phút 49 giây. Trong khi đó, nếu thay bằng con người, quá trình hoàn thành công việc với độ phức tạp tương tự sẽ mất ít nhất bốn tuần, thậm chí nhiều tháng.</p><p>Cũng theo các kỹ sư, thử nghiệm chưa lột tả hết sức mạnh của AI do sử dụng phiên bản ChatGPT cũ. Bên cạnh tiết kiệm thời gian, việc dùng AI theo nhóm còn giúp giảm chi phí, do giá mỗi phần mềm khi hoàn thiện chỉ dao động quanh một USD.</p>', '2023-10-31 14:30:07', 0, 1),
(19, 21, 3, 'CEO Microsoft hối tiếc vì bỏ Windows Phone', 'Satya Nadella là lãnh đạo thứ tư của Microsoft thừa nhận mắc sai lầm nghiêm trọng khi không theo đuổi đến cùng trong lĩnh vực di động.', '<p>\"Quyết định mà tôi nghĩ là sẽ được nhiều người nhắc đến nhất và cũng là một trong những quyết định khó khăn nhất tôi đưa ra khi trở thành CEO Microsoft là có nên từ bỏ lĩnh vực điện thoại di động hay không. Nhìn lại, tôi nghĩ mình có cách tiếp tục để nó hoạt động thông qua phát minh lại danh mục điện toán giữa PC, tablet và điện thoại\", CEO Microsoft Satya Nadella nói với <i>Business Insider</i>.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-sohoa.vnecdn.net/2023/10/26/2023-10-25-image-21-j-9481-1698311755.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=M8p4u1hACy3c81w1JBf-sw\" alt=\"CEO Microsoft Satya Nadella cầm trên tay một mẫu smartphone chạy Windows Phone. Ảnh: TechSpot\"></p><p style=\"text-align:center;\">CEO Microsoft Satya Nadella cầm một mẫu smartphone chạy Windows Phone. Ảnh: <i>TechSpot</i></p><p>Nadella đảm nhiệm vai trò điều hành Microsoft từ 2014 thay cho CEO trước đó là Steve Ballmer - người được đánh giá đã chậm phản ứng trước mối đe dọa từ iPhone và thiết bị Android dù nắm trong tay nền tảng Windows Phone và mảng điện thoại mua lại từ Nokia. Ballmer thậm chí từng chế nhạo iPhone, gọi thiết bị của Apple là \"điện thoại đắt nhất thế giới nhưng không hấp dẫn vì không có bàn phím\".</p><p>Năm 2015, Ballmer từng nói ông hối hận vì không tập trung vào điện thoại sớm hơn. \"Tôi tiếc nhất là khoảng thời gian đầu những năm 2000, khi chúng tôi dồn mọi nguồn lực cho Windows Vista đến mức không thể triển khai nhân sự mới cho điện thoại\", Ballmer nói với <i>The Verge</i> năm 2013.</p>', '2023-10-31 14:31:15', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chude`
--

DROP TABLE IF EXISTS `tbl_chude`;
CREATE TABLE IF NOT EXISTS `tbl_chude` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chude`
--

INSERT INTO `tbl_chude` (`ID`, `TenChuDe`) VALUES
(3, 'Giải trí'),
(7, 'Khoa học'),
(17, 'Xe'),
(18, 'Ý kiến'),
(19, 'Điện tử'),
(20, 'Esport'),
(21, 'Công nghệ'),
(22, 'Phần mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoidung`
--

DROP TABLE IF EXISTS `tbl_nguoidung`;
CREATE TABLE IF NOT EXISTS `tbl_nguoidung` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `HoVaTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`ID`, `HoVaTen`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Nguyễn Hoàng Tùng', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1),
(3, 'Nguyễn Trí Kiệt', 'admin2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 0),
(4, 'Hồ Phú Nghĩa', 'admin3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 0);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tbl_nguoidung` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_baiviet_ibfk_2` FOREIGN KEY (`MaChuDe`) REFERENCES `tbl_chude` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
