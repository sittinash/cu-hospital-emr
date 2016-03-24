<?php

	/**
	* 
	*/
	class SpecialSubmitDiagnosisModel extends Model
	{
		
		function SpecialSubmitDiagnosisModel()
		{
			parent::Model();
		}

		function updateMedicalRecord($medicalRecordId, $disease, $patientCondition, $diagnosis, $remark)
		{

			$stmt = $this->db->prepare(
					"UPDATE medical_record
					SET disease = :disease
						, patient_condition = :patientCondition
						, diagnosis = :diagnosis
						, remark = :remark
						, isActive = 1
					WHERE id = :medicalRecordId"
				);

			$result = $stmt->execute(array(
					':disease' => $disease,
					':patientCondition' => $patientCondition,
					':diagnosis' => $diagnosis,
					':remark' => $remark,
					':medicalRecordId' => $medicalRecordId
				));

			return $result;

		}

	}

?>