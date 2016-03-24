<?php

	class declareEditPatientProfileWrongPassword extends Controller {

		function declareEditPatientProfileWrongPassword() 
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