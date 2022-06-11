// const titulo = document.getElementById('titulo');
// const autor = document.getElementById('autor');
// const editorial = document.getElementById('editorial');
// const publicado = document.getElementById('publicado');
// const isbn = document.getElementById('isbn');
// const categoria = document.getElementById('categoria');
// const precio = document.getElementById('precio');   
// const formulario = document.getElementById('formulario');

// //enviar json a mysql
// formulario.addEventListener('submit', (e) => {
//     e.preventDefault();
//     let libro = {
//         titulo: titulo.value,
//         autor: autor.value,
//         editorial: editorial.value,
//         publicado: publicado.value,
//         isbn: isbn.value,
//         categoria: categoria.value,
//         precio: precio.value
//     }
//     fetch('/libros', {
//         method: 'POST',
//         body: JSON.stringify(libro),
//         headers: {
//             'Content-Type': 'application/json'
//         }
//     })
//     .then(res => res.json())
//     .then(data => {
//         console.log(data);
//         formulario.reset();
//     })
//     .catch(err => console.log(err));
// }
// );

//SELECT * FROM `datos`

//SELECT `id`, `isbn`, `img`, `autor`, `editorial`, `publicacion`, `categoria`, `precio` FROM `datos` WHERE 1

//INSERT INTO `datos` (`id`, `isbn`, `img`, `autor`, `editorial`, `publicacion`, `categoria`, `precio`) VALUES (NULL, 'yyyy', 'imagen', 'JK Row', 'Zeta', '12-05-2015', 'Misterio', '39000');



