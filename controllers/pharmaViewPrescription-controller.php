<?php

	class PharmaViewPrescription extends Controller {

		function PharmaViewPrescription() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('pharmaViewPrescription');
			$this->_fetchMedicalRecordInfo();
			$this->renderView('pharmaViewPrescription', 2);
			
		}

		private function _fetchMedicalRecordInfo() 
		{

			$medicalRecordId = $_POST['prescriptionToView'];

			$medicalRecordInfoArr = $this->model->getMedicalRecordInfo($medicalRecordId);
			$vitalSignReportInfoArr = $this->model->getVitalSignReportInfo($medicalRecordId);
			$prescriptionInfoArr = $this->model->getPrescriptionInfo($medicalRecordId);

			Session::set('medicalRecordInfoArr', $medicalRecordInfoArr);
			Session::set('vitalSignReportInfoArr', $vitalSignReportInfoArr);
			Session::set('prescriptionInfoArr', $prescriptionInfoArr);

		}

	}

?>