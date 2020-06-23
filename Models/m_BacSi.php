<?php 

class m_bacsi extends db
	{
		
		function select_bacsi_by_id($id){
			$sql = "SELECT doctor.*,account.Username,account.Password,account.Role FROM doctor,account WHERE doctor.UserID = account.UserID and account.UserID=$id";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_all_bacsi(){
			$sql ="SELECT doctor.* , account.Username,account.Password,account.Role FROM doctor,account WHERE doctor.UserID = account.UserID";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function insert_empty($id){
			$sql = "INSERT INTO `doctor`(`DoctorID`, `DoctorName`, `Sex`, `Image`, `Field`, `Phone`, `Description`, `UserID`) VALUES (NULL, '', '', 'icon.png', '', '','',$id)";
			$this->connect()->query($sql);
		}

		function update_by_id($id,$name,$gt,$img,$lv,$sdt,$mota){
			$sql="UPDATE `doctor` SET `DoctorName`='$name',`Sex`='$gt',`Image`='$img',`Field`='$lv',`Phone`='$sdt',`Description`='$mota' WHERE `UserID` =$id";
			$this->connect()->query($sql);
		}
		function select_bacsi_by_id_2($id){
			$sql = "SELECT doctor.* FROM doctor WHERE doctor.DoctorID=$id";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_dangdienra($id){
			$sql="SELECT patient.*,register.*,staff.*,arrange.* FROM patient,register,staff,arrange,doctor WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.StaffID = staff.StaffID AND arrange.DoctorID = doctor.DoctorID AND arrange.DoctorID =$id AND arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_dangdienra_byid($id){
			$sql="SELECT patient.*,register.*,staff.*,arrange.* FROM patient,register,staff,arrange,doctor WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.StaffID = staff.StaffID AND arrange.DoctorID = doctor.DoctorID AND arrange.ArrangeID=$id ";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_dakham($id){
			$sql="SELECT patient.*,register.*,staff.*,arrange.*,doctornote.* FROM patient,register,staff,arrange,doctor,doctornote WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.StaffID = staff.StaffID AND arrange.DoctorID = doctor.DoctorID AND arrange.DoctorID =$id AND arrange.ArrangeID=doctornote.ArrangeID AND arrange.ArrangeID  IN (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function insert_note($PatientID,$DoctorID,$ArrangeID,$Note){
			$sql="INSERT INTO `doctornote`( `PatientID`, `DoctorID`, `ArrangeID`, `Note`) VALUES ($PatientID,$DoctorID,$ArrangeID,'$Note')";
			$this->connect()->query($sql);
		}
		function cout_dangdienra($id){
			$sql="SELECT COUNT(*) as temp FROM patient,register,staff,arrange,doctor WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.StaffID = staff.StaffID AND arrange.DoctorID = doctor.DoctorID AND arrange.DoctorID =$id AND arrange.ArrangeID NOT IN (SELECT doctornote.ArrangeID FROM doctornote)";
			$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
		function cout_dakham($id){
			$sql="SELECT COUNT(*) as temp FROM patient,register,staff,arrange,doctor,doctornote WHERE patient.PatientID = register.PatientID AND register.RegisterID = arrange.RegisterID AND arrange.StaffID = staff.StaffID AND arrange.DoctorID = doctor.DoctorID AND arrange.DoctorID =$id AND arrange.ArrangeID=doctornote.ArrangeID AND arrange.ArrangeID  IN (SELECT doctornote.ArrangeID FROM doctornote)";
				$data = $this->connect()->query($sql);
			$row = mysqli_fetch_assoc($data);
			$temp = $row['temp'];
			return $temp;
		}
		function select_all_thongso(){
			$sql="SELECT parameter.* FROM parameter , patient WHERE patient.PatientID = parameter.PatientID AND patient.PatientID = 16 AND patient.PatientID AND parameter.Heigh!='' AND parameter.Weigh!='' AND parameter.Number!='' ORDER BY `time` ASC";
			$data = $this->connect()->query($sql);
					return $data;
		}
	}

 ?>