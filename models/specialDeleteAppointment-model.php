<?php

	/**
	* 
	*/
	class SpecialDeleteAppointmentModel extends Model
	{
		
		function SpecialDeleteAppointmentModel()
		{
			parent::Model();
		}

		function delAppointment($appointmentId)
		{

			$stmt = $this->db->prepare(
					"UPDATE appointment
					SET appoint_cancelled = 1
					WHERE appoint_id = :appointmentId"
				);

			return $stmt->execute(array(
					':appointmentId' => $appointmentId
				));

		}

	}

?>