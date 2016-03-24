<?php

	/**
	* 
	*/
	class NurseViewVitalSignReportModel extends Model
	{
		
		function NurseViewVitalSignReportModel()
		{
			parent::Model();
		}

		function getMedicalRecordInfo($medicalRecordId)
		{

			$stmt = $this->db->prepare(
					"SELECT patient.name
						, patient.surname
						, appointment.appoint_date
						, appointment.appoint_time
						, medical_record.disease
						, medical_record.patient_condition
						, medical_record.diagnosis
						, medical_record.remark
					FROM medical_record
					INNER JOIN appointment
					ON medical_record.appointment_id = appointment.appoint_id
					INNER JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					WHERE medical_record.id = :medicalRecordId"
				);

			$stmt->execute(array(
					':medicalRecordId' => $medicalRecordId
				));

			return $stmt->fetch(PDO::FETCH_BOTH);

		}

		function getVitalSignReportInfo($medicalRecordId)
		{

			$stmt = $this->db->prepare(
					"SELECT patient.name
						, patient.surname
						, appointment.appoint_date
						, appointment.appoint_time
						, vital_sign_report.rpt_weight
						, vital_sign_report.rpt_height
						, vital_sign_report.rpt_max_pressure
						, vital_sign_report.rpt_min_pressure
						, vital_sign_report.rpt_termo
						, vital_sign_report.rpt_pulse
						, vital_sign_report.rpt_precondition
						, vital_sign_report.rpt_remark
					FROM medical_record
					INNER JOIN vital_sign_report
					ON medical_record.id = vital_sign_report.rpt_med_rec_id
					INNER JOIN appointment
					ON medical_record.appointment_id = appointment.appoint_id
					INNER JOIN patient
					ON appointment.hospital_id = patient.hospital_id
					WHERE medical_record.id = :medicalRecordId"
				);

			$stmt->execute(array(
					':medicalRecordId' => $medicalRecordId
				));

			return $stmt->fetch(PDO::FETCH_ASSOC);

		}

		function getPrescriptionInfo($medicalRecordId)
		{

			$stmt = $this->db->prepare(
					"SELECT druglist.*, drug.drug_name, drug.drug_type, drug.drug_unit
					FROM druglist
					LEFT JOIN drug
					ON druglist.drug_id = drug.drug_id
					WHERE druglist.presc_id = :medicalRecordId"
				);

			$stmt->execute(array(
					':medicalRecordId' => $medicalRecordId
				));

			return $stmt->fetchAll(PDO::FETCH_BOTH);

		}

	}

?>