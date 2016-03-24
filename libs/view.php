<?php

	class View {

		private $css;
		private $script;

		function View() {

		}

		public function render($name, $opt = 0) {
			//echo 'View rendered. </br>';
			if($opt == 0) {
				require 'views/header.php';
				require 'views/'.$name.'.php';
				require 'views/footer.php';
			} else if($opt == 1){
				require 'views/'.$name.'.php';
				require 'views/footer.php';
			} else {
				require 'views/'.$name.'.php';
			}
		}

		public function getCSS() {
			//verify::alert('Script get.');
			return $this->css;
		}

		public function setCSS($arr) {
			//verify::alert('Script set.');
			$this->css = $arr;
		}

		public function getScript() {
			//verify::alert('Script get.');
			return $this->script;
		}

		public function setScript($arr) {
			//verify::alert('Script set.');
			$this->script = $arr;
		}

	}

?>