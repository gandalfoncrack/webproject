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
<head>
    <title>Contact information</title>
    <link rel="stylesheet" href="contactstyling.css">
</head>
<body>
    
    
    
    <main>
        <p>Phone: <a href="tel:+96178987885"><i class="fas fa-phone"></i> 
            +961 78987885</a><br></p>
        <p>Email: <a href="mailto:khaled_khalifebob@hotmail.com"><i class="fas fa-envelope"></i> khaled_khalifebob@hotmail.com</a></p>
        <ul>
            <li><a href="thingy.html">Gallery</a></li>
            <li><a href="Untitled-1.html">CV</a></li>
            <li><a href="menu.html">Main Page</a></li>
        </ul>
    </main>
</body>
