<?php

	/**
	* 
	*/
	class SpecialSubmitVitalSignReportModel extends Model
	{
		
		function SpecialSubmitVitalSignReportModel()
		{
			parent::Model();
		}

		function updateVitalSignReport(
			$medicalRecordId
				, $weight
				, $height
				, $pressure
				, $termo
				, $pulse
				, $precondition
				, $remark
			)
		{

			$stmt = $this->db->prepare(
					"UPDATE vital_sign_report
					SET rpt_weight = :weight
						, rpt_height = :height
						, rpt_max_pressure = :pressure
						, rpt_termo = :termo
						, rpt_pulse = :pulse
						, rpt_precondition = :precondition
						, rpt_remark = :remark
						, rpt_is_active = 1
					WHERE rpt_id = :medicalRecordId"
				);

			$result = $stmt->execute(array(
					':weight' => $weight,
					':height' => $height,
					':pressure' => $pressure,
					':termo' => $termo,
					':pulse' => $pulse,
					':precondition' => $precondition,
					':remark' => $remark,
					':medicalRecordId' => $medicalRecordId
				));

			return $result;

		}

	}

?>