<?php

class tableCron extends controller {
	
	
	public function runCronjobAttempt(){
		
		  $deleteTableData = $this->model('tableCronModel')->tableCronAttempt('yourtable');
		
    	echo "1";

	}
	
	



?>


