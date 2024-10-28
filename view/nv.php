
<?php
    class NVView{

        public function getPageNV(){
            require_once './Templates/nhanvien.html';
        }

        public function getPageHD(){
			
            require_once './Templates/nv_hoadon.php';
		}

        public function getPageSanPham(){
			require_once './Templates/nv_sanpham.php'; 
		}

        public function getPageKH(){
			require_once './Templates/nv_khachhang.php';
		}

        public function getPageTK(){
		    require_once './Templates/nhanvien.html';
		}
    }
?>