<?php

	class declareQueryAppointmentFails extends Controller {

		function declareQueryAppointmentFails() 
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
			header('Location: ../officerAppointment');	
		}

	}

?>