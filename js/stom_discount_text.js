//window.onload = change_stomDiscount_text;
shouldBlink = true;
stomBlinkColors = new Array("fff", "fee", "fdd", "fcc", "fbb", "faa", "f99", "f88", "f77", "f66", "f55", "f44", "f33", "f22", "f11", "f00");
k = 0;
function change_stomDiscount_text()
{
	textElement = document.getElementById("stom_discount_text");
	if (k >= stomBlinkColors.length - 1)
	{
		delta1 = -1;
	}
	if (k <= 1)
	{
		delta1 = 1;
	}
	k += delta1;
	if (textElement)
	{
		textElement.style.color = "#" + stomBlinkColors[k];
		if (shouldBlink)
		{
			setTimeout("change_stomDiscount_text()", 40);
		}
		else
		{
			textElement.style.color = "#666";
		}
	}
}