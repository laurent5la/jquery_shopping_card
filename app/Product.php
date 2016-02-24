<?php

	namespace app;

	class Product {
		private $id;
		private $name;
		private $price;
		private $quantity;
		private $description;
		private $duns;

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

	}