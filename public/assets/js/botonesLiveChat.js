$(document).ready(function() {
    $('#b_77y70llb_22').on('click', function(e) {
        e.preventDefault();
        // Suponiendo que el botón de chat tiene un ID 'chatButtonId' una vez cargado
        var chatButton = document.getElementById('chatButtonId');
        if (chatButton) {
            chatButton.click();
        } else {
            console.log("El botón de chat aún no está disponible.");
        }
    });
});
