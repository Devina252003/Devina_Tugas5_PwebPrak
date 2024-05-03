<?php
// Pastikan bahwa koneksi ke database telah dibuat sebelumnya
require_once 'database.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lindungi input dari SQL Injection dengan menggunakan prepared statement
    $fullname = mysqli_real_escape_string($conn, $_POST['Fullname']);
    $username = mysqli_real_escape_string($conn, $_POST['Username']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Buat dan jalankan query INSERT
    $query = "INSERT INTO tbl_users (Fullname, Username, Email, Password) VALUES ('$fullname', '$username', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman login jika registrasi berhasil
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Register</h2>
            <input type="text" name="Fullname" placeholder="Full Name" required>
            <input type="text" name="Username" placeholder="Username" required>
            <input type="email" name="Email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password (8 characters)" minlength="8" maxlength="8" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
