<?php

	class DeclareRegisterSucceeds extends Controller {

		function DeclareRegisterSucceeds() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../login');	
		}

	}

?>