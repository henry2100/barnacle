<?php
	class Page_Data{
		public $title = "";
		public $nav = "";
		public $footer = "";
		public $content = "";
		public $sidebar = "";
		public $css = "";
		public $js = "";
		public $embeddedStyle = "";
		public $loader = "";

		public function addCSS($href) {
			$this->css .= "<link rel='stylesheet' href='$href' type='text/css'>";
		}

		public function addJS($src) {
			$this->js .= "<script type='text/javascript' src='$src'></script>";
		}
	}
?>