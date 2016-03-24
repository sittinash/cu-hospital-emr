<?php

	class DoctorAppointment extends Controller {

		function DoctorAppointment() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('DoctorAppointment');
			$this->renderView('DoctorAppointment', 2);
			$this->setAppointmentList();

		}

		function setAppointmentList() 
		{

			$hospitalId = Session::get('hospitalId');
			$appointmentArr = $this->model->getAppointmentList($hospitalId);

			#print_r($appointmentArr);

			Session::set('appointmentArr', $appointmentArr);

		}

		public function diagnosis($appointmentId)
		{

			Verify::alert('dianosis');
		}

	}

?>