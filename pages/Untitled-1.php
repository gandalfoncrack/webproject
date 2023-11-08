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
    <link rel="stylesheet" href="../css/Untitled-2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Your Name - CV</title>
</head>
<body>
    <div class="header">
        <div class="welcome-logout">
            <div class="welcome">Welcome, <?php echo $username; ?></div>
            <a href='../php/logout.php' class='logout-button'>Logout</a>
        </div>
    </div>
    <header>
        <img src="../images/maxresdefault (1).jpg" class="myimage" width="500">
        <div id="kksd">
        <h1>Khaled Khalife</h1>
        <p>Software Developer</p>
    </div>
    </header>
    
        <nav>
        <ul class="ul1">
            <li class="navid"><a class="navid1" href="#skills">Skills</a></li>
            <li class="navid"><a class="navid1" href="#experience">Experience</a></li>
            <li class="navid"><a class="navid1" href="#education">Education</a></li>
            <li class="navid"><a class="navid1" href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="skills">
        <h2>Skills</h2>
        <ul>
            <li>Programming: C, Java, Python, HTML, CSS</li>
            <li>Computer security: reverse-engineering, malware analysis</li>
            <li>Computer security Breaching: SQL injection, Script execution, Cryptography, Buffer Overflow</li>
            <li>Computer hardware and software repair</li>
            <li>Proficient in Microsoft Office suite            </li>
            <li>Proficient in setting up SQL Databases using Oracle </li>
        </ul>
    </section>

    <section id="experience">
        <h2>Experience</h2>
        <ul class="ull">2016-2020 Computer Technician, Freelance</ul>
        <li class="ull1">Built and repaired computers, performed software and hardware maintenance</li>
        <li class="ull1">Provided customer support and troubleshooting services</li>
        <li class="ull1">Developed expertise in hardware and software configuration</li>
        <ul class="ull">2022-2023 Personalized Webpage Developer, Freelance</ul>
        <li class="ull1">Created personalized front-end webpages to test HTML and CSS skills</li>
        <li class="ull1">Collaborated with clients to understand their design preferences and specifications</li>
        <li class="ull1">Developed problem-solving skills by resolving issues that arose during the webpage development
            process</li>
    </section>

    <section id="education">
        <h2>Education</h2>
        <p>Bachelor of Applied Science – BASc, Computer Science</p>
        <p>Lebanese American University, Expected Graduation: 2024</p>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p>
            <a href="tel:+96178987885"><i class="fas fa-phone"></i> 
            +961 78987885</a><br>
            <a href="mailto:khaled_khalifebob@hotmail.com"><i class="fas fa-envelope"></i> khaled_khalifebob@hotmail.com</a>
        </p>
    </section>

    <footer>
        <nav>
            <ul>
                <li><a href="thingy.php">Gallery</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>