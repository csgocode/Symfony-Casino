document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('FormLogin');

    form.addEventListener('submit', function(event) {
        let valid = true;
        const mensajesError = [];

        // Validación de Correo Electrónico
        const email = document.getElementById('inputEmail').value;
        if (email.length === 0) {
            mensajesError.push('Por favor, introduce tu correo electrónico.');
            valid = false;
        } else if (!email.includes('@')) {
            mensajesError.push('Por favor, introduce una dirección de correo electrónico válida.');
            valid = false;
        }

        // Validación de Contraseña
        const password = document.getElementById('inputPassword').value;
        if (password.length === 0) {
            mensajesError.push('Por favor, introduce tu contraseña.');
            valid = false;
        }

        // Mostrar mensajes de error
        if (!valid) {
            event.preventDefault();
            alert(mensajesError.join('\n'));
        }
    });
});
