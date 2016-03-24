<?php

	class DeclareEditDoctorProfileSucceeds extends Controller {

		function DeclareEditDoctorProfileSucceeds() 
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
			
			$role = ession::get('role')

			if($role=="doctor")
				header('Location: ../doctorAppointment');	
			else if($role=="nurse" || $role=="officer") 
				header('Location: ../officerAppointment');
			else if($role=="phamacist") 
				header('Location: ../');	
			else if($role=="admin") 
				header('Location: ../');		
		}

	}

?>