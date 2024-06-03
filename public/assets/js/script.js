function validatePhoneNumber() {
    var phoneNumber = document.getElementById("phonenumber").value;
    var regex = /^\d{10}$/; 

    if (!regex.test(phoneNumber)) {
        document.getElementById("error-msg").innerHTML = "Please enter a valid 10-digit phone number.";
        return false;
    }

    document.getElementById("phoneForm").submit();
}
