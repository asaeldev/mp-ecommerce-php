<?php
require __DIR__ . '/vendor/autoload.php';
require_once 'environment.php';

header("Content-Type: application/json");

MercadoPago\SDK::setAccessToken($_ENV["MP_ACCESS_TOKEN"]);

$json = file_get_contents("php://input");
$data = json_decode($json);

if (isset($data->type)) {
    $filename = "./logs/" . $data->type . '_' . $data->id . '.txt';
    $file = fopen($filename, "w");
    fwrite($file, json_encode($data));

    switch ($data->type) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($data->id);
            break;
        case "plan":
            $plan = MercadoPago\Plan::find_by_id($data->id);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription::find_by_id($data->id);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice::find_by_id($data->id);
            break;
    }
}


echo json_encode($data, true);