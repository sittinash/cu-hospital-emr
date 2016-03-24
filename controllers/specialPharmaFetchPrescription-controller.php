<?php

	class SpecialPharmaFetchPrescription extends Controller 
	{

		function SpecialPharmaFetchPrescription() 
		{

			parent::Controller();

			if(!Session::get('loggedIn')) {
				Session::destroy();
				header('location: ./');
				exit;
			}

			$this->loadModel('specialPharmaFetchPrescription');

			$nationalId = $_POST['natIdToFetchPresc'];
			$hospitalId = $_POST['hosIdToFetchPresc'];

			if(empty($nationalId) && empty($hospitalId)) {

				header('location: ./declareQueryPrescriptionFailsEmptyParam');

			} else {

				if(!empty($nationalId))
					$prescriptionArr = $this->model->getPrescriptionListByNationalId($nationalId);
				else if(!empty($hospitalId))
					$prescriptionArr = $this->model->getPrescriptionListByHospitalId($hospitalId);
				
				if(empty($prescriptionArr))
					header('location: ./declareQueryPrescriptionFails');
				else {
					Session::set('prescriptionArr', $prescriptionArr);
					header('location: ./pharmaPrescription');
				}
				
			}

		}

	}

?>