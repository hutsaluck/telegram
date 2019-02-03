<?php

/* https://api.telegram.org/bot538275010:AAGTTNA0ty3Ma2DT9KykaUUx0PwTUKCFIF4/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$token = "538275010:AAGTTNA0ty3Ma2DT9KykaUUx0PwTUKCFIF4";
$chat_id = "521921005";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Повідомлення: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>