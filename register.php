<?php
    require_once "db.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $role = "user";

        $select = "SELECT * FROM users WHERE email='$email'";
        $select_user = mysqli_query($db_novel, $select);
        if (mysqli_num_rows($select_user) > 0) {
            $msg = "<p> User already exist <p>";
        } else {
            $sql = "INSERT INTO users(nama,email,password,age,gender,role) VALUES('$nama','$email','$password','$age','$gender','$role')";
            $data = mysqli_query($db_novel, $sql);
            header('location:login.php');
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login-register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <div class="register">
        <div class="left-img">
            <img src="img/draw.png" alt="">
        </div>
        <div class="right-form">
            <form action="" method="post">
                <h2>Registration</h2>
                <div class="form-grup">
                    <label for="nama">Name</label>
                    <input type="nama" name="nama" class="form-input" id="nama" required>
                </div>
                <div class="form-grup">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-input" id="email" required>
                </div>
                <div class="form-grup">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-input" id="password" required>
                </div>
                <div class="form-grup">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-input" id="age" required>
                </div>
                <div class="form-grup">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-input" id="gender" required>
                        <option value="" disabled selected></option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="false">
                <?php
                    if(isset($msg)){
                        echo $msg;
                    }
                ?>
                </div>
                <button type="submit" name="register">Register</button>
                <div class="contact-moderator">
                    <span>Contact With</span>
                    <div class="contact">
                        <a href="https://mail.google.com/mail/?view=cm&to=izhammahendra8@gmail.com&su=Halo&body=Isi%20pesan" target="_blank"><i class="fa-brands fa-google"></i></a>
                        <a href=""><i class="fa-brands fa-discord"></i></a>
                        <a href="https://github.com/Izhan-Dwi-Mahendra" target="_black"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>