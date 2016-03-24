<?php

	class DoctorWritePrescription extends Controller {

		function DoctorWritePrescription() 
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