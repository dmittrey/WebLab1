function validateForm(Y_value, X_value, R_value) {
    let fail = validateY(Y_value.value);
    fail += validateX(X_value.value);
    fail += validateR(R_value.value);

    return (fail === "") ? true : fail;
}

function validateY(field) {
    if (!(field.trim() === "")) {
        if (!isNaN(field)) {
            return ((parseInt(field) <= -3) || (parseInt(field) >= 3)) ? "Координата Y задается числами в промежутке (-3...3)!\n" : ""
        } else return "Координата Y задается числом!\n";
    } else return "Не введена координата Y!\n";
}

function validateX(field) {
    return (field === "Select coordinate X") ? "Не введена координата X!\n" : "";
}

function validateR(field) {
    return (field === "Select coordinate R") ? "Не введена координата R!\n" : "";
}