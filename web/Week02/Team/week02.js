function buttonClicked() {
   window.alert("Clicked!");
}

function changeColor() {
   var color = document.getElementById('divColor').value;
   var div = document.getElementById('div1');

   div.style.backgroundColor = color;  
}

function jQueryColor() {
   var changed = document.getElementById('divColor').value;
   $('#div1').css({"background-color": changed});
}

function toggle() {
   $('#div3').fadeToggle(2000); //2000 milliseconds
}