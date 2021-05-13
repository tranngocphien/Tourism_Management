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

                <div class="title">Danh sách các tour</div>
                <div class="content_main">
                    <div class="grid"> 
                        <table>
                            <tr>
                                <th>Tên tour</th>
                                <th>Địa điểm</th>
                                <th>Giá đơn</th>
                                <th>Giá nhóm</th>
                                <th>Phương tiện</th>

                            </tr>
                            <?php foreach ($data as $user): ?>
                                <tr>
                                    <td><?php echo $user["Tour"]["tour_name"] ?></td>
                                    <td><?php echo $user["Place"]["places_name"] ?></td>
                                    <td><?php echo $user["Tour"]["price_personal"] ?></td>
                                    <td><?php echo $user["Tour"]["price_group"] ?></td>
                                    <td><?php echo $user["Tour"]["transport"] ?></td>

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

            </div>

        </div>

    </body>
</html>