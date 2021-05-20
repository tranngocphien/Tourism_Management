<?php
require_once ROOT . '/views/includes/header.php'; ?>
<html>

<head>
    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/listTour.css">
    <title>Các tours du lịch</title>

    <script>
    </script>
</head>

<body>
    <img src="<?php echo URL; ?>/public/img/rong.jpg" class="image_head">
    <div class="intro">
        <h1>Du lịch Việt Nam (VIETNAM TOURISM)</h1>
        <h4>Những cảnh đẹp ở Việt Nam luôn có sức hút mạnh liệt đối với du khách,
            mang đến cho mọi người những chuyến hành trình vô cùng thú vị.
            Mỗi một điểm đến sẽ giúp bạn khám phá thêm nhiều điều mới lạ về
            văn hóa cũng như nền ẩm thực phong phú của từng vùng miền trên khắp dải đất hình chữ S thân yêu.
            Book ngay một chuyến du lịch trong nước cùng TENGTENG Tourist
            và tận hưởng một kỳ nghỉ thật đáng nhớ! </h4>
    </div>

    <section class="content_left_tours">
        <div class="title_search">
            TÌM TOUR
        </div>
        <form action="http://localhost/Tourism_Management/Pages/search" method="POST">
            <input type="text" name="key_word" placeholder="Nhập tên, thành phố, địa danh, phương tiện,..." class="input">
            <input type="Number" name="day" class="input" placeholder="Chọn số lượng ngày" min="0">
            <button type="submit" name="search" class="button">Tìm kiếm</button>
    </form>
    </section>

    <section class="content_tours">
        <div class="row">
            <?php 
            for ($i = 0; $i < count($data); $i++){
            echo '
            <div class="col">
            <a href = "http://localhost/Tourism_Management/Pages/tour_detail/'. $data[$i]["Tour"]["tour_id"] .'">
                
                <img src="'. $data[$i]["Places_image"]["image_path"] .'" class="image">
                <div class="title">' . $data[$i]["Tour"]["tour_name"] .'</div>
                <div class="mota"> 
                    <ul style="list-style: none;">
                        <li> Thời gian :' . $data[$i]["Tour"]["tour_day"] . 'ngày, ' . $data[$i]["Tour"]["tour_night"] . ' đêm </li>
                        <li> Phương tiện: ' . $data[$i]["Tour"]["transport"] . '</li>
                    </ul>
                </div>
            
            </a>

                <div class="bot">
                    <img src="<?php echo URL?>/public/img/dolar.png" class="logo">
                    <div class="price">' . $data[$i]["Tour"]["price_personal"] .'</div>
                    <a style="text-decoration=none;" href = "http://localhost/Tourism_Management/Users/book/' . $data[$i]["Tour"]["tour_id"] . '">
                    <div class="book">ĐẶT NGAY</div>
                    </a>
                </div>
            </div>
            ';}?>
            
        </div>
    </section>
</body>

</html>