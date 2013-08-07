<?php
	class Post {
		public $title;
		public $content;
		public $type;
		public $point;
		public $post_date;

		function __construct($title, $content, $type, $point, $post_date) {
			$this->title = $title;
			$this->content = $content;
			$this->type = $type;
			$this->point = $point;
			$this->post_date = $post_date;
		}

		function setTitle($title) {
			$this->title = $title;
		}

		function getTitle($title) {
			return $this->title;
		}

		function setContent($content) {
			$this->content = $content;
		}

		function getTitle($content) {
			return $this->content;
		}

		function setTitle($type) {
			$this->type = $type;
		}

		function getTitle($type) {
			return $this->type;
		}

		function setTitle($point) {
			$this->point = $point;
		}

		function getTitle($point) {
			return $this->point;
		}

		function setPostDate($post_date) {
			$this->post_date = $post_date;
		}

		function getPostDate($post_date) {
			return $post_date;
		}
	}
?>