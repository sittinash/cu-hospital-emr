<?php

	class declareQueryMedicalRecordFailsEmptyParam extends Controller {

		function declareQueryMedicalRecordFailsEmptyParam() 
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