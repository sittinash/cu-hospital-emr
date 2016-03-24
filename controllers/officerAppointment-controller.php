<?php

	class OfficerAppointment extends Controller {

		function OfficerAppointment() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}
			
		}

	}

?>