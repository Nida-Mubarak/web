function solution(){
	x = document.getElementById('result').value;
	y = eval (x);
	document.getElementById('result').value = y;
}
function backspace(){
	var value = document.getElementById('result').value;
	document.getElementById('result').value = value.substr(0, value.length - 1);
}
