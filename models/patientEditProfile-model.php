<?php

	/**
	* 
	*/
	class PatientEditProfileModel extends Model
	{
		
		function PatientEditProfileModel()
		{
			parent::Model();
		}

		function fetchPatientInfo($hospitalId)
		{

			$stmt = $this->db->prepare(
					"SELECT * 
					FROM patient 
					WHERE hospital_id = :hp_id"
				);

			$result = $stmt->execute(array(
					':hp_id' => $hospitalId
				));

			return $stmt->fetch(PDO::FETCH_ASSOC);

		}

		function updatePatientProfile(
				$hospital_id, $name, $surname, $password, $religion
				, $addr_no, $addr_road, $addr_subdistrict, $addr_district, $addr_province, $addr_postcode
				, $contact, $email)
		{

			/*Verify::alert($hospital_id);
			Verify::alert($name);
			Verify::alert($surname);
			Verify::alert($password);
			Verify::alert($religion);
			Verify::alert($addr_no);
			Verify::alert($addr_road);
			Verify::alert($addr_subdistrict);
			Verify::alert($addr_district);
			Verify::alert($addr_province);
			Verify::alert($addr_postcode);
			Verify::alert($contact);
			Verify::alert($email);*/

			/*$stmt = $this->db->prepare(
					"UPDATE patient
					SET name = :name
						, surname = :surname
						, password = :password
						, religion = :religion
						, addr_no = :addr_no
						, addr_road = :addr_road
						, addr_subdictrict = :addr_subdistrict
						, addr_district = :addr_district
						, addr_province = :addr_province
						, addr_postcode = :addr_postcode
						, contact = :contact
						, email = :email
					WHERE hospital_id = :hp_id"
				);*/

			$stmt = $this->db->prepare(
					"UPDATE patient
					SET name = :name
						, surname = :surname
						, password = :password
						, religion = :religion
						, addr_no = :addr_no
						, addr_road = :addr_road
						, addr_subdistrict = :addr_subdistrict
						, addr_district = :addr_district
						, addr_province = :addr_province
						, addr_postcode = :addr_postcode
						, contact = :contact
						, email = :email
					WHERE hospital_id = :hp_id"
				);

			$result = $stmt->execute(array(
					':name' => $name,
					':surname' => $surname,
					':password' => $password,
					':religion' => $religion,
					':addr_no' => $addr_no,
					':addr_road' => $addr_road,
					':addr_subdistrict' => $addr_subdistrict,
					':addr_district' => $addr_district,
					':addr_province' => $addr_province,
					':addr_postcode' => $addr_postcode,
					':contact' => $contact,
					':email' => $email,
					':hp_id' => $hospital_id
				));

			#Verify::alert($result);

			return $result;

		}

		function verifyPassword($hospitalId, $password)
		{

			$stmt = $this->db->prepare(
					"SELECT password
					FROM patient 
					WHERE hospital_id = :hospital_id"
				);

			$stmt->execute(array(
					':hospital_id' => $hospitalId
				));

			$info = $stmt->fetch(PDO::FETCH_ASSOC);
			$fetchedPassword = $info['password'];

			#Verify::alert($fetchedPassword);
			#Verify::alert($password);
			#Verify::alert(strcmp($password, $fetchedPassword));

			if(strcmp($password, $fetchedPassword)==0){
				return 1;
			} else {
				return 0;
			}

		}

	}

?>