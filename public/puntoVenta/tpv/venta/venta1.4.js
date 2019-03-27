
function enviar() {
    var token = $("#token").val();
    var clave = $("#clave0").val();

    return $.ajax({
        url: 'http://127.0.0.1:8000/venta',
        type: 'get',
        headers:{'X-CSRF-TOKEN': token},
        dataType: 'json',
        data: {datos: clave},
    })
        .done(function() {
            console.log("success");
            console.log("llegando perras");
        })
}

