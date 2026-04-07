<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == "ujicoba@pertama" && $password == "bismillah") {
        header('location:../ui_admin/admin.php');
        exit();
    }
    else {
        header('location:../ui_siswa/siswa.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <section class="halaman_login">
        <div class="login_left">
            <img src="../gambar/draw.png" alt="gambar orang yang sedang menulis">
        </div>
        <div class="login_right">
            <h1>Login</h1>
            <div class="formulir">
                <form action="#" method="post" id="formulir_login">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="">
                    <a href="#">forgot password?</a>
                    <button type="submit">Log in</button>
                </form>
            </div>
            <div class="info_media_sosial">
                <span>or contact with</span>
                <div class="media_sosial">
                    <a href="https://www.tiktok.com/@dra.144" target="_blank"><img src="../gambar/Tiktok.png" alt="Tiktok admin"></a>
                    <a href="https://www.instagram.com/hendra.idm/" target="_blank"><img src="../gambar/Instagram.png" alt="Instagram admin"></a>
                    <a href="https://www.instagram.com/hendra.idm/" target="_blank"><img src="../gambar/whatsapp.png" alt="Instagram admin"></a>
                </div>
            </div>
            <div class="logo">
                <div class="logo_sekolah">
                    <h2>SMKN1 Depok</h2>
                    <img src="../gambar/logo-onedek.png" alt="logo wandek">
                </div>
            </div>
        </div>
    </section>
</body>
</html>