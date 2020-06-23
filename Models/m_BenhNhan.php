<?php 

class m_benhnhan extends db
	{
		
		
		function select_all_benhnhan(){
			$sql ="SELECT patient.* , account.Username,account.Password,account.Role FROM patient,account WHERE patient.UserID = account.UserID";
			$data = $this->connect()->query($sql);
					return $data;
		}

		function insert_empty($id){
			$sql = "INSERT INTO `patient`(`PatientID`, `UserID`, `PatientName`, `Image`, `Birthday`, `Email`, `Phone`, `Sex`, `Disease`) VALUES (NULL, $id,'', 'icon.png', '', '', '','','')";
			$this->connect()->query($sql);
		}
		function insert_empty_sdt($id,$sdt,$ten){
			$sql = "INSERT INTO `patient`(`PatientID`, `UserID`, `PatientName`, `Image`, `Birthday`, `Email`, `Phone`, `Sex`, `Disease`) VALUES (NULL, $id,'$ten', 'icon.png', '', '', '$sdt','','')";
			$this->connect()->query($sql);
		}
		function select_by_id($id){
			$sql="SELECT patient.*,account.Username,account.Password,account.Role FROM patient,account WHERE account.UserID = patient.UserID AND patient.UserID = $id";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_by_id_full($id){
			$sql="SELECT patient.*,parameter.* FROM patient,parameter WHERE patient.PatientID = $id AND patient.PatientID = parameter.PatientID";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function update_by_id($id,$ten,$img,$ngaysinh,$email,$sdt,$gt,$benhan){
			$sql="UPDATE `patient` SET `PatientName`='$ten',`Image`='$img',`Birthday`='$ngaysinh',`Email`='$email',`Phone`='$sdt',`Sex`='$gt',`Disease`='$benhan' WHERE `UserID` =$id";
			$data = $this->connect()->query($sql);
		}

		function select_thongso($id){
			$sql="SELECT patient.*,parameter.Heigh,parameter.Weigh,parameter.Number FROM patient,parameter,account WHERE patient.PatientID=parameter.PatientID AND patient.UserID = account.UserID AND patient.UserID = $id ORDER BY `time` DESC LIMIT 1";
			$data = $this->connect()->query($sql);
				return $data;
			
					
		}


		function create_thongso_empty($id){
		$sql="INSERT INTO `parameter`(`PatientID`, `Heigh`, `Weigh`, `Number`) VALUES ($id,'','','')";
				$data = $this->connect()->query($sql);
		}

		function update_thongso($id,$chieucao,$cannang,$thongso){
			$sql="UPDATE `parameter` SET `Heigh`='$chieucao',`Weigh`='$cannang',`Number`='$thongso' WHERE `PatientID`=$id";
			$data = $this->connect()->query($sql);
		}
		function insert_thongso($id,$chieucao,$cannang,$thongso){
			$sql="INSERT INTO `parameter`(`PatientID`, `Heigh`, `Weigh`, `Number`) VALUES ($id,'$chieucao','$cannang','$thongso')";
			$data = $this->connect()->query($sql);
		}
		function insert_datlich($id,$sdt,$mota,$date){
			$sql="INSERT INTO `register`( PatientID, `Phone`, `Comment`, `Time1`) VALUES ($id,'$sdt','$mota','$date') ";
			$data = $this->connect()->query($sql);
		}
		function select_datlich($id,$trangthai){
			$sql ="SELECT register.* FROM register WHERE register.PatientID = $id AND `Check` = '$trangthai'";
			$data = $this->connect()->query($sql);
				return $data;
		}
		function delete_datlich($id){
			$sql="DELETE FROM `register` WHERE `RegisterID` = $id";
			$this->connect()->query($sql);
		}
		function slect_da_kham($id){
			$sql="SELECT patient.*,staff.*,register.*,doctor.*,arrange.*,doctornote.* FROM doctornote,patient,staff,register,doctor,arrange WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID = staff.StaffID   AND patient.UserID = $id AND arrange.ArrangeID  In (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
				return $data;
		}
		function select_da_dat_chua_kham($id){
			$sql ="SELECT patient.*,staff.*,register.*,doctor.*,arrange.*,doctornote.* FROM doctornote,patient,staff,register,doctor,arrange WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID = staff.StaffID   AND patient.UserID = $id AND arrange.ArrangeID NOT In (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
				return $data;
		}
		function select_datkham_daxeplich($id){
			$sql="SELECT register.*,patient.*,arrange.*,doctor.DoctorName,staff.StaffName FROM register,patient,arrange,doctor,staff WHERE patient.UserID = $id AND patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID =staff.StaffID  AND register.RegisterID IN (SELECT arrange.RegisterID FROM arrange WHERE arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote))";
			$data = $this->connect()->query($sql);
				return $data;
		}
		function select_datkham_chuaxeplich($id){
			$sql="SELECT register.*,patient.*,account.UserID FROM register,patient,account WHERE patient.UserID =$id AND account.UserID = patient.UserID AND patient.PatientID = register.PatientID AND register.RegisterID NOT In(SELECT arrange.RegisterID FROM arrange)";
			$data = $this->connect()->query($sql);
				return $data;
		}
		function cout_daxeplich($id){
			$sql="SELECT COUNT(*) as temp FROM register,patient,arrange,doctor,staff WHERE patient.UserID = $id AND patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID =staff.StaffID  AND register.RegisterID IN (SELECT arrange.RegisterID FROM arrange WHERE arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote))";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
		function cout_chuaxeplich($id){
			$sql="SELECT COUNT(*) as temp FROM register,patient,account WHERE patient.UserID =$id AND account.UserID = patient.UserID AND patient.PatientID = register.PatientID AND register.RegisterID NOT In(SELECT arrange.RegisterID FROM arrange)";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
		function cout_dakham($id){
			$sql="SELECT COUNT(*) as temp FROM doctornote,patient,staff,register,doctor,arrange WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID = staff.StaffID   AND patient.UserID = $id AND arrange.ArrangeID  In (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
	}
/*$a = new m_benhnhan();
$data =$a->select_thongso(31);
$row = $data->fetch_assoc();
if($row['Heigh']=="")echo "ronmg";else echo "ko rong";;*/

 ?>
