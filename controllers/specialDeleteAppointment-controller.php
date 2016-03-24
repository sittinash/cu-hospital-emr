<?php

	class SpecialDeleteAppointment extends Controller 
	{

		function SpecialDeleteAppointment() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialDeleteAppointment');

			$appointmentId = $_POST['appointmentToBeCancelled'];

			#Verify::alert($appointmentId);

			if($this->model->delAppointment($appointmentId))
				header('location: ./declareDeleteAppointmentSucceeds');
			else
				header('location: ./declareDeleteAppointmentFails');

		}

	}

?>