<?php
require "../../configs/Koneksi.php";

$nama = $username = $password = $confirm_password = "";
$nama_err = $username_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["nama"]))) {
        $nama_err = "Silahkan isi Nama Anda";
    } elseif (strlen(trim($_POST["nama"])) < 5) {
        $nama_err = "Nama minimal 5 Karakter";
    } else {
        $nama = trim($_POST["nama"]);
    }

    // Cek Jika username kosong
    if (empty(trim($_POST["username"]))) {
        $username_err = "Silahkan isi username";
    } elseif (strlen(trim($_POST["username"])) < 6) {
        $username_err = "Username minimal 6 Karakter";
    } else {
        // Cek 
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Username Telah Dipakai";
                } else {
                    $username = trim($_POST["username"]);
                }
            }
        }
        mysqli_stmt_close($stmt);
    }

    // validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Silahkan isi Password";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password minimal 8 Karakter";
    } else {
        $password = trim($_POST["password"]);
    }

    // validasi confirm password
    if (empty(trim($_POST["password2"]))) {
        $confirm_password_err = "Silahkan isi Confirm Password";
    } else {
        $confirm_password = trim($_POST["password2"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password Tidak Sesuai";
        }
    }

    // Cek jika semua syarat terpenuhi
    if (empty($nama_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Insert
        $sql = "INSERT INTO users (nama, username, password) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $param_nama, $param_username, $param_password);

            // Set parameters
            $param_nama = $nama;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);


            if (mysqli_stmt_execute($stmt)) {
                // Redirect 
                header("location: KelolaAkun.php");
            }
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
