<?php
require_once "model/model.php";
require_once "view/nv.php";

class NVController
{
	var $model, $nvView;
	function __construct()
	{
		$this->model = new Model();
		$this->nvView = new NVView();
	}

    public function getPageNV(){
        $this->nvView->getPageNV();
    }

    public function getPageHD(){
        $this->nvView->getPageHD();
    }
    public function getPageKH(){
        $this->nvView->getPageKH();
    }
    public function getPageSanPham(){
        $this->nvView->getPageSanPham();
    }
    public function getPageTK(){
        $this->nvView->getPageTK();
    }
}
?>