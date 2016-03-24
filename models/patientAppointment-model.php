<?php

	/**
	* 
	*/
	class PatientAppointmentModel extends Model
	{
		
		function PatientAppointmentModel()
		{
			parent::Model();
		}

		function getAppointmentList($hospitalId)
		{

			$stmt = $this->db->prepare(
					"SELECT appointment.appoint_id
						, appointment.appoint_date
						, appointment.appoint_time
						, staff.staff_name
						, staff.staff_surname
						, appointment.appoint_department
					FROM appointment
					INNER JOIN staff
					ON appointment.doctor_hospital_id = staff.staff_hospital_id
					WHERE appointment.hospital_id = :hospitalId
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