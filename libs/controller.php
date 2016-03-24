<?php

	class Controller {

		protected $view;
		protected $model;

		function Controller() 
		{
			Session::init();

			$this->view = new View();
			$this->model = new Model();

		}

		public function renderView($name, $renderOpt = 0) 
		{
			$path = 'views/'.$name.'.php';
			if(!file_exists($path)){
				#Verify::alert("View not exist.");
				return false;
			}
			$this->view->render($name, $renderOpt);
		}

		public function loadModel($name) 
		{
			$path = 'models/'.$name.'-model.php';
			if(!file_exists($path)){
				#Verify::alert("Model not exist.");
				return false;
			}
			require $path;
			$model = $name.'Model';
			$this->model = new $model();
			
		}

	}

?>