<?php

	class declareQueryPrescriptionFails extends Controller {

		function declareQueryPrescriptionFails() 
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
			header('Location: ../pharmaPrescription');	
		}

	}

?>