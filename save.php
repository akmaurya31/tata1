<?php
 
$scriptURL = 'https://script.google.com/macros/s/AKfycbwy_ZAPSW-J-3qXyFSmtguHP8PYrT4MZ_AMhH8nDU8jR-GaAMqFbEy3mWPzXMrfXBkDPQ/exec';


// Prepare data for POST request
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
    'business_type' => $business_type,
    'business_size' => $business_size
);
// var name = e.parameter.Name; // Corrected the typo here
// var email = e.parameter.Email;
// var phone = e.parameter.Phone;
// var franchiseType = e.parameter.FranchiseType;
// var state = e.parameter.State;
// var pincode = e.parameter.Pincode;
// var businessName = e.parameter.BusinessName;
// var businessAddress = e.parameter.BusinessAddress;
// var website = e.parameter.Website;
// var ownBusiness = e.parameter.own_business;
// var propertyType = e.parameter.property_type;
// var businessType = e.parameter.business_type;
// var businessSize = e.parameter.business_size;



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