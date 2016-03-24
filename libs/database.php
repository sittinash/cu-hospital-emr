<?php

	/**
	* 
	*/
	class Database extends PDO
	{
		
		function Database()
		{
				#print_r(parent::getAvailableDrivers());
				parent::__construct(
					DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME
					, DB_USER
					, DB_PSSW);
				parent::exec("set names utf8");
		}
	}

?>