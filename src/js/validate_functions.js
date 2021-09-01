function validateForm(Y_value, X_value, R_value) {

    Y_status = validateY(Y_value.value);
    X_status = validateX(X_value.value);
    R_status = validateR(R_value.value);

    return Y_status && X_status && R_status;
}

function validateY(field) {
    if (!(field.trim() === "")) {
        if (!isNaN(field)) {
            if ((parseInt(field) <= -3) || (parseInt(field) >= 3)) {
                document.querySelector('.Error_text #Y_Error').innerHTML = "Координата Y задается числами в промежутке (-3...3)!";
                return false;
            } else return true;
        } else {
            document.querySelector('.Error_text #Y_Error').innerHTML = "Координата Y задается числом!";
            return false;
        }
    } else {
        document.querySelector('.Error_text #Y_Error').innerHTML = "Не введена координата Y!";
        return false;
    }
}

function validateX(field) {
    if (field === "Select coordinate X") {
        document.querySelector('.Error_text #X_Error').innerHTML = "Не введена координата X!";
        return false;
    } else return true;
}

function validateR(field) {
    if (field === "Select coordinate R") {
        document.querySelector('.Error_text #R_Error').innerHTML = "Не введена координата R!";
        return false;
    } else return true;
}