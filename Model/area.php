<?php
	class Area {
		public $name;
		public $content;
		public $img_url;
		function __construct($name, $count, $img_url) {
			$this->name = $name;
			$this->count = $count;
			$this->img_url = $img_url;
		}

		function getName() {
			return $this->name;
		}

		function setName($name) {
			$this->name = $name;
		}

		function getCount() {
			return $this->count;
		}

		function setCount($count) {
			$this->count = $count;
		}

		function getIconUrl() {
			return $this->icon_url;
		}

		function setImgUrl($icon_url) {
			$this->icon_url = $icon_url;
		}
	}
?>