<?php require_once ROOT . '/views/includes/header.php' ?>

<html>

<head>
    <link rel="stylesheet" href="http://localhost/Tourism_Management/public/css/tour_detail.css">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <script>
        function myFunction(id) {
            var x;
            x = document.images.namedItem(id).src;
            document.images.namedItem("main-image").src = x;
        }
    </script>
</head>

<body>
    <div class="main-content">
        <?php
        echo '
        <section class="blog-heading">
            <img src="' . URL . '/public/img/rong.jpg" class="image">
            <div class="blog-title">
                <h1>' . $data["tour"][0]["Tour"]["tour_name"] . '</h1>
            </div>
        </section>

        <section class="product-page">
            <div class="row">
                <div class="col1">
                    <div class="buynow-ontop">
                        <div class="left">
                            <div class="dola">
                                <div class="single">
                                    <img src="' . URL . '/public/img/dolar.png" class="logo">
                                    <div class="price">
                                        <p>ĐƠN : ' . $data["tour"][0]["Tour"]["price_personal"] . ' vnđ</p>
                                    </div>
                                </div>
                                <div class="single">
                                    <img src="' . URL . '/public/img/manydolar.png"  class="logo">
                                    <div class="price">
                                        <p>NHÓM : ' . $data["tour"][0]["Tour"]["price_group"] . ' vnđ</p>
                                    </div>
                                </div>

                            </div>

                            <div class="day">
                                <p>Thời gian: ' . $data["tour"][0]["Tour"]["tour_day"] . ' ngày, ' . $data["tour"][0]["Tour"]["tour_night"] . ' đêm</p>
                                <p>Phương tiện: ' . $data["tour"][0]["Tour"]["transport"] . '</p>
                            </div>
                        </div>
                        <a style="text-decoration=none;" href = "http://localhost/Tourism_Management/Users/book/' . $data["tour"][0]["Tour"]["tour_id"] . '">
                        <div class="right">ĐẶT NGAY</div>
                        </a>
                    </div>
                    '; ?>
        <div class="panel">
            <div class="panel-heading">
                <img class="logo" src="<?php echo URL ?>/public/img/ic_image.png">
                <div class="title">HÌNH ẢNH</div>
            </div>
            <?php
            echo '
            <div class="image-blog">
                <img src="' .  $data["image"][0]["Places_image"]["image_path"] . '" id="main-image" class="main-image">';
            ?>
            <div class="list-image">
                <?php
                $image_size = count($data["image"]);
                for ($i = 0; $i < $image_size; $i++) {
                    echo '
                    <img src="' . $data["image"][$i]["Places_image"]["image_path"] . '" onclick="myFunction(' . $i . ')" class="image" id="' . $i . '"> ';
                }
                ?>
            </div>
        </div>

        </div>

        <div class="tour-plan">
        <div class="panel-heading">
            <img class="logo" src="<?php echo URL ?>/public/img/ic_list.png">
            <div class="title">CHƯƠNG TRÌNH TOUR</div>
        </div>

        <?php
        echo '
                        <div class="panel-footer">
                            <div class="tour-detail">
                                <span>Phương tiện: ' . $data["tour"][0]["Tour"]["transport"] . '</span>
                                <span>Thời gian: ' . $data["tour"][0]["Tour"]["tour_day"] . ' ngày, ' . $data["tour"][0]["Tour"]["tour_night"] . ' đêm</span>
                            </div>
                            <div class="step-heading" style="display: none;">
                            
                            </div>
                            ' . $data["tour"][0]["Place"]["places_description"] . '
                            
                        </div>
                        '; ?>
        <div class="note">
            <div class="panel-heading">
                <img class="logo" src="<?php echo URL ?>/public/img/ic_note.png">
                <div class="title">LƯU Ý</div>
            </div>

            <div class="content">

                <p><strong>MỘT SỐ ĐIỂM CẦN LƯU Ý:</strong></p>
                <ul>
                    <li>Trước khi đăng ký tour xin Quý khách vui lòng đọc kỹ chương trình, giá tour, các khoản bao gồm và không bao gồm.</li>
                    <li>Quý khách từ 70 tuổi trở lên, Quý khách là người khuyết tật khi tham gia tour, đề nghị phải có thân nhân đi kèm và cam kết bảo đảm đủ sức khỏe để tham gia tour du lịch .</li>
                    <li>Thứ tự các điểm tham quan trong chương trình có thể thay đổi tùy tình hình thực tế nhưng vẫn bảo đảm tham quan đầy đủ như trong chương trình.</li>
                    <li>Giờ nhận phòng khách sạn: sau 14:00 giờ và trả phòng trước 12:00 giờ (trừ các trường hợp đặc biệt, Công ty sẽ thông báo trước cho Quý khách)</li>
                    <li>Trong trường hợp bất khả kháng do thời tiết, thiên tai, đình công, bạo động, phá hoại, chiến tranh, dịch bệnh, chuyến bay bị trì hoãn hay bị hủy do thời tiết hoặc do kỹ thuật…..dẫn đến tour không thể thực hiện tiếp tục được, Công ty sẽ hoàn trả lại tiền tour cho quý khách sau khi đã trừ lại các chi phí dịch vụ đã thực hiện (phí liên quan đến vé máy bay, đặt cọc dịch vụ…) Và không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác.</li>
                    <li>Theo quy định của hãng hàng không, Công ty không nhận hành khách mang thai từ 32 tuần trở lên tham gia các tour du lịch bằng đường hàng không trong nước.</li>
                </ul>
                <p>&nbsp;Lưu ý tham gia tour du lịch bằng đường hàng không:</p>
                <ul>
                    <li>Khi đăng ký tour Quý khách vui lòng cung cấp tên chính xác, đầy đủ, đúng từng ký tự trên CMND/Hộ chiếu/Giấy khai sinh. Nếu cung cấp sai Quý khách vui lòng chịu phí hoàn vé và phải mua lại vé mới theo quy định của Hãng Hàng không (nếu chuyến bay còn chỗ).</li>
                    <li>Các chuyến bay phụ thuộc vào hãng hàng không nên một số trường hợp giờ bay sẽ thay đổi mà không được báo trước.</li>
                    <li>Quý khách vui lòng tập trung tại sân bay trước 120 phút.</li>
                    <li>Sau khi làm thủ tục hàng không, nhận thẻ lên máy bay, đề nghị Quý khách giữ thẻ và lưu ý lên máy bay đúng giờ. Công ty không chịu trách nhiệm trường hợp khách làm mất thẻ lên máy bay và không lên máy bay đúng theo giờ quy định.</li>
                </ul>
                <p>** Hành lý ký gửi &amp; Lưu ý khi gửi hành lý:</p>
                <ul>
                    <li>Quý khách nên ghi tên và địa chỉ của mình vào thẻ nhận dạng hành lý.</li>
                    <li>Khi gửi hành lý lưu ý nhớ nhận cuống thẻ từ nhân viên là thủ tục.</li>
                    <li>Để đảm bảo an toàn cho hành lý ký gửi, đề nghị Qúy khách lưu ý: Không nên để những vật dụng quý như tiền, trang sức, ki loại quý, tài liệu và vật ẫu quan trọng… trong hành lý. Hành lý nên được bao gói chắc chắn và có khóa.</li>
                    <li>Không được để những vật dụng dễ vỡ như đồ sứ, hàng điện tử, chai lọ…bên trong hành lý.</li>
                    <li>Những đồ có đặc tính gây mùi khó chịu như nước mắm, trái sầu riêng…không được phép vận chuyển.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>
                </ul>
                <p>**Giấy tờ cần thiết khi đi du lịch:</p>
                <ul>
                    <li>Quý khách mang theo bản chính: Hộ chiếu/ Giấy CMND (Áp dụng hành khách từ 14 tuổi trở lên)/ Giấy phép lái xe ôtô, ôtô. Đối với Quý khách là Việt kiều, quốc tế nhập cảnh Việt Nam bằng visa rời, vui lòng mang theo visa khi đăng ký và khi đi tour.</li>
                    <li>Trẻ em dưới 14 tuổi mang theo giấy khai sinh/ hộ chiếu.</li>
                    <li>Trường hợp trẻ em dưới 1 tháng tuổi chưa có giấy khai sinh thì phải có giấy chứng sinh.</li>
                    <li>Đối với trẻ em được các tổ chức xã hội đưa về nuôi dưỡng phải có giấy xác nhận của tổ chức xã hội đó.</li>
                    <li>Trường hợp trẻ em không có cha/mẹ đi cùng, ngoài các giấy tờ theo quy định cần phải có giấy cam kết của người đại diện theo pháp luật (Giấy ủy quyền của cha mẹ đẻ và có xác nhận của cơ quan công an địa phương).</li>
                    <li>Giấy tờ của hành khách sử dụng khi đi máy bay phải đả bảo các điều kiện sau: Còn giá trị sử dụng, có ảnh đóng dấu giáp lai, trừ giấy khai sinh, giấy chứng sinh của trẻ em</li>
                </ul>
                <p>&nbsp;</p>
                <p>*Điều kiện huỷ phạt</p>
                <p><strong>ĐIỀU KIỆN HỦY TOUR DU LỊCH TRONG NƯỚC</strong></p>
                <ul>
                    <li>Chi phí chuyển/hủy tour sau khi đã cọc: 50% tiền tour</li>
                    <li>Trước 30 ngày so với ngày khởi hành tour, chi phí chuyển/hủy tour : 50% tiền tour</li>
                    <li>Từ 30 ngày - 15 ngày so với ngày khởi hành tour, chi phí chuyển/hủy tour:&nbsp; 60% tiền tour</li>
                    <li>Từ 07 - 14 ngày so với ngày khởi hành tour, chi phí chuyển/hủy tour:&nbsp; 80% tiền tour</li>
                    <li>Từ 01 - 07 ngày so với ngày khởi hành tour, chi phí chuyển/hủy tour: 100% tiền tour</li>
                </ul>
                <p>**Lưu ý khi chuyển/hủy tour</p>
                <ul>
                    <li>Thời gian hủy chuyến du lịch được tính cho ngày làm việc, không tính Thứ Bảy, Chủ Nhật &amp; các ngày Lễ, Tết</li>
                    <li>Sau khi đóng tiền, nếu Quý khách muốn chuyển/huỷ tour xin vui lòng mang Vé Tham Quan Du lịch đến văn phòng đăng ký tour để làm thủ tục chuyển/huỷ tour và đóng phí theo quy định của BenThanh Tourist. Không giải quyết các trường hợp liên hệ chuyển/huỷ tour qua điện thoại.</li>
                    <li>Trong tình hình dịch COVID 19 – Chúng tôi sẽ hỗ trợ khách hủy/dời tour không phụ thu phí với các trường hợp sau:<br>
                        o&nbsp;&nbsp; &nbsp;Khách thuộc diện bị cách ly hoặc từng đi qua vùng dịch trong khoảng thời gian mà Chính phủ thông báo (cung cấp đầy đủ giấy tờ chứng minh nơi cư trú và công văn của cơ quan chức năng có liên quan).<br>
                        o&nbsp;&nbsp; &nbsp;Trường hợp có lệnh cấm bay đến sân bay theo tour của Chính Phủ (cung cấp công văn của Chính Phủ).<br>
                        o&nbsp;&nbsp; &nbsp;Trường hợp địa phương nơi khách lưu trú có lệnh cấm di chuyển đi hoặc đến (cung cấp công văn của cơ quan có thẩm quyền).<br>
                        &nbsp;</li>
                </ul>
                <p><strong>QUY TRÌNH ĐĂNG KÝ VÀ THANH TOÁN:</strong></p>
                <p>Thanh toán bằng tiền mặt hoặc chuyển khoản.</p>
                <ul>
                    <li>Đợt 1: Đặt cọc 50% tiền tour/ khách khi đăng ký tour. Thanh toán bằng tiền mặt hoặc chuyển khoản.</li>
                    <li>Đợt 2: Thanh toán số tiền tour&nbsp; còn lại trước 07 ngày so với thời gian khởi hành.</li>
                </ul>
                <p>&nbsp;</p>
            </div>
        </div>

        </div>
        </div>
        <div class="col2">
        <div class="tour-info">
            <div class="panel-heading">
                <img src="<?php echo URL ?>/public/img/ic_info.png" class="logo">
                <div class="title">THÔNG TIN TOUR</div>
            </div>
            <div class="panel-body">
                <?php echo '
                            <div class="content">
                                <ul>
                                    <li><strong>' . $data["tour"][0]["Tour"]["tour_name"] . '</strong></li>
                                    <li><strong>Phương tiện:</strong>' . $data["tour"][0]["Tour"]["transport"] . '</li>
                                    <li><strong>Thời gian: </strong>' . $data["tour"][0]["Tour"]["tour_day"] . ' ngày, ' . $data["tour"][0]["Tour"]["tour_night"] . ' đêm</li>
                                <ul>
                            </div>' ?>
            </div>
            <div class="panel-footer"><a style="text-decoration: none; color: #fff;" href="tel:0358260822">19001123</a></div>

        </div>

        <div class="panel">
            <div class="panel-heading">
                <img src="<?php echo URL ?>/public/img/ic_link.png" class="logo">
                <div class="title">TOUR LIÊN QUAN</div>
            </div>
            <div class="panel-footer">
                <?php
                $length = count($data["other"]);

                if ($length > 4) $length = 4;

                for ($i = 0; $i < $length; $i++) {
                    echo '                
                            <div class="tour">
                                <a style="text-decoration:none;" href = "http://localhost/Tourism_Management/Pages/tour_detail/' . $data["other"][$i]["Tour"]["tour_id"] . '">
        
                                <img class="image" src="' . $data["other"][$i]["Places_image"]["image_path"] . '">
                                <div class="title">' . $data["other"][$i]["Tour"]["tour_name"] . '</div>
                                <div class="mota">
                                    <ul>
                                    <li> Thời gian: ' . $data["other"][$i]["Tour"]["tour_day"] . ' ngày, ' . $data["other"][$i]["Tour"]["tour_night"] . ' đêm </li>
                                    <li> Phương tiện: ' . $data["other"][$i]["Tour"]["transport"] . '</li>
                                    </ul>
                                </div>                         
                                </a>


                                <div class="bottom">
                                    <img src="' . URL . '/public/img/dolar.png" class="ic-money">
                                    <div class="price">' . $data["other"][$i]["Tour"]["price_personal"] . ' vnđ</div>
                                    <a style="text-decoration:none;" href = "http://localhost/Tourism_Management/Users/book/' . $data["other"][$i]["Tour"]["tour_id"] . '">
                                        <div class="button">ĐẶT NGAY</div>
                                    </a>
                                </div>
                            </div>
                        ';
                }
                ?>

            </div>
        </div>
        </div>
        </div>

        </section>

    </div>
</body>

</html>


<?php require_once ROOT . '/views/includes/footer.php' ?>