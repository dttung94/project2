<?php 
session_start();


if(isset($_SESSION['user'])&&$_SESSION['role']=="admin"){
	include"Views/layout/header_admin.php";
	include("Views/admin/menu.php");
	include("Controls/route.php");
	include("Views/layout/footer.php");
	
}else if(isset($_SESSION['user'])&&$_SESSION['role']=="nhanvien"){
	include"Views/layout/header_admin.php";
	include("Views/nhanvien/menu.php");
	include("Controls/route.php");
	include("Views/layout/footer.php");

}else if(isset($_SESSION['user'])&&$_SESSION['role']=="bacsi"){
	include"Views/layout/header_admin.php";
	include("Views/bacsi/menu.php");
	include("Controls/route.php");
	include("Views/layout/footer.php");

}else if(isset($_SESSION['user'])&&$_SESSION['role']=="benhnhan"){
	include"Views/layout/header_admin.php";
	include("Views/benhnhan/menu.php");
	include("Controls/route.php");
	include("Views/layout/footer.php");
}else{
	include "Controls/route.php";
}



 ?>