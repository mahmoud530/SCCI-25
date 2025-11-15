document.getElementById("form").addEventListener("submit", function (e) {
    let valid = true;

    // Get inputs
    let name = document.getElementById("uname").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("UserWorkshop").value.trim();
    let message = document.getElementById("message").value.trim();

    // Reset error messages
    document.getElementById("name_error").innerText = "";
    document.getElementById("email_error").innerText = "";
    document.getElementById("subject_error").innerText = "";
    document.getElementById("message_error").innerText = "";

    // Name validation
    if (name.length < 3) {
        document.getElementById("name_error").innerText = "Name must be at least 3 characters";
        valid = false;
    }

    // Email validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById("email_error").innerText = "Enter a valid email";
        valid = false;
    }

    // Phone validation
    if (phone.length < 10 || phone.length > 15) {
        document.getElementById("subject_error").innerText = "Enter a valid phone number";
        valid = false;
    }

    // Message validation
    if (message.length < 5) {
        document.getElementById("message_error").innerText = "Message must be at least 5 characters";
        valid = false;
    }

    // Prevent Submit if not valid
    if (!valid) e.preventDefault();
});
