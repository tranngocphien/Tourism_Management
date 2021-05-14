<?php
require_once ROOT . '/views/includes/header.php'; ?>
<html>

<head>
    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/listTour.css">
    <title>Các tours du lịch</title>
</head>

<body>
    <img src="<?php echo URL; ?>/public/img/rong.jpg" class="image_head">
    <div class="intro">
        <h1>Du lịch trong nước</h1>
        <h4>Những cảnh đẹp ở Việt Nam luôn có sức hút mạnh liệt đối với du khách,
            mang đến cho mọi người những chuyến hành trình vô cùng thú vị.
            Mỗi một điểm đến sẽ giúp bạn khám phá thêm nhiều điều mới lạ về
            văn hóa cũng như nền ẩm thực phong phú của từng vùng miền trên khắp dải đất hình chữ S thân yêu.
            Book ngay một chuyến du lịch trong nước cùng BenThanh Tourist
            và tận hưởng một kỳ nghỉ thật đáng nhớ! </h4>
    </div>

    <section class="content_left_tours">
        <div class="title_search">
            TÌM TOUR
        </div>
        <form action="">
            <input type="text" name="key_word" placeholder="Nhập tên, thành phố, địa danh..." class="input">
            <input type="Number" class="input" placeholder="Chọn số lượng ngày">
            <button type="submit" name="search" class="button">Tìm kiếm</button>
    </form>
    </section>

    <section class="content_tours">
        <div class="row">
            <div class="col">
                <img src="<?php echo URL; ?>/public/img/dongnai.jpg" class="image">
                <div class="title">Du Lịch Đồng Nai: Khám Phá Vườn Quốc Gia Nam Cát Tiên - KDL Suối Mơ</div>
                <div class="bot">
                    <img src="<?php echo URL?>/public/img/dolar.png" class="logo">
                    <div class="price"> 3000000 </div>
                    <div class="book">ĐẶT NGAY</div>
                </div>
            </div>
            <div class="col">
                <img src="<?php echo URL; ?>/public/img/nuibaden.jpg" class="image">
                <div class="title">Du Lịch Tây Ninh : Núi Bà Đen - Đỉnh Vân Sơn - Vườn Nho Rừng - Tòa Thánh Tây Ninh 1N</div>
            </div>
            <div class="col">
                <img src="<?php echo URL; ?>/public/img/hanoicantho.jpg" class="image">
                <div class="title">Du Lịch Miền Tây: Hà Nội - Cần Thơ - Sóc Trăng - Bạc Liêu - Cà Mau</div>
            </div>
            <div class="col">
                <img src="<?php echo URL; ?>/public/img/hanoicantho.jpg" class="image">
                <div class="title">Du Lịch Miền Tây: Hà Nội - Cần Thơ - Sóc Trăng - Bạc Liêu - Cà Mau</div>
            </div>
            <div class="col">
                <img src="<?php echo URL; ?>/public/img/hanoicantho.jpg" class="image">
                <div class="title">Du Lịch Miền Tây: Hà Nội - Cần Thơ - Sóc Trăng - Bạc Liêu - Cà Mau</div>
            </div>
            <div class="col">
                <img src="<?php echo URL; ?>/public/img/hanoicantho.jpg" class="image">
                <div class="title">Du Lịch Miền Tây: Hà Nội - Cần Thơ - Sóc Trăng - Bạc Liêu - Cà Mau</div>
            </div>
        </div>
    </section>
</body>

</html>