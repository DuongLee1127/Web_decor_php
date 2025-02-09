<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/fonts/themify-icons-font/themify-icons/themify-icons.css">
        <link rel="shortcut icon" href="https://symbols.vn/wp-content/uploads/2021/11/Mau-bieu-tuong-ngoi-nha-Png.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./assets/css/nhanvien.css">
        <title>DHOME - Nhân Viên/Khách Hàng</title>
    </head>

    <body>
        <div class="main">
            <div class="header">
                <div class="nav-logo">
                    <h1><a href="nv.php?task=pagenv" class="nav-logo__text">DHOME/Nhân Viên</a></h1>
                </div>

                <ul class="nav">
                    <li><a href="nv.php?task=pageSanPham">Sản phẩm</a></li>
                    <li><a href="nv.php?task=pageKH">Khách hàng</a></li>
                    <li><a href="nv.php?task=pageHoaDon">Hoá đơn</a></li>
                    <li>
                        <a href="nv.php?task=pageTK">Thống kê</a>
                        <ul class="subnav">
                            <li><a href="#">Thống kê sản phẩm</a></li>
                            <li><a href="#">Thống kê khách hàng</a></li>
                            <li><a href="#">Thống kê doanh thu</a></li>
                        </ul>
                    <li><a href="#">Tư vấn khách hàng</a></li>
                </ul>

                <form action="" class="form-box">
                    <div class="btn-box"> 
                        <button class="search-btn"><i class="ti-search"></i></button>
                    </div>
                    
                    <div class="input-box">
                        <input type="search" class="input-search-box" placeholder="Tìm kiếm">
                    </div>
                </form>

                <div class="user-box">
                    <div class="line"></div>
                    <div class="user-icon-box">
                        <a class="user-icon"><i class="ti-user"></i></a>
                        <ul class="login-sign">
                            <li><a href="index.php?task=pageLogin">Đăng xuất</a></li>
                        </ul>
                    </div>
                    
                    <div class="line"></div>
                </div>
            </div>

            <div class="content">
                <h3 class="content-text">Trang Quản Lý Khách Hàng</h3>
                <div class="content-section">
                    <div class="content-right">
                        <table class="content-table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Mã Khách Hàng</th>
                                <th>Tên Khách Hàng</th>
                                <th>Gmail</th>
                                <th>Số điện thoại</th>
                                <th>Quê Quán</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Nv1</td>
                                    <td>Nguyễn Minh Huyên</td>
                                    <td>nguyenred2003@gmail.com</td>
                                    <td>09632554112</td>
                                    <td>Yến Sơn - Hà Trung - Thanh Hoá</td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
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