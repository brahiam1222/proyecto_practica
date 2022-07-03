const botonEnviar = document.getElementById('enviarterminacion');
var ArrayRacimosCortados = new Array();
var ArrayRacimosRepicados = new Array();
var ArrayTabla = new Array();

botonEnviar.addEventListener('click', function (e) {
    var rCortados = document.getElementsByClassName('racimos'),
        valueRacimosCortados = [].map.call(rCortados, function (input) {
            ArrayRacimosCortados.push(input.value);
        });

    var rRepicados = document.getElementsByClassName('repicados'),
        valueRacimosRepicados = [].map.call(rRepicados, function (input2) {
            ArrayRacimosRepicados.push(input2.value);
        });

    // console.log(ArrayRacimosCortados);
    // console.log(ArrayRacimosRepicados);

    var vTabla = document.getElementsByClassName('datosTabla'),
        valueTabla = [].map.call(vTabla, function (input3) {
            ArrayTabla.push(input3.value);
        });


});






document.querySelector('#enviarterminacion').addEventListener('click', guardarTerminacion);


function guardarTerminacion() {


    var finca = document.querySelector('#fincas').value,
        aRecorrida = document.getElementById('area').value,
        cjsEstimadas = document.getElementById('cajas').value,
        pEmpaca = document.getElementById('empaca').value,
        pCampo = document.getElementById('campo').value,
        cMano = document.getElementById('mano').value,
        //
        //        
        defecto1 = document.querySelector('#defecto1').value,
        defecto2 = document.querySelector('#defecto2').value,
        defecto3 = document.querySelector('#defecto3').value,
        // fExpor = document.getElementById('fexpor').value,
        cjsNal = document.getElementById('cjsnal').value,
        bolNacional = document.getElementById('bolnacional').value,
        klsNacional = document.getElementById('klsnacional').value,
        klsPersonal = document.getElementById('klspersonal').value,
        klsFrPiso = document.getElementById('klsfrpiso').value;

    terminacionDiaria();











}
