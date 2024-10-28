<?php

class Model
{
	protected $conn;
	public function __construct(){
		$this->conn = new mysqli('localhost','duong','123','webdecor');
		if($this->conn->connect_error){
			die($this->conn->connect_error);
		}
		$this->conn->set_charset("utf8");
	}

	public function doLogin(){
		$query = "SELECT * FROM user WHERE email = '".$_POST['email']."' AND pass = '".$_POST['pass']."'";
		$result = mysqli_query($this->conn,$query);
		if (mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			return $row;
		}
		return false; 
	}

	// public function getDataUser(){
	// 	$query = 'SELECT * FROM user WHERE level = "2"';
	// 	return mysqli_query($this->conn,$query);
	// }

	public function forgot($result){
		$sql = 'UPDATE `user` SET `pass`="'.$result['pass'].'" WHERE `email`="'.$result['email'].'"';
		return mysqli_query($this->conn,$sql);
	}

	public function getDataUser(){
		$sql = 'SELECT * FROM user, nhanvien WHERE user.level = nhanvien.level && user.email = nhanvien.email';
		return mysqli_query($this->conn,$sql);
	}

	public function addUser($ttdk){
		$level = 2;
		$sql = 'INSERT INTO user VALUES("","'.$ttdk['firstname'].'","'.$ttdk['email'].'","'.$ttdk['password'].'","'.$level.'")';
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}
	public function addSP($ttdk, $anh){
		$sql = 'INSERT INTO sanpham VALUES("'.$ttdk['maSP'].'","'.$ttdk['giaSP'].'","'.$anh.'")';
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}
	public function updateSP($ttdk, $anh){
		$sql = 'UPDATE sanpham SET giaSP="'.$ttdk['giaSP'].'",image="'.$anh.'" WHERE maSP="'.$ttdk['maSP'].'"';
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}
	public function getSP($temp){
		$sql = "SELECT * FROM sanpham WHERE maSP like '".$temp."%'";
		return mysqli_query($this->conn,$sql);
	}

	public function getallSP(){
		$sql = "SELECT * FROM sanpham";
		return mysqli_query($this->conn,$sql);
	}

	public function addNV($ttdk){
		$sql = 'INSERT INTO nhanvien VALUES("","'.$ttdk['manv'].'","'.$ttdk['tennv'].'","'.$ttdk['email'].'","'.$ttdk['sdt'].'","'.$ttdk['quequan'].'","3","123")';
		$result = $this->conn->query($sql);
		$sql1 = 'INSERT INTO user VALUES("","'.$ttdk['tennv'].'","'.$ttdk['email'].'","123","3")';
		mysqli_query($this->conn, $sql1);
		if($result) return true;
		return false;
	}
	public function updateNV($ttdk){
		$sql = 'UPDATE `nhanvien` SET `tennv`="'.$ttdk['tennv'].'",`email`="'.$ttdk['email'].'",`sdt`="'.$ttdk['sdt'].'",`quequan`="'.$ttdk['quequan'].'" WHERE `manv`="'.$ttdk['manv'].'"';
		$result = $this->conn->query($sql);
		$sql1 = 'UPDATE `user` SET `name`="'.$ttdk['tennv'].'",`email`="'.$ttdk['email'].'"';
		mysqli_query($this->conn, $sql1);
		if($result) return true;
		return false;
	}
	public function getNV(){
		$sql = "SELECT * FROM nhanvien";
		return mysqli_query($this->conn,$sql);
	}
	public function deleteSP(){
		$sql = "DELETE FROM sanpham WHERE maSP='".$_GET['maSP']."'";
		return mysqli_query($this->conn,$sql);
	}
	public function deleteNV(){
		$sql = "DELETE FROM nhanvien WHERE manv='".$_GET['manv']."'";
		$sql1 = "DELETE FROM `user` WHERE email = (SELECT email FROM nhanvien WHERE manv='".$_GET['manv']."')";
		mysqli_query($this->conn, $sql1);
		return mysqli_query($this->conn,$sql);
	}

	public function addntk($ttdk){
		$sql = 'INSERT INTO ntk VALUES("","'.$ttdk['mantk'].'","'.$ttdk['tenntk'].'","'.$ttdk['email'].'","'.$ttdk['sdt'].'","'.$ttdk['quequan'].'","4","123")';
		$result = $this->conn->query($sql);
		$sql1 = 'INSERT INTO user VALUES("","'.$ttdk['tenntk'].'","'.$ttdk['email'].'","123","4")';
		mysqli_query($this->conn, $sql1);
		if($result) return true;
		return false;
	}
	public function updatentk($ttdk){
		$sql = 'UPDATE `ntk` SET `tenntk`="'.$ttdk['tenntk'].'",`email`="'.$ttdk['email'].'",`sdt`="'.$ttdk['sdt'].'",`quequan`="'.$ttdk['quequan'].'" WHERE `mantk`="'.$ttdk['mantk'].'"';
		$result = $this->conn->query($sql);
		$sql1 = 'UPDATE `user` SET `name`="'.$ttdk['tenntk'].'",`email`="'.$ttdk['email'].'"';
		mysqli_query($this->conn, $sql1);
		if($result) return true;
		return false;
	}
	public function getntk(){
		$sql = "SELECT * FROM ntk";
		return mysqli_query($this->conn,$sql);
	}
	public function deletentk(){
		// $sql = "DELETE FROM sanpham WHERE maSP='".$_GET['maSP']."'";
		// return mysqli_query($this->conn,$sql);
	}

	public function searchsp(){
		$sql = "SELECT * FROM sanpham WHERE maSP like '".$_POST['searchSP']."%'";
		return mysqli_query($this->conn, $sql);
	}
	public function searchnv(){
		$sql = "SELECT * FROM nhanvien WHERE manv = '".$_POST['search']."' || tennv LIKE '%".$_POST['search']."%'";
		return mysqli_query($this->conn, $sql);
	}
}

?>