<?php
	class Board {
		public $name;
		public $moderator;
		function __construct($name, $moderator) {
			$this->name = $name;
			$this->moderator = $moderator;
		}

		function getName() {
			return $this->name;
		}

		function setName($name) {
			$this->name = $name;
		}

		function getModerator() {
			return $this->moderator;
		}

		function setModerator($moderator) {
			$this->moderator = $moderator;
		}
	}
?>