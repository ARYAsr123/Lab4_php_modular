<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tugas Konsep Modularisasi</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <header>
    </header>
    <nav>
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </nav>