<?php

	/**
	* 
	*/
	class SpecialStaffFetchAppointmentModel extends Model
	{
		
		function SpecialStaffFetchAppointmentModel()
		{
			parent::Model();
		}

		function getAppointmentListByNationalId($nationalId)
		{

			$stmt = $this->db->prepare(
					"SELECT appointment.appoint_id
						, appointment.appoint_date
						, appointment.appoint_time
						, appointment.hospital_id
						, patient.national_id
						, patient.name
						, patient.surname
						, staff.staff_name
						, staff.staff_surname
						, appointment.appoint_department
					FROM appointment
					LEFT JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					LEFT JOIN staff
					ON appointment.doctor_hospital_id = staff.staff_hospital_id
					WHERE appointment.appoint_cancelled = 0
					AND patient.national_id = :nationalId
					ORDER BY appointment.appoint_date DESC"
				);

			$stmt->execute(array(
					':nationalId' => $nationalId
				));

			$appointmentArr = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $appointmentArr;

		}

		function getAppointmentListByHospitalId($hospitalId)
		{

			$stmt = $this->db->prepare(
					"SELECT appointment.appoint_id
						, appointment.appoint_date
						, appointment.appoint_time
						, appointment.hospital_id
						, patient.national_id
						, patient.name
						, patient.surname
						, staff.staff_name
						, staff.staff_surname
						, appointment.appoint_department
					FROM appointment
					LEFT JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					LEFT JOIN staff
					ON appointment.doctor_hospital_id = staff.staff_hospital_id
					WHERE appointment.appoint_cancelled = 0
					AND patient.hospital_id = :hospitalId
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