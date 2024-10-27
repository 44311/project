<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = $_POST['score'];
    $email = "lubabi011@gmail.com"; // Ganti dengan email tujuan Anda

    // Kirim hasil quiz ke email
    $subject = "Hasil Quiz Sederhana";
    $message = "Skor peserta adalah: $score / 2";
    $headers = "From: no-reply@example.com";

    if (mail($email, $subject, $message, $headers)) {
        echo "Hasil quiz berhasil dikirim!";
    } else {
        echo "Gagal mengirim hasil quiz.";
    }
}
?>
