<?php

		$first_name = "Merit";
		$last_name= "Paist";

		echo $first_name." ".$last_name; // trükkimine

?>

<br>

<?php

	$age = 25;
	// if (loogikatehe) {tõene} else {väär}
	if($age < 18){
		echo "alaealine";
	} else { 
		echo "täisealine";
		
	}



?>
<br>

<?php
//see mida korratakse loogelistesse sulgudesse
	for($i = 0; $i < $age; $i = $i + 1){
		echo "palju".$i.", ";}
		
		echo "õnne";
?>