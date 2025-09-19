<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria.ro</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/indexContent.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header>
        <i class='bx bx-menu bx-lg' id="menuIcon"></i>
        <span><a href="./index.php">Acasă</a></span>
        <span><a href="./magazin.php">Magazin</a></span>
        <span><a href="./colectii.php">Colecții de lux</a></span>
        <span><a href="./contact.php">Contact</a></span>
    </header>
    <div id="sidebar" class="closed">
        <div class="sidebarRow">Acasă</div>
        <div class="sidebarRow">Magazin</div>
        <div class="sidebarRow">Colecții de lux</div>
        <div class="sidebarRow">Contact</div>
    </div>
    <div id="container" class="closeSidebar">
        <div id="content"><br><br>
            <h1>Galeria.ro</h1><br>
            <p style="margin-top: 350px; padding: 100px 0;">Pe galeria.ro, poți admira, vinde și cumpăra nenumarate
                picturi în original, dintr-o gamă variată de stiluri</p>

            <div id="carrDiv">
                <img class="carrouselImg" src="../images/fall-art-18.jpg">
                <img class="carrouselImg" src="../images/mother-and-baby-reindeer-illustration-4k_1636844745.jpg">
                <img class="carrouselImg" src="../images/fall-art-14.jpg">
                <img class="carrouselImg" src="../images/fall-art-09.jpg">
                <img class="carrouselImg" src="../images/fall-art-07.jpg">
                <img class="carrouselImg" src="../images/fall-art-28.jpg">
                <img class="carrouselImg" src="../images/fall-art-20.jpg">
            </div>

            <div class="shadow" id="shadow1"><i class='bx bx-chevron-left'></i></div>
            <div class="shadow" id="shadow2"><i class='bx bx-chevron-right'></i></div>

            <p style="padding: 80px 20px;">Cele mai importante opere de artă pe care le poți găsi pe galeria.ro
                implică artiști precum Leonardo da Vinci, Pablo Picasso și Salvador Dali</p>

            <div id="selectionDiv">
                <div class="imgBorder">
                    <img class="selectionImg" src="../images/leonardo_da_vinci.webp">
                </div>
                <div class="imgBorder">
                    <img class="selectionImg" src="../images/pablo.jpg">
                </div>
                <div class="imgBorder">
                    <img class="selectionImg" src="../images/dali-front.jpg">
                </div>
            </div>

            <br>
            <span class="hov"><a href="./magazin.php" id="seeStore">Vezi magazinul</a></span><br><br>
            <i class='bx bxs-chevron-up' id="arrow"></i><br>
        </div>
    </div>


    <script src="../scripts/indexScript.js"></script>
    <script src="../scripts/sidebarScript.js"></script>
    <script src="../scripts/arrowScript.js"></script>
</body>

</html>