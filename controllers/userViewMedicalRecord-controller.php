<?php

	class UserViewMedicalRecord extends Controller {

		function UserViewMedicalRecord() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('userViewMedicalRecord');
			$this->_fetchMedicalRecordInfo();
			$this->renderView('userViewMedicalRecord', 2);
			
		}

		private function _fetchMedicalRecordInfo() 
		{

			$medicalRecordId = $_POST['medicalRecordToBeViewed'];

			$medicalRecordInfoArr = $this->model->getMedicalRecordInfo($medicalRecordId);
			$vitalSignReportInfoArr = $this->model->getVitalSignReportInfo($medicalRecordId);
			$prescriptionInfoArr = $this->model->getPrescriptionInfo($medicalRecordId);

			Session::set('medicalRecordInfoArr', $medicalRecordInfoArr);
			Session::set('vitalSignReportInfoArr', $vitalSignReportInfoArr);
			Session::set('prescriptionInfoArr', $prescriptionInfoArr);

		}

	}

?>