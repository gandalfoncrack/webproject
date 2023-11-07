<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST["loginUsername"];
    $loginPassword = $_POST["loginPassword"];
    
    $jsonFile = 'users.json';
    $usersData = json_decode(file_get_contents($jsonFile), true);
    
    $loginSuccess = false;
    
    foreach ($usersData as $user) {
        if ($user['username'] === $loginUsername && password_verify($loginPassword, $user['password'])) {
            $response = ["message" => "User logged in successfully."];
            echo json_encode($response);
            
           
            echo '<script>window.location.href = "menu.html";</script>';
            exit;
        }
    }
    
    if ($loginSuccess) {
        session_start();
        $_SESSION['username'] = $loginUsername; 
        $response = ["message" => "User logged in successfully."];
        echo json_encode($response);
    } else {
        $response = ["error" => "Invalid username or password. Please try again."];
        echo json_encode($response);
    }
}
?>

