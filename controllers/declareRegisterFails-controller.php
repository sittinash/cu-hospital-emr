<?php

	class DeclareRegisterFails extends Controller {

		function DeclareRegisterFails() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../login');	
		}

	}

?>