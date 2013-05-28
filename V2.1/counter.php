<?php


$counter = 0;
for ($i=1; $i<=100; $i++)
{
	++$counter;
	print $counter;
	print "\n";
	if($counter % 5 === 0)
	{
		print "\n";
		echo "Divisble by 5";
		print "\n";
	}
}

?>
