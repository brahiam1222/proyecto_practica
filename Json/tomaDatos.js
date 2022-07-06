const botonEnviar = document.getElementById('enviarterminacion');
var ArrayRacimosCortados = new Array();
var ArrayRacimosRepicados = new Array();
var ArrayTabla = new Array();
var ArrayDefectos = new Array();

botonEnviar.addEventListener('click', function (e) {
    var rCortados = document.getElementsByClassName('racimos'),
        valueRacimosCortados = [].map.call(rCortados, function (input) {
            ArrayRacimosCortados.push(input.value);
        });

    var rRepicados = document.getElementsByClassName('repicados'),
        valueRacimosRepicados = [].map.call(rRepicados, function (input2) {
            ArrayRacimosRepicados.push(input2.value);
        });

        // var defectos = document.getElementsByClassName('defecto1'),
        // valueDefectos = [].map.call(defectos, function (input3) {
        //     ArrayDefectos.push(input3.value);
        // });
        // console.log(ArrayDefectos);
        // console.log(defectos);
        // tomar el valor de los defectos



        //leer dato de tabla y guardarlo en json
        var tabla = document.getElementById('tabla');
        var filas = tabla.getElementsByTagName('tr');
        for (var i = 1; i < filas.length; i++) {
            var celdas = filas[i].getElementsByTagName('td');
            var fila = {
                "fila": celdas[0].firstChild.value,
                "Cod": celdas[1].firstChild.value,
                "Fruta": celdas[2].firstChild.value,
                "Cjs": celdas[3].firstChild.value,
                "CjsRechazadas": celdas[4].firstChild.value
            };
            ArrayTabla.push(fila);
        }
        
        

    // console.log(ArrayRacimosCortados);
    // console.log(ArrayRacimosRepicados);

    // var vTabla = document.getElementById('tabla');
    // var vTd = document.getElementsByTagName('td');
    // var vTr = document.getElementsByTagName('tr');
    
    // console.log(vTd);
    // // var vTabla = document.getElementsByTagName("td");
    //     //recorred td de tabla
    //     for (var i = 0; i < vTr.length; i++) {
            


            
    //         console.log(vTabla[i].firstChild.value);
    //         ArrayTabla.push(vTabla[i].firstChild.value);
    //     }
        
        // valueTabla = [].map.call(vTabla, function (input3) {
        //     ArrayTabla.push(input3.value);
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

    terminacionDiaria( finca, aRecorrida, cjsEstimadas, pEmpaca, pCampo, cMano, ArrayRacimosCortados, ArrayRacimosRepicados, defecto1, defecto2, defecto3, ArrayTabla, cjsNal, bolNacional, klsNacional, klsPersonal, klsFrPiso);
    










}
