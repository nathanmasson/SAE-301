var slide = new Array("banieres/paysage1.png", "banieres/paysage2.png", "banieres/paysage3.png", "banieres/paysage4.png");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}