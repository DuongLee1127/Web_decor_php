<?php
require_once('./controller/nv.php');
$nvcontroller = new NVController();
$task = isset($_GET['task']) ? $_GET['task'] : 'pagenv';


switch ($task) {
	case 'pagenv':
		$nvcontroller->getPageNV();
		break;
	case 'pageSanPham':
		$nvcontroller->getPageSanPham();
		break;
	case 'pageHoaDon':
		$nvcontroller->getPageHD();
		break;
	case 'pageKH':
		$nvcontroller->getPageKH();
		break;
	case 'pageTK':
		$nvcontroller->getPageTK();
		break;
	default:
		$nvcontroller->getPageNV();
		break;
}
?>