<?php

	class SpecialDoctorFetchMedicalRecord extends Controller 
	{

		function SpecialDoctorFetchMedicalRecord() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialDoctorFetchMedicalRecord');

			$nationalId = $_POST['natIdToFetchMedRec'];
			$hospitalId = $_POST['hosIdToFetchMedRec'];

			if(empty($nationalId) && empty($hospitalId)) {

				header('location: ./declareQueryMedicalRecordFailsEmptyParam');

			} else {

				if(!empty($nationalId))
					$medicalRecordArr = $this->model->getMedicalRecordListByNationalId($nationalId);
				else if(!empty($hospitalId))
					$medicalRecordArr = $this->model->getMedicalRecordListByHospitalId($hospitalId);
				
				if(empty($medicalRecordArr))
					header('location: ./declareQueryMedicalRecordFails');
				else {
					Session::set('medicalRecordArr', $medicalRecordArr);
					header('location: ./staffMedicalRecord');
				}
				
			}

		}

	}

?>