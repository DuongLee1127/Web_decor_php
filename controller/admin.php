<?php
require_once "model/model.php";
require_once "view/admin.php";

class AdminController
{
	var $model, $adminView;
	function __construct()
	{
		$this->model = new Model();
		$this->adminView = new AdminView();
	}

	public function getPageAdmin()
	{
		$this->adminView->getPageAdmin();
	}

	public function getPageNhanVien()
	{
		$this->adminView->getPageNhanVien();
	}

	public function getPageSanPham()
	{
		$this->adminView->getPageSanPham();
	}

	public function getPageKTS()
	{
		$this->adminView->getPageKTS();
	}

	public function getPageTK()
	{
		$this->adminView->getPageTK();
	}
	public function addSP()
	{
		$ma = empty ($_POST['maSP']) ? 'true' : null;
		$gia = empty ($_POST['giaSP']) ? 'true' : null;
		$anh = isset ($_FILES['anhSP']['name']) ? $_FILES['anhSP']['name'] : null;
		$result = $this->model->getallSP();
		$kt = false;
		while ($row = mysqli_fetch_array($result)) {
			if ($_POST['maSP'] == $row['maSP']) {
				$kt = true;
			}
		}
		//echo "<script>alert('".$anh."');</script>";
		if ($ma || $gia) {
			echo "<script>alert('Dữ liệu thêm không được bỏ trống');</script>";
		} else {
			if ($kt) {
				echo "<script>alert('Mã thêm bị trùng! Nhập lại');</script>";
			} else {
				if ($this->model->addSP($_POST, $anh)) {
					echo "<script>alert('Thêm thành công');</script>";
				} else {

					echo "<script>alert('Thêm không thành công');</script>";
				}
			}

		}
		//$_SESSION['task'] = 'pageSanPham';
	}
	public function updateSP()
	{
		$ma = empty ($_POST['maSP']) ? 'true' : null;
		$gia = empty ($_POST['giaSP']) ? 'true' : null;
		$anh = isset ($_FILES['anhSP']['name']) ? $_FILES['anhSP']['name'] : null;

		// $result = $this->model->getSP();
		// $kt = false;
		// while ($row = mysqli_fetch_array($result)) {
		// 	if ($_POST['maSP'] == $row['maSP']) {
		// 		$kt = true;
		// 	}
		// }
		if ($ma || $gia) {
			echo "<script>alert('Dữ liệu sửa không được bỏ trống');</script>";
		} else {
			//if (!$kt) {
				if ($this->model->updateSP($_POST, $anh)) {
					echo "<script>alert('Sửa thành công');</script>";
				} else {
					echo "<script>alert('Sửa Thất bại');</script>";
				}
			// } else {
			// 	echo "<script>alert('Mã không được trùng với trước đó');</script>";
			// }
		}
	}

	public function deleteSP()
	{
		$this->model->deleteSP();
	}
	public function addnv()
	{
		$ma = empty ($_POST['manv']) ? 'true' : null;
		$ten = empty ($_POST['tennv']) ? 'true' : null;
		$email = empty ($_POST['email']) ? 'true' : null;
		$sdt = empty ($_POST['sdt']) ? 'true' : null;
		$que = empty ($_POST['quequan']) ? 'true' : null;

		$result = $this->model->getDataUser();
		$kt = false;
		while ($row = mysqli_fetch_array($result)) {
			if ($_POST['email'] == $row['email'] || $_POST['manv'] == $row['manv']) {
				$kt = true;
			}
		}
		if ($ma || $ten || $email || $sdt || $que) {
			echo "<script>alert('Dữ liệu thêm không được bỏ trống');</script>";
		} else {
			if ($kt) {
				echo "<script>alert('Dữ liệu đã tồn tại! vui lòng nhập lại dữ liệu khác');</script>";
			} else {
				if ($this->model->addNV($_POST)) {
					echo "<script>alert('Thêm thành công');</script>";
				} else {
					echo "<script>alert('Thêm không thành công');</script>";
				}
			}


		}
		//$_SESSION['task'] = 'pageSanPham';
	}
	public function updatenv()
	{
		$ma = empty ($_POST['manv']) ? 'true' : null;
		$ten = empty ($_POST['tennv']) ? 'true' : null;
		$email = empty ($_POST['email']) ? 'true' : null;
		$sdt = empty ($_POST['sdt']) ? 'true' : null;
		$que = empty ($_POST['quequan']) ? 'true' : null;

		$result = $this->model->getNV();
		$kt = false;
		while ($row = mysqli_fetch_array($result)) {
			if ($_POST['manv'] == $row['manv']) {
				$kt = true;
			}
		}
		if ($ma || $ten || $email || $sdt || $que) {
			echo "<script>alert('Dữ liệu sửa không được bỏ trống');</script>";
		} else {
			if ($kt) {
				if ($this->model->updateNV($_POST)) {
					echo "<script>alert('Sửa thành công');</script>";
				} else {
					echo "<script>alert('Sửa Thất bại');</script>";
				}
			} else {
				echo "<script>alert('Dữ liệu không có trong csdl');</script>";
			}
		}
	}

	public function deletenv()
	{
		$this->model->deleteNV();
		$this->getPageNhanVien();
	}
	public function addntk()
	{
		$ma = empty ($_POST['mantk']) ? 'true' : null;
		$ten = empty ($_POST['tenntk']) ? 'true' : null;
		$email = empty ($_POST['email']) ? 'true' : null;
		$sdt = empty ($_POST['sdt']) ? 'true' : null;
		$que = empty ($_POST['quequan']) ? 'true' : null;

		if ($ma || $ten || $email || $sdt || $que) {
			echo "<script>alert('Dữ liệu thêm không được bỏ trống');</script>";
		} else {
			if ($this->model->addntk($_POST)) {
				echo "<script>alert('Thêm thành công');</script>";
			} else {

				echo "<script>alert('Thêm không thành công');</script>";
			}
		}
		//$_SESSION['task'] = 'pageSanPham';
	}
	public function updatentk()
	{
		$ma = empty ($_POST['mantk']) ? 'true' : null;
		$ten = empty ($_POST['tenntk']) ? 'true' : null;
		$email = empty ($_POST['email']) ? 'true' : null;
		$sdt = empty ($_POST['sdt']) ? 'true' : null;
		$que = empty ($_POST['quequan']) ? 'true' : null;

		$result = $this->model->getntk();
		$kt = false;
		while ($row = mysqli_fetch_array($result)) {
			if ($_POST['mantk'] == $row['mantk']) {
				$kt = true;
			}
		}
		if ($ma || $ten || $email || $sdt || $que) {
			echo "<script>alert('Dữ liệu sửa không được bỏ trống');</script>";
		} else {
			if ($kt) {
				if ($this->model->updatentk($_POST)) {
					//echo "<script>alert('Sửa thành công');</script>";
				} else {
					echo "<script>alert('Sửa Thất bại');</script>";
				}
			} else {
				echo "<script>alert('Dữ liệu không có trong csdl');</script>";
			}
		}
	}

	public function deletentk()
	{
		$this->model->deletentk();
	}

	public function searchsp()
	{
		return $this->model->searchsp();
	}
	public function getSP($temp)
	{
		return $this->model->getSP($temp);
	}

	public function searchnv()
	{
		return $this->model->searchnv();
	}

	public function getNV()
	{
		return $this->model->getNV();
	}

	public function getallSP(){
		return $this->model->getallSP();
	}
}
?>