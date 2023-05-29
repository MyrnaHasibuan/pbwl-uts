<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn-login">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'inc/koneksi.php';

                $user = mysqli_escape_string($conn, $_POST['user']);
                $pass = mysqli_escape_string($conn, $_POST['pass']);

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                if (mysqli_num_rows($cek) > 0){
                    //echo 'login berhasil';
                    $d = mysqli_fetch_object($cek);
                    $_SESSION ['status_login'] = true;
                    $_SESSION ['admin_global'] = $d;
                    $_SESSION ['admin_id'] = $d->admin_id;
                    echo '<script>window.location="index.php"</script>';
                }else{
                    //echo 'login gagal';
                    echo '<script>alert("Username atau password anda salah")</script>';
                }
            }
        ?>
    </div>
</body>
</html>