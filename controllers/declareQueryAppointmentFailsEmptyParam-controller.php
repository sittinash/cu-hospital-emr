<?php

	class declareQueryAppointmentFailsEmptyParam extends Controller {

		function declareQueryAppointmentFailsEmptyParam() 
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