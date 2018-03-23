#!/usr/bin/php
<?php 
while (1)
{
	$stdin = fopen('php://stdin', 'r');
	echo "Entrez un nombre: ";
	$input = trim(fgets($stdin));
	if ($input == EOT)
		exit (1);
	if (is_numeric($input))
	{
		echo "Le chiffre $input est ";
		if ($input % 2 == 0)
			echo "Pair\n";
		else
			echo "Impair\n";
	}
	else 
	{
		echo "'$input' n'est pas un chiffre\n";
	}
}
?>
