<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
        <link rel="shortcut icon" href="https://symbols.vn/wp-content/uploads/2021/11/Mau-bieu-tuong-ngoi-nha-Png.jpg" type="image/x-icon">
        <title>DHOME | Thiết Kế Nội Thất Việt Nam</title>
    </head>

    <body>
        <div class="main">
            <div class="header">
                <div class="nav-logo">
                    <h1 class="nav-logo-text"><a href="">DHOME</a></h1>
                </div>

                <ul class="nav">
                    <li><a href="index.php?task=pageHome" hre>Trang chủ</a></li>
                    <li><a href="#intro">Giới thiệu</a></li>
                    <li>
                        <a href="#form">Các mẫu decor</a>
                        <ul class="subnav">
                            <li><a href="index.php?task=pagephongkhach">Phòng khách</a></li>
                            <li><a href="index.php?task=pagephonglamviec">Phòng làm việc</a></li>
                            <li><a href="index.php?task=pagephongngu">Phòng ngủ</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Liên hệ</a></li>
                </ul>

                <form action="" method="post" class="search-form">
                    <div class="search-btn-box">
                        <button name="search" class="search-btn"><i class="search-icon ti-search"></i></button>
                    </div>

                    <div class="search-input-box">
                        <input name="searchSP" type="search" class="search-input" placeholder="Tìm kiếm">
                    </div>
                </form>

                <div class="search-box">
                    <div class="line"></div>

                    <div class="user-icon-box">
                        <a class="user-icon"><i class="ti-user"></i></a>
                       
                        <ul class="user-subnav">
                            <li><a href="index.php?task=pageLogin">Đăng nhập</a></li>
                            <li><a href="index.php?task=pageSign-in">Đăng kí</a></li>
                        </ul>
                    </div>

                    <div class="line"></div>
                </div>   

            </div>

            <div class="slider">
                <div class="text-content">
                    <h2 class="text-heading">DHOME</h2>
                    <div class="text-description">THIẾT KẾ NỘI THẤT</div>
                </div>
            </div>

            <div class="content">
                <div id="intro" class="content-section">
                    <h2 class="section-heading">Giới Thiệu</h2>
                    <div class="section-main">
                        <p class="section-text">“Decor” là một thuật ngữ được sử dụng trong nhiều ngành nghề khác nhau. Phổ biến nhất là trong ngành trang trí nội thất, nghĩa gốc của từ “Decor” là “trang trí”, bắt nguồn từ “Decorate” trong tiếng Anh.</p>
                        <p class="section-text">Mục đích của Decor chính là mang lại sự mới mẻ, độc đáo, tránh sự nhàm chán trong thiết kế. Bên cạnh việc lựa chọn, kết hợp các vật dụng nội thất sao cho hài hòa về màu sắc, kích thước, bạn còn phải đảm bảo công năng sử dụng trong cuộc sống hằng ngày.</p>
                        <p class="section-text">Decor là thuật ngữ chuyên ngành, được sử dụng trong nhiều lĩnh vực khác nhau. Trong đó, phổ biến nhất vẫn là lĩnh vực thiết kế nội thất.</p>
                        <p class="section-text">Việc decor chưa bao giờ là đơn giản. Bạn phải biết cách kết hợp giữa màu sắc, chất liệu, hình khối, kích thước…một cách nhuần nhuyễn. Để tìm được đáp án cụ thể cho câu hỏi “Decor là gì?” thì mời bạn xem tiếp dưới đây.</p>
                        <p class="section-text"> Decor được bắt nguồn từ trường phái nghệ thuật, trang trí mang tên Art Deco. Đây là trường phái được biết đến từ những năm 1986. Art Deco hướng đến những hình ảnh đơn giản, những khối hình kinh điển trong không gian. Dần dà, decor trở nên phổ biến và được mọi người đón nhận.</p>
                        <p class="section-text">Decor bắt nguồn từ “decorate” trong tiếng Ahnh. Khi dịch sang tiếng Việt có nghĩa là trang trí. Như vậy, decor là việc trang trí sao cho nhìn đẹp mắt hơn, nghệ thuật hơn và để lại ấn tượng tốt cho người nhìn. Decor nói chung và decor nội thất nói riêng giúp nâng tầm giá trị của sản phẩm.</p>
                    </div>
                </div>

                <div id="form" class="content-img">
                    <h2 class="section-heading">Các mẫu decor</h2>
                    <div class="decor-list"><?php
                        require_once "./controller/control.php";
                        $control = new Controller();
                        $result = $control->getallSP();
                        if(isset($_POST['search'])) $result = $control->searchsp();
                        while ($row = mysqli_fetch_assoc($result)) { 
                            
                            if(preg_match('/pk/',$row['maSP'],$r)){
                                $msp = 'phongkhach';
                            }elseif(preg_match('/plv/',$row['maSP'],$r)){
                                $msp = 'phonglamviec';
                            }elseif(preg_match('/pn/',$row['maSP'],$r)){
                                $msp = 'phongngu';
                            }else $msp = null;
                            ?>                
                    <?php echo '<div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/'.$msp.'/'.$row['image'].'" alt="ảnh sản phẩm" class="decor-img">
                        </div>
                        
                        <p class="decor-btn">Giá tiền: '.$row['giaSP'].' VNĐ</p>
                        </div>'
                        ?>
                   

                    <!-- <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh2.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 120.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh3.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 140.000.000 đ</p>
                    </div>
                    
                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh4.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 160.000.000 đ</p>
                    </div>
                    
                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh5.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 180.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh6.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 200.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh10.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 220.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh11.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 240.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongkhach/anh12.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 260.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh1.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 100.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh2.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 120.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh3.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 140.000.000 đ</p>
                    </div>
                    
                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh5.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 160.000.000 đ</p>
                    </div>
                    
                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh4.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 180.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh6.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 200.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh7.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 220.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh8.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 240.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phonglamviec/anh9.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 260.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh1.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 100.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh2.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 120.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh3.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 140.000.000 đ</p>
                    </div>
                    
                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh4.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 160.000.000 đ</p>
                    </div>
                    
                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh5.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 180.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh6.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 200.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh7.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 220.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh8.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 240.000.000 đ</p>
                    </div>

                    <div class="decor-item">
                        <div href="" class="decor-link">
                            <img src="./assets/img/decor/phongngu/anh9.jpg" alt="" class="decor-img">
                            <a href="" class="decor-icon"><i class="ti-plus"></i></a>
                        </div>
                        <p class="decor-btn">Giá tiền: 260.000.000 đ</p>
                    </div> -->
                
                <?php } ?></div>
                    
                </div>

                <div id="contact" class="content-contact">
                    <h2 class="section-heading">Liên Hệ</h2>
                    <!-- Contact List -->
                    <div class="contact-list">
                        <div class="contact-intro">
                            <h2 class="contact-sub">Giới Thiệu</h2>
                            <p class="contact-text">
                                Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất nào cho ngôi nhà bạn?.
                                Từ năm 2012, Nhà Decor tự hào với đội ngũ thiết kế trẻ, nhiệt huyết, sáng tạo luôn học hỏi, cập nhật các xu hướng thiết kế và kỹ thuật mới nhất.
                                Thế mạnh chủ lực là tư vấn thiết kế, với phương châm thiết kế “ Không Đâu Bằng Nhà ” Nhà Decor đã tự tin khẳng định chất lượng dịch vụ, lẫn tính thẩm mĩ cao trong từng chi tiết thiết kế và thi công của mình với rất nhiều khách hàng
                            </p>
                        </div>  

                        <div class="contact-address">
                            <h2 class="contact-sub">Địa chỉ</h2>
                            <div class="address-list">
                                <p>
                                    <i class="contact-icon ti-map-alt"></i>
                                    Địa chỉ: 69/52 Nguyễn Gia Trí, P. 25, Q. Bình Thạnh, HCM.
                                </p>
                                <p>
                                    <i class="contact-icon ti-map-alt"></i>
                                    Địa chỉ: 31 Đường D4, P. Tân Hưng, Q. 7, TPHCM.
                                </p>
                                <p>
                                    <i class="contact-icon ti-map-alt"></i>
                                    Địa chỉ: 24 Nguyễn Văn Hoa, P. Thống Nhất, TP Biên Hòa.
                                </p>
                                <p>
                                    <i class="contact-icon ti-map-alt"></i>
                                    Địa chỉ: 86 Đại Lộ Bình Dương, TDM Bình Dương.
                                </p>
                            </div>
                        </div>

                        <div class="contact-email">
                            <h2 class="contact-sub">Liên Hệ</h2>
                            <div class="email-list">
                                <p><i class="contact-icon ti-headphone"></i>0911822612</p>
                                <p><i class="contact-icon ti-headphone"></i>0961753837</p>
                                <p><i class="contact-icon ti-headphone"></i>myzlucky2706@gmail.com</p>
                                <p><i class="contact-icon ti-headphone"></i>nguyenred2003@gmail.com</p>
                            </div>
                        </div>

                        <div class="contact-follow">
                            <h2 class="contact-sub">Liên hệ với chúng tôi</h2>
                            <div class="follow-list">
                                <p><i class="contact-icon ti-facebook"></i><a href="https://www.facebook.com/huyen2706">Facebook</a></p>
                                <p><i class="contact-icon ti-instagram"></i><a href="https://www.instagram.com/huyen_27.63/">Instagram</a></p>
                                <p><i class="contact-icon ti-google"></i><a href="https://www.google.com/">Google</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact List -->
                </div>
            </div> 

            <div class="footer">
                <div class="footer-content">
                    <p class="content-text">Chính sách quyền riêng tư</p>
                    <div class="content-icons">
                        <a href="" class="footer-icon-link"><i class="footer-icon ti-facebook"></i></a>
                        <a href="" class="footer-icon-link"><i class="footer-icon ti-twitter-alt"></i></a>
                        <a href="" class="footer-icon-link"><i class="footer-icon ti-instagram"></i></a>
                    </div>
                    <p class="content-text">@ 2012 bản quyền của Decor. Decor - <a href="">Thiết kế nội thất</a></p>
                </div>
            </div>

        </div>
    </body>
</html>