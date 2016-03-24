<?php

	class declareDispenseSucceeds extends Controller {

		function declareDispenseSucceeds() 
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