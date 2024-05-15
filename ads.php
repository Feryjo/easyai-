<?php
// Replace with the actual API endpoint
$apiUrl = 'https://sheetdb.io/api/v1/tyf6zlklqzbhb';

// Fetch data from the API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Check if the response is valid
if ($response === false) {
    die('Error fetching data from the API');
}

// Decode the JSON response
$data = json_decode($response, true);

// Check if the data is an array and contains a URL
if (is_array($data) && isset($data[0]['url'])) {
    echo $data[0]['url'];
} else {
    die('No image URL found in the API response');
}
?>
