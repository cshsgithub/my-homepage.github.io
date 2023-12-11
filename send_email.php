<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "1412681529@qq.com"; // 替换成你的邮箱地址
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $headers = "From: $email";
    mail($to, $subject, "Name: $name\nEmail: $email\n\nMessage:\n$message", $headers);

    header("Location: thank_you.html");
} else {
    echo "Invalid Request";
}
?>