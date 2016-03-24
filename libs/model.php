<?php

	/**
	* 
	*/
	class Model
	{
		
		protected $db;

		function Model()
		{
			//echo 'Model constructed. </br>';
			$this->db = new Database();
		}

	}

?>