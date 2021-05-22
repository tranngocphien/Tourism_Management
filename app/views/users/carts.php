<?php
require_once ROOT . '/views/includes/header.php'; ?>
<script>
    function load(id){

        var status = document.getElementById(id).innerHTML;

        console.log(status);

        if (status == 'THÀNH CÔNG'){
            document.getElementById(id).style.background = "green";
        }
        else if (status == "TỪ CHỐI" ){
            document.getElementById(id).style.background = "red";
        }
        else if (status == "ĐANG XỬ LÝ"){
            document.getElementById(id).style.background = "#ffc10";
        }

    }
</script>

<body>
    <div class="content-cart" >
        <div class="blog">
            <div class="col-1">
                <div class="heading">
                    <img class="logo" src="<?php echo URL ?>/public/img/ic_giohang.png">
                    <div class="title">DANH SÁCH SẢN PHẨM/DỊCH VỤ</div>
                </div>
                <div class="thuoc-tinh">
                    <div class="so-luong">
                        SỐ  VÉ
                    </div>
                    <div class="trang-thai">
                        TRẠNG THÁI
                    </div>
                </div>
<?php   
$length = count($data);
for ($i = 0 ; $i < $length; $i++) {
    echo '      <div class="panel">
    <a style="text-decoration: none;" href ="http://localhost/Tourism_Management/Pages/tour_detail/' . $data[$i]["Tour"]["tour_id"] .'">
                    <div class="tour">
                        <img src="' . $data[$i]["Places_image"]["image_path"] . '" class="image">
                        <div class="ct">
                            <div class="title">' . $data[$i]["Tour"]["tour_name"] . '</div>
                            <div class="info">
                                <ul>
                                    <li><strong>Thời gian: </strong>' . $data[$i]["Tour"]["tour_day"] . 'ngày,' .  $data[$i]["Tour"]["tour_night"] . 'đêm</li>
                                    <li><strong>Phương tiện: </strong>' . $data[$i]["Tour"]["transport"] . '</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="number">
                        <ul>
                            <li><strong>Số vé: </strong>' . $data[$i]["Booking"]["number_ticket"] . '</li>
                            <li><strong>Tổng tiền: </strong>' . $data[$i]["Booking"]["money"] . '</li>
                            <li><strong>Thanh toán: </strong>'; if($data[$i]["Booking"]["payment"]=="1") echo 'Chuyển khoản';
                                                                else echo 'Trực tiếp';
                                                                echo '
                            <li><strong>Ngày khởi hành: </strong>' . $data[$i]["Booking"]["date_start"] . '</li> 
                        </ul>
                    </div>

                    <div class="status">
                        <div class="xacnhan" id="' . $data[$i]["Booking"]["booking_id"] .  '" onload = load(' . $data[$i]["Booking"]["booking_id"]. ')>' . $data[$i]["Booking"]["status"] . '</div>
                    </div>

                </div>
                ';
}

?>
            </div>
            <div class="col-2">

            </div>

        </div>

    </div>
</body>
<?php require_once ROOT . '/views/includes/footer.php' ?>