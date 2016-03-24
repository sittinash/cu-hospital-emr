<?php

	class SpecialDispense extends Controller {

		function SpecialDispense() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialDispense');

			$prescriptionId = $_POST['prescriptionToDispense'];

			$result = $this->model->setDispensed($prescriptionId);

			if($result == 1)
				header('location: ./declareDispenseSucceeds');
			else
				header('location: ./declareDispenseFails');
			
		}

	}

?>