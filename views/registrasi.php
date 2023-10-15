<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>

    
    <!-- REGISTRASI -->
    <div class="register-container">
        <div class="box form-box">
        <header id="sign-up">Sign Up</header>
            <div class="field-input">
                <label for="firstname">First Name</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field-input">
                <label for="lastname">Last Name</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field-iput">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="field-input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field-input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
            </div>
            <div>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            </div>
            <div class="field">
                <a href="login.php"><input type="submit" id="btn2" name="submit" value="Sign Up"></a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
