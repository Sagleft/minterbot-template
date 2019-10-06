<?php
	namespace App\Controller;
	
	class Handler {
		public $user = null;    //User obj
		public $logic = null;   //Logic obj
		private $db = null;     //DataBase obj
		private $enviro = null; //Environment obj
		
		public function __construct() {
			$this->enviro = new \App\Model\Environment();
			
			$this->user = new \App\Controller\User();
			$this->logic = new \App\Controller\Logic();
			$this->db = new \App\Model\DataBase();
			
			$this->logic->setdb($this->db);
			$this->user->setdb($this->db);
			$this->logic->setUser($this->user);
		}
	}
	