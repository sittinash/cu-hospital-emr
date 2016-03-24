<?php

	class Bootstrap {

		function Bootstrap() {

			/*if ( extension_loaded('pdo') ) {
				echo 'PDO loaded. </br>';
			} else {
				echo 'PDO not loaded. </br>';
			}*/

			$url = isset($_GET['url'])? $_GET['url'] : null;
			$url = explode('/', rtrim($url, '/'));
			
			#print_r($url);

			if(empty($url[0])) {
				$this->_loadController('login');
				return false;
			}

		    if (!file_exists('controllers/'.$url[0].'-controller.php')) {
		   		$this->_loadController('error');
				return false;
			}

			$ctrl = $this->_loadController($url[0]);

			#Verify::alert('Controller loaded.');

		    if(isset($url[1]) && method_exists($url[0], $url[1])) {

		    	#Verify::alert('Param sent.');

		    	if(isset($url[2])) {
		    		#call_user_func_array(array($url[0], $url[1]), $url[2]);
		    		$ctrl->$url[1]($url[2]);
		    	} else {
		    		#call_user_func(array($ctrl, $url[1]));
		    		$ctrl->$url[1]();
		    	}
		    }

		}

		private function _loadController($name, $renderOpt = 2) {

			require 'controllers/'.$name.'-controller.php';
			$ctrl = new $name();
		    $ctrl->loadModel($name);
		    $ctrl->renderView($name, $renderOpt);
		    return $ctrl;

		}

	}

?>