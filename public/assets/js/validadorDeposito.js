document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('depositForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario por defecto

        const amountInput = document.getElementById('dAmount');
        const amount = amountInput.value;

        // Verificar si el valor es un número
        if (isNaN(amount) || amount.trim() === '') {
            alert('Por favor, introduce solo números en el campo de cantidad.');
            return;
        }

        // Verificar si la cantidad es mayor a 6000
        if (parseFloat(amount) > 6000) {
            alert('¡El límite de tu cuenta está en 6000 EUROS!');
            return;
        }
        //si el cliente es pobre
        if (parseFloat(amount) < 5) {
            alert('¡No queremos gente pobre en el casino!');
            return;
        }

    });
});
