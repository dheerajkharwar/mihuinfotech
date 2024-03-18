<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include("function.php");

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){
    if(isset($_GET['license'])){
        $license = getLicense($_GET);
        echo $license;
    }
    else{
        $data = [
            'status' => 422,
            'message' => 'Missing parameters',
        ];
        header("HTTP/1.0 422 Missing parameters");
        echo json_encode($data);
    }
}
else{
    $data = [
        'status' => 405,
        'message' => $requestMethod. ' Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}

?>