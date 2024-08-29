<?php
if (file_exists('file_important.text')) {
    echo "file ditemukan.";
} else {
    die("error: file tidak ditemukan.");
}
if (!user_is_logged_in()) {
    header('http/1.1 403 forbidden');
    die("error: kamu tidak memiliki akses.");
}
if ($kneksi_database == false) {
    exit(1); //menghentikan skrip dengan kode kluar 1
}
ob_start();
echo "ini adalah output buffer.";

//kondisi tertentu
if ($error) {
    ob_end_clean(); // bersihkan output buffer
    die("skrip dihentikan karena error.");
}


echo "<br><br><strong>by dewi puspita sari";