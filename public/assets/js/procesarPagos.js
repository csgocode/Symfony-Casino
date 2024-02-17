document.addEventListener("DOMContentLoaded", function() {
    const cryptoMapping = {
        "dbitcoin": "BTC",
        "dlitecoin": "LTC",
        "deth": "ETH",
        "dripple": "XRP"
    };

    document.getElementById("depositForm").addEventListener("submit", function(e) {
        e.preventDefault();
        const selectedPaymentMethod = document.querySelector('input[name="dcardSelect"]:checked').id;
        const amount = document.getElementById("dAmount").value;

        // Determina la nueva acción basada en el método de pago seleccionado
        let newAction;
        if (selectedPaymentMethod in cryptoMapping) {
            // Usa el mapeo para obtener el código correcto de criptomoneda
            const crypto = cryptoMapping[selectedPaymentMethod];
            newAction = `/payment/create/${crypto}/${amount}`;
        } else if (selectedPaymentMethod === "dmastercard") {
            // Ruta para Stripe o tarjeta de crédito
            newAction = `/wallet/recarga`;
        } else {
            console.error("Método de pago desconocido");
            return;
        }

        // Actualiza la acción del formulario y lo envía
        this.action = newAction;
        this.submit();
    });
});
