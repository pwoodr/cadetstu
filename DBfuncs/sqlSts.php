<?php

	function getResultFromTable($conn, $query)
		{

		//get the content
		$arr=array();
		$result=$conn->query($query);
		if(!$result) die("Fatal Error on query");

		$rows=$result->num_rows;
		for($i=0;$i<$rows;$i++)
		{
			array_push($arr, $result->fetch_assoc());
		}
		$result->free();
		return $arr;

		}

?>