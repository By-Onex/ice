/*phrase  = "Исправление прикуса брекетами. Исправьте неровные зубы на 50% дешевле. Лечение прикуса взрослым и детям. Идеальное исправление зубов за один год";


phrase2 = "Исправление прикуса <span id = \"rayter-brackets1\" style = \"font-weight: bold; color: white;\">брекетами</span>. Исправьте неровные зубы на <span style = \"font-weight: bold; color: blue;\" id = \"rayter-brackets2\">50% дешевле</span>. Лечение прикуса взрослым и детям. Идеальное исправление зубов за один год";


*/


phrase  = "Исправление прикуса брекетами. Исправьте неровные зубы на 50% дешевле. Лечение прикуса взрослым и детям. Идеальное исправление зубов за один год";


phrase2 = "Исправление прикуса <span id = \"rayter-brackets1\" style = \"font-weight: bold;\">брекетами</span>. Исправьте неровные зубы на <span style = \"font-weight: bold;\" id = \"rayter-brackets2\">50% дешевле</span>. Лечение прикуса взрослым и детям. Идеальное исправление зубов за один год";


document.write("<a style = \"color: white; text-decoration: none;\" rel = \"nofollow\" target = \"_blank\" href = \"http://li.ru/go?stomatolog-rayter.ru/\">>><span style = \"text-decoration: blink; font-weight: bold;\">Узнать больше</span>>> <span id = \"rayter_text\"></span></a>");





var rayter_text = document.getElementById("rayter_text");


var rayter_brackets1 = document.getElementById("rayter-brackets1");


var rayter_brackets2 = document.getElementById("rayter-brackets2");


rayter_text.innerHTML = phrase2;


function set_rayter_text()


{


	var rayter_brackets1 = document.getElementById("rayter-brackets1");


	var rayter_brackets2 = document.getElementById("rayter-brackets2");


	/*


	textLength = rayter_text.innerHTML.length;


	if (textLength < phrase.length)


	{


		rayter_text.innerHTML += phrase.charAt(textLength);


		setTimeout("set_rayter_text()", 50);


	}


	else


	{


		rayter_text.innerHTML = phrase2;


	}


	///////////////////////////////////////////////////


	if (rayter_brackets1.style.color == "white")


		rayter_brackets1.style.color = "blue";


	else


		rayter_brackets1.style.color = "white";


	


	if (rayter_brackets2.style.color == "white")


		rayter_brackets2.style.color = "blue";


	else


		rayter_brackets2.style.color = "white";


	


	*/


	setTimeout("change_rayter_text()", 150);


	


}


colors = new Array("91a00a","bac829",


	"FFFFFF"/*,"FFFFFF","FFFFFF","FFFFFF","FFFFFF","FFFFFF",


	"FFEEEE","FFDDDD","FFCCCC","FFBBBB","FFAAAA","FF9999",


	"FF8888","FF7777","FF6666","FF5555","FF4444","FF3333",


	"FF2222","FF1111","FF0000","FF1100","FF2200","FF3300",


	"FF4400","FF5500","FF6600","FF7700","FF8800","FF9900",


	"FFAA00","FFBB00","FFCC00","FFDD00","FFEE00","FFFF00",


	"EEFF00","DDFF00","CCFF00","BBFF00","AAFF00","99FF00",


	"88FF00","77FF00","66FF00","55FF00","44FF00","33FF00",


	"22FF00","11FF00","00FF00","00FF11","00FF22","00FF33",


	"00FF44","00FF55","00FF66","00FF77","00FF88","00FF99",


	"00FFAA","00FFBB","00FFCC","00FFDD","00FFEE","00FFFF",


	"00EEFF","00DDFF","00CCFF","00BBFF","00AAFF","0099FF",


	"0088FF","0077FF","0066FF","0055FF","0044FF","0033FF",


	"0022FF","0011FF","0000FF","1111FF","2222FF","3333FF",


	"4444FF","5555FF","6666FF","7777FF","8888FF","9999FF",


	"AAAAFF","BBBBFF","CCCCFF","DDDDFF","EEEEFF","FFFFFF"*/);


	


function invert_string(colorString)


{


	var f_result = "";


	


	for (j = 0; j < 6; j++)


	{


		switch (colorString.charAt(j))


		{


			case "0":


				f_result += "F"; break;


			case "1":


				f_result += "E"; break;


			case "2":


				f_result += "D"; break;


			case "3":


				f_result += "C"; break;


			case "4":


				f_result += "B"; break;


			case "5":


				f_result += "A"; break;


			case "6":


				f_result += "9"; break;


			case "7":


				f_result += "8"; break;


			case "8":


				f_result += "7"; break;


			case "9":


				f_result += "6"; break;


			case "A":


				f_result += "5"; break;


			case "B":


				f_result += "4"; break;


			case "C":


				f_result += "3"; break;


			case "D":


				f_result += "2"; break;


			case "E":


				f_result += "1"; break;


			case "F":


				f_result += "0"; break;


		}


	}


	return f_result;


}


invertedColors = new Array(colors.length);


for (i = 0; i < invertedColors.length; i++)


{


	invertedColors[i] = invert_string(colors[i]);


}


i = 0;


delta = 1;


prevedWrote = false;


function change_rayter_text()


{


	var rayterText = document.getElementById("rayter_text");


	var rayterBacckk = document.getElementById("rayter_back");


	/*


	if (!prevedWrote)


	{


		alert("preved!");


		prevedWrote = true;


	}


	if (i >= colors.length - 1)


		delta = -1;


	if (i <= 1)


		delta = 1;


	*/


	i += delta;


	if (i >= colors.length - 1)


		i = 0;


	//rayterText.style.color = "#" + invertedColors[i];


	rayterBacckk.style.backgroundColor = "#" + colors[i];


	setTimeout("change_rayter_text()", 1000);


}