
function cadastro() {
    var emailUser = document.getElementById("email").value;
    $.post("/cadastrar", { email: emailUser })
        .done(function (data) {
            alert(data);
        });
}
