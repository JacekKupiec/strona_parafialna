<?php
	/*
	 * $db objekt bazy danych
	 * $query zapytanie ,ale już ze znakami zapytania
	 * $types to wartości parametrów
	 * Reszta argumentów to wartości do zapytania 
	 */
	function sql_secure_query($db, $query, $values, $bindings) {
		$stmt = $db->prepare($query);
		$length = (func_num_args() - 3) / 2;
		$bind_paramMethod = new ReflectionMethod('mysqli_stmt', 'bind_param');
		$bind_resultMethod = new ReflectionMethod('mysqli_stmt', 'bind_result');
		
		$bind_paramMethod->invokeArgs($stmt, $values);
		$stmt->execute();
		$bind_resultMethod->invokeArgs($stmt, $bindings);
		return $stmt;
	}
?>