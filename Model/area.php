<?php
	class Area {
		public $id;
		public $name;
		public $count;
		public $icon_url;
		function __construct($id,$name, $count, $icon_url) {
			$this->id = $id;
			$this->name = $name;
			$this->count = $count;
			$this->icon_url = $icon_url;
		}

		function getId() {
			return $this->id;
		}

		function setId($id) {
			$this->id = $id;
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

		function setIconUrl($icon_url) {
			$this->icon_url = $icon_url;
		}
	}
?>