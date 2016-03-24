<?php

	class declareDeleteAppointmentSucceeds extends Controller {

		function declareDeleteAppointmentSucceeds() 
		{
			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}
		}

		function acknowledge()
		{
			$role = Session::get('role')

			if($role=="patient")
				header('Location: ../patientAppointment');	
			else if($role=="nurse" || $role=="officer") 
				header('Location: ../officerAppointment');
		}

	}

?>