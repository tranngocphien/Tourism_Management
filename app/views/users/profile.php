<?php require_once ROOT . '/views/includes/header.php'; ?>

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
</style>


<script type="text/javascript">

    function validate(){
        var fullname = document.getElementById("fullname");
        var email = document.getElementById("email");
        var phone = document.getElementById("phone");
        var address = document.getElementById("address");

        var checked = 0;

        if(fullname.value == ''){
            checked = 1;
            document.getElementById("n-name").style.display = "block";
            fullname.style.borderColor = "red";
        }
        if(email.value == ''){
            checked = 1;
            document.getElementById("n-mail").style.display = "block";
            email.style.borderColor = "red";
        }
        if(phone.value == ''){
            checked = 1;
            document.getElementById("n-phone").style.display = "block";
            phone.style.borderColor = "red";
        }
        if(address.value == ''){
            checked = 1;
            document.getElementById("n-add").style.display = "block";
            address.style.borderColor = "red";
        }

        if(checked == 0) {
            document.getElementById("update").submit();
        }
    }

</script>

<body>

    <h1>THÔNG TIN TÀI KHOẢN</h1>

    <form id="update" action="http://localhost/Tourism_Management/Users/updateAccount" method="POST">

        <div style="margin: 0 auto; width: 50%">
            <div class="m-flex m-center mitem">
                <div class="mlabel">User name </div><input class="m-input input_uname" type="text" value="<?php echo $data[0]["User"]["username"]; ?>" readonly>
            </div>

            <p id="n-name" style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <div class="m-flex m-center mitem">
                <div class="mlabel">Họ và Tên</div>
                <input id="fullname" name="fullname-update" class="m-input input_ufullname" type="text" value="<?php echo $data[0]["User"]["fullname"]; ?>">

            </div>

            <p id="n-mail" style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <div class="m-flex m-center mitem">
                <div class="mlabel">Email</div> 
                <input id="email" name="email-update" class="m-input input_uemail" type="text" value="<?php echo $data[0]["User"]["email"]; ?>">
            </div>

            <p style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <div id="n-phone" class="m-flex m-center mitem">
                <div class="mlabel">Số điện thoại</div> 
                <input id="phone" name="phone-update" class="m-input input_utel" type="text" value="<?php echo $data[0]["User"]["tel"]; ?>">
            </div>

            <p id="n-add" style="color: red; margin-left: 13em; display: none;"> *Không được để trống </p>
            <div class="m-flex m-center mitem">
                <div class="mlabel">Địa chỉ</div> 
                <input id="address" name="address-update" class="m-input input_utel" type="text" value="<?php echo $data[0]["User"]["address"]; ?>">
            </div>
        </div>
       
        
    </form>

    <button onclick="validate()" class="button">CẬP NHẬT THÔNG TIN</button>


</body>
<?php require_once ROOT . '/views/includes/footer.php' ?>