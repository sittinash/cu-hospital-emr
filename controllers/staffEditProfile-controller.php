<?php

	class StaffEditProfile extends Controller {

		function StaffEditProfile() {
			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}
			
		}

		function editStaffProfile()
		{

			$hospital_id = Session::get('hospitalId');
			$name = $_POST['fname'];
			$surname = $_POST['lname'];
			#$nationalId = $_POST['nat_id'];
			$password = $_POST['pass1'];
			$passwordChk = $_POST['pass2'];
			#$birthdate = $_POST['birthdate']; #date
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

			$passwordIsCorrect =  $this->model->verifyPassword(
				$hospital_id, $passwordChk);

			#Verify::alert($passwordIsCorrect);

			if(!$passwordIsCorrect){

				#Verify::alert("go");

				Session::set('loggedIn', 1);
				header('Location: ../declareEditDoctorProfileWrongPassword');

			} else {

				$result = $this->model->updateStaffProfile(
					$hospital_id, $name, $surname, $password, $nationality, $religion
					, $addr_no, $addr_road, $addr_subdistrict, $addr_district, $addr_province, $addr_postcode
					, $contact, $email);

				if($result){
					Session::set('loggedIn', 1);

					Session::set('name', $name);
					Session::set('surname', $surname);
					Session::set('religion', $religion);
					Session::set('addrNo', $addr_no);
					Session::set('addrRoad', $addr_road);
					Session::set('addrSubdistrict', $addr_subdistrict);
					Session::set('addrDistrict', $addr_district);
					Session::set('addrProvince', $addr_province);
					Session::set('addrPost', $addr_postcode);
					Session::set('phoneNo', $contact);
					Session::set('email', $email);

					header('Location: ../declareEditStaffProfileSucceeds');
				} else {
					Session::set('loggedIn', 1);
					header('Location: ../declareEditStaffProfileFails');
				}

			}

		}

	}

?>