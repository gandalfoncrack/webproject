<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location: ../index.html"); 
    exit;
}

$galleryData = json_decode(file_get_contents('../images/images.json'), true);

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
        <?php foreach ($galleryData as $image): ?>
            <div class="thumbnail">
                <a href="#img<?php echo $image['id']; ?>">
                    <img src="../images/<?php echo $image['name']; ?>" alt="<?php echo $image['alt']; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php foreach ($galleryData as $image): ?>
        <div class="anim" id="img<?php echo $image['id']; ?>">
            <a href="#" class="close-btn">&times;</a>
            <div class="zoomable">
                <img src="../images/<?php echo $image['name']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>


