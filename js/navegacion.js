
window.onload = function() {
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');

    inf_Terminacion.style.display = 'block';
    inf_Consolidado.style.display = 'none';
    inf_Lluvia.style.display = 'none';

}

function show(param_div_id){
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');
    if (param_div_id == 'Consolidado') {
        inf_Consolidado.style.display = 'block';
        inf_Lluvia.style.display = 'none';
        inf_Terminacion.style.display = 'none';
    }
    else if (param_div_id == 'Lluvia') {
        inf_Consolidado.style.display = 'none';
        inf_Lluvia.style.display = 'block';
        inf_Terminacion.style.display = 'none';
    }
    else if (param_div_id == 'Terminacion') {
        inf_Consolidado.style.display = 'none';
        inf_Lluvia.style.display = 'none';
        inf_Terminacion.style.display = 'block';

        
    }


}

