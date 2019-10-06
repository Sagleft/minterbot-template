<?php
	namespace App\Model;
	
	class MinterClient {
		protected $api = null;
		
		public function __construct() {
			$this->api = new MinterAPI(getenv('node'));
		}
	}
	