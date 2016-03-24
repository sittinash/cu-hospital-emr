<?php

	class SpecialSubmitDiagnosis extends Controller 
	{

		function SpecialSubmitDiagnosis() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialSubmitDiagnosis');

			$medicalRecordId = Session::get('medicalRecordId');

			$disease = $_POST['disease'];
			$patientCondition = $_POST['patientCondition'];
			$diagnosis = $_POST['diagnosis'];
			$remark = $_POST['remark'];

			$result = $this->model->updateMedicalRecord($medicalRecordId
				, $disease
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