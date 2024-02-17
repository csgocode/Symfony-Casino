document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registration-form');

    form.addEventListener('submit', function(event) {
        let valid = true;
        const mensajesError = [];

        // Validación de Email
        const email = document.getElementById('registration_form_email').value;
        if (!email.includes('@')) {
            mensajesError.push('Por favor, introduce una dirección de correo electrónico válida.');
            valid = false;
        }

        // Validación de Contraseña
        const password = document.getElementById('registration_form_plainPassword').value;
        if (password.length < 6) {
            mensajesError.push('La contraseña debe tener al menos 6 caracteres.');
            valid = false;
        }

        if (!password.match(/[A-Z]/)) {
            mensajesError.push('La contraseña debe incluir al menos una letra mayúscula.');
            valid = false;
        }

        if (!password.match(/[\W_]/)) {
            mensajesError.push('La contraseña debe incluir al menos un símbolo.');
            valid = false;
        }

        // Validación de Documento de Identidad
        const docIdentidad = document.getElementById('registration_form_docIdentidad').value;
        if (docIdentidad.length === 0) {
            mensajesError.push('El campo de documento de identidad no puede estar vacío.');
            valid = false;
        }

        // Validación de Usuario
        const username = document.getElementById('registration_form_username').value;
        if (username.length === 0) {
            mensajesError.push('El campo de usuario no puede estar vacío.');
            valid = false;
        }

        // Validación de Nombre
        const nombre = document.getElementById('registration_form_nombre').value;
        if (nombre.length === 0) {
            mensajesError.push('El campo de nombre no puede estar vacío.');
            valid = false;
        }

        // Validación de Apellidos
        const apellidos = document.getElementById('registration_form_apellidos').value;
        if (apellidos.length === 0) {
            mensajesError.push('El campo de apellidos no puede estar vacío.');
            valid = false;
        }

        // Mostrar mensajes de error
        if (!valid) {
            event.preventDefault(); // Prevenir la acción por defecto del formulario (enviar)
            alert(mensajesError.join('\n'));
        }
    });
});
