
window.onload = function() {
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_FrutaExportada = document.getElementById('FrutaExportada');

    inf_Terminacion.style.display = 'flex';
    inf_Consolidado.style.display = 'none';
    inf_Lluvia.style.display = 'none';
    inf_RacimosCortados.style.display = 'none';
    inf_FrutaExportada.style.display = 'none';
}

function show(param_div_id){
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');
    if (param_div_id == 'Consolidado') {
        inf_Consolidado.style.display = 'flex';
        inf_Lluvia.style.display = 'none';
        inf_Terminacion.style.display = 'none';
    }
    else if (param_div_id == 'Lluvia') {
        inf_Consolidado.style.display = 'none';
        inf_Lluvia.style.display = 'flex';
        inf_Terminacion.style.display = 'none';
    }
    else if (param_div_id == 'Terminacion') {
        inf_Consolidado.style.display = 'none';
        inf_Lluvia.style.display = 'none';
        inf_Terminacion.style.display = 'flex';  
    }
    
    



}

function emergentes(param_div_id){
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_RacimosRepicados = document.getElementById('RacimosRepicados');
    const inf_FrutaExportada = document.getElementById('FrutaExportada');
    if (param_div_id == 'RacimosCortados') {
        inf_RacimosCortados.style.position = 'absolute';  
        inf_RacimosCortados.style.display = 'block';  
    }
    else if (param_div_id == 'RacimosRepicados') {
        inf_RacimosRepicados.style.position = 'absolute';  
        inf_RacimosRepicados.style.display = 'block';  
    }
    else if (param_div_id == 'FrutaExportada') {
        inf_FrutaExportada.style.position = 'absolute';  
        inf_FrutaExportada.style.display = 'block';  
    }
}

function sinemergentes(param_div_id){
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_RacimosRepicados = document.getElementById('RacimosRepicados');
    const inf_FrutaExportada = document.getElementById('FrutaExportada');
    if (param_div_id == 'RacimosCortados') {
        inf_RacimosCortados.style.position = 'none';  
        inf_RacimosCortados.style.display = 'none';  
    }
    else if (param_div_id == 'RacimosRepicados') {
        inf_RacimosRepicados.style.position = 'none';  
        inf_RacimosRepicados.style.display = 'none';  

    }
    else if (param_div_id == 'FrutaExportada') {
        inf_FrutaExportada.style.position = 'none';  
        inf_FrutaExportada.style.display = 'none';  
    }
}



function insertaFila() {
    const tabla = document.getElementById('tabla').insertRow();
    const celda1 = tabla.insertCell(0);
    const celda2 = tabla.insertCell(1);
    const celda3 = tabla.insertCell(2);
    const celda4 = tabla.insertCell(3);


    celda1.innerHTML='<input type="text" class="form-control" id="cod" placeholder="" value="" required>';
    celda2.innerHTML='<input type="text" class="form-control" id="sm1" placeholder="" value="" disabled>';
    celda3.innerHTML='<input type="text" class="form-control" id="sm2" placeholder="" value="" required="">';
    celda4.innerHTML='<input type="text" class="form-control" id="sm3" placeholder="" value="" required="">';
    
}

