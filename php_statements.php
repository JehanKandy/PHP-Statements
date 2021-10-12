<?php
	//if Statement
	echo "<u>if Statement </u><br>";

	$var = 8;

	if ($var <= 10) {
		echo "Vaild Number, Number is : ". $var;
	}

	echo "<br><br>";
	//if...else Statement
	echo "<u>if..else Statement </u><br>";

	$var1 = 40;
	if ($var1 <= 30) {
		echo "Vaild Number, Number is : ". $var1;
	}else{
		echo "Invaild Number, You Entered  ".$var1;
	}



	echo "<br><br>";
	//if...else if Statement
	echo "<u>if..else if Statement </u><br>";

	$marks = 41;
	if($marks >= 75){
		echo "A";
	}elseif ($marks >= 65) {
		echo "B";
	}elseif ($marks >= 50) {
		echo "C";
	}elseif ($marks >= 40) {
		echo "S";
	}else{
		echo "Fail";
	}


	echo "<br><br>";
	//Nested if Statement
	echo "<u>nested if Statement </u><br>";

	$num = 50;
	if ($num <= 60) {
		if ($num >= 40) {
			echo "Good Number, Number is : ".$num;
		}
	}



	echo "<br><br>";
	//Switch...case Statement
	echo "<u>Switch...case Statement </u><br>";


	$leavel = 1;	
	switch ($leavel) {
		case '1':
			echo "EASY";
			break;
		case '2':
			echo "MODERATE";
			break;
		case '3':
			echo "HARD";
			break;
		case '4':
			echo "EXTREME";
				break;	

		default:
			echo "Invaild Input";
			break;
	}
?>