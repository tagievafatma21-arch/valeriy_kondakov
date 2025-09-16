<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "tagievafatma21@gmail.com";
    $subject = "Новое сообщение с сайта";
    $body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";

    if(mail($to, $subject, $body)) {
        echo "Спасибо, сообщение отправлено!";
    } else {
        http_response_code(500);
        echo "Ошибка отправки, попробуйте позже.";
    }
} else {
    http_response_code(405);
    echo "Неверный метод запроса.";
}
?>
