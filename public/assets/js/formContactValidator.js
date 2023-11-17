document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ContactForm');

    form.addEventListener('submit', function(event) {
        let valid = true;
        const mensajesError = [];

        // Validación de Nombre
        const nombre = document.getElementById('contact_form_Nombre').value;
        if (nombre.length === 0) {
            mensajesError.push('Por favor, introduce tu nombre.');
            valid = false;
        }

        // Validación de Correo Electrónico
        const correo = document.getElementById('contact_form_Correo').value;
        if (correo.length === 0) {
            mensajesError.push('Por favor, introduce tu correo electrónico.');
            valid = false;
        } else if (!correo.includes('@')) {
            mensajesError.push('Por favor, introduce una dirección de correo electrónico válida.');
            valid = false;
        }

        // Validación de Mensaje
        const mensaje = document.getElementById('contact_form_Mensaje').value;
        if (mensaje.length < 200) {
            mensajesError.push('Tu mensaje debe tener más de 200 caracteres.');
            valid = false;
        }

        // Mostrar mensajes de error
        if (!valid) {
            event.preventDefault();
            alert(mensajesError.join('\n'));
        }
    });
});
