<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST["loginUsername"];
    $loginPassword = $_POST["loginPassword"];
    
    $jsonFile = 'users.json';
    $usersData = json_decode(file_get_contents($jsonFile), true);
    
    foreach ($usersData as $user) {
        if ($user['username'] === $loginUsername && password_verify($loginPassword, $user['password'])) {
            $response = ["message" => "User logged in successfully."];
            echo json_encode($response);
            
            // Add JavaScript to redirect to the menu page on successful login.
            echo '<script>window.location.href = "menu.html";</script>';
            exit;
        }
    }
    
    $response = ["message" => "Invalid username or password."];
    echo json_encode($response);
}
?>
