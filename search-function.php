<?php
function check_search($phoneMDL) {
		

		include 'config.php';
		include 'opendb.php';

		if(mysqli_num_rows(mysqli_query($db, "SELECT model FROM phonemdl WHERE model = '$phoneMDL' "))){
			return 1;
		}
		else{
			return 0;
		}

		
}

