<?php require_once ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/dialog.css">


<style>
    .input_uname {
        height: 40px;
        width: calc(100% - 200px);
        border: none;
        border-radius: 6px;
        box-shadow: 1px 1px 5px 0 #999;
    }

    .input_upass {
        height: 40px;
        width: calc(100% - 200px);
        border: none;
        border-radius: 6px;
        box-shadow: 1px 1px 5px 0 #999;
    }

    .input_ufullname {
        height: 40px;
        width: calc(100% - 200px);
        border: none;
        border-radius: 6px;
        box-shadow: 1px 1px 5px 0 #999;
    }

    .input_uemail {
        height: 40px;
        width: calc(100% - 200px);
        border: none;
        border-radius: 6px;
        box-shadow: 1px 1px 5px 0 #999;
    }

    .input_utel {
        height: 40px;
        width: calc(100% - 200px);
        border: none;
        border-radius: 6px;
        box-shadow: 1px 1px 5px 0 #999;
    }

    .mlabel {
        width: 200px;
        font-size: 18px;

    }

    .m-flex {
        display: flex;
    }

    .m-center {
        align-items: center;
    }

    .mitem {
        margin-top: 1.5em;

    }

    .button {
        width: 38%;
        height: 2.5em;
        background-color: darkgreen;
        color: #fff;
        font-size: 18px;
        border: none;
        border-radius: 6px;
        box-shadow: 1px 1px 5px 0 #999;
        margin-left: 38%;
        margin-top: 2.5em;
    }
    
    input {
        padding-left: 8px;
    }
</style>


<script type="text/javascript">

    function clickCancel() {
        var dialog = document.getElementById("dialog");
        var modal = document.getElementById("modal-opacity");
        modal.style.display = "none";
        dialog.style.display = "none";
    }


    function validate() {
        var passnew = document.getElementById("pass_new").value;
        var passcf = document.getElementById("pass_cf").value;

        var checked = 0;

        if (passnew == "") {
            checked = 1;
            var notice = document.getElementById("n-pass");
            notice.style.display = "block";
        }

        if (passcf == "") {
            checked = 1;
            var notice = document.getElementById("n-passcf");
            notice.style.display = "block";
        }

        if (passnew != passcf) {
            checked = 1;
            var notice = document.getElementById("n-passcf2");
            notice.style.display = "block";
        }

        if (checked == 1) {
            var dialog = document.getElementById("dialog");
            var modal = document.getElementById("modal-opacity");
            modal.style.display = "block";
            dialog.style.display = "block";
            return false;
        } else {
            document.getElementById("form_changepass").submit();
            return true;
        }


    }

</script>

<body>

    <h1>ĐỔI MẬT KHẨU</h1>

    <form id="form_changepass" method="POST" action="<?php echo URL; ?>/users/changepass">

        <div style="margin: 0 auto; width: 50%">
            <div class="m-flex m-center mitem">
                <div class="mlabel">User name </div><input class="m-input input_uname" type="text" value="<?php echo $data[0]["User"]["username"]; ?>" readonly>
            </div>

            <p id="n-pass_old" style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <div class="m-flex m-center mitem">
                <div class="mlabel">Password hiện tại</div>
                <input name="password_old" id="pass_old" class="m-input input_ufullname" type="password" value="<?php echo $data[0]["User"]["password"]; ?>">
            </div>

            <p id="n-pass" style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <div class="m-flex m-center mitem">
                <div class="mlabel">Password mới</div>
                <input name="password_new" id="pass_new" class="m-input input_ufullname" type="password">
            </div>

            <p id="n-passcf" style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <p id="n-passcf2" style="color: red; margin-left: 13em; display: none;"> *Nhập lại mật khẩu không đúng </p>
            <div class="m-flex m-center mitem">
                <div class="mlabel">Nhập lại password</div>
                <input id="pass_cf" class="m-input input_ufullname" type="password">
            </div>





        </div>
        <input onclick="validate()" class="button" type="button" value="ĐỔI MẬT KHẨU">

    </form>

    <div class="modal-opacity" id="modal-opacity" style="display: none"></div>
    <div class="dialog" id="dialog" style="display: none">
        <div class="dialog-header m-flex m-center"><div class="icon-warning"></div><div class="warning">Warning</div></div>
        <div class="dialog-content m-flex m-center">Dữ liệu không hợp lệ</div>
        <div class="dialog-footer m-flex"><input type="button" class="btn-cancel" value="Thoát" onclick="clickCancel()"></div>

    </div>


</body>
<?php require_once ROOT . '/views/includes/footer.php' ?>