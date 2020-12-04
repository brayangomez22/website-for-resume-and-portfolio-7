$(document).ready(function(){
  var Active = false;

  function toggleBio(){
   if(Active == false){
     primeraClase = 'expandir-ancho';
     segundaClase = 'expandir-altura';
     Active = true;
   }else{
     primeraClase = 'expandir-altura';
     segundaClase = 'expandir-ancho';
     Active = false;
   }

   $(".wrap-center").toggleClass("activacion").toggleClass(primeraClase).delay(500).queue(function(){
     $(this).toggleClass(segundaClase).dequeue();
   });
  }

  $(".acercamiento, .alternar").on("click", toggleBio);
});
