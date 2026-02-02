function validateForm() {

    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;
    var mobile = document.getElementById("mobile").value.trim();

    if (name === "") {
        alert("Please enter your name");
        return false;
    }

    if (email === "" || !email.includes("@")) {
        alert("Please enter a valid email");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters long");
        return false;
    }

    if (isNaN(mobile) || mobile.length !== 10) {
        alert("Please enter a valid 10-digit mobile number");
        return false;
    }

    // Show latest submission
    document.getElementById("rName").innerText = name;
    document.getElementById("rEmail").innerText = email;
    document.getElementById("rMobile").innerText = mobile;
    document.getElementById("result").style.display = "block";

    alert("Form submitted successfully!");
    return false;
}