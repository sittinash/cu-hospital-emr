<?php

	class StaffMedicalRecord extends Controller {

		function StaffMedicalRecord() 
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