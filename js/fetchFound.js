function foundorder() {
    var idButton = document.getElementById("buttonCancelar");

    const id = idButton.dataset.id;
    const price = idButton.dataset.price;

    fetch(
            "ApiConecta/foundOrder.php?id=" + id + "&price=" + price
        )
        .then((response) => response.json())
        .then((data) => {
            if (data) {
                console.log(data);
                location.reload();
            }
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}


document.getElementById("buttonCancelar").addEventListener("click", function() {
    if (confirm("Seguro que quieres Cancelar el pago")) {
        foundorder();
    }
});