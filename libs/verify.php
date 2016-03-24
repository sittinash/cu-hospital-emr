<?php

/**
		* 
		*/
		class Verify
		{
			
			function Verify	()
			{
				ob_start();
			}

			public static function alert($mssg) {
				echo "<script type='text/javascript'>alert('$mssg');</script>";
			}

			public static function log($mssg) {
				echo "<script type='text/javascript'>console.log('$mssg');</script>";
			}
		}		

?>