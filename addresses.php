<?php
	// first add the header of the CSV file. The CSV file needs to be in the same place as this PHP script
	$header = "email" . "\n";
	file_put_contents('filename.csv', $header, FILE_APPEND); // this is the command that adds the info from the $header variable on a line

	//in the below example the script adds 1.000.000 addresses in the CSV, one on each line
	for ($i=1; $i <=1000000; $i++)
	{
		$string = $i . "_address@sink.sendgrid.com\n"; //the address is built by concatenating the value of the variable
														// "i" to the rest of the email address. At the end we add \n to jump on a 
														//new line so that the next address will be added on a new line.
		echo $string;  //this simply displays the email addresses when you run the code.
		file_put_contents('filename.csv', $string, FILE_APPEND); 
	}
?>