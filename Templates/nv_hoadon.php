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
        <title>DHOME - Nhân Viên/Hoá Đơn</title>
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
                <h3 class="content-text">Trang Quản Lý Hoá Đơn</h3>
                <div class="add-box">
                    <a class="add-user js-add">Thêm Hoá Đơn</a>
                </div>
                <div class="content-section">
                    <div class="content-right">
                        <table class="content-table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Mã Sản Phẩm</th>
                                <th>Tên Khách Hàng</th>
                                <th>Quê Quán</th>
                                <th>Gmail</th>
                                <th>Số điện thoại</th>
                                <th>Quản Lý</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Pk1</td>
                                    <td>Nguyễn Minh Huyên</td>
                                    <td>Yến Sơn - Hà Trung - Thanh Hoá</td>
                                    <td>nguyenred2003@gmail.com</td>
                                    <td>09632554112</td>
                                    <td>
                                        <a class="td-setting js-fix">Sửa</a>
                                        <a class="td-setting js-delete">Xoá</a>
                                    </td>
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

        <div class="modal js-modal">
            <div class="modal-container js-modal-container">
                <div class="modal-close js-modal-close">
                    <i class="ti-close"></i>
                </div>

                <div class="model-header">
                    <h3 class="header-text">Thêm Hoá Đơn</h3>
                </div>

                <div class="modal-body">
                    <form action="" method="POST">
                        <label for="" class="modal-label">
                            Mã sản phẩm
                        </label>
                        <input name="maSP" type="text" class="modal-input" placeholder="Điền Mã Sản Phẩm">

                        <label for="" class="modal-label">
                            Tên khách hàng
                        </label>
                        <input name="maSP" type="text" class="modal-input" placeholder="Điền Tên Khách Hàng">

                        <label for="" class="modal-label">
                            Quê quán
                        </label>
                        <input name="giaSP" type="text" class="modal-input" placeholder="Điền Quê Quán">

                        <label for="" class="modal-label">
                            Gmail
                        </label>
                        <input name="maSP" type="email" class="modal-input" placeholder="Điền Gmail">

                        <label for="" class="modal-label">
                            Số điện thoại
                        </label>
                        <input name="maSP" type="text" class="modal-input" placeholder="Điền Số Điện Thoại">

                        <input name="add" type="submit" class="modal-add" value="Thêm hoá đơn">
                    </form>
                </div>
            </div>
        </div>

        <div class="modal-delete js-modal-delete">
            <div class="modal-container js-modal-container-delete">
                <div class="modal-close js-modal-close-delete">
                    <i class="ti-close"></i>
                </div>
    
                <div class="modal-header">
                    <h3 class="header-text">Xoá là mất nha!...Xoá hẳn chưa để biết đường nào ?</h3>
                </div>
    
                <div class="modal-body">
                    <div class="box-delete">
                        <form action="" method="">
                            <input name="delete" class="btn-delete" type="submit" value="Có">
                            <input name="delete" class="btn-delete" type="submit" value="Không">
                        </form>
                    </div>
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
                        <form action="" method="POST">
                            <label for="" class="modal-label">
                                Mã sản phẩm
                            </label>
                            <input name="maSP" type="text" class="modal-input" placeholder="Điền Mã Sản Phẩm">
        
                            <label for="" class="modal-label">
                                Tên khách hàng
                            </label>
                            <input name="maSP" type="text" class="modal-input" placeholder="Điền Tên Khách Hàng">
        
                            <label for="" class="modal-label">
                                Quê quán
                            </label>
                            <input name="giaSP" type="text" class="modal-input" placeholder="Điền Quê Quán">
        
                            <label for="" class="modal-label">
                                Gmail
                            </label>
                            <input name="maSP" type="email" class="modal-input" placeholder="Điền Gmail">
        
                            <label for="" class="modal-label">
                                Số điện thoại
                            </label>
                            <input name="maSP" type="text" class="modal-input" placeholder="Điền Số Điện Thoại">
    
                            <input name="add" type="submit" class="fix-input" value="Sửa mẫu">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const addBtn = document.querySelector('.js-add')
            const modal = document.querySelector('.js-modal')
            const modalClose = document.querySelector('.js-modal-close')
            const modalContainer = document.querySelector('.js-modal-container')
            
            function showFormAdd() {
                modal.classList.add('open')
            }

            function hideFormAdd() {
                modal.classList.remove('open')
            }

            addBtn.addEventListener('click', showFormAdd)

            modalClose.addEventListener('click', hideFormAdd)

            modal.addEventListener('click', hideFormAdd)

            modalContainer.addEventListener('click', function (event) {
                event.stopPropagation();
            })
        </script>

        <script>
            const btnDelete = document.querySelectorAll('.js-delete')
            const modalDelete = document.querySelector('.js-modal-delete')
            const modalCloseDelete = document.querySelector('.js-modal-close-delete')
            const modalContainerDelete = document.querySelector('.js-modal-container-delete')
            
            function showFormDelete() {
                modalDelete.classList.add('open')
            }

            function hideFormDelete() {
                modalDelete.classList.remove('open')
            }

            for (const btnDeletes of btnDelete) {
                btnDeletes.addEventListener('click', showFormDelete)
            }

            modalCloseDelete.addEventListener('click', hideFormDelete)

            modalDelete.addEventListener('click', hideFormDelete)

            modalContainerDelete.addEventListener('click', function (event) {
                event.stopPropagation();
            })
        </script>

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