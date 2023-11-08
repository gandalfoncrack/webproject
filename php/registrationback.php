<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = [];
    $userData['username'] = $_POST["username"];
    $userData['fullname'] = $_POST["fullname"];
    $userData['password'] = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $userData['sex'] = $_POST["sex"];
    $userData['birthdate'] = $_POST["birthdate"];
    
    $jsonFile = 'users.json';
    
    $usersData = json_decode(file_get_contents($jsonFile), true);
    $usersData[] = $userData;
    
    file_put_contents($jsonFile, json_encode($usersData));
    
    $response = ["message" => "User registered successfully."];
    echo json_encode($response);
}
?>
