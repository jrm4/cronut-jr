<?php

class subject {

	/* put properties first */

	protected $firstname;
	protected $lastname;
	protected $age; 

	// SETTERS
	public function setFirstname($fname) {
		$this->firstname = $fname;
	}
	
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	public function setAge($age) {
		$this->age = $age;
	}





	// GETTERS

	//this is REALLY weird 
	public function greetSpecialLastName() {
		$drblank = "Hello there, esteemed Dr. " . $this->lastname;
		echo $drblank;
	}

	// this is sort of weird
	public function drLastname() {
	$drname = "Dr. " . $this->lastname;
		return $drname;
	}

	// this is normal:
	public function getFirstname() {
		return $this->firstname;
	}

	//FULLNAME getter:
	public function getFullname() {
		$fullname = $this->firstname . " " . $this->lastname;
		return $fullname;
	}


	// For "age" -- we'll *never* access it directly after this, we'll use a code...

	public function agetocolor() {

		$theage = $this->age;

		if($theage <= 20) {
			$color = "Blue";
			}   
		else if ($theage <= 40) {
			$color = "Red";
			}			
		else if ($theage <= 60) {
			$color = "Green";
			}
		else  {$color="Yellow";}  /* no upper bound to age?*/ 
	   
		return $color;
        }
		
	


}

?>


