<?php

	class DeclareSubmitDiagnosisSucceeds extends Controller {

		function DeclareSubmitDiagnosisSucceeds() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../doctorAppointment');	
		}

	}

?>