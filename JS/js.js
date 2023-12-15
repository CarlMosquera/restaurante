$(document).ready(function(){
    // Selecciona el elemento con el atributo data-toggle="offcanvas"
    $('[data-toggle="offcanvas"]').on('click', function() {
        // Utiliza el método toggleClass para alternar la clase "hidden-xs" en el elemento con id "navigation"
        $("#navigation").toggleClass("hidden-xs");
    });
});
const loginImage = document.getElementById('login-image');
const loginOptions = document.getElementById('login-options');

// Mostrar/ocultar las opciones al hacer clic en la imagen
loginImage.addEventListener('click', function() {
    if (loginOptions.style.display === 'block') {
        loginOptions.style.display = 'none';
        loginImage.style.transform = 'scale(1)';
    } else {
        loginOptions.style.display = 'block';
        loginImage.style.transform = 'scale(0.9)';
    }
});

// Ocultar las opciones al hacer clic en cualquier lugar fuera de la imagen y las opciones
document.addEventListener('click', function(event) {
    if (event.target !== loginImage && event.target !== loginOptions) {
        loginOptions.style.display = 'none';
        loginImage.style.transform = 'scale(1)';
    }
});
