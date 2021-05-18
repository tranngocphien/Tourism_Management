<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/style.css">

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

            function onType() {
                var btn = document.getElementById("save");
                var text = document.getElementById("tourname").value;
                if (text == "") {
                    btn.style.display = "none";
                } else {
                    btn.style.display = "block";
                }
            }

            function validate() {
                var btn = document.getElementById("save");
                var tourname = document.getElementById('tourname').value;
                var tourday = document.getElementById('tourday').value;
                var tournight = document.getElementById('tournight').value;
                var price = document.getElementById('price').value;
                var prices = document.getElementById('prices').value;
                var transport = document.getElementById('transport').value;
                var places = document.getElementById('places').value;
                var description = document.getElementById('description').value;

                var notification = "";
                if (tourname == '') {
                    notification += "Không được phép để trống Tourname\n";
                }
                if (tourday == '') {
                    notification += "Không được phép để trống số ngày\n"
                }

                if (tournight == '') {
                    notification += "Không được phép để trống số đêm\n"
                }

                if (price == '') {
                    notification += "Không được phép để trống giá đơn\n"
                }
                if (prices == '') {
                    notification += "Không được phép để trống giá nhóm\n"
                }
                if (transport == '') {
                    notification += "Không được phép để trống phương tiện\n"
                }
                if (places == '') {
                    notification += "Không được phép để trống tỉnh\n"
                }
                if (description == '') {
                    notification += "Không được phép để trống mô tả\n"
                }

                if (notification == "") {
                    btn.style.display = "block";
                    return true;
                } else {
                    alert(notification);
                    return false;
                }

            }



        </script>

    </head>
    <body>
        <div class="header">
            <div class="header-logo"></div>
            <div>Tourism Management</div>
        </div>
        <div class="content">
            <div class="content_left">
                <div class="menu_item"><div class="menu_icon user_icon"></div><a href="<?php echo URL; ?>/admins/users">Người dùng</a></div>
                <div class="menu_item"><div class="menu_icon tour_icon"></div><a href="<?php echo URL; ?>/admins/tours">Tour</a></div>
                <div class="menu_item"><div class="menu_icon booking-icon"></div><a href="<?php echo URL; ?>/admins/bookings">Đặt vé</a></div>
                <div class="menu_item"><div class="menu_icon booking-icon"></div><a href="<?php echo URL; ?>/admins/statistic">Thống kê</a></div>
            </div>
            <div class="content_right">

                <div class="title">Thêm tour</div>
                <form action="<?php echo URL; ?>/admins/tournew" method="post" enctype="multipart/form-data">
                    <div class="content_main m-flex">
                        <div class="m-flex-1 detail-left">
                            <div style="color: red"><?php echo $data["error"]; ?></div>
                            <div class="m-flex m-center"><div class="label">Tên tour</div><input id="tourname" class="m-input" type="text" name="tour_name"></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số ngày</div><input id="tourday" class="m-input" type="text" name="tour_day"></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số đêm</div><input id="tournight" class="m-input" type="text" name="tour_night"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Phương tiện</div><input id="transport" class="m-input" type="text" name="transport"></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá đơn</div><input id="price" class="m-input" type="text" name="price_personal"></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá nhóm</div><input id="prices" class="m-input" type="text" name="price_group"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Tỉnh</div><input id="places" class="m-input" type="text" name="places_name"></div>
                            <div style="margin-top: 8px">
                                <input id="files" type="file" name="image[]" multiple hidden>
                                <label class="btn-image" for="files" style="cursor: pointer;">Chọn ảnh</label>
                            </div>
                            <div class="showImage" id="showImage">

                            </div>
                        </div>
                        <div class="m-flex-1 detail-right">
                            <div>Mô tả chi tiết</div>
                            <textarea id="description" class="m-input__description"type="text" name="places_description"></textarea>
                            <input type="button" class="btn-add" value="Check" onclick="validate()"><input type="submit" name="submit" class="btn-save" value="Lưu" id="save" style="display: none" >
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>
