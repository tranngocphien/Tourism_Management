<?php
require_once ROOT . '/views/includes/header.php'; ?>

<script>
    if (document.getElementById('r1').checked) {
        document.getElementById('div-2').style.display = 'none';
        document.getElementById('div-3').style.display = 'none';
        document.getElementById('div-1').style.display = 'flex';

    }
</script>


<body>
    <form method="GET" action="#" >
    <div class="content">

        <div class="book">
            <div class="col-1">
                <div class="heading">
                    <img class="logo" src="<?php echo URL; ?>/public/img/ic_card.png">
                    <div class="title">THÔNG TIN NGƯỜI ĐẶT</div>
                </div>
                    <div class="info">
                        <input type="text" placeholder="Họ và tên" id="name" class="input">
                        <input type="text" placeholder="Số điện thoại" id="name" class="input">
                        <input type="text" placeholder="Email" id="name" class="input">
                        <input type="text" placeholder="Địa chỉ" id="name" class="input">
                    </div>

                    <div class="radio-button">
                        <div class="radio">
                            <input type="radio" id="r1" name="thanhtoan" class="but" onclick="click('div-1')">
                            <label> Chuyển khoản ngân hàng </label></input>
                            <div id="div-1" class="detail" style="display: none;">
                                <p><strong><span style="font-size:13px">THÔNG TIN THANH TOÁN CHUYỂN KHOẢN</span></strong></p>
                                <p>- Ngân hàng Thương mại cổ phần Công Thương Việt Nam - CN TP.HN (VCB)</p>
                                <p>- Tên đơn vị hưởng: CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH TENG</p>
                                <p>- Số tài khoản VNĐ: 1018 6895 8007</p>
                            </div>
                        </div>
                        <div class="radio">
                            <input type="radio" id="r2" name="thanhtoan" class="but" onclick="click('div-2')">
                            <label> Thanh toán tại văn phòng </label>
                            <div id="div-2" class="detail">
                                <p><strong>CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH TENG<br>(TENG TOURIST)<br></strong>
                                    <strong>Trụ sở:</strong> 71, Giải Phỏng, Quận Hai Bà Trưng, Tp.Hà Nội<br>
                                    <strong>Điện thoại:</strong> <a href="tel:0358.260.822">0358.260.822</a><br>
                                    <strong>Tổng đài:</strong> <a href="tell:1900 6668">1900 6668</a> <br>
                                    <strong>Fax:</strong> 028.3829 5060<br><strong>Email:</strong> <a href="mailto:tengtourist@gmail.com">tengtourist@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="radio">
                            <input type="radio" id="r3" name="thanhtoan" class="but" onclick="click('div-3')">
                            <label> Thanh toán online </label>
                            <div id="div-3" class="detail">
                                <p><strong>CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH TENG TRAVEL<br>(TENG TOURIST)<br></strong>
                                    <strong>Trụ sở:</strong> 71, Giải Phỏng, Quận Hai Bà Trưng, Tp.Hà Nội<br>
                                    <strong>Điện thoại:</strong> <a href="tel:0358.260.822">0358.260.822</a><br>
                                    <strong>Fax:</strong> 028.3829 5060<br><strong>Email:</strong>
                                    <a href="mailto:tengtourist@gmail.com">tengtourist@gmail.com</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="pay">THANH TOÁN</button>
                </form>
            </div>
            <div class="col-2">
                <div class="heading">
                    <img class="logo" src="<?php echo URL; ?>/public/img/ic_giohang.png">
                    <div class="title">THÔNG TIN VỀ SẢN PHẨM DỊCH VỤ</div>
                </div>
                <div class="product">
                    <img src="<?php echo URL; ?>/public/img/hoian.jpg" class="image">
                    <div class="panel">
                        <div class="title">
                            Du Lịch Đồng Nai: Khám Phá Vườn Quốc Gia Nam Cát Tiên - KDL Suối Mơ
                        </div>
                        <div class="input">
                            <div class="person">Người lớn</div>
                            <div class="number"><input type="number"> x 2.225.000 =</div>

                            <div class="money">2220222</div>
                        </div>
                        <div class="input">
                            <div class="person">Trẻ em</div>
                            <div class="number"><input type="number"> x 1.225.000 =</div>

                            <div class="money">11110222</div>
                        </div>
                        <div class="total">
                            <div class="left">TỔNG</div>
                            <div class="right"> 10000000</div>
                        </div>
                    
                    </div>
                    <div class="footer"></div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>