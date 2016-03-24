<?php

	class DeclareSubmitVitalSignReportSucceeds extends Controller {

		function DeclareSubmitVitalSignReportSucceeds() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../nurseVitalSignReport');	
		}

	}

?>