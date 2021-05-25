<!DOCTYPE html>
<html>
    <head>
        <title>TENGTENG</title>
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

                <div class="title">Danh sách người dùng</div>
                <div class="content_main">
                    <form method="post" action="<?php echo URL; ?>/admins/users">
                        <input type="text" name="key" class="m-search">
                        <select class="select-search" name="search_title">
                            <option value="username">Username</option>
                            <option value="email">Email</option>
                            <option value="tel">Số điện thoại</option>
                            <option value="fullname">Họ và tên</option>

                        </select>
                        <input type="submit" class="btn-search" value="Search" name="search">
                    </form>
                    <div>
                    </div>
                    <div class="grid"> 
                        <table>
                            <tr>
                                <th>Username</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th></th>
                            </tr>
                            <?php foreach ($data as $user): ?>
                                <tr>
                                    <td><?php echo $user["User"]["username"] ?></td>
                                    <td><?php echo $user["User"]["fullname"] ?></td>
                                    <td><?php echo $user["User"]["email"] ?></td>
                                    <td><?php echo $user["User"]["tel"] ?></td>
                                    <td><a href="<?php echo URL; ?>/admins/bookingbyuser/<?php echo $user["User"]['user_id'] ?>">Xem</a></td>

                                </tr>
                            <?php endforeach ?>


                        </table></div>

                </div>

            </div>

        </div>

    </body>
</html>