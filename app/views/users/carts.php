<?php
require_once ROOT . '/views/includes/header.php'; ?>
<script>
    var dcm = document.getElementById("conf").innerHTML;
    if (dcm == 'TỪ CHỐI') {
        document.getElementById("conf").style.background="red";
    }
</script>

<body>
    <div class="content-cart">
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

                <div class="panel">
                    <div class="tour">
                        <img src="<?php echo URL; ?>/public/img/hoian.jpg" class="image">
                        <div class="ct">
                            <div class="title">Du Lịch Đồng Nai: Khám Phá Vườn Quốc Gia Nam Cát Tiên - KDL Suối Mơ</div>
                            <div class="info">
                                <ul>
                                    <li><strong>Thời gian: </strong>3 ngày, 2 đêm</li>
                                    <li><strong>Phương tiện: </strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="number">
                        <ul>
                            <li><strong>Người lớn: </strong> 2 </li>
                            <li><strong>Trẻ em: </strong> 0 </li>
                        </ul>
                    </div>

                    <div class="status">
                        <div class="xacnhan" id="conf"> THÀNH CÔNG </div>
                    </div>

                </div>

                <div class="panel">
                    <div class="tour">
                        <img src="<?php echo URL; ?>/public/img/hoian.jpg" class="image">
                        <div class="ct">
                            <div class="title">Du Lịch Đồng Nai: Khám Phá Vườn Quốc Gia Nam Cát Tiên - KDL Suối Mơ</div>
                            <div class="info">
                                <ul>
                                    <li><strong>Thời gian: </strong>3 ngày, 2 đêm</li>
                                    <li><strong>Phương tiện: </strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="number">
                        <ul>
                            <li><strong>Người lớn: </strong> 2 </li>
                            <li><strong>Trẻ em: </strong> 0 </li>
                        </ul>
                    </div>

                    <div class="status">
                        <div class="xacnhan" id="conf"> TỪ CHỐI </div>
                    </div>

                </div>
            </div>
            <div class="col-2">

            </div>

        </div>

    </div>
</body>