<?php
	/*
	 * $db objekt bazy danych
	 * $query zapytanie ,ale już ze znakami zapytania
	 * $types to wartości parametrów
	 * Reszta argumentów to wartości do zapytania 
	 */
	//Instrukcje typu SELECT, SHOW
	function mysql_secure_select($db, $query, $values, $bindings) {
		$stmt = $db->prepare($query);
		$bind_resultMethod = new ReflectionMethod('mysqli_stmt', 'bind_result');
		
		$bind_paramMethod->invokeArgs($stmt, $values);
		$stmt->execute();
		$bind_resultMethod->invokeArgs($stmt, $bindings);
		return $stmt;
	}
	
	//Instrukcje typu INSERT INTO, UPDATE, DELETE, ALTER
	function mysql_secure_data_manipulation($db, $query, $values) {
		$stmt = $db->prepare($query);
		$bind_paramMethod = new ReflectionMethod('mysqli_stmt', 'bind_param');
		
		$bind_paramMethod->invokeArgs($stmt, $values);
		if ($stmt->execute())
			return $stmt->close();
		else false;
	}
?>