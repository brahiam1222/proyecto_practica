// const expresiones = {
//     nombres: /^[a-zA-ZÀ-ÿ\s]{2,40}$/, // Letras y espacios, pueden llevar acentos.
//     contraseña: /^.{8,12}$/, // 8 a 12 digitos.
//     correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.].{1,2}$/,
//     // telefono: /^\d{7,10}$/ // 7 a 10 numeros.
// }

// const form = document.getElementById('formulario');
// const inputs = document.querySelectorAll('#formulario input');
// const campos = {
//     nombre: false,
//     correo: false,
//     contraseña: false,
//     confirmar: false,
// }
// console.log(campos);
// console.log(inputs);


// const validarInputs = (e) => {

//     switch (e.target.name) {
//         case 'registroNombre':
//             validarCampos(expresiones.nombres, e.target, e.target.name);
//             console.log(campos);
//             break;

//         case 'registroCorreo':
//             validarCampos(expresiones.correo, e.target, e.target.name);
//             break;
//         case 'registroContraseña':
//             validarCampos(expresiones.contraseña, e.target, e.target.name);
//             break;
//         case 'registroConfirmar':
//             validarContraseña()
//             break;


//         default:
//             break;
//     }






//     const validarCampos = (expresion, input, campo) => {
//         if (expresion.test(input.value)) {
//             document.getElementById(`input-${campo}`).classList.remove('error');
//             document.getElementById(`input-${campo}`).classList.add('correcto');
//             campos[campo] = true;
//         } else {
//             document.getElementById(`input-${campo}`).classList.remove('correcto');
//             document.getElementById(`input-${campo}`).classList.add('error');
//         }
//     }

//     const validarContraseña = (e) => {
//         const contraseña = document.getElementById('registroContraseña');
//         const repetirContraseña = document.getElementById('repetirContraseña');
//         if (contraseña.value === repetirContraseña.value) {
//             document.getElementById('input-repetirContraseña').classList.remove('error');
//             document.getElementById('input-repetirContraseña').classList.add('correcto');
//             campos.confirmar = true;
//         } else {
//             document.getElementById('input-repetirContraseña').classList.remove('correcto');
//             document.getElementById('input-repetirContraseña').classList.add('error');
//             campos.confirmar = false;
//         }
        
        

//     }

//     inputs.forEach((input) => {
//         input.addEventListener('keyup', validarInputs);
//         input.addEventListener('blur', validarInputs);
//     });




//     form.addEventListener('submit', (e) => {
//         e.preventDefault();
//         if (campos.nombre === true && campos.correo === true && campos.contraseña === true && campos.confirmar === true) {
//             form.submit();
//         } else {
//             console.log('Complete los datos correctamente');
//             return;

//         }

//     });



// }