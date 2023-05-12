<?php
    //koneksi
    $conn = pg_connect("host=localhost port=5432 dbname=mydatabase user=postgres password=863957");

    //set variabel
    $lat_long       = $_POST['latlong'];
    $nama_tempat    = $_POST['nama_tempat'];
    $kategori       = $_POST['kategori'];

    //input data
    $insert = pg_query($conn, "INSERT INTO lokasi (lat_long, nama_tempat, kategori) VALUES ('$lat_long', '$nama_tempat', '$kategori')");

    //kembali
    header("Location: index.php");
?>
