<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $book = htmlspecialchars($_POST['book']);
    $date = htmlspecialchars($_POST['date']);

    $order = "Nama: $name, Buku: $book, Tanggal Sewa: $date\n";
    file_put_contents('pesanan.txt', $order, FILE_APPEND);

    echo "Pesanan berhasil disimpan!";
}
?>
