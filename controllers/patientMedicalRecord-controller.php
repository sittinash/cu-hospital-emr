<?php

	class PatientMedicalRecord extends Controller {

		function PatientMedicalRecord() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}
			
			$this->loadModel('patientMedicalRecord');
			#$this->renderView('patientAppointment', 2);
			$this->_fetchMedicalRecord();
			$this->renderView('patientMedicalRecord', 2);

		}

		private function _fetchMedicalRecord() 
		{

			$hospitalId = Session::get('hospitalId');

			$medicalRecordArr = $this->model->getMedicalRecordList($hospitalId);

			Session::set('medicalRecordArr', $medicalRecordArr);

		}

	}

?>