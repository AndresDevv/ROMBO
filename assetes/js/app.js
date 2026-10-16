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

    if (isNaN(lado) || lado <= 0) {
        alert('Ingrese un lado válido mayor a cero');
        ladoInput.focus();
        areaInput.value = '';
        perimetroInput.value = '';
        return;
    }

    if (isNaN(altura) || altura <= 0) {
        alert('Ingrese una altura válida mayor a cero');
        alturaInput.focus();
        areaInput.value = '';
        perimetroInput.value = '';
        return;
    }

    areaInput.value = (lado * altura).toFixed(2);
    perimetroInput.value = (lado * 4).toFixed(2);
}

document.addEventListener('DOMContentLoaded', function () {
    ['txtLado', 'txtAltura'].forEach(function (id) {
        const input = document.getElementById(id);

        if (input) {
            input.addEventListener('input', calcularRombo);
        }
    });
});