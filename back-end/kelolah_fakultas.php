<?php
session_start();
include('../linkDB.php');

$data = $_POST;

$id_user = $_SESSION['id'];

if (empty($data['id_fakultas_jurusan'])) {
    $sql = "INSERT INTO fakultas_jurusan (nama_fakultas, nama_jurusan, strata, no_urut)
VALUES ( '{$data['nama_fakultas']}','{$data['nama_jurusan']}','{$data['strata']}','{$data['no_urut']}')";
} else {
    $sql = "UPDATE fakultas_jurusan SET nama_fakultas = '{$data['nama_fakultas']}' , nama_jurusan = '{$data['nama_jurusan']}',
    strata = '{$data['strata']}',no_urut = '{$data['no_urut']}'
     WHERE  id_fakultas_jurusan = {$data['id_fakultas_jurusan']}";
}

include('response.php');
