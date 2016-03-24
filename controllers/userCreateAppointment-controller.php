<?php

	class UserCreateAppointment extends Controller {

		function UserCreateAppointment() 
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