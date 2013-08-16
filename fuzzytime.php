<!DOCTYPE html>
<?php date_default_timezone_set('America/Detroit'); ?>
<html>

<head>
<link type='text/css' rel='stylesheet' href='style.css'/>
<meta http-equiv="refresh" content="60" />
</head>
<body>
<?php

# Fuzzy Time php file. Displays fuzzy time in quarter hours.
# reference pages: 	php date function: 	http://www.w3schools.com/php/func_date_date.asp
#					php write to file: 	http://www.tizag.com/phpT/filewrite.php

$hours = date("h");
$minutes = date(i);
$hText = "Hours";
$mText = "Minutes";

switch ($minutes)
	{
	case 0 <= $minutes && $minutes <= 7:
		$mText = "O-clock";
		break;
	case 8 <= $minutes && $minutes <= 22:
		$mText = "Quarter after";
		break;
	case 23 <= $minutes && $minutes <= 37:
		$mText = "Half past";
		break;
	case 38 <= $minutes && $minutes <= 52:
		$mText = "Quarter to";
		$hours ++;
		break;
	default:
		$mText = "O-clock";
		$hours ++;
	}

switch ($hours)
	{
	case 1:
		$hText = "One";
		break;
	case 2:
		$hText = "Two";
		break;
	case 3:
		$hText = "Three";
		break;
	case 4:
		$hText = "Four";
		break;
	case 5:
		$hText = "Five";
		break;
	case 6:
		$hText = "Six";
		break;
	case 7:
		$hText = "Seven";
		break;
	case 8:
		$hText = "Eight";
		break;
	case 9:
		$hText = "Nine";
		break;
	case 10:
		$hText = "Ten";
		break;
	case 11:
		$hText = "Eleven";
		break;	
	case 12:
		$hText = "Twelve";
		break;
	case 13:
		$hText = "One";
		break;
	case 14:
		$hText = "Two";
		break;	
	case 15:
		$hText = "Three";
		break;
	default:
		$hText = "Four";
	}
/*
# Test display output used to diagnose programming errors
echo "date function " . date("h:i") . "<br>";
echo "function variable output " . $hours . ":" . $minutes . "<br>";
echo "text variable output " . $hText . ":" . $mText . "<br>";
*/
if($mText === "O-clock")
	{
	echo $hText . "<br>" . $mText;
	}	else	{
	echo $mText . "<br>" . $hText;
	}

# Some stuff I might use later once I figure it out.
# $f = fopen("fuzzyTime.txt", "w");
# fwrite($f, fuzzyTime);
# fclose($f);
?>
</body>
</html>