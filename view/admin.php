<?php
    class AdminView{

        public function getPageAdmin(){
            require_once './Templates/admin.html';
        }

        public function getPageNhanVien(){
			
            require_once './Templates/ql_nhanvien.php';
		}

        public function getPageSanPham(){
			require_once './Templates/ql_sanpham.php'; 
		}

        public function getPageKTS(){
			require_once './Templates/ql_nhathietke.php';
		}

        public function getPageTK(){
		    require_once './Templates/admin.html';
		}
    }
?>