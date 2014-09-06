<?php
	class PodstawowyModel {
		private $db_connect;
		
		public function __construct($host, $user, $password, $database) {
			$this->db_connect = mysqli_connect($host, $user, $password, $database);
		}
		
		public function __destruct() {
			$this->db_connect->close();
		}
		
		public function insert_into($data) {
			
		}
		
		public function select($data) {
			
		}
		
		public function 
	}
?>
