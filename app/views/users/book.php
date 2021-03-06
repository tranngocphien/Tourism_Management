<?php require_once ROOT . '/views/includes/header.php'; ?>

<link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/dialog.css">

<script>

    function addTicket() {


        var ticket = parseInt(document.getElementById("ticket").value);

        if (ticket < 5) {
            document.getElementById("group").style.display = "none";
            document.getElementById("single").style.display = "flex";
            var price = document.getElementById("gia-don").innerHTML;
            var total = price * ticket;
            document.getElementById("total").innerHTML = total;
        } else {
            document.getElementById("single").style.display = "none";
            document.getElementById("group").style.display = "flex";
            var price = document.getElementById("gia-nhom").innerHTML;
            var total = price * ticket;
            document.getElementById("total").innerHTML = total;
        }
    }

    function checkRadio(){
        var radios = document.getElementsByName("thanhtoan");
        if(radios[0].checked === true){
            document.getElementById("div-1").style.display = "block";
            document.getElementById("div-2").style.display = "none";
            return true;
        }
        if(radios[1].checked === true) {
            document.getElementById("div-2").style.display = "block";
            document.getElementById("div-1").style.display = "none";
            return true;
        }
        return false;
    }

    function validate() {
        var date = document.getElementById("date").value;
        var arr = date.split("-");


        var day = new Date();
        var y = day.getFullYear();
        var m = day.getMonth() + 1;
        var d = day.getDate();
        console.log(arr);
        console.log("to day : ");
        console.log(y + "-" + m + "-" + d);

        if (arr[0] <= y) {
            if (arr[0] < y) {
                document.getElementById("note").style.display = "block";
                return false;
            } else {
                if (arr[1] <= m) {
                    if (arr[1] < m) {
                        document.getElementById("note").style.display = "block";
                        return false;
                    } else {
                        if (arr[2] <= d) {
                            document.getElementById("note").style.display = "block";
                            return false;
                        } else {
                            document.getElementById("note").style.display = "none";
                            return true;
                        }
                    }
                } else {
                    document.getElementById("note").style.display = "none";
                    return true;
                }
            }
        } else {
            document.getElementById("note").style.display = "none";
            return true;
        }

        return false;

    }


    function book() {
        var checkDate = validate();
        var Radio = checkRadio();
        var ticket = document.getElementById("ticket").value;
        var dialog = document.getElementById("dialog");
        var modal = document.getElementById("modal-opacity");
        var payment = document.getElementsByName("thantoan").values;
        // console.log(checkDate);

        // console.log(ticket);



        console.log("Thanh to??n : "+payment);

        if (checkDate && ticket > 0 && Radio ) {
            modal.style.display = "none";
            dialog.style.display = "none";
            document.getElementById("book_tour").submit();
        } else {
            var noti="";
            if(!checkDate){
                noti = noti + " - Vui l??ng ch???n ????ng ng??y<br>"
            }
            if(ticket < 1) {
                noti = noti + " - S??? l?????ng v?? nh??? nh???t l?? 1 <br>"
            }
            if (!Radio){
                noti = noti + " - Vui l??ng ch???n ph????ng th???c thanh to??n"
            }
        
            modal.style.display = "block";
            dialog.style.display = "block";
            document.getElementById("payment-error").style.display = "block";
            dialog.style.textAlign = "left"

            document.getElementById("notice").innerHTML = noti;
        }

    }

    function clickCancel() {
        var dialog = document.getElementById("dialog");
        var modal = document.getElementById("modal-opacity");
        modal.style.display = "none";
        dialog.style.display = "none";
    }
    
</script>


