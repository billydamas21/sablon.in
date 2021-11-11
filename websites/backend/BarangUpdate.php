<script src="../../assets/manual/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php
// Include config file
require "../../configs/Koneksi.php";

// Define variables and initialize with empty values
$Nama_barang = $Jenis_barang = $Jumlah = "";
$Nama_barang_alert = $Jenis_barang_alert = $Jumlah_alert = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];

    $input_nama_barang = trim($_POST["Nama_barang"]);
    if (empty($input_nama_barang)) {
        $Nama_barang_alert = "Silahkan Input Nama Barang!";
    } elseif (!filter_var(
        $input_nama_barang,
        FILTER_VALIDATE_REGEXP,
        array("options" => array("regexp" => "/^[a-zA-Z\s]+$/"))
    )) {
        $Nama_barang_alert = "Nama Barang Dilarang Angka!";
    } else {
        $Nama_barang = $input_nama_barang;
    }

    // Cek Jenis barang
    $input_jenis_barang = trim($_POST["Jenis_barang"]);
    if (empty($input_jenis_barang)) {
        $Jenis_barang_alert = "Silahkan Input Jenis Barang!";
    } elseif (!filter_var(
        $input_jenis_barang,
        FILTER_VALIDATE_REGEXP,
        array("options" => array("regexp" => "/^[a-zA-Z\s]+$/"))
    )) {
        $Jenis_barang_alert = "Jenis Barang Tidak Boleh Angka!";
    } else {
        $Jenis_barang = $input_jenis_barang;
    }


    $input_jumlah = trim($_POST["Jumlah"]);
    if (empty(trim($_POST["Jumlah"]))) {
        $Jumlah_alert = "Silahkan Input Jumlah Barang!";
    } elseif (!ctype_digit($input_jumlah)) {
        $Jumlah_alert = "Jumlah Barang Dilarang Negatif!";
    } else {
        $Jumlah = $input_jumlah;
    }


    // Cek jika semua syarat terpenuhi
    if (empty($Nama_barang_alert) && empty($Nama_barang_alert) && empty($Jumlah_alert)) {

        // Insert
        $sql = "UPDATE kelola_barang SET Nama_barang=?, Jenis_barang=?, Jumlah=? WHERE id=?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssi", $param_Nama_barang, $param_Jenis_barang, $param_Jumlah, $param_id);

            // Set parameters
            $param_Nama_barang = $Nama_barang;
            $param_Jenis_barang = $Jenis_barang;
            $param_Jumlah = $Jumlah;
            $param_id = $id;


            if (mysqli_stmt_execute($stmt)) {
                // Redirect 
                echo "<script type='text/javascript'>
                setTimeout(function () { 
                swal({ title: 'Success!', 
                text: 'Data Berhasil DiUpdate!', 
                icon: 'success', 
                timer: 2000, 
                buttons: false
                }); },10); 
                window.setTimeout(function(){ 
                window.location.replace('KelolaBarang.php'); 
                } ,2000);
                </script>
                 ";
            }
            $sql = "INSERT INTO riwayat_barang (Nama_barang, Jenis_barang, Jumlah, Status, Time) VALUES (?, ?, ?, 'UPDATE', CURRENT_TIMESTAMP)";

            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss", $param_Nama_barang, $param_Jenis_barang, $param_Jumlah);

                // Set parameters
                $param_Nama_barang = $Nama_barang;
                $param_Jenis_barang = $Jenis_barang;
                $param_Jumlah = $Jumlah;


                if (mysqli_stmt_execute($stmt)) {
                    // Redirect 
                    echo "<script type='text/javascript'>
                    setTimeout(function () { 
                    swal({ title: 'Success!', 
                    text: 'Data Berhasil DiUpdate!', 
                    icon: 'success', 
                    timer: 2000, 
                    buttons: false
                    }); },10); 
                    window.setTimeout(function(){ 
                    window.location.replace('KelolaBarang.php'); 
                    } ,2000);
                    </script>
                     ";
                }
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {

        $id =  trim($_GET["id"]);

        $sql = "SELECT * FROM kelola_barang WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {

            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = $id;

            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    $Nama_barang = $row["Nama_barang"];
                    $Jenis_barang = $row["Jenis_barang"];
                    $Jumlah = $row["Jumlah"];
                } else {
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($conn);
    }
}
