<?php

	class DeclareLoginFails extends Controller {

		function DeclareLoginFails() 
		{
			parent::Controller();
		}

		function acknowledge()
		{
			header('Location: ../login');	
		}

	}

?>