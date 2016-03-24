<?php

	/**
	* 
	*/
	class SpecialPharmaFetchPrescriptionModel extends Model
	{
		
		function SpecialPharmaFetchPrescriptionModel()
		{
			parent::Model();
		}

		function getPrescriptionListByNationalId($nationalId)
		{

			$stmt = $this->db->prepare(
					"SELECT perscription.presc_id
						, perscription.presc_is_cancelled
						, perscription.presc_is_dispensed
						, appointment.appoint_date
						, appointment.appoint_time
						, patient.name
						, patient.surname
						, staff.staff_name
						, staff.staff_surname
						, appointment.appoint_department
					FROM perscription
					LEFT JOIN medical_record
					ON perscription.presc_medical_record_id = medical_record.id
					LEFT JOIN appointment
					ON medical_record.appointment_id = appointment.appoint_id
					LEFT JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					LEFT JOIN staff
					ON appointment.doctor_hospital_id = staff.staff_hospital_id
					WHERE perscription.presc_is_cancelled = 0
					AND medical_record.isActive = 1
					AND patient.national_id = :nationalId
					ORDER BY appointment.appoint_date DESC"
				);

			$stmt->execute(array(
					':nationalId' => $nationalId
				));

			$prescriptionArr = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $prescriptionArr;

		}

		function getPrescriptionListByHospitalId($hospitalId)
		{

			$stmt = $this->db->prepare(
					"SELECT perscription.presc_id
						, perscription.presc_is_cancelled
						, perscription.presc_is_dispensed
						, appointment.appoint_date
						, appointment.appoint_time
						, patient.name
						, patient.surname
						, staff.staff_name
						, staff.staff_surname
						, appointment.appoint_department
					FROM perscription
					LEFT JOIN medical_record
					ON perscription.presc_medical_record_id = medical_record.id
					LEFT JOIN appointment
					ON medical_record.appointment_id = appointment.appoint_id
					LEFT JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					LEFT JOIN staff
					ON appointment.doctor_hospital_id = staff.staff_hospital_id
					WHERE perscription.presc_is_cancelled = 0
					AND medical_record.isActive = 1
					AND appointment.hospital_id = :hospitalId
					ORDER BY appointment.appoint_date DESC"
				);

			$stmt->execute(array(
					':hospitalId' => $hospitalId
				));

			$prescriptionArr = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $prescriptionArr;

		}

	}

?>