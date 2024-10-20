
       <?php
$dataArray = [
    "merchantId" => 'M18CY0NAG687',
    "merchantTransactionId" => rand(111111,999999),
    "merchantUserId" => 'MUID' . time(),
    "amount" => 20782 * 100,
    "redirectUrl" =>  'https://mihusystems.in/pay/redirect-url.php',
    "redirectMode" => "POST",
    "callbackUrl" =>  'https://mihusystems.in/pay/callback-url.php',
    "mobileNumber" => "7972247649",
    "paymentInstrument" => [
        "type" => "PAY_PAGE"
    ]
];

$encode = json_encode($dataArray);
$encoded = base64_encode($encode);
$key = 'afa891a9-4004-4f68-8edb-cb86140c88e0';
$key_index = 1;
$string = $encoded . "/pg/v1/pay".$key;
$sha256 = hash("sha256", $string);
$final_x_header = $sha256 . '###'.$key_index;

$url = "https://api.phonepe.com/apis/hermes/pg/v1/pay";

$headers = array(
    "Content-Type: application/json",
    "accept: application/json",
    "X-VERIFY: " . $final_x_header,
);

$data = json_encode(['request' => $encoded]);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

curl_close($curl);

$response = json_decode($resp, true);

header('Location:' . $response['data']['instrumentResponse']['redirectInfo']['url']);
exit;

?>