<body>
    <form name="submit" method="POST" id="book_tour" action="<?php echo URL; ?>/Users/carts/">
        <div class="content">

            <div class="book">
                <div class="col-1">
                    <div class="heading">
                        <img class="logo" src="<?php echo URL; ?>/public/img/ic_card.png">
                        <div class="title">TH??NG TIN NG?????I ?????T</div>
                    </div>
                    <div class="info">
                        <input type="text" placeholder="H??? v?? t??n" id="name" class="input" value="<?php echo $data["user"]["User"]["fullname"]; ?>" readonly>
                        <input type="text" placeholder="S??? ??i???n tho???i" id="tel" class="input" value="<?php echo $data["user"]["User"]["tel"]; ?>" readonly>
                        <input type="text" placeholder="Email" id="email" class="input" value="<?php echo $data["user"]["User"]["email"]; ?>" readonly>
                        <input type="text" placeholder="?????a ch???" id="address" class="input" value="<?php echo $data["user"]["User"]["address"]; ?>" readonly>
                        <p style="margin-top: -1em;">H??y ch???n ng??y kh???i h??nh:</p>
                        <p id="note" style="color: red; display: none;">*H??y ch???n ng??y sau ng??y hi???n t???i!</p>
                        <input type="date" placeholder="Ch???n ng??y kh???i h??nh" name="date" id="date" class="input" onchange="validate()">

                    </div>

                    <div class="radio-button">
                    <h5 style="color: red; display: none;" id="payment-error">*Vui l??ng ch???n h??nh th???c thanh to??n</h5>
                        <div class="radio">
                            <input type="radio" value="1" id="r1" name="thanhtoan" class="but" onclick="checkRadio()">
                            <label> Chuy???n kho???n ng??n h??ng </label></input>
                            <div id="div-1" class="detail">
                                <p><strong><span style="font-size:13px">TH??NG TIN THANH TO??N CHUY???N KHO???N</span></strong></p>
                                <p>- Ng??n h??ng Th????ng m???i c??? ph???n C??ng Th????ng Vi???t Nam - CN TP.HN (VCB)</p>
                                <p>- T??n ????n v??? h?????ng: C??NG TY C??? PH???N D???CH V??? DU L???CH TENG</p>
                                <p>- S??? t??i kho???n VietinBank: 1018 6895 8007</p>
                            </div>
                        </div>
                        <div class="radio">
                            <input type="radio" value="2" id="r2" name="thanhtoan" class="but" onclick="checkRadio()">
                            <label> Thanh to??n t???i v??n ph??ng </label>
                            <div id="div-2" class="detail">
                                <p><strong>C??NG TY C??? PH???N D???CH V??? DU L???CH TENG<br>(TENG TOURIST)<br></strong>
                                    <strong>Tr??? s???:</strong> 71, Gi???i Ph???ng, Qu???n Hai B?? Tr??ng, Tp.H?? N???i<br>
                                    <strong>??i???n tho???i:</strong> <a href="tel:0358.260.822">0358.260.822</a><br>
                                    <strong>T???ng ????i:</strong> <a href="tell:1900 6668">1900 6668</a> <br>
                                    <strong>Fax:</strong> 028.3829 5060<br><strong>Email:</strong> <a href="mailto:tengtourist@gmail.com">tengtourist@gmail.com</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <input type="button" class="pay" onclick="book()" value="THANH TO??N">

                </div>
                <div class="col-2">
                    <div class="heading">
                        <img class="logo" src="<?php echo URL; ?>/public/img/ic_giohang.png">
                        <div class="title">TH??NG TIN V??? S???N PH???M D???CH V???</div>
                    </div>
                    <div class="product">
                        <a style="text-decoration: none;" href="http://localhost/Tourism_Management/Pages/tour_detail/<?php echo $data["tour"][0]["Tour"]["tour_id"]; ?>">
                        <img src="<?php echo $data["tour"][0]["Places_image"]["image_path"]; ?>" class="image">
                        <div class="panel">
                            <div class="title">
                                <?php echo $data["tour"][0]["Tour"]["tour_name"]; ?>
                            </div>
                        </a>
                            <div class="input">
                                <div class="person">S??? V??: </div>
                                <div class="number"><input type="number" name="ticket" value="0" min="0" id="ticket" onchange="addTicket()"> </div>
                            </div>

                            <div class="input" id="single">
                                <div class="person">GI?? ????N: </div>
                                <div class="number"> x <span id="gia-don"><?php echo $data["tour"][0]["Tour"]["price_personal"]; ?></span></div>

                            </div>

                            <div class="input" id="group" style="display: none;">
                                <div class="person">GI?? NH??M: </div>
                                <div class="number"> x <span id="gia-nhom"><?php echo $data["tour"][0]["Tour"]["price_group"]; ?></span></div>
                            </div>
                            <p style="color: red;">*Gi?? nh??m ???????c ??p d???ng t??? 5 v?? tr??? l??n.</p>
                            <div class="total">
                                <div class="left">T???NG</div>
                                <div class="right">
                                    <p id="total">0</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-opacity" id="modal-opacity" style="display: none"></div>
            <div class="dialog" id="dialog" style="display: none">
                <div class="dialog-header m-flex m-center"><div class="icon-warning"></div><div class="warning">Warning</div></div>
                <div class="dialog-content m-flex m-center" id="notice">Ch??a ch???n s??? v?? ho???c ng??y ??i</div>
                <div class="dialog-footer m-flex"><input type="button" class="btn-cancel" value="Tho??t" onclick="clickCancel()"></div>

            </div>
        </div>
    </form>
</body>

<?php require_once ROOT . '/views/includes/footer.php' ?>