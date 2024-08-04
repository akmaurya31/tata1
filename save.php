<?php
 
 extract($_POST);
 $business_type_string = implode(', ', $_POST['business_type']);
 $business_size_string = implode(', ', $_POST['business_size']);


$scriptURL = 'https://script.google.com/macros/s/AKfycbw5kdVFW0wr8OVVjuxtWaeUOz2tdToP073qUoo0zfKtthtMvNBW5-35eEBVw3wQy3RufA/exec';

$data = array(
    'Name' => $Name,
    'Email' => $Email,
    'Phone' => $Phone,
    'FranchiseType' => $FranchiseType,
    'State' => $State,
    'Pincode' => $Pincode,
    'BusinessName' => $BusinessName,
    'BusinessAddress' => $BusinessAddress,
    'Website' => $Website,
    'own_business' => $own_business,
    'property_type' => $property_type,
    'business_type' => $business_type_string,
    'business_size' => $business_size_string
);
 

// Initialize cURL
$ch = curl_init($scriptURL);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects

// Execute the POST request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    //echo 'Response: ' . $response;
    header('Location: thankyou.php');
    exit();
}


// Close cURL session
curl_close($ch);
?>