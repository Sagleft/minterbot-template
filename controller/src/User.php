<?php
	namespace App\Controller;
	
	class User {
		public function __construct() {
			//
		}
		
		public function setdb($db): void {
			$this->db = &$db;
		}
	}
	