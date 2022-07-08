<?
$name = $_POST['name'];
$phone = $_POST['phone'];
$descr = $_POST['descr'];

if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($name)) {
        if (!empty($name)) {
            $name= strip_tags($name);
            $nameTitle = "Исм : ";
        }
    }
    if (isset($phone)) {
        if (!empty($phone)) {
            $phone= strip_tags($phone);
            $phoneTitle = "Телефон номер : ";
        }
    }
    if (isset($descr)) {
        if (!empty($descr)) {
            $descr= strip_tags($descr);
            $descrTitle = "Коммент : ";
        }
    }

    $arr = array(
        $nameTitle => $name,
        $phoneTitle => $phone,
        $descrTitle => $descr
    );
    
    $text= "";
    foreach ($arr as $key => $value) {
        $text .="<b>".$key."</b>".$value."%0A";
    }

    $token= "5166580387:AAFNKh8uFK3yDGwYrRXSyzrukwkn1Pg9VP0";

    $chat_id = "-639750898";

    $send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");

    if ($send) {
      header("Location: ./modal.html");
    }
} 


