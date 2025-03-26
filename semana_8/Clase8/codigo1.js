var cad=document.getElementById("texto2");
//adicionando dos metodos
cad.addEventListener("mouseenter",function(){
  cad.innerHTML="Paginas dinamicas con Javascript";
  cad.style.color="red";
});

cad.addEventListener("mouseleave",function(){
  cad.innerHTML="Deja el enfoque del texto";
  cad.style.color="blue";
});

var btn=document.getElementById("boton1");
btn.addEventListener("click",function(){
	 alert("Buenas noches");
});