<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <h2>Login</h2> <br>
            <form action="index.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" minlength="8" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="button" value="Login">
                </div>
                <div class="link"> 
                    Don't have an account? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
