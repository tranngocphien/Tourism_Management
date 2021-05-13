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

                <div class="title">Danh sách đặt vé</div>
                <div class="content_main">
                    <div class="grid"> 
                        <table>
                            <tr>
                                <th>Tên tour</th>
                                <th>Người dùng</th>
                                <th>Số lượng</th>
                                <th>Trạng thái</th>
                            </tr>
                            <?php foreach ($data as $user): ?>
                                <tr>
                                    <td><?php echo $user["Tour"]["tour_name"] ?></td>
                                    <td><?php echo $user["User"]["username"] ?></td>
                                    <td><?php echo $user["Booking"]["number_ticket"] ?></td>
                                    <td><?php echo $user["Booking"]["status"] ?></td>

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