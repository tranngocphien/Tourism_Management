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
                <?php $image = $data["image"]; $data = $data["info"] ?>

                <div class="title">Chi tiết tour</div>
                <form action="<?php echo URL; ?>/admins/tourdetail/<?php echo $data[0]["Tour"]["tour_id"]; ?>/<?php echo $data[0]["Place"]["places_id"]; ?>" method="post" enctype="multipart/form-data">
                    <div class="content_main m-flex">
                        <div class="m-flex-1 detail-left">
                            <div class="m-flex m-center"><div class="label">Tên tour</div><input class="m-input" type="text" name="tour_name" value="<?php echo $data[0]["Tour"]["tour_name"]; ?>"></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số ngày</div><input class="m-input" type="text" name="tour_day" value="<?php echo $data[0]["Tour"]["tour_day"]; ?>""></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số đêm</div><input class="m-input" type="text" name="tour_night" value="<?php echo $data[0]["Tour"]["tour_night"]; ?>"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Phương tiện</div><input class="m-input" name="transport" type="text" value="<?php echo $data[0]["Tour"]["transport"]; ?>""></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá đơn</div><input class="m-input" type="text" name="price_personal" value="<?php echo $data[0]["Tour"]["price_personal"]; ?>"></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá nhóm</div><input class="m-input" type="text" name="price_group" value="<?php echo $data[0]["Tour"]["price_group"]; ?>"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Tỉnh</div><input class="m-input" type="text" name="places_name" value="<?php echo $data[0]["Place"]["places_name"]; ?>"></div>
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
                            <textarea class="m-input__description" type="text" name="places_description"><?php echo $data[0]["Place"]["places_description"]; ?></textarea>
                            <input type="submit" class="btn-save" value="Lưu">

                        </div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>
<?php $data[0]["Tour"]["tour_name"]; ?>
