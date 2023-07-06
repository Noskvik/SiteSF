document.querySelector("#colorButton").onclick = function(){
    const userColor = prompt("Напиши цвет на английском:");
    const addition = document.getElementById('addition');
    addition.style.color = userColor;
}