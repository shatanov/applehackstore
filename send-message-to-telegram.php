<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['name']) && !empty($_POST['email'])){
  if (isset($_POST['name'])) {
    if (!empty($_POST['name'])){
  $name = strip_tags($_POST['name']);
  $nameFieldset = "Имя пославшего: ";
  }
}
 

if (isset($_POST['email'])) {
  if (!empty($_POST['email'])){
  $email = strip_tags($_POST['email']);
  $emailFieldset = "Email: ";
  }
}
$token = "1034795304:AAHVa6Z3dpAyW-0jJhpWSWDFSehqvS36-qI";
$chat_id = "-1001412192147";
$arr = array(
  $nameFieldset => $name,
  $emailFieldset => $email
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  
  echo '<p>Спасибо за отправку вашего сообщения!</p>';
    return true;
} else {
  echo '<p><b>Ошибка. Сообщение не отправлено!</b></p>';
}
} else {
  echo '<p>Ошибка. Вы заполнили не все обязательные поля!</p>';
}
} else {
header ("Location: ");
}
 
?>