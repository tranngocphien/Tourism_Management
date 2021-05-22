<?php require_once ROOT . '/views/includes/header.php' ?>
<link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/images.css">
<div class="img-container">
    <div class="row-header"><h1>KHOẢNH KHẮC LỮ HÀNH</h1></div>
    <div class="row-content">
        <?php 
            for ($i = 0; $i < count($data); $i++){ 
                echo '
                <img src="' . $data[$i]["Memorie"]["image"] . '" class="img">';
            }
        ?>

    </div>
    <div class="footer">
        <div class="col-1">
            <h4>HÃY LIÊN HỆ VỚI CHÚNG TÔI</h4>
            
            <div class="bot">
                <img src="<?php echo URL ?>/public/img/index/ic_face.png"  class="ic">
                <img src="<?php echo URL ?>/public/img/index/ic_instagram.png"  class="ic">
                <img src="<?php echo URL ?>/public/img/index/ic_youtube.png"  class="ic">
            </div>

        </div>
        <div class="col-2">
        <h3>TỔNG CÔNG TY DU LỊCH TENGTENG TOURISM</h3>
            <h5>Địa chỉ: Số 3, Đường Trường Chinh, Quấn Đống Đa, TP. Hà Nội</h5>
            <h5><a style="color: #fff;" href="tel:0358260822">Tel: 0358260822</a></h5>
            <h5><a style="color: #fff;" href="mailto:tengtengtourism@gmail.com">Email: tengtengtourism@gmail.com</a></h5>
            <h5></h5>
        </div>
      
        <img src="<?php echo URL ?>/public/img/ic_logo.png" class="col-3">
    
    </div>
</div>