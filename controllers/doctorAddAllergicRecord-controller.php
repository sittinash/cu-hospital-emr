<?php

	class DoctorAddAllergicRecord extends Controller {

		function DoctorAddAllergicRecord() 
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