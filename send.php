<?php
    $to = 'roma.alf89@yandex.ru'; //Кому отправить
    $subject = 'the subject'; //Тема письма
    $from = 'roma.alf89@yandex.ru'; //От кого
    $name = $_POST['name']; //Поле имя
    $tel = $_POST['tel']; //Поле телефон

    // Шаблон
    $message = 'hello';

    //Заголовки письма
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: <'.$from.'>\r\n";
    $headers .= "Reply-To: <'.$from.'>\r\n";
    $headers .= "Subject: '.$subject.'\r\n";
    $headers .= "X-Mailer: PHP/".phpversion()."\r\n";

    $success = mail($to, $subject, $message, $headers); //Отправляем

    //Проверяем ушло или нет и выводим результат
    if (!$success){
        echo 'ошибка';
    } else {
        echo 'отправлено';
    }
