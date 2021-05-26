<?php require_once ROOT . '/views/includes/header.php'; ?>

<style>
    .input_uname{
        height: 40px;
        width: calc(100% - 200px);
    }
    .input_upass{
        height: 40px;
        width:  calc(100% - 200px);
    }
    .input_ufullname{
        height: 40px;
        width : calc(100% - 200px);
    }
    .input_uemail{
        height: 40px;
        width: calc(100% - 200px);
    }
    .input_utel{
        height: 40px;
        width : calc(100% - 200px);
    }
    .mlabel {
        width: 200px;

    }

    .m-flex{
        display: flex;
    }
    .m-center{
        align-items: center;
    }
    .mitem{
        margin-top: 8px;
 
    }

</style>
<body>
    <div style="margin: 0 auto; width: 50%">
        <div class="m-flex m-center mitem"> <div class="mlabel">User name </div><input class="m-input input_uname" type="text" value="<?php echo $data[0]["User"]["username"]; ?>"></div>
        <div class="m-flex m-center mitem"> <div class="mlabel">Password</div> <input class="m-input input_upass" type="password" value="<?php echo $data[0]["User"]["password"]; ?>"></div>
        <div class="m-flex m-center mitem"> <div class="mlabel">Họ và Tên</div> <input class="m-input input_ufullname" type="text" value="<?php echo $data[0]["User"]["fullname"]; ?>"></div>
        <div class="m-flex m-center mitem"> <div class="mlabel">Email</div> <input class="m-input input_uemail" type="text" value="<?php echo $data[0]["User"]["email"]; ?>"></div>
        <div class="m-flex m-center mitem"> <div class="mlabel">Số điện thoại</div> <input class="m-input input_utel" type="text" value="<?php echo $data[0]["User"]["tel"]; ?>"></div>
        <div class="m-flex m-center mitem"> <div class="mlabel">Địa chỉ</div> <input class="m-input input_utel" type="text" value="<?php echo $data[0]["User"]["address"]; ?>"></div>
    </div>
</body>
<?php require_once ROOT . '/views/includes/footer.php' ?>
