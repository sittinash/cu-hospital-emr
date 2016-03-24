<?php

	class DeclareSubmitDiagnosisFails extends Controller {

		function DeclareSubmitDiagnosisFails() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../doctorAppointment');	
		}

	}

?>