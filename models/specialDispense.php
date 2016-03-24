<?php

	/**
	* 
	*/
	class SpecialDispenseModel extends Model
	{
		
		function SpecialDispenseModel()
		{
			parent::Model();
		}

		function setDispensed($prescriptionId)
		{

			$stmt = $this->db->prepare(
					"UPDATE perscription
					SET presc_is_dispensed = 1
					WHERE presc_id = :prescriptionId"
				);

			$result = $stmt->execute(array(
					':prescriptionId' => $prescriptionId
				));

			#Verify::alert($result);

			return $result;

		}

	}

?>