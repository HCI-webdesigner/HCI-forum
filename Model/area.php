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

		function getImgUrl() {
			return $this->img_url;
		}

		function setImgUrl($img_url) {
			$this->img_url = $img_url;
		}
	}
?>