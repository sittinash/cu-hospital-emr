<?php
	
	#Session -> appointmentArr

	class PatientAppointment extends Controller 
	{

		function PatientAppointment() 
		{

			parent::Controller();
			
			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('patientAppointment');
			#$this->renderView('patientAppointment', 2);
			$this->_fetchAppointment();
			$this->renderView('patientAppointment', 2);

		}

		private function _fetchAppointment() 
		{

			$hospitalId = Session::get('hospitalId');

			$appointmentArr = $this->model->getAppointmentList($hospitalId);

			Session::set('appointmentArr', $appointmentArr);

		}

	}

?>