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
        <title>DHOME - Nhân Viên/Sản Phẩm</title>
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
                    </li>
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
                <h3 class="content-text">Trang Quản Lý Sản Phẩm</h3>
                <div class="content-section">
                    <div class="content-left">
                        <h3 class="content-category">Danh Mục</h3>
                        <ul class="content-list">
                            <li><a href="">Tất Cả</a></li>
                            <li><a href="">Phòng Khách</a></li>
                            <li><a href="">Phòng Làm Việc</a></li>
                            <li><a href="">Phòng Ngủ</a></li>
                        </ul>
                    </div>

                    <div class="straight-line"></div>

                    <div class="content-right">
                        <table class="content-table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Mã Mẫu Decor</th>
                                <th>Mẫu Decor</th>
                                <th>Giá</th>
                                <th>Tùy Chỉnh</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            $model = new Model();
                            $result = $model->getallSP();
                            $id = 1;
                            while ($row = mysqli_fetch_assoc($result)) { 
                                if(preg_match('/pk/',$row['maSP'],$r)){
                                    $msp = 'phongkhach';
                                }elseif(preg_match('/plv/',$row['maSP'],$r)){
                                    $msp = 'phonglamviec';
                                }elseif(preg_match('/pn/',$row['maSP'],$r)){
                                    $msp = 'phongngu';
                                }else $msp = null;
                                ?>
                                <tr>
                                    <th>
                                        <?php echo $id++; ?>
                                    </th>
                                    <td>
                                        <?php echo $row['maSP']; ?>
                                    </td>
                                    <td>
                                        <div class="td-box">
                                            <?php echo '<img class="td-img" src="./assets/img/decor/'.$msp.'/'.$row['image'].'" alt="ảnh sản phẩm">'; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['giaSP'] ?>
                                    </td>
                                    <td>
                                        <a class="td-setting js-fix">Sửa</a>
                                    </td>
                                </tr>

                            <?php }?>     
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

        <div class="modal-fix js-modal-fix">
            <div class="modal-container js-modal-container-fix">
                <div class="modal-close js-modal-close-fix">
                    <i class="ti-close"></i>
                </div>
    
                <div class="modal-header">
                    <h3 class="header-text">Sửa Sản Phẩm</h3>
                </div>
    
                <div class="modal-body">
                    <div class="box-fix">
                        <form action="" method="">
                            <label for="" class="modal-label">
                                Mã mẫu Decor
                            </label>
                            <input type="text" class="modal-input" placeholder="Điền Mã Mẫu Sửa">
    
                            <label for="" class="modal-label">
                                Chọn ảnh
                            </label>
                            <input type="file" class="modal-file" accept="" onchange="">

                            <label for="" class="modal-label">
                                Giá mẫu
                            </label>
                            <input type="text" class="modal-input" placeholder="Điền Giá Mẫu Sửa">
    
                            <input name="add" type="submit" class="fix-input" value="Sửa mẫu">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const btnFix = document.querySelectorAll('.js-fix')
            const modalFix = document.querySelector('.js-modal-fix')
            const modalCloseFix = document.querySelector('.js-modal-close-fix')
            const modalContainerFix = document.querySelector('.js-modal-container-fix')
            
            function showFormFix() {
                modalFix.classList.add('open')
            }

            function hideFormFix() {
                modalFix.classList.remove('open')
            }

            for (const btnFixs of btnFix) {
                btnFixs.addEventListener('click', showFormFix)
            }

            modalCloseFix.addEventListener('click', hideFormFix)

            modalFix.addEventListener('click', hideFormFix)

            modalContainerFix.addEventListener('click', function (event) {
                event.stopPropagation();
            })
        </script>
    </body>
</html>