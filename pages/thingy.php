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
    <link rel="stylesheet" href="../css/styling.css">
    <title>Image Gallery</title>
</head>
<body>
    <div class="header">
        <div class="welcome-logout">
            <div class="welcome">Welcome, <?php echo $username; ?></div>
            <a href='../php/logout.php' class='logout-button'>Logout</a>
        </div>
    </div>
    <div class="drop">
        <button class="button">Navigate</button>
        <div class="dropdown-content">
            <a href="Untitled-1.php">CV</a>
            <a href="Contact.php">Contact</a>
            <a href="menu.php">Menu</a>
        </div>
    </div>
    <p>Gallery</p>
    <div class="gallery">
        <div class="thumbnail">
            <a href="#img1">
                <img src="../images/maxresdefault (1).jpg" >
            </a>
        </div>
        <div class="thumbnail">
            <a href="#img2">
                <img src="../images/goofy.jpg" >
            </a>
        </div>
    </div>
    <div class="anim" id="img1">
        <a href="#" class="close-btn">&times;</a>
        <div class="zoomable">
            <img src="../images/maxresdefault (1).jpg">
        </div>
    </div>

    <div class="anim" id="img2">
        <a href="#" class="close-btn">&times;</a>
        <div class="zoomable">
            <img src="../images/goofy.jpg">
        </div>
    </div>
</body>
</html>

