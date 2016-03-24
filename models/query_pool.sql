-> Register

INSERT INTO patient (
	name, surname, national_id, password, birthdate, religion
	, addr_no, addr_road, addr_subdistrict, addr_district, addr_province, addr_postcode
	, contact, email, nationality) 
VALUES ('แสงพรหมพินิจ','สงวนชาติ','1100400567308','012012','1993-07-23',''
	,'','','','','', '', '', 'sittinash@gmail.com', 'Thai')


-> PatientAppointment

SELECT appointment.appoint_id, appointment.appoint_date, appointment.appoint_time,staff.staff_name, staff.staff_surname, appointment.appoint_department 
FROM appointment
INNER JOIN staff
ON appointment.doctor_hospital_id = staff.staff_hospital_id
WHERE appointment.hospital_id = 4
AND appointment.appoint_cancelled = 0

UPDATE appointment
SET appoint_cancelled = 1
WHERE appoint_id = 1


-> PatientEditProfile

UPDATE patient
SET name = 'สิทธิณัฐ'
	, surname = 'จิวาคุณากร'
	, password = '012012'
	, religion = 'พุทธ'
	, addr_no = '383/109'
	, addr_road = 'จักรพรรดิพงษ์'
	, addr_subdistrict = 'คลองมหานาค'
	, addr_district = 'ป้อมปราบศัตรูพ่าย'
	, addr_province = 'กรุงเมพหมานคร'
	, addr_postcode = 10100
	, contact = '0909070408'
	, email = 'sittinut.c@gmail.com'
WHERE hospital_id = 107;


-> DoctorAppointment

SELECT appointment.appoint_id, appointment.appoint_date, appointment.appoint_time, patient.name, patient.surname
FROM appointment
LEFT JOIN staff
ON appointment.doctor_hospital_id = staff.staff_hospital_id
LEFT JOIN patient
ON appointment.hospital_id = patient.hospital_id
WHERE appointment.appoint_cancelled = 0
AND appointment.doctor_hospital_id = 1

-> DoctorSubmitDiagnosis

UPDATE medical_record
SET disease = 'คนโดนทิ้ง'
	, patient_condition = 'ซิมเศร้า'
	, diagnosis = 'เกิดจากอาการอกหัก ควรดื่มสุราในปริมาณมาก'
	, remark = 'โดนแฟนเก่าทำร้าย น่าสงสารมากๆ'
	, isActive = 1
WHERE id = 2

-> DoctorMedicalRecord

SELECT medical_record.id
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
WHERE appointment.hospital_id = 107
ORDER BY appointment.appoint_date DESC

-> DoctorViewMedicalRecord

SELECT patient.name
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
WHERE medical_record.id = 2

SELECT patient.name
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
WHERE medical_record.id = 2

SELECT druglist.*, drug.drug_name, drug.drug_type, drug.drug_unit
FROM druglist
LEFT JOIN drug
ON druglist.drug_id = drug.drug_id

-> Officer

SELECT appointment.appoint_id
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
ORDER BY appointment.appoint_date DESC

-> Pharmacist

SELECT perscription.presc_id
	, perscription.presc_is_cancelled
	, perscription.presc_is_dispensed
	, appointment.appoint_date
	, appointment.appoint_time
	, appointment.hospital_id
	, patient.national_id
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
AND appointment.hospital_id = 107
ORDER BY appointment.appoint_date DESC

SELECT druglist.*
	, drug.drug_name
	, drug.drug_type
	, drug.drug_unit
	, perscription.presc_id
FROM druglist
LEFT JOIN drug
ON druglist.drug_id = drug.drug_id
LEFT JOIN perscription
ON druglist.presc_id = perscription.presc_id
WHERE druglist.presc_id = 2

-> Nurse

UPDATE vital_sign_report
SET rpt_weight = NULL
	, rpt_height = NULL
	, rpt_max_pressure = NULL
	, rpt_termo = NULL
	, rpt_pulse = NULL
	, rpt_precondition = NULL
	, rpt_remark = 'ทดสอบ'
	, rpt_is_active = 1
WHERE rpt_id = 4
