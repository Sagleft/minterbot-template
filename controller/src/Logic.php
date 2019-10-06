<?php
	namespace App\Controller;
	
	class Logic {
		public $user = null; //User obj
		
		private $db   = null;     //DataBase obj
		private $coin = null;     //MinterClient obj
		private $telegram = null; //Telegram obj
		
		public function __construct() {
			$this->telegram = new Longman\TelegramBot\Telegram(getenv('bot_token'), getenv('bot_username'));
		}
		
		public function setdb($db) {
			$this->db = &$db;
		}
		
		public function setUser($user): void {
			$this->user = &$user;
		}
		
		public function coin_init() {
			$this->coin = new \App\Model\MinterClient();
		}
	}
	