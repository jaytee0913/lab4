<?php 
echo "<table>";
$x = 0;
echo "<tr>";
while($x <= 100)
{
	echo "<td>".$x."</td>";
	$x++;
}
echo "</tr>";
for($i = 1; $i <= 100; $i++)
{
	echo "<tr>";
	echo "<td>".$i."</td>";
	for($j = 1; $j <= 100; $j++)
	{
		echo  "<td>".$i*$j."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?> 
