function inputInfo()
{
	var username = document.forms["myForm"]["username"].value;
	var password = document.forms["myForm"]["password"].value;
	var numApples = document.forms["myForm"]["numApples"].value;
	var numOranges = document.forms["myForm"]["numOranges"].value;
	var numBananas = document.forms["myForm"]["numBananas"].value;

	if(numApples < 0 || numOranges < 0 || numBananas < 0)
	{
		alert("Quantity cannot be negative");
		return false;
	}
	
	return true;
}