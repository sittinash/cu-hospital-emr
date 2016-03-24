<?php

	class Register extends Controller {

		function Register()
		{
			parent::Controller();
		}

		function doRegister()
		{
			
			$name = $_POST['fname'];
			$surname = $_POST['lname'];
			$nationalId = $_POST['nat_id'];
			$password = $_POST['pass1'];
			$birthdate = $_POST['birthdate']; #date
			$nationality = $_POST['nationality'];
			$religion = $_POST['religion'];
			$addr_no = $_POST['addr1'];
			$addr_road = $_POST['addr2'];
			$addr_subdistrict = $_POST['addr3'];
			$addr_district = $_POST['addr4'];
			$addr_province = $_POST['addr5'];
			$addr_postcode = $_POST['addr6']; #int
			$contact = $_POST['tel'];
			$email = $_POST['email'];

			/*Verify::alert($name);
			Verify::alert($surname);
			Verify::alert($birthdate);
			Verify::alert($addr_postcode);*/

			/*$name = "แสงพรหมพินิจ";#$_POST['fname'];
			$surname = "สงวนชาติ";#$_POST['lname'];
			$nationalId = "1100400567307";#$_POST['nat_id'];
			$password = "012012";#$_POST['pass1'];
			$birthdate = "1993-07-23";#$_POST['birthdate']; #date
			$nationality = "ไทย";#$_POST['nationality'];
			$religion = "พุทธ";#$_POST['religion'];
			$addr_no = "383/108";#$_POST['addr1'];
			$addr_road = "จักรพรรดิพงษฺ";#$_POST['addr2'];
			$addr_subdistrict = "คลองมหานาค";#$_POST['addr3'];
			$addr_district = "ป้อมปราบศัตรูพ่าย";#$_POST['addr4'];
			$addr_province = "กรุงเทพมหานคร";#$_POST['addr5'];
			$addr_postcode = 10100;#$_POST['addr6']; #int
			$contact = "0802396135";#_POST['tel'];
			$email = "sittinash@gmail.com";#$_POST['email'];*/

			$result = $this->model->addPatient(
				$name, $surname, $nationalId, $password, $birthdate, $religion
				, $addr_no, $addr_road, $addr_subdistrict, $addr_district, $addr_province, $addr_postcode
				, $contact, $email, $nationality);

			if($result==1){
				header('Location: ../declareRegisterSucceeds');
			} else {
				header('Location: ../declareRegisterFails');
			}

		}

	}

?>