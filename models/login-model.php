<?php

	/**
	* 
	*/
	class LoginModel extends Model
	{
		
		function LoginModel()
		{
			parent::Model();
		}

		function verifyPatientLogin($id_type, $username, $password)
		{
			
			if($id_type=="nt_id")
			{
				$stmt = $this->db->prepare(
						"SELECT hospital_id 
						FROM patient 
						WHERE national_id = :user
						AND password = :pssw"
					);
			} else if($id_type=="hp_id") {
				$stmt = $this->db->prepare(
						"SELECT hospital_id
						FROM patient 
						WHERE hospital_id = :user
						AND password = :pssw"
					);
			}

			$stmt->execute(array(
					':user' => $username,
					':pssw' => $password
				));

			$countRow = $stmt->rowCount();

			if($countRow > 0){
				$info = $stmt->fetch(PDO::FETCH_ASSOC);
				#Verify::alert($info['hospital_id']);
				return $info['hospital_id'];
			} else {
				return -1;
			}

		}

		function fetchPatientInfo($hospitalId)
		{

			#Verify::alert($hospitalId);

			$stmt = $this->db->prepare(
					"SELECT * 
					FROM patient 
					WHERE hospital_id = :hp_id"
				);

			$result = $stmt->execute(array(
					':hp_id' => $hospitalId
				));

			#$countRow = $stmt->rowCount();
			#Verify::alert($countRow);

			return $stmt->fetch(PDO::FETCH_ASSOC);

		}

		function verifyStaffLogin($position, $username, $password)
		{

			$stmt = $this->db->prepare(
					"SELECT staff_hospital_id
					FROM staff 
					WHERE staff_hospital_id = :user
					AND staff_password = :pssw
					AND staff_role = :pos"
				);

			$stmt->execute(array(
					':user' => $username,
					':pssw' => $password,
					':pos' => $position
				));

			$countRow = $stmt->rowCount();

			if($countRow > 0){
				$info = $stmt->fetch(PDO::FETCH_ASSOC);
				#Verify::alert($info['staff_hospital_id']);
				return $info['staff_hospital_id'];
			} else {
				return -1;
			}
			
		}

		function fetchStaffInfo($hospitalId)
		{

			#Verify::alert($hospitalId);

			$stmt = $this->db->prepare(
					"SELECT * 
					FROM staff 
					WHERE staff_hospital_id = :hp_id"
				);

			$result = $stmt->execute(array(
					':hp_id' => $hospitalId
				));

			$countRow = $stmt->rowCount();

			#Verify::alert($countRow);

			return $stmt->fetch(PDO::FETCH_ASSOC);

		}

	}

?>