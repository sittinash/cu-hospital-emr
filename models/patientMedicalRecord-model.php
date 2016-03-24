<?php

	/**
	* 
	*/
	class PatientMedicalRecordModel extends Model
	{
		
		function PatientMedicalRecordModel()
		{
			parent::Model();
		}

		function getMedicalRecordList($hospitalId)
		{

			$stmt = $this->db->prepare(
					"SELECT medical_record.id
						, patient.name
						, patient.surname
						, appointment.appoint_date
						, appointment.appoint_department
						, medical_record.isActive
					FROM medical_record
					INNER JOIN appointment
					ON medical_record.appointment_id = appointment.appoint_id
					INNER JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					WHERE appointment.hospital_id = :hospitalId
					ORDER BY appointment.appoint_date DESC"
				);

			$stmt->execute(array(
					':hospitalId' => $hospitalId
				));

			$medicalRecordArr = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $medicalRecordArr;

		}
		
	}

?>