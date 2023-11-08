<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location: ../index.html"); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact information</title>
    <link rel="stylesheet" href="../css/contactstyling.css">
</head>
<body>
    <div class="header">
        <div class="welcome-logout">
            <div class="welcome">Welcome, <?php echo $username; ?></div>
            <a href='../php/logout.php' class='logout-button'>Logout</a>
        </div>
    </div>
    
    
    <main>
        <p>Phone: <a href="tel:+96178987885"><i class="fas fa-phone"></i> 
            +961 78987885</a><br></p>
        <p>Email: <a href="mailto:khaled_khalifebob@hotmail.com"><i class="fas fa-envelope"></i> khaled_khalifebob@hotmail.com</a></p>
        <ul>
            <li><a href="thingy.php">Gallery</a></li>
            <li><a href="Untitled-1.php">CV</a></li>
            <li><a href="menu.php">Main Page</a></li>
        </ul>
    </main>
</body>
</html>