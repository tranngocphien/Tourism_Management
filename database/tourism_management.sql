-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2021 lúc 06:33 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tourism_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `number_ticket` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_booking` date NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `tour_id`, `number_ticket`, `status`, `date_start`, `date_booking`, `money`) VALUES
(3, 20, 2, 3, 'Đã xác nhận', '2021-05-28', '2021-05-15', 0),
(4, 20, 1, 5, 'Đã xác nhận', '2021-05-27', '2021-05-15', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `places`
--

CREATE TABLE `places` (
  `places_id` int(11) NOT NULL,
  `places_name` varchar(255) NOT NULL,
  `places_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `places`
--

INSERT INTO `places` (`places_id`, `places_name`, `places_description`) VALUES
(1, 'Hà Nội, Ninh Bình, Lạng Sơn, Bắc Giang', '\r\n\r\nXem nội dung đầy đủ tại: https://travel.com.vn/tourM126-008-260521VU-D/ha-noi-bai-dinh-hoang-thanh-thang-long-lang-son-chi-lang-bac-giang.aspx\r\nNguồn: travel.com.vn'),
(3, 'Tp Hồ Chí Minh, Đà Lạt', '<h3>Ngày 1 | Thung Lũng Hoa - Chùa Linh Phước - Puppy Farm</h3>\r\n<p>06h00     Đoàn vào nhà hàng làm vệ sinh cá nhân. Quý khách dùng điểm tâm tại nhà hàng.\r\n08h00         Đoàn tham quan và chụp hình tại Thung Lũng Hoa – nơi đây được thiết kế với các khung cảnh hài hòa, những điểm nổi bật Khuôn viên gần 4ha với các tiểu cảnh vườn hoa, vườn hồng, vườn chè, con đường sắc màu với các bật thang nhiều màu sắc nơi đây sẽ cho quý khách cảm giác hòa mình vào với thiên nhiên và lưu lại với những bức ảnh thật rực rỡ  \r\n09h30          Quý khách tới thăm Chùa Linh Phước một ngôi chùa khá đặc biệt tại Đà Lạt. Đặc biệt là hình tượng con rồng được chế tác từ hơn 12.000 vỏ chai sành, gây được ấn tượng mạnh cho phật tử cùng các du khách gần xa mỗi khi tới thăm chùa. \r\n\r\n11h00     Quý khách dùng cơm trưa tại nhà hàng, sau đó về khách sạn nhận phòng nghỉ ngơi.\r\n15h00   Đoàn ghé tham quan trang trại cún Puppy Farm với khoảng 100 con cún, từ Alaska, Pug, Corgi mông tròn hay Puddle đều có mặt đầy đủ để quý khách thoải mái vui đùa. Bên cạnh đó, Quý khách còn được tham quan vườn cà chua dâu công nghệ cao, tận hưởng không khí trong lành cùng rau quả sạch chuẩn nhà trồng. Và những ngọn đồi đầy hoa thật nên thơ\r\n\r\n17h30     Quý khách tự túc khám phá ẩm thực tại Đà Lạt, tự  do dạo phố, ngắm  Hồ Xuân Hương trong tiết trời se lạnh của thành phố cao nguyên hoặc thưởng thức đặc sản: “Sữa đậu nành nóng, Mè đen, Bánh tráng trứng nướng và Chè hé tại phố núi sương mù”. \r\n</p>\r\n<h3>Ngày 2| Đà Lạt - Linh Ẩn - Tp Hồ Chí Minh</h3>\r\n<p>07h00     Quý khách trả phòng khách sạn, điểm tâm tại nhà hàng. \r\n09h00   Quý khách tham quan Chùa Linh Ẩn nằm ở chốn “hoang sơn cùng cốc” thế nhưng kiến trúc nơi đây vẫn toát lên vẻ đẹp hiện đại mà vẫn thân thiện với thiên nhiên. Đến với Linh Ẩn Tự ai cũng không khỏi trầm trồ khen ngợi với những công trình vĩ đại trong số đó phải kể đến Phật Quan Âm Lớn Nhất Việt Nam \r\n11h45 Dùng cơm trưa tại nhà hàng. Tại đây quý khách cùng nghe kể lại câu chuyện về “Tứ đại danh trà”. Ngoài ra quý khách có thể thưởng thức trà, cafe miễn phí tại tiền sảnh của nhà hàng. \r\n18h00 Quý khách về đến TP.HCM HDV Saigontours chia tay quý khách hẹn ngày gặp lại! Kết thúc chuyến tham quan! </p>'),
(5, 'Tp Hồ Chí Minh, Đà Lạt', '<h3>Ngày 1 | Thung Lũng Hoa - Chùa Linh Phước - Puppy Farm</h3>\r\n<p>06h00     Đoàn vào nhà hàng làm vệ sinh cá nhân. Quý khách dùng điểm tâm tại nhà hàng.\r\n08h00         Đoàn tham quan và chụp hình tại Thung Lũng Hoa – nơi đây được thiết kế với các khung cảnh hài hòa, những điểm nổi bật Khuôn viên gần 4ha với các tiểu cảnh vườn hoa, vườn hồng, vườn chè, con đường sắc màu với các bật thang nhiều màu sắc nơi đây sẽ cho quý khách cảm giác hòa mình vào với thiên nhiên và lưu lại với những bức ảnh thật rực rỡ  \r\n09h30          Quý khách tới thăm Chùa Linh Phước một ngôi chùa khá đặc biệt tại Đà Lạt. Đặc biệt là hình tượng con rồng được chế tác từ hơn 12.000 vỏ chai sành, gây được ấn tượng mạnh cho phật tử cùng các du khách gần xa mỗi khi tới thăm chùa. \r\n\r\n11h00     Quý khách dùng cơm trưa tại nhà hàng, sau đó về khách sạn nhận phòng nghỉ ngơi.\r\n15h00   Đoàn ghé tham quan trang trại cún Puppy Farm với khoảng 100 con cún, từ Alaska, Pug, Corgi mông tròn hay Puddle đều có mặt đầy đủ để quý khách thoải mái vui đùa. Bên cạnh đó, Quý khách còn được tham quan vườn cà chua dâu công nghệ cao, tận hưởng không khí trong lành cùng rau quả sạch chuẩn nhà trồng. Và những ngọn đồi đầy hoa thật nên thơ\r\n\r\n17h30     Quý khách tự túc khám phá ẩm thực tại Đà Lạt, tự  do dạo phố, ngắm  Hồ Xuân Hương trong tiết trời se lạnh của thành phố cao nguyên hoặc thưởng thức đặc sản: “Sữa đậu nành nóng, Mè đen, Bánh tráng trứng nướng và Chè hé tại phố núi sương mù”. \r\n</p>\r\n<h3>Ngày 2| Đà Lạt - Linh Ẩn - Tp Hồ Chí Minh</h3>\r\n<p>07h00     Quý khách trả phòng khách sạn, điểm tâm tại nhà hàng. \r\n09h00   Quý khách tham quan Chùa Linh Ẩn nằm ở chốn “hoang sơn cùng cốc” thế nhưng kiến trúc nơi đây vẫn toát lên vẻ đẹp hiện đại mà vẫn thân thiện với thiên nhiên. Đến với Linh Ẩn Tự ai cũng không khỏi trầm trồ khen ngợi với những công trình vĩ đại trong số đó phải kể đến Phật Quan Âm Lớn Nhất Việt Nam \r\n11h45 Dùng cơm trưa tại nhà hàng. Tại đây quý khách cùng nghe kể lại câu chuyện về “Tứ đại danh trà”. Ngoài ra quý khách có thể thưởng thức trà, cafe miễn phí tại tiền sảnh của nhà hàng. \r\n18h00 Quý khách về đến TP.HCM HDV Saigontours chia tay quý khách hẹn ngày gặp lại! Kết thúc chuyến tham quan! </p>'),
(6, 'Tp Hồ Chí Minh, Đà Lạt', '<h3>Ngày 1 | Thung Lũng Hoa - Chùa Linh Phước - Puppy Farm</h3>\r\n<p>06h00     Đoàn vào nhà hàng làm vệ sinh cá nhân. Quý khách dùng điểm tâm tại nhà hàng.\r\n08h00         Đoàn tham quan và chụp hình tại Thung Lũng Hoa – nơi đây được thiết kế với các khung cảnh hài hòa, những điểm nổi bật Khuôn viên gần 4ha với các tiểu cảnh vườn hoa, vườn hồng, vườn chè, con đường sắc màu với các bật thang nhiều màu sắc nơi đây sẽ cho quý khách cảm giác hòa mình vào với thiên nhiên và lưu lại với những bức ảnh thật rực rỡ  \r\n09h30          Quý khách tới thăm Chùa Linh Phước một ngôi chùa khá đặc biệt tại Đà Lạt. Đặc biệt là hình tượng con rồng được chế tác từ hơn 12.000 vỏ chai sành, gây được ấn tượng mạnh cho phật tử cùng các du khách gần xa mỗi khi tới thăm chùa. \r\n\r\n11h00     Quý khách dùng cơm trưa tại nhà hàng, sau đó về khách sạn nhận phòng nghỉ ngơi.\r\n15h00   Đoàn ghé tham quan trang trại cún Puppy Farm với khoảng 100 con cún, từ Alaska, Pug, Corgi mông tròn hay Puddle đều có mặt đầy đủ để quý khách thoải mái vui đùa. Bên cạnh đó, Quý khách còn được tham quan vườn cà chua dâu công nghệ cao, tận hưởng không khí trong lành cùng rau quả sạch chuẩn nhà trồng. Và những ngọn đồi đầy hoa thật nên thơ\r\n\r\n17h30     Quý khách tự túc khám phá ẩm thực tại Đà Lạt, tự  do dạo phố, ngắm  Hồ Xuân Hương trong tiết trời se lạnh của thành phố cao nguyên hoặc thưởng thức đặc sản: “Sữa đậu nành nóng, Mè đen, Bánh tráng trứng nướng và Chè hé tại phố núi sương mù”. \r\n</p>\r\n<h3>Ngày 2| Đà Lạt - Linh Ẩn - Tp Hồ Chí Minh</h3>\r\n<p>07h00     Quý khách trả phòng khách sạn, điểm tâm tại nhà hàng. \r\n09h00   Quý khách tham quan Chùa Linh Ẩn nằm ở chốn “hoang sơn cùng cốc” thế nhưng kiến trúc nơi đây vẫn toát lên vẻ đẹp hiện đại mà vẫn thân thiện với thiên nhiên. Đến với Linh Ẩn Tự ai cũng không khỏi trầm trồ khen ngợi với những công trình vĩ đại trong số đó phải kể đến Phật Quan Âm Lớn Nhất Việt Nam \r\n11h45 Dùng cơm trưa tại nhà hàng. Tại đây quý khách cùng nghe kể lại câu chuyện về “Tứ đại danh trà”. Ngoài ra quý khách có thể thưởng thức trà, cafe miễn phí tại tiền sảnh của nhà hàng. \r\n18h00 Quý khách về đến TP.HCM HDV Saigontours chia tay quý khách hẹn ngày gặp lại! Kết thúc chuyến tham quan! </p>'),
(7, 'Tp Hồ Chí Minh, Bình Thuận', '<h3>NGÀY 01 | TP. HỒ CHÍ MINH – NÚI TÀ CÚ – PHAN THIẾT – ĐỒI CÁT BAY</h3>\r\n<p>05h00      Xe và hướng dẫn viên Saigontours đón khách tại điểm hẹn. Quý khách khởi hành về Phan Thiết. Đoàn dừng chân ăn sáng tại Nhà hàng khu vực Đồng Nai. \r\n    Trên xe HDV tổ chức các trò chơi vui nhộn như: tìm người bí ẩn, truy tìm báu vật, chiếc nón kỳ cục, hành trình kết nối với nhiều phần quà hấp dẫn và nghe giới thiệu những điểm trên cung đường mà đã đi qua. \r\n10h30    Đoàn dừng chân tham quan Núi Tà Cú, du khách đi Cáp treo (phí cáp treo tự túc), ngắm cảnh đồng bằng Hàm Thuận Nam với những Vườn Thanh Long xanh bạt ngàn. Quý khách tham quan Chùa Linh Sơn Trường Thọ với Bộ tượng tam thế Phật được tạc bằng gỗ trầm hương trên 100 năm tuổi và chụp hình lưu niệm với Tượng Phật Nhập Niết Bàn lớn nhất Khu Vực, dài 49m, cao 11m.   \r\n11h50    Đoàn dùng cơm trưa tại nhà hàng Tà Cú dưới chân núi. \r\n13h00    Đoàn khởi hành về khu Resort nhận phòng nghỉ ngơi. \r\n17h00    Quý khách tham quan Đồi Cát Bay, ngắm hoàng hôn trên đỉnh đồi. Đây cũng là nơi khơi nguồn cảm hứng bất tận của các nhà nhiếp ảnh. Đồi cát muôn hình, muôn vẻ cùng với những hoạt động, sinh sống của người dân trên cát góp phần cho ra đời những tác phẩm đẹp. Ngoài ra quý khách có thể tự do tham quan trò chơi trượt cát và thưởng thức dừa ba nhát, đậu hủ non hoặc món bánh tai vạt ngay trên đồi cát (Chi phí tự túc).\r\n18h30    Xe đưa quý khách đến nhà hàng dùng bữa tối. Sau đó quý khách tự do khám phá thành phố biển về đêm.</p>\r\n<h3>NGÀY 02 | KDL BÀU TRẮNG – LÂU ĐÀI RƯỢU VANG – TP.HCM</h3>\r\n<p>06h30     Quý khách dùng Buffet sáng tại resort. \r\n08h00    Xe đưa quý khách tham quan KDL Bàu Trắng – Nằm giữa những triền cát trắng nên Bàu Bà còn được gọi là Bàu Trắng và ngày nay cũng thường được gọi với cái tên Bàu Sen bởi trong hồ khi vào mùa sen nở, phủ kín cả một vùng hồ. được thiên nhiên ban tặng khiến cho hồ đẹp đến tuyệt vời.Từ trên đồi cát nhìn xuống hồ phẳng lặng, xa xa những đồi cát sẫm màu nhấp nhô lên xuống khiến du khách không khỏi trầm trồ, thán phục. Quý khách có thể chọn lựa chơi các trò chơi mạo hiểm như đi xe địa hình hoặc đi xe Jeep khám phá Bàu Trắng (Chi phí tự túc). \r\n09h30     Quý khách về resort nghỉ ngơi, tắm biển, tắm hồ bơi. \r\n11h30    Đoàn làm thủ tục trả phòng. Đoàn dùng cơm trưa tại nhà hàng. \r\n12h30    Trên đường về ghé thăm Lâu Đài Rượu Vang trực thuộc Sealinks City – với kiến trúc Tây Âu, đây là lâu đài rượu vang đầu tiên và duy nhất tại Việt Nam hiện nay (Chi phí tự túc - Số lượng 10 khách trở lên sẽ có xe đưa Quý Khách tham quan). \r\n    Trên đường về xe dừng tại cơ sở sản xuất nước mắm,khô các loại ..vv, tại đây quý khách có thể mua quà cho người thân và bạn bè. \r\n18h00    Quý khách về đến TP.HCM HDV Saigontours chia tay quý khách hẹn ngày gặp lại! Kết thúc chuyến tham quan!</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `places_image`
--

CREATE TABLE `places_image` (
  `image_id` int(11) NOT NULL,
  `places_id` int(11) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_day` int(11) NOT NULL,
  `tour_night` int(11) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `price_personal` int(11) NOT NULL,
  `price_group` int(11) NOT NULL,
  `places_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `tour_day`, `tour_night`, `transport`, `price_personal`, `price_group`, `places_id`) VALUES
(1, 'Tour Đà Lạt, Siêu tiết kiệm', 2, 1, 'Máy bay', 1790000, 1290000, 6),
(2, 'Tour Phan Thiết, Siêu tiết kiệm', 2, 1, 'Ô tô', 1390000, 990000, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `email`, `tel`) VALUES
(20, 'tranngocphien123', 'Phien2000', 'Trần Ngọc Phiên', 'tranngocphien0309@gmail.com', '0377016054');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Chỉ mục cho bảng `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`places_id`);

--
-- Chỉ mục cho bảng `places_image`
--
ALTER TABLE `places_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `places_id` (`places_id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `places_id` (`places_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `places`
--
ALTER TABLE `places`
  MODIFY `places_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `places_image`
--
ALTER TABLE `places_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Các ràng buộc cho bảng `places_image`
--
ALTER TABLE `places_image`
  ADD CONSTRAINT `places_image_ibfk_1` FOREIGN KEY (`places_id`) REFERENCES `places` (`places_id`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`places_id`) REFERENCES `places` (`places_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
