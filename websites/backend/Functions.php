<?php

function query($query)
{
    require '../../configs/Koneksi.php';
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function DeleteBarang($id)
{
    require '../../configs/Koneksi.php';
    mysqli_query($conn, "DELETE FROM kelola_barang WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function DeleteAkun($id)
{
    require '../../configs/Koneksi.php';
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($conn);
}
