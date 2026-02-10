<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | The Universal Consulting Group</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <div class="logo-section">
                <img src="assets/images/logo.png" alt="Logo" class="logo">
            </div>

            <h2>Welcome Back</h2>
            <p class="subtitle">Please enter your details to login.</p>

            <form id="loginForm">
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

</body>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevents the page from refreshing

    // 1. Set your static credentials here
    const STATIC_EMAIL = "admin@universal.com";
    const STATIC_PASSWORD = "Password123";

    // 2. Get the values from the input fields
    const emailInput = document.getElementById('email').value;
    const passwordInput = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    // 3. Validation Logic
    if (emailInput === STATIC_EMAIL && passwordInput === STATIC_PASSWORD) {
        // Success! Redirect to the home page or dashboard
        alert("Login successful! Redirecting...");
        window.location.href = "index.html"; 
    } else {
        // Failure! Show the error message
        errorMessage.style.display = "block";
        
        // Optional: Shake the button or clear password
        document.getElementById('password').value = "";
    }
});
</script>
</html>