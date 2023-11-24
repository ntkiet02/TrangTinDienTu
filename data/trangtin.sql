-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2023 at 03:51 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trangtin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`ID`, `MaChuDe`, `MaNguoiDung`, `TieuDe`, `TomTat`, `NoiDung`, `NgayDang`, `LuotXem`, `KiemDuyet`) VALUES
(16, 17, 1, 'Hàng loạt ôtô mới sắp ra mắt tháng 10', 'Toyota Innova Cross, Peugeot 408, Suzuki Jimny và Honda CR-V là những mẫu xe mới sẽ trình làng khách Việt trong tháng 10.', '<p style=\"text-align:justify;\">Sau giai đoạn hoàng kim doanh số gắn chặt với hình ảnh một chiếc MPV phổ thông ít trang bị nhưng bền, không gian rộng rãi, <a href=\"https://vnexpress.net/oto-xe-may/v-car/dong-xe/toyota-innova-152\">Innova</a> trở lại với định vị mới, một chiếc xe đa dụng cỡ C thiên hướng crossover, đi kèm là hậu tố Cross. Toyota Innova Cross sẽ ra mắt vào 12/10 tới, nhập khẩu Indonesia. Những mẫu Innova phom cũ, số sàn tiếp tục lắp ráp trong nước, bán song song bản mới.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-vnexpress.vnecdn.net/2023/10/10/innova-cross-1696910436-169691-2194-4164-1696911413.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Oce3lLzC2Qfouv8YMFj5UQ\" alt=\"Innova Cross tại triển lãm Indonesia, tháng 8/2023. Ảnh: Ánh Dương\"></p><p style=\"text-align:center;\">Innova Cross tại triển lãm Indonesia, tháng 8/2023. Ảnh: <i>Ánh Dương</i></p><p style=\"text-align:justify;\">Innova Cross sử dụng khung gầm liền (unibody), dẫn động cầu trước thay cho khung thang rời, cầu sau như thế hệ trước. Xe có hai tùy chọn động cơ là máy xăng và hybrid.</p><p style=\"text-align:justify;\">Động cơ xăng 2.0 với công nghệ VVT-i, công suất 171 mã lực và mô-men xoắn cực đại 204 Nm. Bản hybrid với động cơ 2.0 công suất 149 mã lực và mô-men xoắn 187 Nm, kết hợp môtơ điện 111 mã lực và mô-men xoắn 205 Nm, tổng công suất 183 mã lực. Tất cả đi kèm hộp số CVT.</p>', '2023-10-10 10:12:50', 3, 1),
(17, 22, 3, 'Musk muốn X trở thành ứng dụng hẹn hò', 'Elon Musk đang đề ra nhiều ý tưởng mới cho X, trong đó bổ sung tính năng hẹn hò vào nền tảng này.', '<p>Theo Business Insider, hai nguồn tin giấu tên đã tiết lộ nội dung cuộc họp kỷ niệm một năm Elon Musk mua lại X hôm 26/10. Trong đó, tỷ phú Mỹ liệt kê hàng loạt thay đổi với nền tảng này và đề ra những ý tưởng mới cho năm 2024.</p><p>\"Musk tỏ ra hào hứng với hình ảnh mới của X trong năm tới. Ông ấy khẳng định nền tảng sẽ trở thành \'ứng dụng hẹn hò toàn diện\' và <a href=\"https://vnexpress.net/musk-tham-vong-thay-the-ngan-hang-bang-x-4670083.html\">ngân hàng kỹ thuật số</a>\", một người nói.</p><p>Tỷ phú Elon Musk không đề cập chi tiết cách biến X thành ứng dụng hẹn hò, cũng như liệu người dùng có nhu cầu sử dụng tính năng này hay không. Tuy nhiên, ý tưởng phù hợp với nỗ lực của ông nhằm triển khai những tính năng đòi hỏi người dùng trả tiền.</p><p>Phát ngôn viên X chưa bình luận về thông tin.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-sohoa.vnecdn.net/2023/10/28/elon-musk-4862-1698486470.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=TnQ0wK4J9zqff9WnJgSUCA\" alt=\"Elon Musk tại một sự kiện ở Na Uy hồi năm 2022. Ảnh: Reuters\"></p><p style=\"text-align:center;\">Elon Musk tại một sự kiện ở Na Uy năm 2022. Ảnh: <i>Reuters</i></p><p>Thu hút người dùng cung cấp thông tin ngân hàng gắn liền với nỗ lực của Musk nhằm mang đến dịch vụ thanh toán toàn diện trên X, một phần trong tham vọng biến nền tảng này thành siêu ứng dụng giống như WeChat. \"Ông ấy muốn người dùng trả tiền cho mọi thứ. Musk kỳ vọng X có thể vận hành như ngân hàng từ năm sau, nhưng điều này có vẻ không phải thứ mà người dùng muốn\", một nguồn tin nói.</p><p>Người dùng mới tại New Zealand và Philippines đang phải trả phí một USD mỗi năm để dùng những tính năng cơ bản nhất của X. Con số này không tác động nhiều tới doanh thu, nhưng có thể giúp hãng thu thập dữ liệu tài chính của người dùng và đưa vào hệ thống thanh toán trong tương lai.</p>', '2023-10-31 14:25:02', 1, 1),
(18, 22, 3, 'AI rút ngắn việc lập trình từ bốn tuần xuống 7 phút', 'Một đội bot, trong đó có cả CEO AI, chỉ tốn vài phút để hoàn thành lượng công việc tương đương hàng trăm giờ làm của các lập trình viên.', '<p>ChatDev, đội ngũ gồm các kỹ sư Trung Quốc và Mỹ, cho biết đã đạt bước tiến mới trong việc áp dụng trí tuệ nhân tạo vào lập trình. Thay vì dùng một AI duy nhất, các kỹ sư tập hợp nhiều AI thành nhóm, giúp đẩy nhanh quá trình code.</p><p>Cụ thể, ChatDev phát triển các AI dựa trên mô hình <a href=\"https://vnexpress.net/chatgpt-ra-tinh-nang-tro-chuyen-xu-ly-hinh-anh-4657436.html\">ChatGPT</a> 3.5, sau đó thiết lập để chúng phối hợp với nhau giống như thành viên trong một công ty công nghệ. Mỗi AI đảm nhiệm vai trò riêng, phân cấp từ lớn đến nhỏ, bao gồm giám đốc điều hành (CEO), giám đốc công nghệ (CTO), giám đốc sản phẩm (CPO), nhà thiết kế đồ họa, nhân viên kiểm tra mã, nhân viên lập trình. AI cấp thấp phải nghe lệnh của AI cấp trên.</p><p>\"Chúng tôi chỉ đưa ra yêu cầu. Nhóm <a href=\"https://vnexpress.net/chu-de/tri-tue-nhan-tao-ai-1980\">AI</a> sẽ tự thảo luận để tìm giải pháp. Cuối cùng, chúng sẽ thống nhất về ngôn ngữ lập trình, giao diện phần mềm, kết quả đầu ra, đồng thời thực hiện chỉnh sửa nếu cần\", đại diện ChatDev nói.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-sohoa.vnecdn.net/2023/10/28/image-29-1024x354-8048-1698476041.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=mBrPdmPojCQ_ZE7Mtlkd2g\" alt=\"Sơ đồ phân cấp nhiệm vụ trong nhóm AI. Ảnh: ChatDev\"></p><p style=\"text-align:center;\">Sơ đồ phân cấp nhiệm vụ trong nhóm AI. Ảnh: <i>ChatDev</i></p><p>Các kỹ sư phát hiện nhiều điểm thú vị khi quan sát hoạt động của nhóm trí tuệ nhân tạo. Ví dụ, các AI đã thống nhất loại CEO khỏi các vấn đề mang tính kỹ thuật. Nói cách khác, CEO \"ảo\" chỉ đưa ra thông tin ban đầu và cung cấp phản hồi tóm tắt. Các lập trình viên và nhà thiết kế AI có thể yên tâm thực hiện công việc mà không chịu nhiều tác động.</p><p>\"Việc CEO không can thiệp sâu sẽ tránh xung đột trong nhóm. Điều này khác hoàn toàn với thế giới thực của chúng ta\", đại diện ChatDev nói. Nhóm AI cũng tổ chức thảo luận nhằm tự đánh giá mỗi khi hoàn thiện một công đoạn của sản phẩm.</p><p>ChatDev đã giao 70 nhiệm vụ khác nhau cho nhóm AI. Kết quả, hơn 86% nhiệm vụ được thực hiện tốt, số còn lại gặp lỗi do hạn chế về API của ChatGPT. Mỗi nhiệm vụ tốn trung bình 6 phút 49 giây. Trong khi đó, nếu thay bằng con người, quá trình hoàn thành công việc với độ phức tạp tương tự sẽ mất ít nhất bốn tuần, thậm chí nhiều tháng.</p><p>Cũng theo các kỹ sư, thử nghiệm chưa lột tả hết sức mạnh của AI do sử dụng phiên bản ChatGPT cũ. Bên cạnh tiết kiệm thời gian, việc dùng AI theo nhóm còn giúp giảm chi phí, do giá mỗi phần mềm khi hoàn thiện chỉ dao động quanh một USD.</p>', '2023-10-31 14:30:07', 1, 1),
(19, 21, 3, 'CEO Microsoft hối tiếc vì bỏ Windows Phone', 'Satya Nadella là lãnh đạo thứ tư của Microsoft thừa nhận mắc sai lầm nghiêm trọng khi không theo đuổi đến cùng trong lĩnh vực di động.', '<p>\"Quyết định mà tôi nghĩ là sẽ được nhiều người nhắc đến nhất và cũng là một trong những quyết định khó khăn nhất tôi đưa ra khi trở thành CEO Microsoft là có nên từ bỏ lĩnh vực điện thoại di động hay không. Nhìn lại, tôi nghĩ mình có cách tiếp tục để nó hoạt động thông qua phát minh lại danh mục điện toán giữa PC, tablet và điện thoại\", CEO Microsoft Satya Nadella nói với <i>Business Insider</i>.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:680px;\" src=\"https://i1-sohoa.vnecdn.net/2023/10/26/2023-10-25-image-21-j-9481-1698311755.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=M8p4u1hACy3c81w1JBf-sw\" alt=\"CEO Microsoft Satya Nadella cầm trên tay một mẫu smartphone chạy Windows Phone. Ảnh: TechSpot\"></p><p style=\"text-align:center;\">CEO Microsoft Satya Nadella cầm một mẫu smartphone chạy Windows Phone. Ảnh: <i>TechSpot</i></p><p>Nadella đảm nhiệm vai trò điều hành Microsoft từ 2014 thay cho CEO trước đó là Steve Ballmer - người được đánh giá đã chậm phản ứng trước mối đe dọa từ iPhone và thiết bị Android dù nắm trong tay nền tảng Windows Phone và mảng điện thoại mua lại từ Nokia. Ballmer thậm chí từng chế nhạo iPhone, gọi thiết bị của Apple là \"điện thoại đắt nhất thế giới nhưng không hấp dẫn vì không có bàn phím\".</p><p>Năm 2015, Ballmer từng nói ông hối hận vì không tập trung vào điện thoại sớm hơn. \"Tôi tiếc nhất là khoảng thời gian đầu những năm 2000, khi chúng tôi dồn mọi nguồn lực cho Windows Vista đến mức không thể triển khai nhân sự mới cho điện thoại\", Ballmer nói với <i>The Verge</i> năm 2013.</p>', '2023-10-31 14:31:15', 1, 1),
(20, 21, 5, 'OpenAI có thể bị kiện vì sa thải CEO', 'Lo ngại mất trắng hàng trăm triệu USD, một nhóm nhà đầu tư chuẩn bị kiện OpenAI sau khi công ty bất ngờ loại CEO và chủ tịch mà không thông báo trước.', '<p>Theo <i>Reuters</i>, một số nhà đầu tư đang làm việc với các tổ chức tư vấn pháp lý và công ty luật nhằm \"sớm đưa ra hành động\". Việc hội đồng quản trị OpenAI bất ngờ sa thải CEO Sam Altman đã dẫn đến việc <a href=\"https://vnexpress.net/chu-tich-openai-tu-chuc-4678395.html\">Greg Brockman</a> tuyên bố từ chức chủ tịch và 95% nhân viên ký vào thư <a href=\"https://vnexpress.net/hon-700-nhan-vien-openai-doa-nghi-viec-4679205.html\">dọa nghỉ việc</a>. Các nhà đầu tư lo ngại hàng trăm triệu USD đã đổ vào OpenAI - startup vốn được coi là viên ngọc quý trong danh mục đầu tư - có nguy cơ bị tiêu tan do \"sự sụp đổ tiềm tàng\" có thể xảy ra.</p><p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:702.9px;\" src=\"https://i1-sohoa.vnecdn.net/2023/11/21/image-2-7882-1700531512.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=afXCUsjbuuYc6bZSXQonmg\" alt=\"Sam Altman. Ảnh: WSJ\"></p><p style=\"text-align:center;\">&nbsp;</p><p style=\"text-align:center;\">Sam Altman. Ảnh: <i>WSJ</i></p><p>Thông thường, khi rót tiền vào một công ty, nhà đầu tư thường có một ghế trong hội đồng quản trị, có quyền biểu quyết trong quyền hạn của danh mục đầu tư hay ít nhất sẽ biết trước biến động lớn sắp xảy ra với doanh nghiệp. Tuy nhiên, <a href=\"https://vnexpress.net/ai-da-sa-thai-ceo-openai-4678563.html\">cấu trúc khác thường</a> của OpenAI không cho họ những quyền kể trên. Công ty được kiểm soát bởi OpenAI Nonprofit - nhóm phi lợi nhuận được thành lập từ những ngày đầu với mục tiêu \"mang lại lợi ích cho nhân loại, không phải cho các nhà đầu tư OpenAI\".</p>', '2023-11-21 15:45:59', 2, 1),
(21, 18, 7, 'Bê tông thông minh có thể sản xuất điện', 'Các kỹ sư ở Đại học Pittsburgh (Pitt) phát triển một loại bê tông thông minh đa năng siêu nhẹ, có thể điều chỉnh đặc tính cho nhiều công trình khác nhau và tự sản xuất điện.', '<p style=\"text-align:center;\"><img class=\"image_resized\" style=\"width:587.737px;\" src=\"https://i1-vnexpress.vnecdn.net/2023/03/23/VNE-Con-8251-1679558614.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=C6Sa24IMr9HK1T5Tex20wQ\" alt=\"Mô phỏng sử dụng vật liệu bê tông thông minh trên đường cao tốc. Ảnh: Amir Alavi\"></p><p style=\"text-align:center;\">&nbsp;</p><p style=\"text-align:center;\">Mô phỏng sử dụng vật liệu bê tông thông minh trên đường cao tốc. Ảnh: <i>Amir Alavi</i></p><p>Siêu vật liệu mới cấu tạo từ mạng lưới polymer auxetic gia cố bên trong ma trận xi măng dẫn điện. Xi măng dẫn điện được củng cố bằng bột graphite, tạo thành điện cực. Một kích thích cơ học có thể dẫn tới điện khí hóa giữa các lớp. Bê tông do nhóm nghiên cứu của Amir Alavi, trợ lý giáo sư ngành kỹ thuật dân dụng và môi trường ở Pitt tạo ra không thể sản xuất đủ năng lượng để đưa vào lưới điện, nhưng có thể dùng để theo dõi thiệt hại bên trong công trình bê tông, ví dụ trong trường hợp động đất. Họ công bố kết quả nghiên cứu trên tạp chí Advanced Materials, <i>New Atlas </i>hôm 22/3 đưa tin.</p><p>\"Việc sử dụng bê tông rộng rãi trong dự án cơ sở hạ tầng đòi hỏi phát triển một thế hệ vật liệu bê tông mới tiết kiệm và bền vững về mặt môi trường nhưng vẫn cung cấp những chức năng tiên tiến. Chúng tôi tin chắc có thể đạt mọi mục tiêu trên bằng cách đưa siêu vật liệu vào phát triển vật liệu xây dựng\", Alavi cho biết.</p><p>Bản thân siêu vật liệu có thể được tùy chỉnh để đáp ứng nhu cầu xây dựng, thay đổi độ linh hoạt, hình dáng và độ giòn. Trong các thử nghiệm, nó có thể nén tới 15% mà vẫn duy trì độ liền khối của kết cấu.</p><p>\"Dự án này tạo ra bê tông siêu vật liệu tổng hợp đầu tiên với độ nén siêu cao và khả năng sản xuất điện. Những hệ thống bê tông siêu nhẹ và dễ điều chỉnh cơ học như vậy có thể mở đường cho việc sử dụng bê tông trong nhiều ứng dụng đa dạng như vật liệu giảm xóc ở sân bay, giúp giảm tốc độ cho máy bay trên đường băng hoặc bộ cách ly địa chấn\", Alavi nói.</p><p>Nhóm nghiên cứu hy vọng loại bê tông đa năng mới có thể được sử dụng rộng rãi trong cơ sở hạ tầng. Vật liệu thông minh này thậm chí có thể cung cấp điện cho chip gắn trong đường cao tốc để hỗ trợ xe tự lái. Tuy nhiên, trong tương lai gần, các nhà khoa học sẽ cần thử nghiệm trên quy mô lớn và tìm hiểu làm thế nào để ngăn cách vật liệu với áp lực môi trường như độ ẩm, thời tiết ướt át và biến động nhiệt độ.</p>', '2023-11-24 10:34:47', 0, 1),
(22, 22, 7, ' Bước tiến của AI', 'Trí tuệ nhân tạo (AI) từ mô hình học hỏi đơn giản trở thành chatbot biết suy nghĩ và lập luận, thúc đẩy sự phát triển mọi lĩnh vực kinh tế - xã hội, sau 67 năm.', '<p>Trí tuệ nhân tạo (AI) từ mô hình học hỏi đơn giản trở thành chatbot biết suy nghĩ và lập luận, thúc đẩy sự phát triển mọi lĩnh vực kinh tế - xã hội, sau 67 năm.</p><figure class=\"image\"><img src=\"https://cdn.tgdd.vn/hoi-dap/1216572/tri-tue-nhan-tao-ai-la-gi-cac-ung-dung-va-tiem-nan-10-800x450.jpg\" alt=\"Công nghệ AI là gì? Tìm hiểu về AI và ứng dụng của trí tuệ ...\"></figure>', '2023-11-24 10:35:58', 0, 1),
(23, 7, 8, 'Vì sao nhà khoa học cần công bố quốc tế?', 'Nhà khoa học công bố kết quả nghiên cứu trên tạp chí quốc tế là bước công khai kết quả nghiên cứu, khẳng định vị thế và năng suất chất lượng khoa học. ', '<p>Nhà khoa học công bố kết quả nghiên cứu trên tạp chí quốc tế là bước công khai kết quả nghiên cứu, khẳng định vị thế và năng suất chất lượng khoa học.</p><p>Thời gian qua Việt Nam có tốc độ gia tăng nhanh chóng số công bố quốc tế. Số liệu của Vụ Khoa học, Công nghệ và Môi trường, Bộ Giáo dục và Đào tạo, hồi cuối tháng 8 công bố kết quả hoạt động khoa học, công nghệ tại các cơ sở giáo dục đại học cho thấy, từ năm 2020 đến nay, số công bố mỗi năm đều đạt trên 18.000.</p><p>Trong đó, khoảng 70% công bố quốc tế trong danh mục WoS (Web of Science, còn gọi là ISI - cơ sở dữ liệu trích dẫn các tạp chí khoa học thế giới), 90% trong danh mục Scopus và hơn 50% công bố trên các tạp chí uy tín quốc gia đến từ các trường đại học.</p><p><a href=\"https://vnexpress.net/vi-sao-nha-khoa-hoc-can-cong-bo-quoc-te-4678456.html\"><img class=\"image_resized\" style=\"width:100%;\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/18/19787285l1160x7731160x77316836-7414-3757-1700307518.jpg?w=240&amp;h=144&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=dHnaAMk7I3DMRkptUmh-4w\" alt=\"Vì sao nhà khoa học cần công bố quốc tế?\"></a></p><p>Vậy việc công bố quốc tế này có ý nghĩa gì? TS Phạm Hiệp, Trưởng nhóm nghiên cứu đổi mới giáo dục Reduvation, Trường ĐH Thành Đô, lý giải các nhà khoa học kiến tạo ra tri thức mới thông qua việc nghiên cứu và thể hiện kết quả nghiên cứu đó bằng công bố khoa học thông qua các hình thức như đăng bài tạp chí, viết sách hoặc công bố bài hội thảo. \"Đây là chức năng của nhà khoa học, là sứ mệnh và nhiệm vụ vốn có của một người làm nghiên cứu\", TS Hiệp nói.</p><p>Đại học Quốc gia TP HCMViện Hàn lâm Khoa học và Công n…Đại học Bách khoa Hà NộiĐại học Quốc gia Hà NộiTrường Đai học Duy TânTrường Đại học Tôn Đức ThắngTrường Đại học Bách khoa TP HCMTrường Đại học Cần ThơTrường Đại học Kinh tế TP HCMTrường Đại học Nguyễn Tất Thành05001000150020002500VnExpressĐại học Bách khoa Hà Nội</p><p>Nói về việc nhiều nhà khoa học hướng công bố quốc tế, TS Hiệp khẳng định đây là điều dễ hiểu, phản ánh tiến trình hội nhập của nền khoa học trong nước. Trước đây ở thế kỷ 19-20, nhà nghiên cứu ở quốc gia nào thường sẽ công bố bài báo trên tạp chí nước đó. Điều này dẫn tới việc hai người ở hai quốc gia độc lập cùng theo đuổi mục tiêu và công bố ra nội dung nghiên cứu gần giống nhau do ít có sự liên thông giữa các quốc gia hoặc giữa các khu vực, lục địa. Qua thời gian, cách thức công bố xuất bản thể hiện ở nhiều loại hình khác nhau và được điều chỉnh, các nhà khoa học có tiếng nói chung sử dụng tiếng anh là ngôn ngữ chính. Các tạp chí khoa học trở thành phương tiện giao tiếp học thuật chính trong cộng đồng học thuật, trong đó xuất hiện các công bố quốc tế.</p><p>TS Hiệp ví von, giống như xuất khẩu sản phẩm ra thị trường nước ngoài, việc thúc đẩy nghiên cứu ra quốc tế giúp khẳng định vị thế và thể hiện năng suất, chất lượng của nhà khoa học.</p>', '2023-11-24 10:39:27', 0, 1),
(24, 20, 8, 'T1 giữ nguyên đội hình, fan chưa kịp mừng đã xuất hiện nỗi lo mới', 'Những thông tin về đội hình mới của T1 khiến fan mừng rỡ nhưng ngay sau đó lại có nỗi lo mới.', '<p>Như đã biết, cách đây ít giờ, T1 đã chính thức thông báo hoàn tất hợp đồng với 3 tuyển thủ đã đáo hạn trước đó, gồm Gumayusi - Keria và Đường Trên Zeus . Đây là một động thái cho thấy&nbsp;<a href=\"https://gamek.vn/geng-chua-kip-no-bom-tan-da-bi-ceo-t1-leak-sach-khien-khan-gia-cuc-ky-buc-xuc-178231122235718245.chn\">T1</a>&nbsp;vẫn còn rất nhiều tham vọng. Và như đã phân tích từ trước, căn bản, các tuyển thủ sẽ phải đánh cược với tương lai nếu rời T1 và chính T1 cũng sẽ khó lòng tìm kiếm vinh quang nếu \"form\" lại một đội tuyển mới lại từ đầu, kể cả là họ vẫn giữ được&nbsp;<a href=\"https://gamek.vn/day-chinh-la-hot-girl-duy-nhat-tung-duoc-faker-cong-khai-the-hien-tinh-cam-tham-chi-con-tay-trong-tay-tiec-thay-lai-la-hoa-da-co-chu-178231122155259333.chn\">Faker</a>&nbsp;đi chăng nữa.</p><p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2023/11/23/t1-hopdong-tuyenthu-1-17007324023571138176585.jpg\"><i><img src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2023/11/23/t1-hopdong-tuyenthu-1-17007324023571138176585.jpg\" alt=\"Các tuyển thủ T1 vốn được cho là khó lòng tan rã\"></i></a></p><p><i>Các tuyển thủ T1 vốn được cho là khó lòng tan rã</i></p><p>Do đó, có thể nói việc dàn sao T1 đồng ý tái kí hợp đồng là một nước đi đôi bên đều có lợi. Bản thân các tuyển thủ sẽ có thêm ít nhất 1 năm nữa để chuẩn bị cho tương lai cũng như rèn giũa thêm bản lĩnh, làm dày thêm cho bộ sưu tập danh hiệu. Bởi lẽ, dàn sao T1 hiện tại còn thiếu 1 chức LCK Mùa Hè và 1 chức vô địch MSI . Bên cạnh đó, có thể T1 còn tính xa hơn như dự định xây dựng các tuyển thủ trở thành những biểu tượng mới cho làng LMHT nói chung và T1 - LCK nói riêng.</p>', '2023-11-24 10:47:51', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chude`
--

DROP TABLE IF EXISTS `tbl_chude`;
CREATE TABLE IF NOT EXISTS `tbl_chude` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_chude`
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
-- Table structure for table `tbl_nguoidung`
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`ID`, `HoVaTen`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Kiệt', 'kiet', '818c9eec0bf8fb05bae9e0ddb9dc4484440ec477', 2, 0),
(3, 'Nguyễn Trí Kiệt', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 0),
(4, 'Hồ Phú Nghĩa', 'nghia', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 0),
(5, 'Mĩ Đỗ Toa', 'toa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 0),
(6, 'Khang', 'khang', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 0),
(7, 'Ngọc Hân', 'han', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 0),
(8, 'Ngọc Nga', 'nga', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tbl_nguoidung` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_baiviet_ibfk_2` FOREIGN KEY (`MaChuDe`) REFERENCES `tbl_chude` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
