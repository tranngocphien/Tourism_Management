<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/style.css">

        <script type="text/javascript">
            function clickDelete() {
                var checkbox = document.getElementById("delete");
                var notice = document.getElementById("notice_delete");
                if (checkbox.checked == true) {
                    notice.style.display = "block";
                } else {
                    notice.style.display = "none";
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
                <div class="menu_item"><div class="menu_icon user_icon"></div><a href="<?php echo URL; ?>/admins/users">User</a></div>
                <div class="menu_item"><div class="menu_icon tour_icon"></div><a href="<?php echo URL; ?>/admins/tours">Tour</a></div>
                <div class="menu_item"><div class="menu_icon booking-icon"></div><a href="<?php echo URL; ?>/admins/bookings">Booking</a></div>
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
                            <input class="btn-delete" type="submit" value="Xóa"><div class="btn-add"><a href="<?php echo URL; ?>/admins/tournew">Thêm tour</a></div>
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
                                        <td><input id="delete" onclick="clickDelete()" type="checkbox" name="delete[]" value="<?php echo $user["Tour"]["tour_id"] ?>"></td>

                                    </tr>
                                <?php endforeach ?>
                                <tr>
                                    <td>tranngocphien</td>
                                    <td>tranngocphien</td>
                                    <td>tranngocphien</td>
                                    <td>tranngocphien</td>
                                    <td>tranngocphien</td>
                                </tr>

                            </table></div>

                    </div>
                </form>
            </div>

        </div>

    </body>
</html>