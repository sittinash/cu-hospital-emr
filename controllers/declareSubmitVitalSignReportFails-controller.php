<?php

	class DeclareSubmitVitalSignReportFails extends Controller {

		function DeclareSubmitVitalSignReportFails() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../nurseVitalSignReport');	
		}

	}

?>