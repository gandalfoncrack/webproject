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
    <title>Main Page</title>
    <link rel="stylesheet" href="../css/menucss.css">
</head>
<body>
    <div class="header">
        <div class="welcome-logout">
            <div class="welcome">Welcome, <?php echo $username; ?></div>
            <a href='../php/logout.php' class='logout-button'>Logout</a>
        </div>
    </div>

    <header>
        <nav>
            <ul>
                <li><a href="thingy.php">Gallery</a></li>
                <li><a href="Untitled-1.php">CV</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Welcome to My Website</h1>
        <p>You can navigate to any one part of my pages using the buttons above.</p>
        <p>link to my website (for doctor Gilbert): https://webhw3menucvgallery.000webhostapp.com/</p>
    </main>
</body>
</html>
