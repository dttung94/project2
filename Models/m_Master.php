<?php 
	include("db.php");
	/**
	 * 
	 */
	class Master extends db
	{
		
		function login($user,$pass){
			$sql = "SELECT * FROM account WHERE `Username` = '$user' AND `Password` = '$pass'";
			$data = $this->connect()->query($sql);
				$row=mysqli_num_rows($data);
				if($row>0){
					return true;
				}else
				return false;
		}
		function select_count_table($table){
			$sql = "SELECT COUNT(*) as temp FROM $table";
			$data = $this->connect()->query($sql);
				$row = mysqli_fetch_assoc(	$data);
			$temp = $row['temp'];
			return $temp;
		}

		function select_acount($user){
			$sql = "SELECT * FROM account WHERE `Username` = '$user'";
			$data = $this->connect()->query($sql);
					return $data;
		}
		
		function insert_account($user,$pass,$role){
				$sql ="INSERT INTO `account`(`Username`, `Password`, `Role`) VALUES '$user','$pass','$role')";
				 $this->connect()->query($sql);
		}
		function delete_acc($id){
			$sql = "DELETE FROM `account` WHERE `UserID` = $id";
			 $this->connect()->query($sql);
		}
		public function check_user($user){
				$sql ="SELECT * FROM `account` WHERE Username ='$user'";
				$data = $this->connect()->query($sql);
				$num_rows = mysqli_num_rows($data);
				return $num_rows;
			}
		function insert_acc($user,$pass,$role){
			$sql="INSERT INTO `account`(`Username`, `Password`, `Role`) VALUES ('$user','$pass','$role')";
			 $this->connect()->query($sql);
		}
		 function randomString()
			{
				$random = substr(md5(mt_rand()), 0, 7);
				return $random;
			}

		function update_pass($id,$pass){
			$sql = "UPDATE `account` SET `Password`='$pass' WHERE `UserID` = $id";
			 $this->connect()->query($sql);
		}
		function select_by_id($id){
			$sql = "SELECT  `Username`, `Password`, `Role` FROM `account` WHERE `UserID` = $id";
			$data = $this->connect()->query($sql);
			return $data;
		}
		function insert_temp($ten,$sdt,$tg,$tt){
			$sql="INSERT INTO `temp`(`patien_name`, `phone`, `time`, `comment`) VALUES ('$ten','$sdt','$tg','$tt')";
			$this->connect()->query($sql);
		}
		function select_temp(){
			$sql="SELECT * FROM `temp`";
			$data = $this->connect()->query($sql);
			return $data;
		}
		function delete_temp($id){
			$sql ="DELETE FROM `temp` WHERE `tempID` =$id";
			$this->connect()->query($sql);
		}
		function select_temp_by_id($id){
			
			$sql="SELECT * FROM `temp` WHERE `tempID` =$id";
			$data = $this->connect()->query($sql);
			return $data;
		}
	
		function tinh_tuoi($birthdate = '0000-00-00') {
			    if ($birthdate == '0000-00-00') return 'Chưa update';
			  
			    $bits = explode('-', $birthdate);
			    $age = date('Y') - $bits[0] - 1;
			  
			    $arr[1] = 'm';
			    $arr[2] = 'd';
			  
			    for ($i = 1; $arr[$i]; $i++) {
			        $n = date($arr[$i]);
			        if ($n < $bits[$i])
			            break;
			        if ($n > $bits[$i]) {
			            ++$age;
			            break;
			        }
			    }
			    return $age;
			}
		function pass($string){
			for($i=0;$i<strlen($string);$i++){
				echo "*";
			}
		}
	}
 ?>