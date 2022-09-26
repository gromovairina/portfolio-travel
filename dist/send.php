<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    
    $message  = "Имя пользователя: " . $_POST['name'] . "<br/>";
    $message .= "Телефон пользователя: " . $_POST['tel'] . "<br/>";
    $message .= "E-mail пользователя: " . $_POST['email'] . "<br/>";
    $message .= "Сообщение: " . $_POST['message'];     
   
    $mailTo = ""; // Ваш e-mail для получения писем. Обязательно проверьте спам, письма часто попадают туда.
    $subject = "Travel Письмо с сайта"; // Тема сообщения
    $headers= "";//Адрес вашего почтового ящика на хостинге. Нужно для корректной отправки с сайта. Указывать обязательно.
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@site.ru <info@site.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Спасибо, ".$_POST['name'].", мы свяжемся с вами в самое ближайшее время!"; 
    } else {
        echo "Сообщение не отправлено!"; 
    }
}
?>
