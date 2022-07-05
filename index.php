<?php
$apiKey = "Bearer db5dd8ed08592f509550cfea63a416606360b322";
$url = "https://api.wonde.com/v1.0/schools/A1930499544/employees?include=employment_details&per_page=100";
//  Initiate curl
$curl = curl_init();
// Will return the response, if false it print the response
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($curl, CURLOPT_URL,$url);
//Set api key
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Authorization: ' . $apiKey
    ));
// Execute
$result=curl_exec($curl);
// Closing
curl_close($curl);

$json = json_decode($result, true);

$employees = count($json['data']);
$teachers = [];
foreach($json['data'] as $id => $employee) 
{
    if ($employee['employment_details']['data']['teaching_staff'] === true){
        $employeeName = $employee['forename'] . " " . $employee['surname'];
        array_push($teachers, $employeeName);
    }
}
echo "There are " . count($teachers) . " teaching staff out of " . $employees . " employees.<br/>";

foreach($teachers as $teacher){
    echo $teacher . "<br/>";
}

?>