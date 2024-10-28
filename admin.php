<?php
require_once('./controller/admin.php');
$acontroller = new AdminController();
$task = isset($_GET['task']) ? $_GET['task'] : 'pageAdmin';

isset($_SESSION['task'])?$task = $_SESSION['task']:null;
if (isset($_POST['add']))
	$acontroller->addSP();
elseif (isset($_POST['update']))
	$acontroller->updateSP();
elseif (isset($_GET['maSP']))
	$acontroller->deleteSP();
elseif (isset($_GET['manv']))
	$acontroller->deletenv();
elseif(isset($_POST['addnv']))
	$acontroller->addnv();
elseif (isset($_POST['updatenv']))
	$acontroller->updatenv();
elseif(isset($_POST['addntk']))
	$acontroller->addntk();
elseif (isset($_POST['updatentk']))
	$acontroller->updatentk();

switch ($task) {
	case 'pageHome':
		$acontroller->getPageAdmin();
		break;
	case 'pageAdmin':
		$acontroller->getPageAdmin();
		break;
	case 'pageSanPham':
		$acontroller->getPageSanPham();
		break;
	case 'pageNhanVien':
		$acontroller->getPageNhanVien();
		break;
	case 'pageKTS':
		$acontroller->getPageKTS();
		break;
	case 'pageTK':
		$acontroller->getPageTK();
		break;
	default:
		$acontroller->getPageAdmin();
		break;
}
 if(isset($_SESSION['task']))unset($_SESSION['task']);
?>