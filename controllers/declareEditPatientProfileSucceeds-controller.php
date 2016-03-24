<?php

	class declareEditPatientProfileSucceeds extends Controller {

		function declareEditPatientProfileSucceeds() 
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