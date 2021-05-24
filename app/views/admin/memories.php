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
                                    img.style.padding = "8px";
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
                <form action="<?php echo URL; ?>/admins/memories" method="post" enctype="multipart/form-data">
                    <div style="margin-top: 8px; display: flex" >
                        <input id="files" type="file" name="image[]" multiple hidden>
                        <label class="btn-image"  for="files" style="cursor: pointer; margin: 8px">Chọn ảnh</label>

                        <input name="submit" type="submit" style="height: 40px; margin: 8px" class="btn-image">
                    </div>
                    <div class="showImage" id="showImage">
                        <?php foreach ($data as $item): ?>
                            <img src="<?php echo $item["Memorie"]["image"]; ?>" width="150px" height="180px"  style="padding: 8px" />
                        <?php endforeach ?>

                    </div>
                </form>

            </div>

        </div>

    </body>
</html>