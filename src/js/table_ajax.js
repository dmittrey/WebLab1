function receiveSubmit() {

    if (validateForm(true)) {

        let msg = $('#formx').serialize();

        $.ajax({
            type: 'POST',
            url: '../src/php/upload.php',
            data: msg,
            success: function (data) {
                $('table').html(data);
            },
            error: function (xhr, str) {
                alert("Возникла ошибка: " + str);
            }
        })
    }
}