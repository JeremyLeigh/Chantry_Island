<?php

	function getAll($tbl) {
		$queryAll = "SELECT * From tbl_img";
		$runAll = mysqli_query(mysqli_connect("localhost","root","","a3_cooperInfo"), $queryAll);
		//echo $runAll;
		if($runAll){
			return $runAll;
		}
		else{
			$error = "Error accessing info"	;
			return $error;
		}

		mysqli_close($link);
	}


?>
