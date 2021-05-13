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
                <div class="menu_item">User</div>
                <div class="menu_item">Tour</div>
                <div class="menu_item">Booking</div>
            </div>
            <div class="content_right">

                <div class="title">Danh sách người dùng</div>
                <div class="content_main">
                    <div class="grid"> 
                        <table>
                            <tr>
                                <th>Username</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                            </tr>
                            <?php foreach ($data as $user): ?>
                                <tr>
                                    <td><?php echo $user["User"]["username"] ?></td>
                                    <td><?php echo $user["User"]["fullname"] ?></td>
                                    <td><?php echo $user["User"]["email"] ?></td>
                                    <td><?php echo $user["User"]["tel"] ?></td>
                                </tr>
                            <?php endforeach ?>
                            <tr>
                                <td>tranngocphien</td>
                                <td>tranngocphien</td>
                                <td>tranngocphien</td>
                                <td>tranngocphien</td>
                            </tr>

                        </table></div>

                </div>

            </div>

        </div>

    </body>
</html>