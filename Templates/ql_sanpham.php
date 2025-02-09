<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font/themify-icons/themify-icons.css">
    
    <link rel="shortcut icon" href="https://symbols.vn/wp-content/uploads/2021/11/Mau-bieu-tuong-ngoi-nha-Png.jpg"
        type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <title>DHOME - Admin/Sản Phẩm</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="nav-logo">
                <h1><a href="admin.php?task=pageHome" class="nav-logo__text">DHOME/Admin</a></h1>
            </div>

            <ul class="nav">
                <li><a href="admin.php?task=pageSanPham">Sản phẩm</a></li>
                <li><a href="admin.php?task=pageNhanVien">Nhân viên</a></li>
                <li><a href="admin.php?task=pageKTS">Đội ngũ thiết kế</a></li>
                <li><a href="admin.php?task=pageHome">Thống kê</a></li>
            </ul>

            <form action="admin.php?task=pageSanPham" method="post" class="form-box">
                <div class="btn-box">
                    <button name="search" class="search-btn"><i class="ti-search"></i></button>
                </div>

                <div class="input-box">
                    <input name="searchSP" type="search" class="input-search-box" placeholder="Tìm kiếm">
                </div>
            </form>

            <div class="user-box">
                <div class="line"></div>
                <div class="user-icon-box">
                    <a class="user-icon"><i class="ti-user"></i></a>
                    <ul class="login-sign">
                        <li><a href="index.php?task=pageLogin">
                                <form action="" method="post">
                                    <input class="user-logout" type="button" name="logout" value="Đăng xuất">
                                </form>
                            </a></li>
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
                        <li><a href="admin.php?task=pageSanPham&pl=all">Tất Cả</a></li>
                        <li><a href="admin.php?task=pageSanPham&pl=pk">Phòng Khách</a></li>
                        <li><a href="admin.php?task=pageSanPham&pl=plv">Phòng Làm Việc</a></li>
                        <li><a href="admin.php?task=pageSanPham&pl=pn">Phòng Ngủ</a></li>
                    </ul>
                    <a class="content-add js-add">Thêm sản phẩm</a>
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
                            $control = new AdminController();
                            $pl = isset($_GET['pl'])? $_GET['pl']:'all';
                            if( $pl == 'all'){
                                $result = $control->getallSP();
                            }else{
                                $result = $control->getSP($pl);
                            }
                           
                            if(isset($_POST['search'])) $result = $control->searchsp();
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
                                            <?php echo '<img class="td-img" src="./assets/img/decor/'.$msp.'/' . $row['image'] . '" alt="ảnh sản phẩm">'; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['giaSP'] ?>
                                    </td>
                                    <td>
                                        <a class="td-setting js-fix">Sửa</a>
                                        <a class="td-setting js-delete"
                                            href="admin.php?task=pageSanPham&maSP=<?php echo $row['maSP'] ?>">Xoá</a>
                                    </td>
                                </tr>

                            <?php } ?>

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
                <h3 class="header-text">Thêm Sản Phẩm</h3>
            </div>

            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="" class="modal-label">
                        Mã mẫu Decor
                    </label>
                    <input name="maSP" type="text" class="modal-input" placeholder="Điền Mã Mẫu Decor">

                    <label for="" class="modal-label">
                        Chọn ảnh
                    </label>
                    <input name="anhSP" type="file" class="modal-file">

                    <label for="" class="modal-label">
                        Giá mẫu
                    </label>
                    <input name="giaSP" type="text" class="modal-input" placeholder="Điền Giá Mẫu Decor">

                    <input name="add" type="submit" class="modal-add" value="Thêm mẫu">
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
                <h3 class="header-text">Bạn có chắc chắn xoá sản phẩm này?</h3>
            </div>

            <div class="modal-body">
                <div class="box-delete">
                    <form action="" method="post">
                        <input name="deleteY" class="btn-delete" type="submit" value="Có">
                        <input name="deleteN" class="btn-delete" type="submit" value="Không">
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="" class="modal-label">
                            Mã mẫu Decor
                        </label>
                        <input type="text" name="maSP" class="modal-input" placeholder="Điền Mã Mẫu Sửa">

                        <label for="" class="modal-label">
                            Chọn ảnh
                        </label>
                        <input type="file" class="modal-file" name="anhSP">

                        <label for="" class="modal-label">
                            Giá mẫu
                        </label>
                        <input type="text" class="modal-input" placeholder="Điền Giá Mẫu Sửa" name="giaSP">
                        <input name="update" type="submit" class="fix-input" value="Sửa mẫu">
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

    <!-- <script>
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
    </script> -->

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