<?php
require_once ROOT . '/views/includes/header.php'; ?>

<head>
    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/index.css">
</head>

<body>
    <div class="img_head">
        <img src="<?php echo URL; ?>/public/img/tour1.jpg" class="image">
        <div class="search">
            <form action="<?php echo URL?>/pages/tours" method="POST">
                <input type="text" name="search" class="input_text" placeholder="Nhập thông tin cần tìm ..." />
                <button type="submit" class="button">TÌM TOUR</button>
            </form>


        </div>
    </div>
    <div class="menu">
        <div class="menu1">

        </div>
        <div class="menu2">

        </div>
        <a href="http://localhost/Tourism_Management/Pages/tour/mien-bac" style="text-decoration: none;">
        <div class="menu3">
            TOUR <br> MIỀN BẮC
        </div>
        </a>

        <a href="http://localhost/Tourism_Management/Pages/tour/mien-trung" style="text-decoration: none;">
        <div class="menu4">
            TOUR <br> MIỀN TRUNG
        </div>
        </a>

        <a href="http://localhost/Tourism_Management/Pages/tour/mien-nam" style="text-decoration: none;">
        <div class="menu5">
            TOUR <br> MIỀN NAM
        </div>
        </a>

        <div class="menu6">

        </div>
        <div class="menu7">

        </div>

    </div>

    <section class="content">
        <div class="row1">
            <div class="intro">
                <h4>Chúng tôi giới thiệu đến bạn</h4>
                <h1>TOUR ĐANG HOT</h1>
            </div>
            <div class="tours">

            <?php 
            for ($i = 0; $i < 1; $i++){
            
            echo '
                <div class="col1">
                <a style="text-decoration:none;" href="http://localhost/Tourism_Management/pages/tour_detail/' . $data[$i]["Tour"]["tour_id"] . '">
                    <img src="' . $data[$i]["Places_image"]["image_path"] . '" class="image">
                    <div class="title">' . $data[$i]["Tour"]["tour_name"] .'</div>
                    <div class="mota">
                        <ul style="list-style: none;" >
                        <li>Thời gian: '. $data[$i]["Tour"]["tour_day"] .' ngày,' . $data[$i]["Tour"]["tour_night"] .' đêm</li>
                        <li>Phương tiện:' . $data[$i]["Tour"]["transport"] . '</li>
                        </ul>
                    </div>
                </a>
                    <div class="bot1">
                        <img src="<?php echo URL ?>/public/img/dolar.png" class="logo">
                        <div class="price">' . $data[$i]["Tour"]["price_personal"] . '</div>
                        <a href = "http://localhost/Tourism_Management/Users/book/20/'. $data[$i]["Tour"]["tour_id"] .'">
                        <div class="book">ĐẶT NGAY</div>
                        </a>
                    </div>
                </div>';
            }
            ?>
            
            </div>
            <a href="http://localhost/Tourism_Management/Pages/tours">
                <button class="button">XEM TẤT CẢ</button>
            </a>
        </div>

        <div class="row-2">
            <h4>Khám phá lịch sử - văn hóa - con người Việt Nam với</h4>
            <div class="heading">CÁC ĐIỂM ĐẾN HẤP DẪN</div>
            <div class="images">


            <a href="http://localhost/Tourism_Management/Pages/tour/da-nang" style="text-decoration: none;">
                <div class="img1">
                    <img src="<?php echo URL;?>/public/img/index/danang1.jpg" class="anh">
                    <div class="title">Đà Nẵng</div>
                </div>
            </a>

            <a href="http://localhost/Tourism_Management/Pages/tour/ha-noi" style="text-decoration: none;">
                <div class="img2">
                    <img src="<?php echo URL;?>/public/img//index/hanoi.jpg" class="anh">
                    <div class="title">Hà Nội</div>
                </div>
            </a>

            <a href="http://localhost/Tourism_Management/Pages/tour/ho-chi-minh" style="text-decoration: none;">
                <div class="img3">
                    <img src="<?php echo URL;?>/public/img/index/TPHoChiMinh.jpg" class="anh">
                    <div class="title">TP Hồ Chí Minh</div>
                </div>
            </a>

            <a href="http://localhost/Tourism_Management/Pages/tour/da-lat" style="text-decoration: none;">
                <div class="img4">
                    <img src="<?php echo URL;?>/public/img/index/dalat.jpg" class="anh">
                    <div class="title">Đà Lạt</div>
                </div>
            </a>

            <a href="http://localhost/Tourism_Management/Pages/tour/hue" style="text-decoration: none;">
                <div class="img5">
                    <img src="<?php echo URL;?>/public/img/index/hue.jpg" class="anh">
                    <div class="title">Huế</div>
                </div>
            </a>

            <a href="http://localhost/Tourism_Management/Pages/tour/phu-quoc" style="text-decoration: none;">
                <div class="img6">
                    <img src="<?php echo URL;?>/public/img/index/phuquoc.jpg" class="anh">
                    <div class="title">Phú Quốc</div>
                </div>
            </a>


            <a href="http://localhost/Tourism_Management/Pages/tour/sa-pa" style="text-decoration: none;">
                <div class="img7">
                    <img src="<?php echo URL;?>/public/img/index/sapa.jpg" class="anh">
                    <div class="title">SA PA</div>
                </div>
            </a>


            <a href="http://localhost/Tourism_Management/Pages/tour/ha-long" style="text-decoration: none;">
                <div class="img8">
                <img src="<?php echo URL;?>/public/img/index/halong.jpg" class="anh">
                    <div class="title">Vịnh Hạ Long</div>
                </div>
            </a>


            </div>
        </div>


        <div class="row-3">
            <div class="heading">KHOẢNH KHẮC LỮ HÀNH</div>
            <div class="images">
                <div class="img">
                <img src="<?php echo URL;?>/public/img/index/anh1.jpg" class="anh">
                <img src="<?php echo URL;?>/public/img/index/anh2.jpg" class="anh">
                <img src="<?php echo URL;?>/public/img/index/anh3.jpg" class="anh">
                <img src="<?php echo URL;?>/public/img/index/anh4.jpg" class="anh">
                <img src="<?php echo URL;?>/public/img/index/anh5.jpg" class="anh">
                <img src="<?php echo URL;?>/public/img/index/anh6.jpg" class="anh">
                </div>
            </div>
            <a style="text-decoration: none;" href="<?php echo  URL?>/Pages/khoanh_khac_lu_hanh">  
            <div class="button"> XEM TẤT CẢ</div>
            </a>
        </div>
        
        <div class="footer"></div>

    </section>
</body>