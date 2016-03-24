<?php

	class NurseViewVitalSignReport extends Controller {

		function NurseViewVitalSignReport() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}
			
			$this->loadModel('NurseViewVitalSignReport');
			$this->_fetchMedicalRecordInfo();
			$this->renderView('NurseViewVitalSignReport', 2);
			
		}

		private function _fetchMedicalRecordInfo() 
		{

			$medicalRecordId = $_POST['m'];

			Session::set('medicalRecordId', $medicalRecordId);

			$medicalRecordInfoArr = $this->model->getMedicalRecordInfo($medicalRecordId);
			$vitalSignReportInfoArr = $this->model->getVitalSignReportInfo($medicalRecordId);
			$prescriptionInfoArr = $this->model->getPrescriptionInfo($medicalRecordId);

			Session::set('medicalRecordInfoArr', $medicalRecordInfoArr);
			Session::set('vitalSignReportInfoArr', $vitalSignReportInfoArr);
			Session::set('prescriptionInfoArr', $prescriptionInfoArr);

		}

		function submitDiagnosis()
		{

			$medicalRecordId = Session::get('medicalRecordId');

			$disease = $_POST['disease'];
			$patientCondition = $_POST['patientCondition'];
			$diagnosis = $_POST['diagnosis'];
			$remark = $_POST['remark'];

			$result = $this->model->updateMedicalRecord($medicalRecordId
				, $patientCondition
				, $diagnosis
				, $remark);

			if($result)
				header('location: ./declareSubmitDiagnosisSucceeds');
			else 
				header('location: ./declareSubmitDiagnosisFails');

		}

	}

?>