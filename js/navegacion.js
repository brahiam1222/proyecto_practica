
window.onload = function() {
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');
    const inf_RacimosCortados = document.getElementById('RacimosCortados');

    inf_Terminacion.style.display = 'flex';
    inf_Consolidado.style.display = 'none';
    inf_Lluvia.style.display = 'none';
    inf_RacimosCortados.style.display = 'none';
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
    if (param_div_id == 'RacimosCortados') {
        inf_RacimosCortados.style.position = 'absolute';  
        inf_RacimosCortados.style.display = 'block';  
    }
    else if (param_div_id == 'RacimosRepicados') {
        inf_RacimosRepicados.style.position = 'absolute';  
        inf_RacimosRepicados.style.display = 'block';  
    }
}

function sinemergentes(param_div_id){
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_RacimosRepicados = document.getElementById('RacimosRepicados');
    if (param_div_id == 'RacimosCortados') {
        inf_RacimosCortados.style.position = 'none';  
        inf_RacimosCortados.style.display = 'none';  
    }
    else if (param_div_id == 'RacimosRepicados') {
        inf_RacimosRepicados.style.position = 'none';  
        inf_RacimosRepicados.style.display = 'none';  
    }
}

