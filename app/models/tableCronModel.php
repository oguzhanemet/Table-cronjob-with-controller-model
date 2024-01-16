<?php

class tableCronModel extends model{
	
	
	
	
	public function tableCronAttempt($table){
		
		//this one is delete interval 1 month
		$delete = $this->db->prepare("DELETE FROM $table WHERE FROM_UNIXTIME($yourunixtimeattribute) >= DATE_SUB(NOW(), INTERVAL 1 MONTH)");
		$delete->execute();
		$countValue = $delete->rowCount();
		
		if($delete){
			//if delete query successfull, we'll see the data in $yourinserttable
			$date = date("Y-m-d H:i:s");
			$insert = $this->db->prepare("INSERT INTO $yourinserttable (x,x,date) values (?,?,?)");
			$insert->execute(array($x,$x,$x));
			 $insert = $insert->fetch(PDO::FETCH_ASSOC);
			
		}
			
	}
	
	
	
}




?>
