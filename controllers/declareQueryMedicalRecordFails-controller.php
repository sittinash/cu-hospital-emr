<?php

	class declareQueryMedicalRecordFails extends Controller {

		function declareQueryMedicalRecordFails() 
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
			header('Location: ../staffMedicalRecord');	
		}

	}

?>