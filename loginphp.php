<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST["loginUsername"];
    $loginPassword = $_POST["loginPassword"];
    
    $jsonFile = 'users.json';
    $usersData = json_decode(file_get_contents($jsonFile), true);
    
    $loginSuccess = false;
    
    foreach ($usersData as $user) {
        if ($user['username'] === $loginUsername && password_verify($loginPassword, $user['password'])) {
            $loginSuccess = true; // Set login success flag
            
            session_start();
            $_SESSION['username'] = $loginUsername; 
            
            // Redirect to menu.php
            header("Location: menu.php");
            exit;
        }
    }
    
    if (!$loginSuccess) {
        $response = ["error" => "Invalid username or password. Please try again."];
        echo json_encode($response);
    }
}
?>

?>