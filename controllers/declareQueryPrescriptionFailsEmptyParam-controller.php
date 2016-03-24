<?php

	class declareQueryPrescriptionFailsEmptyParam extends Controller {

		function declareQueryPrescriptionFailsEmptyParam() 
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