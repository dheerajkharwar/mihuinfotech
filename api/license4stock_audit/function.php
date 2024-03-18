<?php
error_reporting(0);
require 'include/dbcon.php';
function getLicense($licenseParams){
    global $con;

    if($licenseParams == null){
        $data = [
            'status' => 422,
            'message' => 'Parameters Null',
        ];
        header("HTTP/1.0 422 Parameters Null");
        return json_encode($data);
    }

    $purchase_code = mysqli_real_escape_string($con, $licenseParams['license']);

    $query = "SELECT * FROM license_data WHERE purchase_code='$purchase_code' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result){
        if(mysqli_num_rows(($result)) > 0){
        $resLic = mysqli_fetch_assoc($result);

        $data = [
            'status' => 200,
            'message' => 'License Fetched Successfully',
            'license' => $resLic
        ];
        header("HTTP/1.0 200 License Fetched Successfully");
        return json_encode($data);
        }
        else{
        $data = [
            'status' => 404,
            'message' => 'License Not Found',
        ];
        header("HTTP/1.0 404 License Not Found");
        return json_encode($data);
        }
    }

    else{
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}

function getChangedLicense($licenseParams){
    global $con;

    if($licenseParams['license'] == null){
        $data = [
            'status' => 422,
            'message' => 'Missing parameters',
        ];
        header("HTTP/1.0 422 Missing parameters");
        return json_encode($data);
    }
    else{
        
    $purchase_code = mysqli_real_escape_string($con, $licenseParams['license']);
    $newLicense = getRandomString(6);
    $query = "UPDATE license_data SET purchase_code='$newLicense' WHERE purchase_code = '$purchase_code'";
    $result = mysqli_query($con, $query);

    if($result){
        if(mysqli_affected_rows($con)>0){
        $licenseParams['license'] = $newLicense;
        // return getLicense($newLicense);
        $data = [
            'status' => 200,
            'message' => 'Updated Successfully',
            'new_license' => json_decode(getLicense($licenseParams))
        ];
        header("HTTP/1.0 200 Updated Successfully");
        return json_encode($data);
        }
        else{
            $data = [
                'status' => 404,
                'message' => 'License Not Found'
            ];
            header("HTTP/1.0 404 License Not Found");
            return json_encode($data);
        }
        }
        else{
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 404 Internal Server Error");
        return json_encode($data);
        }
    }
}

function getRandomString($n) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';

	for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}
?>