<?php require_once ROOT . '/views/includes/header.php' ?>
<link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/images.css">
<div class="img-container">
    <div class="row-header"><h1>KHOẢNH KHẮC LỮ HÀNH</h1></div>
    <div class="row-content">
        <?php 
            for ($i = 0; $i < count($data); $i++){ 
                echo '
                <img src="' . $data[$i]["Memorie"]["image"] . '" class="img">';
            }
        ?>

    </div>
</div>

<?php require_once ROOT . '/views/includes/footer.php' ?>