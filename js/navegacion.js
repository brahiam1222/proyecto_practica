
window.onload = function() {
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');

    inf_Consolidado.style.display = 'block';
    inf_Lluvia.style.display = 'none';

}

function show(param_div_id){
    const inf_Consolidado = document.getElementById('Consolidado');
    const inf_Lluvia = document.getElementById('Lluvia');
    if (param_div_id == 'Consolidado') {
        inf_Consolidado.style.display = 'block';
        inf_Lluvia.style.display = 'none';
    }
    else if (param_div_id == 'Lluvia') {
        inf_Consolidado.style.display = 'none';
        inf_Lluvia.style.display = 'block';
        
        
    }
        
    }




