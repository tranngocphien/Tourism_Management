<!DOCTYPE html>
<html>
    <head>
        <title>TENGTENG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/style.css">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/dialog.css">

        <script type="text/javascript">
            function clickDelete() {
                var dialog = document.getElementById("dialog");
                var modal = document.getElementById("modal-opacity");
                modal.style.display = "block";
                dialog.style.display = "block";

            }

            function clickCancel() {
                var dialog = document.getElementById("dialog");
                var modal = document.getElementById("modal-opacity");
                modal.style.display = "none";
                dialog.style.display = "none";
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

                <div class="title">Danh sách các tour</div>
                <form action="<?php echo URL; ?>/admins/tours" method="post">
                    <div class="content_main">
                        <div id="notice_delete" style="display: none; color: #f40a0a; margin-left: 8px;">Xóa tour sẽ xóa cả thông tin đã đặt đối với tour đó.</div>
                        <div>
                            <input type="text" name="key" class="m-search">
                            <select class="select-search" name="search_title">
                                <option value="tour_name">Tên tour</option>
                                <option value="places_name">Địa điểm</option>
                                <option value="transport">Phương tiện</option>
                                <option value="price_personal">Giá đơn</option>
                                <option value="price_group">Giá nhóm</option>
                            </select>
                            <input type="submit" class="btn-search" value="Search" name="search"> 
                            <input class="btn-delete" type="button" value="Xóa" onclick="clickDelete()"><div class="btn-add"><a href="<?php echo URL; ?>/admins/tournew">Thêm tour</a></div>
                        </div>
                        <div class="grid"> 
                            <table>
                                <tr>
                                    <th>Tên tour</th>
                                    <th>Địa điểm</th>
                                    <th>Giá đơn</th>
                                    <th>Giá nhóm</th>
                                    <th>Phương tiện</th>
                                    <th>Xem</th>
                                    <th>Xóa</th>

                                </tr>
                                <?php foreach ($data as $user): ?>
                                    <tr>
                                        <td><?php echo $user["Tour"]["tour_name"] ?></td>
                                        <td><?php echo $user["Place"]["places_name"] ?></td>
                                        <td><?php echo $user["Tour"]["price_personal"] ?></td>
                                        <td><?php echo $user["Tour"]["price_group"] ?></td>
                                        <td><?php echo $user["Tour"]["transport"] ?></td>
                                        <td><a href="<?php echo URL; ?>/admins/tourdetail/<?php echo $user["Tour"]['tour_id'] ?>/<?php echo $user["Place"]['places_id'] ?>">Xem</a></td>
                                        <td><input id="delete" type="checkbox" name="delete[]" value="<?php echo $user["Tour"]["tour_id"] ?>"></td>

                                    </tr>
                                <?php endforeach ?>

                            </table></div>
                        <div class="modal-opacity" id="modal-opacity" style="display: none"></div>
                        <div class="dialog" id="dialog" style="display: none">
                            <div class="dialog-header m-flex m-center"><div class="icon-warning"></div><div class="warning">Warning</div></div>
                            <div class="dialog-content m-flex m-center">Xóa tour sẽ xóa thông tin về các vé đã đặt</div>
                            <div class="dialog-footer m-flex"><input type="button" class="btn-cancel" value="Thoát" onclick="clickCancel()"><input name="submit_delete" class="btn-del" type="submit" value="Xóa"></div>

                        </div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>