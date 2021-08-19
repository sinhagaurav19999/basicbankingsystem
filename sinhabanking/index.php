<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

    <title>Gaurav Bank of India</title>
</head>

<body>
    <header>
        <nav id="navbar">
            <a href="index.php"><img class="logo" src="images/logo.png" alt="image"></a>
            <h1 class="headText">Gaurav Bank Of India</h1>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="navlinks">
                <li><a class="links" href="./index.php">Home</a></li>
                <li><a class="links" href="./about.php">About</a></li>
                <li><a class="links" href="./index.php">Banking</a></li>
                <li><a class="links" href="./contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="first">
            <h1 class="first-heading animate">Welcome To <br><span class="text">Gaurav Bank Of India</span></h1>
            <h5 class="first-subtext animate2">TRUST IS THE BIGGEST WEALTH</h5>
            <a id="button" href="./users.php">View all users</a>
            <a id="button" href="./transfer_money.php">Transfer Money</a>
            <a id="button" href="./transactionhistory.php">Transaction History</a>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
    <script src="./js/ham-animation.js"></script>
    <script src="./js/homepage-animations.js"></script>
</body>

</html>