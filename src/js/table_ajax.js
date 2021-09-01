window.onload = function () {
    let Y_value = document.getElementById('Y_value');
    let X_value = document.getElementById('X_value');
    let R_value = document.getElementById('R_value');

    document.querySelector('form').onsubmit = function () {
        if (validateForm(Y_value, X_value, R_value) === true) {
            ajaxPost(Y_value, X_value, R_value);
        }
    }
}

function ajaxPost(y, x, r) {
    $.ajax({
        url: '../php/upload.php',
        type: 'POST',
        cache: false,
        data: {'y': y, 'x': x, 'r': r},
        success: function (response) {
            $(response).insertAfter($("tr:last"));
        },
        error: function () {
            alert("Script Error!");
        }
    })
}