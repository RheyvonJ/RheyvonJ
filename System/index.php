<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <header></header>
    <div class="container" id="container">
        <!-- Sign-Up Form -->
        <div class="form-container sign-up-container">
            <form action="/login/register.php" method="POST">
                <h1>Create Account</h1>
                <span>use your email for registration</span>
                <input type="text" name="name" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="New Password" required />
                <input type="password" name="repassword" placeholder="Confirm New Password" required />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        
        <!-- Sign-In Form -->
        <div class="form-container sign-in-container">
            <form action="/login/login.php" method="POST">
                <h1>Sign in</h1>
                <span> use your account</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        
        <!-- Overlay Panels -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <div class="logo">
                        <img src="img/logo.png" alt="" width="70px">
                    </div>
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <div class="logo">
                         <img src="img/logo.png" alt="" width="70px">
                    </div>
                    <h1>Hello, Everyone!</h1>
                    <p>Enter your personal details and reserve a laptop</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
        <!-- Error Modal -->
        <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
            <p id="errorMessage"></p>
        </div>
    </div>
    <script src="register.js"></script>
    <script src="modal.js"></script>
</body>
</html>
