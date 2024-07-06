<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $book = htmlspecialchars($_POST['book']);
    $date = htmlspecialchars($_POST['date']);

    // Periksa apakah file pesanan.txt dapat ditulis
    $file = 'pesanan.txt';
    if (is_writable($file)) {
        // Tulis data ke file
        $order = "Nama: $name, Buku: $book, Tanggal Sewa: $date\n";
        if (file_put_contents($file, $order, FILE_APPEND) !== false) {
            echo "Pesanan berhasil disimpan!";
        } else {
            echo "Gagal menyimpan pesanan. Silakan coba lagi.";
        }
    } else {
        echo "File pesanan.txt tidak dapat ditulis. Periksa izin file.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
