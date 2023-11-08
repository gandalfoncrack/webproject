<?php
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<div class='welcome'>Welcome, $username</div>";
        echo "<a href='logout.php' class='logout-button'>Logout</a>";
    } else {
        header("Location: index.html"); // Redirect to the login page if not authenticated
        exit;
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="menucss.css">
</head>
<body>
    <div class="header">
    <div>
        <div class="welcome">Welcome, $username</div>
        <a href='logout.php' class='logout-button'>Logout</a>
    </div>
</div>
    <header>
        <nav>
            <ul>
                <li><a href="thingy.html">Gallery</a></li>
                <li><a href="Untitled-1.html">CV</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to My Website</h1>
        <p>You can navigate to any one part of my pages using the buttons above.</p>
        <p>link to my website(for doctor Gilbert): https://webhw3menucvgallery.000webhostapp.com/</p>
    </main>
</body>
</html>
