<?php
session_start();
include('../linkDB.php');

$data = $_GET['id'];

$id_user = $_SESSION['id'];

$sql = "DELETE FROM fakultas WHERE id_fakultas = " . $data;


include('response.php');
