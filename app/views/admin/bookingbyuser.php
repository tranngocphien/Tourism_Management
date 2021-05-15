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
            <div>Tourism Management</div>
        </div>
        <div class="content">
            <div class="content_left">
                <div class="menu_item"><div class="menu_icon user_icon"></div><a href="<?php echo URL; ?>/admins/users">User</a></div>
                <div class="menu_item"><div class="menu_icon tour_icon"></div><a href="<?php echo URL; ?>/admins/tours">Tour</a></div>
                <div class="menu_item"><div class="menu_icon booking-icon"></div><a href="<?php echo URL; ?>/admins/bookings">Booking</a></div>
            </div>
            <div class="content_right">

                <div class="title">Danh sách đặt vé của <?php echo $data[0]["User"]["username"] ?> </div>
                <form action="<?php echo URL ?>/admins/bookings" method="post">
                    <div class="content_main">
                        <div>
                            <input type="text" name="key" class="m-search">
                            <select class="select-search" name="search_title">
                                <option value="tour_name">Tên tour</option>
                                <option value="username">Username</option>
                                <option value="status">Trạng thái</option>
                                <option value="date_start">Ngày</option>
                                <option value="number_ticket">Số vé</option>
                            </select>
                            <input type="submit" class="btn-search" value="Search" name="search">                            <input class="btn-save" type="submit" value="Lưu" name="save">
                        </div>
                        <div class="grid"> 
                            <table>
                                <tr>
                                    <th>Tên tour</th>
                                    <th>Số lượng</th>
                                    <th>Ngày khởi hành</th>
                                    <th>Trạng thái</th>
                                    <th>Xác nhận</th>
                                    <th>Hủy</th>
                                </tr>
                                <?php foreach ($data as $user): ?>
                                    <tr>
                                        <td><?php echo $user["Tour"]["tour_name"] ?></td>
                                        <td><?php echo $user["Booking"]["number_ticket"] ?></td>
                                        <td><?php echo $user["Booking"]["date_start"] ?></td>
                                        <td><?php echo $user["Booking"]["status"] ?></td>
                                        <td><input type="checkbox" name="confirm[]" value="<?php echo $user["Booking"]["booking_id"] ?>"></td>
                                        <td><input type="checkbox" name="notconfirm[]" value="<?php echo $user["Booking"]["booking_id"] ?>"></td>

                                    </tr>
                                <?php endforeach ?>

                            </table></div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>