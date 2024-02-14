$(document).ready(function() {
    // Función para actualizar el valor mostrado basado en el input de rango o los valores rápidos
    function updateRangeValue(value) {
        // Actualiza el valor del input y el texto mostrado
        $('#dAmount').val(value);
        $('#rangeValue').text(value); // Asegúrate de que existe un elemento con id="rangeValue" para mostrar el valor
    }

    // Escuchar cambios en el control de rango
    $('#dAmount').on('input', function() {
        updateRangeValue($(this).val());
    });

    // Manejar clics en los valores rápidos
    $('.quick-value h5').click(function() {
        var value = $(this).text(); // Obtiene el valor del elemento h5 clickeado
        updateRangeValue(value);
        
        // Remover la clase 'active' de todos los h5 y añadirla solo al clickeado
        $('.quick-value h5').removeClass('active');
        $(this).addClass('active');
    });
});
