<?php

	/**
	* 
	*/
	class RegisterModel extends Model
	{
		
		function RegisterModel()
		{
			parent::Model();
		}

		function addPatient(
				$name, $surname, $nationalId, $password, $birthdate, $religion
				, $addr_no, $addr_road, $addr_subdistrict, $addr_district, $addr_province, $addr_postcode
				, $contact, $email, $nationality)
		{

			$stmt = $this->db->prepare(
				"INSERT INTO patient (
					name
					, surname
					, national_id
					, password
					, birthdate
					, religion
					, addr_no
					, addr_road
					, addr_subdistrict
					, addr_district
					, addr_province
					, addr_postcode
					, contact
					, email
					, nationality) 
				VALUES (
					:name
					, :surname
					, :national_id
					, :password
					, :birthdate
					, :religion
					, :addr_no
					, :addr_road
					, :addr_subdistrict
					, :addr_district
					, :addr_province
					, :addr_postcode
					, :contact
					, :email
					, :nationality)"
			);

			$result = $stmt->execute(array(
					':name' => $name,
					':surname' => $surname,
					':national_id' => $nationalId,
					':password' => $password,
					':birthdate' => $birthdate,
					':religion' => $religion,
					':addr_no' => $addr_no,
					':addr_road' => $addr_road,
					':addr_subdistrict' => $addr_subdistrict,
					':addr_district' => $addr_district,
					':addr_province' => $addr_province,
					':addr_postcode' => $addr_postcode,
					':contact' => $contact,
					':email' => $email,
					':nationality' => $nationality
				));

			return $result;

		}

	}

?>