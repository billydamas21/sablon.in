<script src="../../assets/manual/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php

require "../../configs/Koneksi.php";

$username = $password = "";
$username_err = $password_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_username = trim($_POST["username"]);
    if (empty($input_username)) {
        $username_err = "
            <script type='text/javascript'>
            setTimeout(function () { 
            swal({ title: 'Login Gagal!', 
            text: 'Silahkan Input Username!', 
            icon: 'warning', 
            timer: 2000, 
            buttons: false
            }); },10); 
            window.setTimeout(function(){ 
            } ,2000);
            </script>";
    } else {
        $username = $input_username;
    }

    $input_password = trim($_POST["password"]);
    if (empty($input_password)) {
        $password_err = "
            <script type='text/javascript'>
            setTimeout(function () { 
            swal({ title: 'Login Gagal!', 
            text: 'Silahkan Input Password!', 
            icon: 'warning', 
            timer: 2000, 
            buttons: false
            }); },10); 
            window.setTimeout(function(){ 
            } ,2000);
            </script>";
    } else {
        $password = $input_password;
    }

    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, Username, Password FROM accounts WHERE Username = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {

                            // Jika login berhasil
                            echo "<script type='text/javascript'>
                            setTimeout(function () { 
                            swal({ title: 'Login Berhasil!', 
                            text: 'Selamat Datang', 
                            icon: 'success', 
                            timer: 2000, 
                            buttons: false
                            }); },10); 
                            window.setTimeout(function(){ 
                            window.location.replace('Dashboard.php'); 
                            } ,2000);
                            </script>
                             ";
                        } else {
                            echo "<script type='text/javascript'>
                            setTimeout(function () { 
                            swal({ title: 'Login Gagal!', 
                            text: 'Password Salah', 
                            icon: 'error', 
                            timer: 2000, 
                            buttons: false
                            }); },10); 
                            window.setTimeout(function(){ 
                            } ,2000);
                            </script>
                             ";
                        }
                    }
                } else if (mysqli_stmt_num_rows($stmt) !== 1) {
                    echo "<script type='text/javascript'>
                            setTimeout(function () { 
                            swal({ title: 'Login Gagal!', 
                            text: 'Username Tidak DiTemukan', 
                            icon: 'error', 
                            timer: 2000, 
                            buttons: false
                            }); },10); 
                            window.setTimeout(function(){ 
                            } ,2000);
                            </script>
                             ";
                }
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
