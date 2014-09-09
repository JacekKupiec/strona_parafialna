<?php
	class PodstawowyModel {
		protected $db_connect;
		
		public function __construct($host, $user, $password, $database) {
			$this->db_connect = mysqli_connect($host, $user, $password, $database);
		}
		
		public function __destruct() {
			$this->db_connect->close();
		}
		
		public function query($qstring) {
			return $db_connect->querry($qstring);
		}
		
		abstract public function truncate();
		abstract public function insert_into($data);
	}
?>
