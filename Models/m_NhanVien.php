<?php 

class m_nhanvien extends db
	{
		
		
		function select_all_nhanvien(){
			$sql ="SELECT staff.* , account.Username,account.Password,account.Role FROM staff,account WHERE staff.UserID = account.UserID";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function insert_empty($id){
			$sql = "INSERT INTO `staff`(`StaffID`, `StaffName`, `Sex`, `Image`, `Phone`, `UserID`) VALUES (NULL, '', '', 'icon.png', '', $id)";
			$this->connect()->query($sql);
		}
		function select_by_id($id){
			$sql="SELECT staff.*,account.Username,account.Password,account.Role FROM staff,account WHERE account.UserID = staff.UserID AND staff.UserID=$id";
				$data = $this->connect()->query($sql);
					return $data;
		}
		function update_by_id($id,$name,$gt,$img,$sdt){
			$sql="UPDATE `staff` SET `StaffName`='$name',`Sex`='$gt',`Image`='$img',`Phone`='$sdt' WHERE `UserID` =$id";
			$data = $this->connect()->query($sql);
		}
		function select_choduyet(){
			$sql="SELECT patient.PatientName,patient.Birthday,patient.Email,patient.Sex,patient.Disease,patient.Image,register.* FROM register,patient WHERE patient.PatientID = register.PatientID AND register.RegisterID NOT IN (SELECT arrange.RegisterID FROM arrange )";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_daduyet(){
			$sql="SELECT patient.PatientName,patient.Birthday,patient.Email,patient.Sex,patient.Disease,patient.Image,register.* FROM register,patient WHERE patient.PatientID = register.PatientID AND register.RegisterID  IN (SELECT arrange.RegisterID FROM arrange )";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_choduyet_byid($id){
			$sql="SELECT patient.PatientName,patient.Birthday,patient.Email,patient.Sex,patient.Disease,patient.Image,register.* FROM register,patient WHERE patient.PatientID = register.PatientID AND register.RegisterID=$id";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function delete_choduyet($id){
			$sql="DELETE FROM `register` WHERE `RegisterID` = $id";
			$this->connect()->query($sql);
		}
		function insert_daduyet($choduyet,$bacsi,$nhanvien,$thoigian){
			$sql="INSERT INTO `arrange`(`RegisterID`, `DoctorID`, `StaffID`, `Time2`) VALUES ($choduyet,$bacsi,$nhanvien,'$thoigian')";
			$this->connect()->query($sql);
		}
		function select_daduyet_chuakham(){
			$sql="SELECT patient.*,register.*,staff.*,arrange.*,doctor.* FROM patient,register,staff,arrange,doctor WHERE patient.PatientID =register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND staff.StaffID = arrange.StaffID AND  arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_daduyet_chuakham_byid($id){
				$sql="SELECT patient.*,register.*,staff.*,arrange.*,doctor.* FROM patient,register,staff,arrange,doctor WHERE patient.PatientID =register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND staff.StaffID = arrange.StaffID AND arrange.ArrangeID=$id AND  arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function update_daduyet_chuakham($id,$choduyet,$bacsi,$nhanvien,$thoigian){
			$sql="UPDATE `arrange` SET `RegisterID`=$choduyet,`DoctorID`=$bacsi,`StaffID`=$nhanvien,`Time2`='$thoigian' WHERE `ArrangeID` =$id";
			$this->connect()->query($sql);
		}
		function slect_da_kham(){
			$sql="SELECT patient.*,staff.*,register.*,doctor.*,arrange.*,doctornote.* FROM doctornote,patient,staff,register,doctor,arrange WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID = staff.StaffID  AND arrange.ArrangeID  In (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
				return $data;
		}
		function cout_chuaduyet(){
			$sql="SELECT COUNT(*) as temp FROM register,patient WHERE patient.PatientID = register.PatientID AND register.RegisterID NOT IN (SELECT arrange.RegisterID FROM arrange )";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
		function cout_daduyet_chuakham(){
			$sql="SELECT COUNT(*) as temp FROM patient,register,staff,arrange,doctor WHERE patient.PatientID =register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND staff.StaffID = arrange.StaffID AND  arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
		function cout_da_kham(){
			$sql="SELECT COUNT(*) as temp FROM doctornote,patient,staff,register,doctor,arrange WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.DoctorID = doctor.DoctorID AND arrange.StaffID = staff.StaffID  AND arrange.ArrangeID  In (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
	}

 ?>