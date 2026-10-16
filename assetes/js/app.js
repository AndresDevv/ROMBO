/*document.addEventListener('DOMContentLoaded', function(){
    const formulario = document.getElementById('frmLogin');
    
    formulario.addEventListener('submit',function(e){
        e.preventDefault();

        const user = document.getElementById('user').value.trim();
        const pass = document.getElementById('pass').value.trim();

        if(user==="tito" && pass==="123"){         
            window.location.href="home.php";
        }else{
            alert("dato incorrectos");
        }
    });

 
}); */

function esValorValido(valor) {
    return !isNaN(valor) && valor > 0;
}

function calcularRombo() {
    const ladoInput = document.getElementById('txtLado');
    const alturaInput = document.getElementById('txtAltura');
    const areaInput = document.getElementById('txtA');
    const perimetroInput = document.getElementById('txtP');

    if (!ladoInput || !alturaInput || !areaInput || !perimetroInput) {
        return;
    }

    const lado = parseFloat(ladoInput.value);
    const altura = parseFloat(alturaInput.value);

    // Calculo en vivo: sin avisos para no interrumpir la escritura.
    if (esValorValido(lado) && esValorValido(altura)) {
        areaInput.value = (lado * altura).toFixed(2);
        perimetroInput.value = (lado * 4).toFixed(2);
    } else {
        areaInput.value = '';
        perimetroInput.value = '';
    }
}

function validarCalculo() {
    const ladoInput = document.getElementById('txtLado');
    const alturaInput = document.getElementById('txtAltura');

    if (!esValorValido(parseFloat(ladoInput.value))) {
        alert('Ingrese un lado válido mayor a cero');
        ladoInput.focus();
        return false;
    }

    if (!esValorValido(parseFloat(alturaInput.value))) {
        alert('Ingrese una altura válida mayor a cero');
        alturaInput.focus();
        return false;
    }

    calcularRombo();
    return true;
}

document.addEventListener('DOMContentLoaded', function () {
    ['txtLado', 'txtAltura'].forEach(function (id) {
        const input = document.getElementById(id);

        if (input) {
            input.addEventListener('input', calcularRombo);
        }
    });
});