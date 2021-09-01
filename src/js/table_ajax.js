window.onload = function () {
    let table_value = document.getElementById('table');
    let Y_value = document.getElementById('Y_value');
    let X_value = document.getElementById('X_value');
    let R_value = document.getElementById('R_value');

    document.querySelector('form').onclick = function () {
        if (validateForm(Y_value, X_value, R_value) === true) {
            let params = table_value.value + "&" + Y_value.value + "&" + X_value.value + "&" + R_value.value;
            ajaxPost(params);
        }
    }
}

function ajaxPost(param) {
    let request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            document.querySelector('#table').innerHTML = request.responseText;
        }
    }

    request.open('POST', 'upload.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(param);
}