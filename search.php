<?php
include 'search-function.php';



	

if ($_REQUEST['job']=="search"){

	$phoneMDL=$_POST['phoneMDL'];

	if (check_search($phoneMDL)==1){
		
		
	
	
		header('location: modelshow.php');

		
		
	}

	else {
        
         
			header('location: Brand.html');
		
	
	}

}


else{
                  header('location: Brand.html');
					
                    
}