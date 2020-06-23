<?php 
include "Models/m_Master.php";
include "Models/m_Admin.php";
include "Models/m_Bacsi.php";
include "Models/m_Nhanvien.php";
include "Models/m_Benhnhan.php";
$mt = new Master();
$ad = new m_admin();
$bs = new m_bacsi();
$nv = new m_nhanvien();
$bn = new m_benhnhan();
if(isset($_GET['controller'])){
	$control = $_GET['controller'];
}else{$control = 'index';
}
if(isset($_GET['action'])){
	$action = $_GET['action'];
}else $action = '';
	switch ($control) {
		case 'index':
			if(!isset($_SESSION['user'])){
				if(isset($_POST['submit2'])){
					$ten=$_POST['ten'];
					$sdt=$_POST['sdt'];
					$tg=$_POST['tg'];
					$tt=$_POST['tt'];
					$mt->insert_temp($ten,$sdt,$tg,$tt);
					include("Views/dangnhap.php");
					echo "<script>swal(\"Thông báo\", \"Đặt lịch thành công ! Chúng tôi sẽ sớm liên lạc với bạn .\", \"success\");</script>";
				}else{
					include("Views/dangnhap.php");
				}

			}else{
				if($_SESSION['role']=="admin"){
					$admin = $mt->select_count_table("admin");
					$bacsi = $mt->select_count_table("doctor");
					$nhanvien = $mt->select_count_table("staff");
					$benhnhan = $mt->select_count_table("patient");
					include("Views/admin/thongke.php");
				}
				if($_SESSION['role']=="benhnhan"){
					$daxeplich=$bn->cout_daxeplich($_SESSION['id']);
						$chuaxeplich=$bn->cout_chuaxeplich($_SESSION['id']);
						$dakham=$bn->cout_dakham($_SESSION['id']);
						$data=$bn->select_by_id($_SESSION['id']);
						$info = mysqli_fetch_assoc($data);
						include("Views/benhnhan/thongke.php");
				}
				if($_SESSION['role']=="nhanvien"){
						$choduyet=$nv->cout_chuaduyet();
						$dangdienra=$nv->cout_daduyet_chuakham();
						$dakham=$nv->cout_da_kham();
						
						$data=$nv->select_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
						include("Views/nhanvien/thongke.php");
				}
				if($_SESSION['role']=="bacsi"){

						$data=$bs->select_bacsi_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
						$dangdienra=$bs->cout_dangdienra($row['DoctorID']);
						$dakham=$bs->cout_dakham($row['DoctorID']);
						include("Views/bacsi/thongke.php");
				}
			}
			if(isset($_POST['submit'])){
				$user = $_POST['username'];
				$pass =$_POST['password'];
				$value=$mt->login($user,$pass);
				if($value==true){
					$data = $mt->select_acount($user);
					$row = $data->fetch_assoc();
					$_SESSION['user'] = $row['Username'];
					$_SESSION['id'] = $row['UserID'];
					$_SESSION['role'] = $row['Role'];
						
					
					if($_SESSION['role']=="admin"){
						$data2 = $ad->select_acount_by_id($_SESSION['id']);
						$row2=$data2->fetch_assoc();
						$_SESSION['img']=$row2['Image'];
						$test=$_SESSION['img'];
						$_SESSION['img2']=$test;
						echo "<script type='text/javascript'> window.location.assign('http://localhost:/Quan_ly_kham_benh/')</script>";
						include("Views/admin/thongke.php");

					
				}else if($_SESSION['role']=="benhnhan"){
						$data2 = $bn->select_by_id($_SESSION['id']);
						$row2=$data2->fetch_assoc();
						$_SESSION['img']=$row2['Image'];
						echo "<script type='text/javascript'> window.location.assign('http://localhost:/Quan_ly_kham_benh/')</script>";
						$daxeplich=$bn->cout_daxeplich($_SESSION['id']);
						$chuaxeplich=$bn->cout_chuaxeplich($_SESSION['id']);
						$dakham=$bn->cout_dakham($_SESSION['id']);
						$data=$bn->select_by_id($_SESSION['id']);
						$info = mysqli_fetch_assoc($data);
						
						include("Views/benhnhan/thongke.php");
				
				}else if($_SESSION['role']=="nhanvien"){
					$data2 = $nv->select_by_id($_SESSION['id']);
					$row2=$data2->fetch_assoc();
					$_SESSION['img']=$row2['Image'];

					$_SESSION['id_nv']=$row2['StaffID'];
					echo "<script type='text/javascript'> window.location.assign('http://localhost:/Quan_ly_kham_benh/')</script>";
					$choduyet=$nv->cout_chuaduyet();
					$dangdienra=$nv->cout_daduyet_chuakham();
					$dakham=$nv->cout_da_kham();
					$data=$nv->select_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
					include("Views/nhanvien/thongke.php");
				}else if($_SESSION['role']=="bacsi"){
					$data2 = $bs->select_bacsi_by_id($_SESSION['id']);
					$row2=$data2->fetch_assoc();
					$_SESSION['img']=$row2['Image'];
					$_SESSION['id_bs']=$row2['DoctorID'];
					echo "<script type='text/javascript'> window.location.assign('http://localhost:/Quan_ly_kham_benh/')</script>";
					$data=$bs->select_bacsi_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
						$dangdienra=$bs->cout_dangdienra($row['DoctorID']);
						$dakham=$bs->cout_dakham($row['DoctorID']);
					include("Views/bacsi/thongke.php");
				}
							
				}			
						
				else 
				{
					$_SESSION['thongbao']="Thông tin tài khoản chưa chính xác ";
					echo "<script type='text/javascript'> window.location.assign('http://localhost:/Quan_ly_kham_benh/')</script>";
					
				}
			}
			break;
		case 'logout':
			session_destroy();
			echo "<script type='text/javascript'> window.location.assign('http://localhost:/Quan_ly_kham_benh/')</script>";
		
			break;

		case 'admin':
		if(isset($_SESSION['user']) && ($_SESSION['role']=="admin")){
			switch ($action) {
				case 'list-admin':
					$data=$ad->select_all_admin();
					include("Views/admin/admin/list.php");
					break;
				case 'list-bacsi':
					$data=$bs->select_all_bacsi();
					include("Views/admin/bacsi/list.php");
					break;
				case 'list-nhanvien':
					$data=$nv->select_all_nhanvien();
					include("Views/admin/nhanvien/list.php");
					break;

				case 'list-benhnhan':
					$data=$bn->select_all_benhnhan();
					include("Views/admin/benhnhan/list.php");
					break;
				case 'xoa-user':
					$page = $_GET['role'];
					$id = $_GET['id'];
					$mt->delete_acc($id);

					echo "<script type='text/javascript'> window.location.assign('?controller=admin&action=list-$page')</script>";
			
					break;
			case 'add':
					if(isset($_GET['role'])){
						$role = $_GET['role'];
						if($role=="admin"){$ten="Admin";}else if($role=="nhanvien"){$ten="Nhân viên";}else if($role=="bacsi"){$ten="Bác sĩ";}else if($role=="benhnhan"){$ten="Bệnh nhân";}
						
						if(isset($_POST['submit'])){
						$user = $_POST['user'];
						$pass =$_POST['pass'];
						$pass2=$_POST['pass2'];
						$data=$mt->check_user($user);

					if($pass!=$pass2){
						$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
						include("Views/admin/add.php");
						
					}else if($data==1){
						$_SESSION['thongbao1'] ='Tài khoản đã tồn tại';
						include("Views/admin/add.php");
					}else
					{
						$mt->insert_acc($user,$pass,$role);
						$data = $mt->select_acount($user);
						$row = $data->fetch_assoc();
						$temp =$row['UserID'];
						if($role=="admin"){$ad->insert_empty($temp);}else if($role=="nhanvien"){$nv->insert_empty($temp);}else if($role=="bacsi"){$bs->insert_empty($temp);}else if($role=="benhnhan")
						{$bn->insert_empty($temp);
							$data = $bn->select_by_id($row['UserID']);
						$row2 = $data->fetch_assoc();
						$bn->create_thongso_empty($row2['PatientID']);
						}
						$_SESSION['thongbao2'] ='Thêm tài khoản '. $user.' thành công !';
						include("Views/admin/add.php");
						}
					}else
					include("Views/admin/add.php");
					}
					break;
			case 'edit-admin':
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				
				$data =$ad->select_acount_by_id($id);
				$row = $data->fetch_assoc();
				if(isset($_POST['submit'])){	
							$name=$_POST['ten'];
							$email=$_POST['email'];
							$gt=$_POST['gioitinh'];
							if(isset($_FILES)){
							$img = $_FILES["img"]["name"];
							$random =$mt->randomString().$img;
							$type = $_FILES["img"]["type"];
							$size = $_FILES["img"]["size"];
							if($img ==""){

								$random = $row['Image'];
							}else{
								if( $size <= 5*1024*1024 ) {
									move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
								}else{
									echo "File cua ban phai nho hon 5M";	
								}
							}
							}else {$img ="logo.jpg";}
							$ad->update_by_id($id,$name,$random,$gt,$email);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';
							$data2 = $ad->select_acount_by_id($_SESSION['id']);
						$row2=$data2->fetch_assoc();
						$_SESSION['img']=$row2['Image'];
						$test=$_SESSION['img'];
						$_SESSION['img2']=$test;
							include("Views/admin/admin/edit.php");}
						else{
							include("Views/admin/admin/edit.php");}
					}else{
				include("Views/admin/admin/edit.php");}
				break;
			case 'edit-bacsi':
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				$data =$bs->select_bacsi_by_id($id);
				$row = $data->fetch_assoc();
					if(isset($_POST['submit'])){	
							$name=$_POST['ten'];
							$gt=$_POST['gioitinh'];
							$lv=$_POST['linhvuc'];
							$sdt = $_POST['sdt'];
							$mota = $_POST['mota'];
							if(isset($_FILES)){
							$img = $_FILES["img"]["name"];
							$random =$mt->randomString().$img;
							$type = $_FILES["img"]["type"];
							$size = $_FILES["img"]["size"];
							if($img ==""){

								$random = $row['Image'];
							}else{
								if( $size <= 5*1024*1024 ) {
									move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
								}else{
									echo "File cua ban phai nho hon 5M";	
								}
							}
							}else {$img ="logo.jpg";}
							$bs->update_by_id($id,$name,$gt,$random,$lv,$sdt,$mota);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';

							include("Views/admin/bacsi/edit.php");}
						else{
							include("Views/admin/bacsi/edit.php");}
					}else{
				include("Views/admin/bacsi/edit.php");}
				break;
			case 'edit-nhanvien':
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				$data =$nv->select_by_id($id);
				$row = $data->fetch_assoc();
					if(isset($_POST['submit'])){	
							$name=$_POST['ten'];
							$gt=$_POST['gioitinh'];
							$sdt = $_POST['sdt'];
							if(isset($_FILES)){
							$img = $_FILES["img"]["name"];
							$random =$mt->randomString().$img;
							$type = $_FILES["img"]["type"];
							$size = $_FILES["img"]["size"];
							if($img ==""){

								$random = $row['Image'];
							}else{
								if( $size <= 5*1024*1024 ) {
									move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
								}else{
									echo "File cua ban phai nho hon 5M";	
								}
							}
							}else {$img ="logo.jpg";}
							$nv->update_by_id($id,$name,$gt,$random,$sdt);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';

							include("Views/admin/nhanvien/edit.php");}
						else{
							include("Views/admin/nhanvien/edit.php");}
					}else{
				include("Views/admin/nhanvien/edit.php");}
			
				break;
			case 'edit-benhnhan':
				if(isset($_GET['id'])){
					$id = $_GET['id'];
				$data =$bn->select_by_id($id);
				$row = $data->fetch_assoc();
					if(isset($_POST['submit'])){	
							$name=$_POST['ten'];
							$gt=$_POST['gioitinh'];
							$ngaysinh = $_POST['ngaysinh'];
							$email=$_POST['email'];
							$sdt=$_POST['sdt'];
							$benhan=$_POST['benhan'];
							if(isset($_FILES)){
							$img = $_FILES["img"]["name"];
							$random =$mt->randomString().$img;
							$type = $_FILES["img"]["type"];
							$size = $_FILES["img"]["size"];
							if($img ==""){

								$random = $row['Image'];
							}else{
								if( $size <= 5*1024*1024 ) {
									move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
								}else{
									echo "File cua ban phai nho hon 5M";	
								}
							}
							}else {$img ="logo.jpg";}
							$bn->update_by_id($id,$name,$random,$ngaysinh,$email,$sdt,$gt,$benhan);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';

							include("Views/admin/benhnhan/edit.php");}
						else{
							include("Views/admin/benhnhan/edit.php");}
					}else{
				include("Views/admin/benhnhan/edit.php");}
			
				break;
			case 'list-lichkham':
				$data=$mt->select_temp();
				include("Views/admin/lichkham/list.php");
				break;
			case 'delete-lichkham':
				if(isset($_GET['id'])){
					$id=$_GET['id'];
					$mt->delete_temp($id);
					echo "<script type='text/javascript'> window.location.assign('?controller=admin&action=list-lichkham')</script>";
				}else
				echo "<script type='text/javascript'> window.location.assign('?controller=index')</script>";
				break;
			case 'chap-nhan':
				if(isset($_GET['id'])){
					$id=$_GET['id'];
					$data=$mt->select_temp_by_id($id);
					$row = $data->fetch_assoc();
					
					if(isset($_POST['submit'])){
						$user = $_POST['user'];
						$pass =$_POST['pass'];
						$pass2=$_POST['pass2'];
						$data=$mt->check_user($user);

					if($pass!=$pass2){
						$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
						include("Views/admin/lichkham/chapnhan.php");
						
					}else if($data==1){
						$_SESSION['thongbao1'] ='Tài khoản đã tồn tại';
						include("Views/admin/lichkham/chapnhan.php");
					}else{
						$mt->insert_acc($user,$pass,'benhnhan');
						$data2 = $mt->select_acount($user);
						$row2 = $data2->fetch_assoc();
						$temp =$row2['UserID'];
						$bn->insert_empty_sdt($temp,$row['phone'],$row['patien_name']);
						$data3=$bn->select_by_id($temp);
						$row3 = $data3->fetch_assoc();
						$bn->create_thongso_empty($row3['PatientID']);
						$bn->insert_datlich($row3['PatientID'],$row['phone'],$row['comment'],$row['time']);
						$_SESSION['thongbao2'] ='Tạo tài khoản thành công';
						include("Views/admin/lichkham/chapnhan.php");
						$mt->delete_temp($id);
					}
					}else include("Views/admin/lichkham/chapnhan.php");
				}else
				echo "<script type='text/javascript'> window.location.assign('?controller=admin&action=list-lichkham')</script>";
				break;
			case 'changepass':
			if(isset($_GET['id'])){
					$id = $_GET['id'];
				$data =$mt->select_by_id($id);
				$row = $data->fetch_assoc();
					if(isset($_POST['submit'])){
						if(($_POST['pass']=='')&&($_POST['pass2']=='')){
							$pass=$row['password'];
						$pass2=$pass;
					
					}else {
						$pass =$_POST['pass'];
						$pass2=$_POST['pass2'];
						
					}
					if($pass!=$pass2){
						$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
						include("Views/layout/doimatkhau.php");}
						else{
							$mt->update_pass($id,$pass);
						//echo "<script type='text/javascript'> alert('$pass')</script>";
					//	$md->update_user_id($id,$pass,$level,$trangthai);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';

						include("Views/layout/doimatkhau.php");
						}
					
					} else{
					include("Views/layout/doimatkhau.php");}}
					else include("Views/layout/doimatkhau.php");
				break;	
			default:
				$bacsi = $mt->select_count_table("doctor");
				$admin = $mt->select_count_table("admin");
				$nhanvien = $mt->select_count_table("staff");
				$benhnhan = $mt->select_count_table("patient");
				include("Views/admin/thongke.php");
				break;
				}
			}
				break;


		case 'benhnhan':
			if(isset($_SESSION['user']) && ($_SESSION['role']=="benhnhan")){
				switch ($action) {
					case 'thongso':
						$id = $_SESSION['id'];
						$data=$bn->select_thongso($id);
						$row = $data->fetch_assoc();
						if($row['Birthday']!=""){$tuoi=$mt->tinh_tuoi($row['Birthday']);}
						else $tuoi ="Chưa update";
						include("Views/benhnhan/thongso.php");
							
						break;
					case 'edit-thongso':
							$id = $_SESSION['id'];
							$data=$bn->select_thongso($id);
							$row = $data->fetch_assoc();
							$data2=$bn->select_by_id($id);
							$row2 = $data2->fetch_assoc();
							if(isset($_POST['submit'])){
							$chieucao = $_POST['chieucao'];
							$cannang =$_POST['cannang'];
							$thongso=$_POST['thongso'];
							$test= $row2['PatientID'];
							$bn->insert_thongso($row2['PatientID'],$chieucao,$cannang,$thongso);
							$_SESSION['thongbao2'] ='Cập nhật thông tin thành công !';
							include("Views/benhnhan/update_thongso.php");
								
						}
							else
							include("Views/benhnhan/update_thongso.php");
						break;
					case 'hoso':
						$data=$bn->select_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
						if(isset($_POST['submit'])){	
							$name=$_POST['ten'];
							$gt=$_POST['gioitinh'];
							$ngaysinh = $_POST['ngaysinh'];
							$email=$_POST['email'];
							$sdt=$_POST['sdt'];
							$benhan=$_POST['benhan'];
							if(isset($_FILES)){
							$img = $_FILES["img"]["name"];
							$random =$mt->randomString().$img;
							$type = $_FILES["img"]["type"];
							$size = $_FILES["img"]["size"];
							if($img ==""){

								$random = $row['Image'];
							}else{
								if( $size <= 5*1024*1024 ) {
									move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
								}else{
									echo "File cua ban phai nho hon 5M";	
								}
							}
							}else {$img ="logo.jpg";}
							$bn->update_by_id($_SESSION['id'],$name,$random,$ngaysinh,$email,$sdt,$gt,$benhan);
						$_SESSION['thongbao2'] ='Sửa thông tin thành công';
							$_SESSION['img']=$random;
							$data=$nv->select_by_id($_SESSION['id']);
									$row = $data->fetch_assoc();
								include("Views/benhnhan/hoso.php");}
							else{
						include("Views/benhnhan/hoso.php");}
						
						break;
					case 'changepass':
						$data =$mt->select_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
							if(isset($_POST['submit'])){
								if(($_POST['pass']=='')&&($_POST['pass2']=='')){
									$pass=$row['password'];
								$pass2=$pass;
							
							}else {
								$pass =$_POST['pass'];
								$pass2=$_POST['pass2'];
								
							}
							if($pass!=$pass2){
								$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
								include("Views/layout/doimatkhau.php");}
								else{
									$mt->update_pass($_SESSION['id'],$pass);
								$_SESSION['thongbao2'] ='Đổi mật khẩu thành công !';

								include("Views/layout/doimatkhau.php");
								}
							
							} else{
							include("Views/layout/doimatkhau.php");}
							
								break;
					case 'dat-lich':
							$data=$bn->select_by_id($_SESSION['id']);
							$row = $data->fetch_assoc();
							if(isset($_POST['submit'])){
								if($row['PatientName']==""){
									echo "<script>swal(\"Thông báo\",\"Vui lòng cập nhật thông tin hồ sơ trước khi đăng ký\")
												.then((value) => {
												  window.location.assign('?controller=benhnhan&action=hoso');
												});</script>";
									
								}else{

									$sdt=$_POST['sdt'];
									$date=$_POST['date'];
									$mota=$_POST['mota'];
									$test=$row['PatientID'];
									$bn->insert_datlich($row['PatientID'],$sdt,$mota,$date);
									echo "<script>swal(\"Thông báo\", \"Đặt lịch thành công !\", \"success\").then((value) => {
									  swal(`Vui lòng xem chi tiết ở mục chờ duyệt`);
										});</script>";
									include("Views/benhnhan/lichkham/dat-lich.php");
								}
							}else
							include("Views/benhnhan/lichkham/dat-lich.php");
						break;
					case 'cho-duyet':
				
						$data2=$bn->select_datkham_chuaxeplich($_SESSION['id']);
						include("Views/benhnhan/lichkham/cho-duyet.php");
						break;
					case 'da-duyet':
						
						$data2=$bn->select_datkham_daxeplich($_SESSION['id']);
						include("Views/benhnhan/lichkham/da-duyet.php");
						break;
					case 'huy-lich':
						if(isset($_GET['id'])){
								$id=$_GET['id'];
								$bn->delete_datlich($id);
									echo "<script type='text/javascript'> window.location.assign('?controller=benhnhan&action=cho-duyet')</script>";
						}else{
								include("Views/benhnhan/lichkham/cho-duyet.php");
						}
						break;
					case 'info-bacsi':
						if(isset($_GET['id'])){
							$id=$_GET['id'];
								$data=$bs->select_bacsi_by_id_2($id);
								$row = $data->fetch_assoc();

								include("Views/benhnhan/info_bacsi.php");
						}else{
								echo "<script type='text/javascript'> window.location.assign('?controller=index')</script>";
						}
						
						break;
					case 'lich-su':
						$data2=$bn->slect_da_kham($_SESSION['id']);
						include("Views/benhnhan/lichsukham.php");
						break;
					default:
						$daxeplich=$bn->cout_daxeplich($_SESSION['id']);
						$chuaxeplich=$bn->cout_chuaxeplich($_SESSION['id']);
						$dakham=$bn->cout_dakham($_SESSION['id']);
						$data=$bn->select_by_id($_SESSION['id']);
				
				$info = mysqli_fetch_assoc($data);
						include("Views/benhnhan/thongke.php");
						break;
				}
			}
			break;
		

		case 'nhanvien':
				if(isset($_SESSION['user']) && ($_SESSION['role']=="nhanvien")){
						switch ($action) {
							case 'hoso':
								$data=$nv->select_by_id($_SESSION['id']);
									$row = $data->fetch_assoc();
									if(isset($_POST['submit'])){	
										$name=$_POST['ten'];
										$gt=$_POST['gioitinh'];	
										$sdt=$_POST['sdt'];
										if(isset($_FILES)){
										$img = $_FILES["img"]["name"];
										$random =$mt->randomString().$img;
										$type = $_FILES["img"]["type"];
										$size = $_FILES["img"]["size"];
										if($img ==""){

											$random = $row['Image'];
										}else{
											if( $size <= 5*1024*1024 ) {
												move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
											}else{
												echo "File cua ban phai nho hon 5M";	
											}
										}
										}else {$img ="logo.jpg";}

										$nv->update_by_id($_SESSION['id'],$name,$gt,$random,$sdt);
										$_SESSION['thongbao2'] ='Sửa thông tin thành công';
										$_SESSION['img']=$random;
										$data=$nv->select_by_id($_SESSION['id']);
									$row = $data->fetch_assoc();
											include("Views/nhanvien/hoso.php");}
											else{
										include("Views/nhanvien/hoso.php");}
									break;
							case 'changepass':
									if(isset($_GET['id'])){
											$id = $_GET['id'];
										$data =$mt->select_by_id($id);
										$row = $data->fetch_assoc();
											if(isset($_POST['submit'])){
												if(($_POST['pass']=='')&&($_POST['pass2']=='')){
													$pass=$row['password'];
												$pass2=$pass;
											
											}else {
												$pass =$_POST['pass'];
												$pass2=$_POST['pass2'];
												
											}
											if($pass!=$pass2){
												$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
												include("Views/layout/doimatkhau.php");}
												else{
													$mt->update_pass($id,$pass);
												//echo "<script type='text/javascript'> alert('$pass')</script>";
											//	$md->update_user_id($id,$pass,$level,$trangthai);
												$_SESSION['thongbao2'] ='Sửa thông tin thành công';

												include("Views/layout/doimatkhau.php");
												}
											
											} else{
											include("Views/layout/doimatkhau.php");}}
											else include("Views/layout/doimatkhau.php");
										break;	
							case 'list-benhnhan':
										$data=$bn->select_all_benhnhan();
										include("Views/nhanvien/benhnhan/list.php");
											break;
							case 'edit-benhnhan':
								if(isset($_GET['id'])){
									$id = $_GET['id'];
								$data =$bn->select_by_id($id);
								$row = $data->fetch_assoc();
									if(isset($_POST['submit'])){	
											$name=$_POST['ten'];
											$gt=$_POST['gioitinh'];
											$ngaysinh = $_POST['ngaysinh'];
											$email=$_POST['email'];
											$sdt=$_POST['sdt'];
											$benhan=$_POST['benhan'];
											if(isset($_FILES)){
											$img = $_FILES["img"]["name"];
											$random =$mt->randomString().$img;
											$type = $_FILES["img"]["type"];
											$size = $_FILES["img"]["size"];
											if($img ==""){

												$random = $row['Image'];
											}else{
												if( $size <= 5*1024*1024 ) {
													move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
												}else{
													echo "File cua ban phai nho hon 5M";	
												}
											}
											}else {$img ="logo.jpg";}
											$bn->update_by_id($id,$name,$random,$ngaysinh,$email,$sdt,$gt,$benhan);
										$_SESSION['thongbao2'] ='Sửa thông tin thành công';

											include("Views/nhanvien/benhnhan/edit.php");}
										else{
											include("Views/nhanvien/benhnhan/edit.php");}
									}else{
								include("Views/nhanvien/benhnhan/edit.php");}
									break;

							case 'cho-duyet':
								$data = $nv->select_choduyet();
								include("Views/nhanvien/lichhen/cho-duyet.php");
								break;
							case 'huy-lich':
								if(isset($_GET['id'])){
								$id=$_GET['id'];
								$nv->delete_choduyet($id);
									echo "<script type='text/javascript'> window.location.assign('?controller=nhanvien&action=cho-duyet')</script>";
										}else{
												include("Views/nhanvien/lichhen/cho-duyet.php");
										}
								break;
							case 'chap-nhan':
								$data3 = $nv->select_by_id($_SESSION['id']);
								$row3 = $data3->fetch_assoc();
								if($row3['StaffName']==""){
										echo "<script>swal(\"Thông báo\",\"Vui lòng cập nhật thông tin hồ sơ trước khi sắp xếp lịch\")
												.then((value) => {
												  window.location.assign('?controller=nhanvien&action=hoso');
												});</script>";
									
								}else
								{
									if(isset($_GET['id'])){
									$id = $_GET['id'];
								$data = $nv->select_choduyet_byid($id);
								$row = $data->fetch_assoc();
								$bacsi=$bs->select_all_bacsi();
									if(isset($_POST['submit'])){		
											$thoigian = $_POST['gio']."h ".date("d-m-Y", strtotime($_POST['ngay']));
											$mabs=$_POST['mabs'];
											$nv->insert_daduyet($row['RegisterID'],$mabs,$_SESSION['id_nv'],$thoigian);
											echo "<script>swal(\"Thông báo\", \"Xếp lịch thành công\", \"success\");</script>";
											include("Views/nhanvien/lichhen/sap-xep.php");}
										else{
											include("Views/nhanvien/lichhen/sap-xep.php");}
									}else{
								include("Views/nhanvien/lichhen/sap-xep.php");}
								}
								break;
							case 'dang-dien-ra':
								$data = $nv->select_daduyet_chuakham($_SESSION['id_nv']);
								include("Views/nhanvien/lichhen/dang-dien-ra.php");
								break;
							case 'xep-lai':
								$data3 = $nv->select_by_id($_SESSION['id']);
								$row3 = $data3->fetch_assoc();
								if($row3['StaffName']==""){
										echo "<script>swal(\"Thông báo\",\"Vui lòng cập nhật thông tin hồ sơ trước khi sắp xếp lịch\")
												.then((value) => {
												  window.location.assign('?controller=nhanvien&action=hoso');
												});</script>";
									
								}else{
									if(isset($_GET['id'])){
									$id = $_GET['id'];
									$data = $nv->select_daduyet_chuakham_byid($id);
									$row = $data->fetch_assoc();
									$bacsi=$bs->select_all_bacsi();
									if(isset($_POST['submit'])){		
											$thoigian = $_POST['gio']."h ".date("d-m-Y", strtotime($_POST['ngay']));
											$mabs=$_POST['mabs'];
											$nv->update_daduyet_chuakham($id,$row['RegisterID'],$mabs,$_SESSION['id_nv'],$thoigian);
											$test=$mabs;
											echo "<script>console.log(\"$test\");</script>";
											echo "<script>swal(\"Thông báo\", \"Xếp lại lịch thành công\", \"success\");</script>";
											include("Views/nhanvien/lichhen/xep-lai.php");}
										else{
											include("Views/nhanvien/lichhen/xep-lai.php");}
									}else{
								include("Views/nhanvien/lichhen/xep-lai.php");}
								}
								
								break;
							case 'da-kham':
								$data2 = $nv->slect_da_kham();
								include("Views/nhanvien/lichhen/da-kham.php");
								break;
							default:
							$choduyet=$nv->cout_chuaduyet();
							$dangdienra=$nv->cout_daduyet_chuakham();
							$dakham=$nv->cout_da_kham();
							$data=$nv->select_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
								include("Views/nhanvien/thongke.php");
								break;
						}
				}
				
			break;

		case 'bacsi':
			if(isset($_SESSION['user']) && ($_SESSION['role']=="bacsi")){
				switch ($action) {
					case 'list-benhnhan':
							$data=$bn->select_all_benhnhan();
							include("Views/bacsi/list-benhnhan.php");
					break;
					case 'dang-dien-ra':
							$data=$bs->select_dangdienra($_SESSION['id_bs']);
							
							include("Views/bacsi/dang-cho-kham.php");
						break;
					case 'hoso':
								$data=$bs->select_bacsi_by_id($_SESSION['id']);
									$row = $data->fetch_assoc();
									if(isset($_POST['submit'])){	
										$name=$_POST['ten'];

										$gt=$_POST['gioitinh'];	
										$lv=$_POST['linhvuc'];
										$sdt=$_POST['sdt'];
										$gthieu=$_POST['gioithieu'];
										if(isset($_FILES)){
										$img = $_FILES["img"]["name"];
										$random =$mt->randomString().$img;
										$type = $_FILES["img"]["type"];
										$size = $_FILES["img"]["size"];
										if($img ==""){

											$random = $row['Image'];
										}else{
											if( $size <= 5*1024*1024 ) {
												move_uploaded_file($_FILES['img']['tmp_name'], 'Upload/'.$random);
											}else{
												echo "File cua ban phai nho hon 5M";	
											}
										}
										}else {$img ="logo.jpg";}

										$bs->update_by_id($_SESSION['id'],$name,$gt,$random,$lv,$sdt,$gthieu);
										$_SESSION['thongbao2'] ='Sửa thông tin thành công';
										$_SESSION['img']=$random;
										$data=$bs->select_bacsi_by_id($_SESSION['id']);
										$row = $data->fetch_assoc();
										$_SESSION['img']=$random;
											include("Views/bacsi/hoso.php");}
											else{
										include("Views/bacsi/hoso.php");}
									break;
					case 'da-kham':
						$data=$bs->select_dakham($_SESSION['id_bs']);
							include("Views/bacsi/da-kham.php");
						break;
					case 'info-benhnhan':
					if(isset($_GET['id'])){
							$id=$_GET['id'];
								$data=$bn->select_by_id_full($id);
								$row = $data->fetch_assoc();
								$data2=$bs->select_all_thongso();
								$row2 = $data2->fetch_assoc();
								include("Views/bacsi/info-benhnhan.php");
						}else{
								echo "<script type='text/javascript'> window.location.assign('?controller=index')</script>";
						}
						
						break;
					case 'changepass':
						$data =$mt->select_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
							if(isset($_POST['submit'])){
								if(($_POST['pass']=='')&&($_POST['pass2']=='')){
									$pass=$row['password'];
								$pass2=$pass;
							
							}else {
								$pass =$_POST['pass'];
								$pass2=$_POST['pass2'];
								
							}
							if($pass!=$pass2){
								$_SESSION['thongbao1'] ='Nhập lại mật khẩu không đúng';
								include("Views/layout/doimatkhau.php");}
								else{
									$mt->update_pass($_SESSION['id'],$pass);
								$_SESSION['thongbao2'] ='Đổi mật khẩu thành công !';

								include("Views/layout/doimatkhau.php");
								}
							
							} else{
							include("Views/layout/doimatkhau.php");}
							
								break;
					case 'xac-nhan':
						if(isset($_GET['id'])){
							$id = $_GET['id'];
							$data= $bs->select_dangdienra_byid($id);
							$row = $data->fetch_assoc();
							if(isset($_POST['submit'])){	
											$tuvan=$_POST['tuvan'];

											$bs->insert_note($row['PatientID'],$_SESSION['id_bs'],$row['ArrangeID'],$tuvan);
											echo "<script>swal(\"Thông báo\", \"Đã xác nhận khám thành công\", \"success\");</script>";
											
												
												include("Views/bacsi/xac-nhan.php");}
											else{
										include("Views/bacsi/xac-nhan.php");}
							}
							else{
								$data=$bs->select_bacsi_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
						$dangdienra=$bs->cout_dangdienra($row['DoctorID']);
						$dakham=$bs->cout_dakham($row['DoctorID']);
								include("Views/bacsi/thongke.php");
							}
									break;
					default:
						$data=$bs->select_bacsi_by_id($_SESSION['id']);
						$row = $data->fetch_assoc();
						$dangdienra=$bs->cout_dangdienra($row['DoctorID']);
						$dakham=$bs->cout_dakham($row['DoctorID']);
								include("Views/bacsi/thongke.php");
						break;
				}
			}
			break;
		default:
			if(isset($_SESSION['user']) && ($_SESSION['role']=="admin")){
				$admin = $mt->select_count_table("admin");
				$bacsi = $mt->select_count_table("doctor");
				$nhanvien = $mt->select_count_table("staff");
				$benhnhan = $mt->select_count_table("patient");
				include("Views/admin/thongke.php");
			}else if(isset($_SESSION['user']) && ($_SESSION['role']=="benhnhan")){
				$$daxeplich=$bn->cout_daxeplich($_SESSION['id']);
				$chuaxeplich=$bn->cout_chuaxeplich($_SESSION['id']);
				$dakham=$bn->cout_dakham($_SESSION['id']);
				$data=$bn->select_by_id($_SESSION['id']);	
				$info = mysqli_fetch_assoc($data);
				include("Views/benhnhan/thongke.php");
			}
			break;
	}
//$test = $_SESSION['img'];
//	echo "<script>console.log(\"$action\");</script>";


	
 ?>