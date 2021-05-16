<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/style.css">

    </head>
    <body>
        <div class="header">
            <div class="header-logo"></div>
            <div>Tourism Management</div>
        </div>
        <div class="content">
            <div class="content_left">
                <div class="menu_item"><div class="menu_icon user_icon"></div><a href="<?php echo URL; ?>/admins/users">User</a></div>
                <div class="menu_item"><div class="menu_icon tour_icon"></div><a href="<?php echo URL; ?>/admins/tours">Tour</a></div>
                <div class="menu_item"><div class="menu_icon booking-icon"></div><a href="<?php echo URL; ?>/admins/bookings">Booking</a></div>
            </div>
            <div class="content_right">

                <div class="title">Thêm tour</div>
                <form action="<?php echo URL; ?>/admins/tournew" method="post">
                    <div class="content_main m-flex">
                        <div class="m-flex-1 detail-left">
                            <div class="m-flex m-center"><div class="label">Tên tour</div><input class="m-input" type="text" name="tour_name"></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số ngày</div><input class="m-input" type="text" name="tour_day"></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Số đêm</div><input class="m-input" type="text" name="tour_night"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Phương tiện</div><input class="m-input" type="text" name="transport"></div>
                            <div class="m-flex m-center">
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá đơn</div><input class="m-input" type="text" name="price_personal"></div>
                                <div class="m-flex-1 m-flex m-center"><div class="label">Giá nhóm</div><input class="m-input" type="text" name="price_group"></div>

                            </div>
                            <div class="m-flex m-center"><div class="label">Tỉnh</div><input class="m-input" type="text" name="places_name"></div>
                            <div><input class="" type="file" name="image[]" multiple></div>
                        </div>
                        <div class="m-flex-1 detail-right">
                            <div>Mô tả chi tiết</div>
                            <textarea class="m-input__description"type="text" name="places_description"></textarea>
                            <input type="submit" class="btn-save" value="Lưu">
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>
