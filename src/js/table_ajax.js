function receiveSubmit() {

    if (validateForm(true)) {

        let Y_value = $('#Y_value').val();
        let X_value = $('#X_value').val();
        let R_value = $('#R_value').val();

        $.ajax({
            type: 'POST',
            url: '../src/php/upload.php',
            data: {'y': Y_value, 'x': X_value, 'r': R_value},
            success: function (data) {
                $('#table tr:last').after(data);
            },
            error: function (xls, str) {
                alert("Возникла ошибка: " + str);
            }
        })
    }
}