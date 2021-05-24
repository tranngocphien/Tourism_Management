<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/style.css">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/dialog.css">

        <script language="javascript" type="text/javascript">
            window.onload = function () {
                var fileUpload = document.getElementById("files");
                fileUpload.onchange = function () {
                    if (typeof (FileReader) != "undefined") {
                        var dvPreview = document.getElementById("showImage");
                        dvPreview.innerHTML = "";
                        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                        for (var i = 0; i < fileUpload.files.length; i++) {
                            var file = fileUpload.files[i];
                            if (regex.test(file.name.toLowerCase()) || true) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var img = document.createElement("IMG");
                                    img.height = "150";
                                    img.width = "150";
                                    img.src = e.target.result;
                                    dvPreview.appendChild(img);
                                }
                                reader.readAsDataURL(file);
                            } else {
                                alert(file.name + " is not a valid image file.");
                                dvPreview.innerHTML = "";
                                return false;
                            }
                        }
                    } else {
                        alert("This browser does not support HTML5 FileReader.");
                    }
                }
            };

            function clickCancelv() {
                var dialog = document.getElementById("dialog_v");
                var modal = document.getElementById("modal-opacity_v");
                modal.style.display = "none";
                dialog.style.display = "none";
            }

            function onChangeInput(clicked_id) {
                var element = document.getElementById(clicked_id);
                if (element.value != "") {
                    element.style.borderColor = "#bbbbbb";
                }


            }

            function validate() {
                var btn = document.getElementById("save");
                var tourname = document.getElementById('tourname');
                var tourday = document.getElementById('tourday');
                var tournight = document.getElementById('tournight');
                var price = document.getElementById('price');
                var prices = document.getElementById('prices');
                var transport = document.getElementById('transport');
                var places = document.getElementById('places');
                var description = document.getElementById('description');

                var notification = "";
                if (tourname.value == '') {
                    notification += "Không được phép để trống Tourname\n";
                    tourname.style.borderColor = "red";
                }
                if (tourday.value == '') {
                    notification += "Không được phép để trống số ngày\n";
                    tourday.style.borderColor = "red";
                }

                if (tournight.value == '') {
                    notification += "Không được phép để trống số đêm\n";
                    tournight.style.borderColor = "red";
                }

                if (price.value == '') {
                    notification += "Không được phép để trống giá đơn\n";
                    price.style.borderColor = "red";
                }
                if (prices.value == '') {
                    notification += "Không được phép để trống giá nhóm\n";
                    prices.style.borderColor = "red";
                }
                if (transport.value == '') {
                    notification += "Không được phép để trống phương tiện\n";
                    transport.style.borderColor = "red";
                }
                if (places.value == '') {
                    notification += "Không được phép để trống tỉnh\n";
                    places.style.borderColor = "red";
                }
                if (description.value == '') {
                    notification += "Không được phép để trống mô tả\n";
                    description.style.borderColor = "red";
                }

                var dialog = document.getElementById("dialog_v");
                var modal = document.getElementById("modal-opacity_v");
                if (notification == "") {

                    var checkNumber = new RegExp("^[0-9]\d*");

                    if (checkNumber.test(tourday.value) && checkNumber.test(tournight.value) && checkNumber.test(prices.value) && checkNumber.test(price.value)) {
                        document.getElementById("updateform").submit();
                        return true;

                    } else {
                        if (!checkNumber.test(price.value)) {
                            price.style.borderColor = "red";
                        }
                        if (!checkNumber.test(prices.value)) {
                            prices.style.borderColor = "red";
                        }
                        if (!checkNumber.test(tourday.value)) {
                            tourday.style.borderColor = "red";
                        }
                        if (!checkNumber.test(tournight.value)) {
                            tournight.style.borderColor = "red";
                        }
                        document.getElementById("dialog-content").innerHTML = "Nhập sai định dạng";
                        modal.style.display = "block";
                        dialog.style.display = "block";
                        return false;
                    }

                } else {
                    document.getElementById("dialog-content").innerHTML = "Nhập thiếu dữ liệu";
                    modal.style.display = "block";
                    dialog.style.display = "block";
                    return false;
                }

            }
        </script>

    </head>
    <body>
        <div class="header">
            <div class="header-logo"></div>
            <div>Tourism Management</div>
            <div><a class="logout" href="http://localhost/Tourism_Management/admins/logOut">Đăng xuất</a></div>

        </div>
        <div class="content">
            <div class="content_left">
                <div class="menu_item"><div class="menu_icon user_icon"></div><a href="<?php echo URL; ?>/admins/users">Người dùng</a></div>
                <div class="menu_item"><div class="menu_icon tour_icon"></div><a href="<?php echo URL; ?>/admins/tours">Tour</a></div>
                <div class="menu_item"><div class="menu_icon booking-icon"></div><a href="<?php echo URL; ?>/admins/bookings">Đặt vé</a></div>
                <div class="menu_item"><div class="menu_icon statistic-icon"></div><a href="<?php echo URL; ?>/admins/statistic">Thống kê</a></div>
                <div class="menu_item"><div class="menu_icon tour_icon"></div><a href="<?php echo URL; ?>/admins/memories">Khoản khắc lữ hành</a></div>

            </div>
            <div class="content_right">
                <?php
                $image = $data["image"];
                $data = $data["info"]
                ?>

                <div class="title">Chi tiết tour</div>
                <form id="updateform" action="<?php echo URL; ?>/admins/tourdetail/<?php echo $data[0]["Tour"]["tour_id"]; ?>/<?php echo $data[0]["Place"]["places_id"]; ?>" method="post" enctype="multipart/form-data">
                    <div class="content_main m-flex tour_detail">
                        <div class="m-flex-1 detail-left">
                            <div class="m-flex m-center"><div class="label">Tên tour</div><input id="tourname" class="m-input" type="text" name="tour_name" value="<?php echo $data[0]["Tour"]["tour_name"]; ?>" readonly></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số ngày</div><input id="tourday" class="m-input" type="text" name="tour_day" onchange="onChangeInput(this.id)" value="<?php echo $data[0]["Tour"]["tour_day"]; ?>""></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số đêm</div><input id="tournight" class="m-input" type="text" name="tour_night" onchange="onChangeInput(this.id)" value="<?php echo $data[0]["Tour"]["tour_night"]; ?>"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Phương tiện</div><input id="transport" class="m-input" name="transport" type="text" onchange="onChangeInput(this.id)" value="<?php echo $data[0]["Tour"]["transport"]; ?>""></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá đơn</div><input id="price" class="m-input" type="text" name="price_personal" onchange="onChangeInput(this.id)" value="<?php echo $data[0]["Tour"]["price_personal"]; ?>"></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá nhóm</div><input id="prices" class="m-input" type="text" name="price_group" onchange="onChangeInput(this.id)" value="<?php echo $data[0]["Tour"]["price_group"]; ?>"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Tỉnh</div><input id="places" class="m-input" type="text" onchange="onChangeInput(this.id)" name="places_name" value="<?php echo $data[0]["Place"]["places_name"]; ?>"></div>
                            <div style="margin-top: 8px">
                                <input id="files" type="file" name="image[]" multiple hidden>
                                <label class="btn-image" for="files" style="cursor: pointer;">Chọn ảnh</label>
                            </div>
                            <div class="showImage" id="showImage">
                                <?php foreach ($image as $item): ?>
                                    <img src="<?php echo $item["Places_image"]["image_path"]; ?>" width="150px" height="180px" />
<?php endforeach ?>

                            </div>
                        </div>
                        <div class="m-flex-1 detail-right">
                            <div>Mô tả chi tiết</div>
                            <textarea onchange="onChangeInput(this.id)" id="description" class="m-input__description" type="text" name="places_description"><?php echo $data[0]["Place"]["places_description"]; ?></textarea>
                            <input type="button" class="btn-save" value="Lưu" id="save" onclick="validate()">

                        </div>

                    </div>

                    <div class="modal-opacity" id="modal-opacity_v" style="display: none"></div>
                    <div class="dialog" id="dialog_v" style="display: none">
                        <div class="dialog-header m-flex m-center"><div class="icon-warning"></div><div class="warning">Warning</div></div>
                        <div class="dialog-content m-flex m-center" id="dialog-content"></div>
                        <div class="dialog-footer m-flex"><input type="button" class="btn-cancel" value="Thoát" onclick="clickCancelv()"></div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>
