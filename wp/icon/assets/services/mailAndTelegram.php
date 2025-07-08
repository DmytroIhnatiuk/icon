<?php

/* AJAX check  */
//if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {


$message = '';
$input = json_decode(file_get_contents("php://input"), true);

$fields = [
    'name' => '<b>Імʼя:</b>',
    'phone' => '<b>Телефон:</b>',
];
if ($input['type']) {
    $fields['type'] = '<b>Тип:</b>';
}

foreach ($fields as $inputKey => $fieldLabel) {
    if (isset($input[$inputKey]) && !empty($input[$inputKey])) {
//        $value = $input[$inputKey];
        $value = strip_tags($input[$inputKey]);

        $message .= "{$fieldLabel} {$value}" . " \n";
    }
}
if ($input['item'] && $input['type']) {
    $value = '';
    switch ($input['item']) {
        case 'flat':
            $value = 'Квартира';
            break;
        case 'house':
            $value = 'Будинок';
            break;
        case 'comercial':
            $value = 'Комерція';
            break;
        case 'land':
            $value = 'Земельна ділянка';
            break;
    }
    $message .= "<b>Обʼєкт: </b> {$value}" . " \n";
}

if ($input['object']){
    $message .=  "<b>Обʼєкт: </b> {$input['object']}" . " \n";
}
if ($input['rooms']){
    $message .=  "<b>Кількість кімнат: </b> {$input['rooms']}" . " \n";
}
if ($input['area']){
    $message .=  "<b>Загальна площа: </b> {$input['area']}" . " \n";
}
if ($input['location']){
    $message .=  "<b>Адреса: </b> {$input['location']}" . " \n";
}

$token = '7717762506:AAF8x52fw-cfu-oCxHisEAAJO-AmYZG96Ys';
$chat = '-4887650487';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chat . '&parse_mode=html&text=' . urlencode($message));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
?>