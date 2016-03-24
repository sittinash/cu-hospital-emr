<?php

	class SpecialSubmitVitalSignReport extends Controller 
	{

		function SpecialSubmitVitalSignReport() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialSubmitVitalSignReport');

			$medicalRecordId = Session::get('medicalRecordId');

			$weight = $_POST['weight'];
			$height = $_POST['height'];
			$pressure = $_POST['pressure'];
			$temper = $_POST['temper'];
			$pulse = $_POST['pulse'];
			$precondition = $_POST['precondition']; 
			$remark = $_POST['rptRemark'];

			$result = $this->model->updateVitalSignReport(
				$medicalRecordId
				, $weight
				, $height
				, $pressure
				, $temper
				, $pulse
				, $precondition
				, $remark);

			if($result)
				header('location: ./declareSubmitVitalSignReportSucceeds');
			else 
				header('location: ./declareSubmitVitalSignReportFails');

		}

	}

?>