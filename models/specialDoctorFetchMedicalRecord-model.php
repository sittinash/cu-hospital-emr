<?php

	/**
	* 
	*/
	class SpecialDoctorFetchMedicalRecordModel extends Model
	{
		
		function SpecialDoctorFetchMedicalRecordModel()
		{
			parent::Model();
		}

		function getMedicalRecordListByNationalId($nationalId)
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
					WHERE patient.national_id = :nationalId
					ORDER BY appointment.appoint_date DESC"
				);

			$stmt->execute(array(
					':nationalId' => $nationalId
				));

			$medicalRecordArr = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $medicalRecordArr;

		}

		function getMedicalRecordListByHospitalId($hospitalId)
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