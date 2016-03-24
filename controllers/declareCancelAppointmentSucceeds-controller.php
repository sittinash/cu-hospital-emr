<?php

	class declareCancelAppointmentSucceeds extends Controller {

		function declareCancelAppointmentSucceeds() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../patientAppointment');	
		}

	}

?>