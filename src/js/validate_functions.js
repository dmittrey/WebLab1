function validateForm(form) {
    let fail = validateY(form.Y_value.value);
    fail += validateX(form.X_value.value);
    fail += validateR(form.R_value.value);

    if (fail === "") return true;
    else {
        alert(fail);
        return false;
    }
}

function validateY(field) {
    if (!(field === "")) {
        return !(/[0-9]/.test(field)) ? "Координата Y задается числом!\n" : ""
    } else return "Не введена координата Y!\n";
}

function validateX(field) {
    return (field === "Select coordinate X") ? "Не введена координата X!\n" : "";
}

function validateR(field) {
    return (field === "Select coordinate R") ? "Не введена координата R!\n" : "";
}