<?php

	class declareEditPatientProfileFails extends Controller {

		function declareEditPatientProfileFails() 
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
			header('Location: ../patientAppointment');	
		}

	}

?>