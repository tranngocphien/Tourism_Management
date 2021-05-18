<?php
require_once ROOT . '/views/includes/header.php'; ?>

<script>
    if (document.getElementById('r1').checked) {
        document.getElementById('div-2').style.display = 'none';
        document.getElementById('div-3').style.display = 'none';
        document.getElementById('div-1').style.display = 'flex';

    }

    function addTicket(){
        var per = parseInt(document.getElementById("per").value);
        console.log(per);
        var personal = document.getElementById("don").innerHTML;
        console.log(personal);
        var tongdon = per*personal;
        console.log(tongdon);
        document.getElementById("personal").innerHTML=tongdon;

        var gr = parseInt(document.getElementById("gr").value);
        if(gr < 5 && gr > 0) {
            document.getElementById("tien").style.display="block";
            gr= 0;
        }
        else{
            document.getElementById("tien").style.display="none";
        }
        console.log(gr);
        var group = document.getElementById("nhom").innerHTML;
        var tongnhom = gr*group;
        document.getElementById("group").innerHTML=tongnhom;

        var tongtien = tongdon + tongnhom;
        document.getElementById("total").innerHTML=tongtien;
   }

   function validate(){
       var date = new Date(document.getElementById("date").value);
       var today = new Date();
       console.log(date);
       console.log(today.getDate);
       document.getElementById("note").style.display="block";
   }
</script>


<body>
    <form method="POST" action="<?php echo URL; ?>/Users/carts/<?php echo $data["user"]['User']['user_id'] ?>/<?php echo $data["tour"][0]["Tour"]["tour_id"]; ?>" >
    <div class="content">

        <div class="book">
            <div class="col-1">
                <div class="heading">
                    <img class="logo" src="<?php echo URL; ?>/public/img/ic_card.png">
                    <div class="title">THÔNG TIN NGƯỜI ĐẶT</div>
                </div>
                    <div class="info">
                        <input type="text" placeholder="Họ và tên" id="name" class="input" value="<?php  echo $data["user"]["User"]["fullname"];?>" readonly>
                        <input type="text" placeholder="Số điện thoại" id="tel" class="input" value="<?php  echo $data["user"]["User"]["tel"];?>" readonly>
                        <input type="text" placeholder="Email" id="email" class="input" value="<?php  echo $data["user"]["User"]["email"];?>" readonly>
                        <input type="text" placeholder="Địa chỉ" id="address" class="input" value="<?php  echo $data["user"]["User"]["address"];?>" readonly>
                        <p style="margin-top: -1em;">Hãy chọn ngày khởi hành:</p>
                        <input type="date" placeholder="Chọn ngày khởi hành" id="date" class="input" onchange="validate()">
                        <p id="note" style="color: red; display: none; margin-top: -2em; margin-bottom: 2em;">*Hãy chọn ngày sau ngày hiện tại!</p>
                    </div>

                    <div class="radio-button">
                        <div class="radio">
                            <input type="radio" id="r1" name="thanhtoan" class="but" onkeypress="click('div-1')">
                            <label> Chuyển khoản ngân hàng </label></input>
                            <div id="div-1" class="detail">
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
                    <img src="<?php echo $data["tour"][0]["Places_image"]["image_path"]; ?>" class="image">
                    <div class="panel">
                        <div class="title">
                        <?php  echo $data["tour"][0]["Tour"]["tour_name"];?>
                        </div>
                        <div class="input">
                            <div class="person">ĐƠN</div>
                            <div class="number"><input type="number" value="0" min="0" id="per" onchange="addTicket()"> x <span id="don"><?php  echo $data["tour"][0]["Tour"]["price_personal"];?></span> =</div>

                            <div class="money"><p id="personal">0</p></div>
                        </div>
                        <div class="input">
                            <div class="person">NHÓM</div>
                            <div class="number"><input type="number" min="0" value="0" id="gr" onchange="addTicket()"> x <span id="nhom"><?php  echo $data["tour"][0]["Tour"]["price_group"];?></span> =</div>
                            <div class="money"><p id="group">0</p></div>
                        </div>
                        <p id="tien" style="color: red; display: none;"> * SỐ NGƯỜI TỐI THIỂU LÀ 5 </p>
                        <div class="total">
                            <div class="left">TỔNG</div>
                            <div class="right"><p id="total">0</p></div>
                        </div>
                    
                    </div>
                    <div class="footer"></div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>