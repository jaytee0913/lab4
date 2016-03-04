function inputInfo()
{
	var username = document.forms["myForm"]["username"].value;
	var password = document.forms["myForm"]["password"].value;
	var numApples = document.forms["myForm"]["numApples"].value;
	var numOranges = document.forms["myForm"]["numOranges"].value;
	var numBananas = document.forms["myForm"]["numBananas"].value;
	//var pLength = password.length;
	if(numApples < 0 || numOranges < 0 || numBananas < 0)
	{
		alert("Quantity cannot be negative");
	}
	/*if(password1 != password2)
	{
		alert("Passwords do not match!");
	}
	else if(p1Length < 8)
	{
		alert("Password needs to be at least 8 characters!");
	}*/
	//alert(numApples);
}