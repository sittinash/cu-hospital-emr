<?php

	/**
	* 
	*/
	class StaffEditProfileModel extends Model
	{
		
		function StaffEditProfileModel()
		{
			parent::Model();
		}

		function updateStaffProfile(
				$hospital_id, $name, $surname, $password, $nationality, $religion
				, $addr_no, $addr_road, $addr_subdistrict, $addr_district, $addr_province, $addr_postcode
				, $contact, $email)
		{

			#Verify::alert($hospital_id);
			#Verify::alert($name);
			#Verify::alert($surname);
			#Verify::alert($password);
			#Verify::alert($religion);
			#Verify::alert($addr_no);
			#Verify::alert($addr_road);
			#Verify::alert($addr_subdistrict);
			#Verify::alert($addr_district);
			#Verify::alert($addr_province);
			#Verify::alert($addr_postcode);
			#Verify::alert($contact);
			#Verify::alert($email);

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
					"UPDATE staff
					SET staff_name = :name
						, staff_surname = :surname
						, staff_password = :password
						, staff_nationality = :nationality
						, staff_religion = :religion
						, staff_addr_no = :addr_no
						, staff_addr_road = :addr_road
						, staff_addr_subdistrict = :addr_subdistrict
						, staff_addr_district = :addr_district
						, staff_addr_province = :addr_province
						, staff_addr_postcode = :addr_postcode
						, staff_contact = :contact
						, staff_email = :email
					WHERE staff_hospital_id = :hp_id"
				);

			$result = $stmt->execute(array(
					':name' => $name,
					':surname' => $surname,
					':password' => $password,
					':nationality' => $nationality,
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

			Verify::alert($result);

			return $result;

		}

		function verifyPassword($hospitalId, $password)
		{

			$stmt = $this->db->prepare(
					"SELECT staff_password
					FROM staff 
					WHERE staff_hospital_id = :hospital_id"
				);

			$stmt->execute(array(
					':hospital_id' => $hospitalId
				));


			$info = $stmt->fetch(PDO::FETCH_ASSOC);
			$fetchedPassword = $info['staff_password'];

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