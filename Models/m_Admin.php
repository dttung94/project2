<?php 
	
	/**
	 * 
	 */
	class m_admin extends db
	{
		
		function select_count(){
			$sql = "SELECT COUNT(*) as temp FROM admin";
			$data = $this->connect()->query($sql);
				$row = mysqli_fetch_assoc(	$data);
			$temp = $row['temp'];
			return $temp;
		}
		function select_all_admin(){
			$sql ="SELECT admin.*,account.Username,account.Password,account.Role FROM admin,account WHERE admin.UserID = account.UserID";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function select_acount_by_id($id){
			$sql = "SELECT admin.*,account.Username,account.Password,account.Role FROM admin,account WHERE admin.UserID = account.UserID AND account.UserID = $id";
			$data = $this->connect()->query($sql);
					return $data;
		}
		function insert_empty($id){
			$sql = "INSERT INTO `admin` (`AdminID`, `Admin_name`, `Image`, `Sex`, `Email`, `UserID`) VALUES (NULL, '', 'icon.png', '', '', $id)";
			$this->connect()->query($sql);
		}
		function update_by_id($id,$name,$img,$gt,$email){
			$sql ="UPDATE `admin` SET `Admin_name`='$name',`Image`='$img',`Sex`='$gt',`Email`='$email' WHERE `UserID` =$id ";
				$this->connect()->query($sql);
		}
	}
 ?>