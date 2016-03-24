<?php

	class SpecialDispense extends Controller {

		function SpecialDispense() {
			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialDispense');

			$prescriptionId = $_POST['prescriptionToDispense'];

			$result = $this->model->setIsDispensed($prescriptionId);

			if($result)
				header('location: ./declareDispenseSucceeds');
			else
				header('location: ./declareDispenseFails');
			
		}

	}

?>