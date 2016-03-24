<?php

	/**
	* 
	*/
	class DoctorAppointmentModel extends Model
	{
		
		function DoctorAppointmentModel()
		{
			parent::Model();
		}

		function getAppointmentList($hospitalId)
		{

			$stmt = $this->db->prepare(
					"SELECT appointment.appoint_id
						, appointment.appoint_date
						, appointment.appoint_time
						, patient.name
						, patient.surname
						, medical_record.id
						, medical_record.isActive
					FROM appointment
					INNER JOIN staff
					ON appointment.doctor_hospital_id = staff.staff_hospital_id
					LEFT JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					LEFT JOIN medical_record
					ON appointment.appoint_id = medical_record.id
					WHERE appointment.doctor_hospital_id = :hospitalId
					AND appointment.appoint_cancelled = 0
					ORDER BY appointment.appoint_date DESC"
				);

			$stmt->execute(array(
					':hospitalId' => $hospitalId
				));

			$appointmentArr = $stmt->fetchAll(PDO::FETCH_BOTH);
			return $appointmentArr;

		}

	}

?>