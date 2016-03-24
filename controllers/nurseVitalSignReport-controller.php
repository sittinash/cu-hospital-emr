<?php

	class NurseVitalSignReport extends Controller {

		function NurseVitalSignReport() 
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