<?php

# Session -> 
# role (ผู้ป่วย, แพทย์, พยาบาล, ...)
# Session::set('hospitalId', $hospitalId);
# Session::set('name', $name);
# Session::set('surname', $surname);
# Session::set('birthdate', $birthdate);
# Session::set('nationalId', $nationalId);
# Session::set('religion', $religion);
# Session::set('addrNo', $addrNo);
# Session::set('addrRoad', $addrRoad);
# Session::set('addrSubdistrict', $addrSubdistrict);
# Session::set('addrDistrict', $addrDistrict);
# Session::set('addrProvince', $addrProvince);
# Session::set('addrPost', $addrPost);
# Session::set('phoneNo', $phoneNo);
# Session::set('email', $email);

	class Login extends Controller 
	{

		function Login() 
		{
			parent::Controller();
			Session::init();
			Session::set('loggedIn', 0);
		}

		public function doLogin() 
		{

			$status = $_POST['status'];
			$username = $_POST['username'];
			$password = $_POST['password'];

			if($status=="patient"){
				
				$id_type = $_POST['id_type'];

				$hospitalId = $this->model->verifyPatientLogin($id_type, $username, $password);

				if($hospitalId < 0){
					Session::set('loggedIn', 0);
					header('Location: ../declareLoginFails');
				} else {
					Session::set('loggedIn', 1);
					$this->setPatientInfo($hospitalId);
					header('Location: ../patientAppointment');
				}

			} else if($status=="staff") {

				$position = $_POST['position'];

				$hospitalId = $this->model->verifyStaffLogin($position, $username, $password);

				if($hospitalId < 0){
					Session::set('loggedIn', 0);
					header('Location: ../declareLoginFails');
				} else {
					Session::set('loggedIn', 1);
					$this->setStaffInfo($hospitalId);

					$role = Session::get('role');
					if($role=="doctor"){
						header('Location: ../doctorAppointment');
					} else if($role=="officer" || $role=="nurse" ) {
						header('Location: ../officerAppointment');
					} else if($role=="pharmacist") {
						header('Location: ../pharmaPrescription');
					}else if($role=="admin") {
						header('Location: ../adminPanel');
					}
				}

			}

		}

		public function setPatientInfo($hospitalId)
		{

			$patientInfo = $this->model->fetchPatientInfo($hospitalId);

			$name = $patientInfo['name'];
			$surname = $patientInfo['surname'];
			$birthdate = $patientInfo['birthdate'];
			$nationalId = $patientInfo['national_id'];
			$religion = $patientInfo['religion'];
			$addrNo = $patientInfo['addr_no'];
			$addrRoad = $patientInfo['addr_road'];
			$addrSubdistrict = $patientInfo['addr_subdistrict'];
			$addrDistrict = $patientInfo['addr_district'];
			$addrProvince = $patientInfo['addr_province'];
			$addrPost = $patientInfo['addr_postcode'];
			$phoneNo = $patientInfo['contact'];
			$email = $patientInfo['email'];

			Session::set('role', 'patient');
			Session::set('hospitalId', $hospitalId);
			Session::set('name', $name);
			Session::set('surname', $surname);
			Session::set('birthdate', $birthdate);
			Session::set('nationalId', $nationalId);
			Session::set('religion', $religion);
			Session::set('addrNo', $addrNo);
			Session::set('addrRoad', $addrRoad);
			Session::set('addrSubdistrict', $addrSubdistrict);
			Session::set('addrDistrict', $addrDistrict);
			Session::set('addrProvince', $addrProvince);
			Session::set('addrPost', $addrPost);
			Session::set('phoneNo', $phoneNo);
			Session::set('email', $email);

		}

		public function setStaffInfo($hospitalId)
		{

			$staffInfo = $this->model->fetchStaffInfo($hospitalId);

			$role = $staffInfo['staff_role'];
			$name = $staffInfo['staff_name'];
			$surname = $staffInfo['staff_surname'];
			$birthdate = $staffInfo['staff_birthdate'];
			$nationalId = $staffInfo['staff_national_id'];
			$religion = $staffInfo['staff_religion'];
			$addrNo = $staffInfo['staff_addr_no'];
			$addrRoad = $staffInfo['staff_addr_road'];
			$addrSubdistrict = $staffInfo['staff_addr_subdistrict'];
			$addrDistrict = $staffInfo['staff_addr_district'];
			$addrProvince = $staffInfo['staff_addr_province'];
			$addrPost = $staffInfo['staff_addr_postcode'];
			$phoneNo = $staffInfo['staff_contact'];
			$email = $staffInfo['staff_email'];
			
			Session::set('role', $role);
			Session::set('hospitalId', $hospitalId);
			Session::set('name', $name);
			Session::set('surname', $surname);
			Session::set('birthdate', $birthdate);
			Session::set('nationalId', $nationalId);
			Session::set('religion', $religion);
			Session::set('addrNo', $addrNo);
			Session::set('addrRoad', $addrRoad);
			Session::set('addrSubdistrict', $addrSubdistrict);
			Session::set('addrDistrict', $addrDistrict);
			Session::set('addrProvince', $addrProvince);
			Session::set('addrPost', $addrPost);
			Session::set('phoneNo', $phoneNo);
			Session::set('email', $email);
			

			/*if($staffPosition=="doctor")
			{
				Session::set('role', "แพทย์");
			} else if($staffPosition=="officer") {
				Session::set('role', "เจ้าหน้าที่");
			} else if($staffPosition=="phamacist") {
				Session::set('role', "เภสัชกร");
			}*/
			

		}

		public function doLogout() 
		{

			Session::set('loggedIn', 0);
			Session::destroy();
			header('location: ../');
			exit;

		}

	}

?>