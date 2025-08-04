<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" sizes="32x32" href="icon-cidb-mewah.png">

<?php include 'seo.php' ?>
    
    <!-- <link rel="stylesheet" href="./assests/style.css"> -->

    <!-- RemixIcons CDN -->
    <script src="https://kit.fontawesome.com/0ede200358.js" crossorigin="anonymous" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" rel="stylesheet">

     <!-- Performance Optimization -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- Performance Script Loading -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async defer></script>



     <!-- Critical CSS -->
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

/* Header Styles */
header {
    font-size: 62.5%; /* Base font size for rem units */

    font-family: 'Nunito', sans-serif;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 1rem 3.6rem;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.3s ease;
}

.sticky {
    background: #fff;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

header .logo {
    color: #fff;
    font-weight: 700;
    font-size: clamp(1.5rem, 4vw, 3rem);
    text-decoration: none;
}

.sticky .logo {
    color: #111;
}

/* Navbar Styles */
header .navbar {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
}

header .navbar li {
    list-style: none;
    margin-left: 1.5rem;
    position: relative;
}

header .navbar li a {
    position: relative;
    font-size: clamp(1rem, 2vw, 1.5rem);
    text-decoration: none;
    text-transform: uppercase;
    color: #fff;
    font-weight: 600;
    transition: color 0.3s ease;
}

header .navbar li a::before {
    content: '';
    position: absolute;
    background: var(--maing);
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 0;
    transition: width 0.3s ease;
}

header.sticky .navbar li a {
    color: black;
}

.arrow-down{
    margin-left: 0.6rem;
}

header .navbar li a:hover::before,
header .navbar li a.active::before {
    width: 100%;
}

/* Main Dropdown Styles */
header .navbar li .dropdown-menu {
    display: none;
    position: absolute;
    top: 105%;
    left: 0;
    background: #fff;
    list-style: none;
    padding: 10px 0;
    margin: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
    border-radius: 5px;
    z-index: 1000;
    min-width: 180px;
}

header .navbar li:hover > .dropdown-menu {
    display: block;
}

header .navbar li .dropdown-menu li {
    margin: 0;
    position: relative;
}

header .navbar li .dropdown-menu a {
    display: block;
    padding: 10px 20px;
    color: #111;
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: 600;
    transition: all 0.3s ease;
}


/* Hover Effects */
header .navbar li .dropdown-menu a:hover,
header .navbar li .nested-dropdown-menu a:hover {
    background: var(--maing);
    color: #fff;
    padding-left: 25px;
}

/* Mobile Styles */
#menu-bar {
    font-size: 2.5rem;
    cursor: pointer;
    color: var(--maing);
    display: none;
}

@media (max-width: 998px) and (min-width: 768px) {
    header {
        padding: 1.2rem 2.7rem;
    }

    header .navbar {
        gap: 15px;
    }

    header .navbar li a {
        padding: 0.2rem 0.5rem;
        font-size: 1.2rem;
    }

    header .logo {
        font-size: 2rem;
    }

    header.sticky {
        padding: 1rem 2.5rem;
    }

    header .navbar li .dropdown-menu {
        min-width: 200px;
    }

    header .navbar li .dropdown-menu a {
        font-size: 1rem;
        padding: 8px 15px;
    }
}

@media (max-width: 768px) {
    header {
        padding: 1.4rem 3rem;
    }

    #menu-bar {
        display: initial;
    }

    .sticky #menu-bar {
        color: var(--maing);
    }

    header .navbar {
        position: fixed;
        top: 46px;
        right: -100%;
        background: white;
        width: 52%;
        height: calc(100vh - 20px);
        padding: 1.5rem;
        flex-direction: column;
        transition: right 0.3s ease;
    }

    header .navbar.active {
        right: 0;

    }

    header .navbar li {
        margin: 1rem 0;
    }

    header .navbar li a {
        display: block;
        padding: 0.2rem;
        color: black;
        font-weight: bold;
        font-size: 1.6rem;
    }

    header .navbar li .dropdown-menu,
    .nested-dropdown-menu {
        position: static;
        display: none;
        box-shadow: none;
        width: 100%;
        background: #f9f9f9;
        padding-left: 20px;
    }

    header .navbar li:hover .dropdown-menu,
    .nested-dropdown:hover .nested-dropdown-menu {
        display: block;
    }

    header .navbar li .dropdown-menu a,
    .nested-dropdown-menu a {
        font-size: 1.2rem;
        padding: 9px 0;
    }

    .arrow-right {
        transform: rotate(90deg);
    }

    .nested-dropdown:hover > a .arrow-right {
        transform: rotate(270deg);
    }
}
@media (max-width: 410px) {
    header .logo {
        font-size: 1.9rem;
    }
    header .navbar li{
        margin: 0.1rem 0;
    }
    header .navbar li a {
        font-size: 1.5rem; /* Reduce font size for smaller screens */
        padding: 0.6rem;
        margin: 1.5rem 0.8rem 0 0.5rem;
    }
  }

      </style>
</head>
<body>

<!-- header starts -->
<!-- header starts -->
<header>
    <a href="index.php" class="logo">MEWAH SERVICES</a>
    <div id="menu-bar" class="ri-menu-3-line"></div>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">About</a></li>
        <li class="dropdown">
            <a style="cursor: pointer;">Card<span class="arrow-down">&#x25BE;</span></a>
            <ul class="dropdown-menu">
                <li><a href="card-cidb.php">Apa itu Kad CIDB</a></li>
                <li><a href="daftar-baru-cidb.php">Daftar Baru</a></li>
                <li><a href="renew-kad-cidb.php">Pembaharuan Kad</a></li>
                <li><a href="kad-cidb-hilang.php">Gantian Kad Hilang</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a style="cursor: pointer;">Sijil<span class="arrow-down">&#x25BE;</span></a>
            <ul class="dropdown-menu">
                <li><a href="iktirafan-sijil-taraf-bumiputera-cidb.php">Taraf Bumiputera (STB)</a></li>
                <li><a href="ppk.php">Pendaftaran Kontraktor (PPK)</a></li>
                <li><a href="mata-ccd-cidb.php">Mata CCD CIDB</a></li>

            </ul>
        </li>
        <li><a href="index.php">Services</a></li>
        <li><a href="index.php">Blog</a></li>
        <li><a href="index.php">Operation</a></li>
    </ul>
</header>
<!-- header ends -->



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="./assests/script.js"></script>

</body>
</html>