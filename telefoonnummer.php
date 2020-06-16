<?php
$pattern = '/[0-9]{10}/m';

$input = $argv[1];

if (isset($input))
 {

	if (preg_match($pattern, $input))
	{
	    echo("$input is een geldig nummer");
	}
	else
	{
	    echo("$input is niet een geldig nummer");
	}

}
else
{

	echo("no input");

}

