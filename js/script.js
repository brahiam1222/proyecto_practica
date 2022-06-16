//capturar name con jquery y agregarle funcion change
// $(document).ready(function(){
//     $("#name").change(function(){





$(document).ready(function(){
$("#email").change(function () {
    var email = $(this).val();
    var datos = new FormData();
    datos.append("validarEmail", email);
    $.ajax({
        url: 'ajax/formulario.ajax.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            console.log("respuesta", respuesta);
        }
    })})});







// const registro = document.getElementsByName('registroEmail')[0];
// registro.addEventListener('keyup', (e) => {
//     var email = e.target.value;
//     console.log(email);
//     var datos = new FormData();
//     datos.append('validarEmail', email);

//     registro.ajax({
//         url: 'ajax/formulario.ajax.php',
//         method: 'POST',
//         data: datos,
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: function (respuesta) {

//             console.log("respuesta", respuesta);

//         }
//     });
// })