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

                <div class="title">Thống kê</div>
                <div class="content_main m-flex statistic">
                    <div class="m-flex-1 statistic-left">
                        <div class="grid" style="height: 100%; overflow-y: scroll">
                            <table>
                                <tr>
                                    <th>Tên tour</th>
                                    <th>Số vé</th>
                                    <th>Doanh thu</th>
                                </tr>
                                <?php
                                $tbdata = $data["tourinfo"];
                                ?>
                                <?php foreach ($tbdata as $item): ?>
                                    <tr>
                                        <td><?php echo $item["Tour"]["tour_name"] ?></td>
                                        <td><?php echo $item[""]["numberticket"] ?></td>
                                        <td><?php echo $item[""]["money"] ?></td>
                                    </tr>
                                <?php endforeach ?>

                            </table>
                        </div>
                    </div>
                    <div class="m-flex-1 statistic-right">
                        <div class="m-flex statistic_row">
                            <div class="m-flex-1 statistic_item">
                                <div class="item-title">User</div>
                                <div class="m-flex m-center"><div class="item-value"><b> <?php echo $data["number_user"]; ?> người sử dụng</b></div></div>

                            </div>
                            <div class="m-flex-1 statistic_item">
                                <div class="item-title">Tour</div>
                                <div class="m-flex m-center"><div class="item-value"><b><?php echo $data["number_tour"]; ?> Tour du lịch</b></div></div>

                            </div>
                        </div>
                        <div class="m-flex statistic_row">
                            <div class="m-flex-1 statistic_item">
                                <div class="item-title">Đặt vé</div>
                                <div class="m-flex m-center"><div class="item-value"><b><?php echo $data["number_ticket"]; ?> lượt đặt vé</b></div></div>

                            </div>
                            <div class="m-flex-1 statistic_item">
                                <div class="item-title">Doanh thu</div>
                                <div class="m-flex m-center"><div class="item-value"><b><?php echo $data["revenue"]; ?> đồng</b></div></div>
                            </div>
                        </div>             
                    </div>  

                </div>

            </div>

        </div>

    </body>
</html>