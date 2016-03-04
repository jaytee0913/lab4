<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$username = $_POST["username"];
$password = $_POST["password"];
$priceA = 2.5;
$priceO = 2;
$priceB = 1;
$numApples = $_POST["numApples"];
$numOranges = $_POST["numOranges"];
$numBananas = $_POST["numBananas"];
$shipOption = $_POST["shippingOption"];

echo "WELCOME!!!<br>";
echo "username: " .$username. "<br>";
echo "password: " .$password. "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<th class='colorG'></th>";
echo "<th class='colorG'>Quantity</th>";
echo "<th class='colorG'>Cost Per Item</th>";
echo "<th class='colorG'>Sub-total</th>";
echo "</tr>";

echo "<tr>";
echo "<th class='colorG'>Apples</th>";
echo "<td class='colorP'>".$numApples."</td>";
echo "<td class='colorP'>$2.50</td>";
echo "<td class='colorP'>$".$priceA*$numApples."</td>";
echo "</tr>";

echo "<tr>";
echo "<th class='colorG'>Oranges</th>";
echo "<td class='colorP'>".$numOranges."</td>";
echo "<td class='colorP'>$2.00</td>";
echo "<td class='colorP'>$".$priceO*$numOranges."</td>";
echo "</tr>";

echo "<tr>";
echo "<th class='colorG'>Bananas</th>";
echo "<td class='colorP'>".$numBananas."</td>";
echo "<td class='colorP'>$1.00</td>";
echo "<td class='colorP'>$".$priceB*$numBananas."</td>";
echo "</tr>";

echo "<tr>";
echo "<th class='colorG'>Shipping</th>";
if($shipOption == 0)
{
	echo "<td class='colorP' colspan='2'>Free</td>";
}
else if($shipOption == 50)
{
	echo "<td class='colorP' colspan='2'>Overnight</td>";
}
else if($shipOption == 5)
{
	echo "<td class='colorP' colspan='2'>Three day</td>";
}
echo "<td class='colorP'>$".$shipOption."</td>";
echo "</tr>";

$total = ($priceA*$numApples) + ($priceO*$numOranges) + ($priceB*$numBananas) + $shipOption;
echo "<tr>";
echo "<th class='colorG' colspan = 3>Total Cost</th>";
echo "<th class='colorG'>$".$total."</th>";

echo "</table>";
?>