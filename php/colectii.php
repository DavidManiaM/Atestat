<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/colectii.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        #sidebar {
            background-color: var(--light-theme-color);
        }
    </style>
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
    <div id="image">
        <div id="content" class="closeSidebar">
            <div class="sec" id="sec1">
                <table align="center" cellspacing="150" width=95%>
                    <tr>
                        <td>
                        <span class="big">Colecția
                                <span class="color">Dali</span>
                            </span><br>
                            <span class="big">Valoare totală: 5.000.000€</span><br>
                            <span>Pentru detalii, adresați-vă personalului de management din secțiunea "<b><a href="../php/contact.php" style="color: black; text-decoration:underline">Contact</b></a>"</span>
                        </td>
                        <td>
                            <div class="cube">
                                <div class="face front">
                                    <img src="../images/dali-front.jpg">
                                </div>
                                <div class="face back">
                                    <img src="../images/dali-back.webp">
                                </div>
                                <div class="face right">
                                    <img src="../images/dali-right.webp">
                                </div>
                                <div class="face left">
                                    <img src="../images/dali-left.webp">
                                </div>
                                <div class="face top">
                                    <img src="../images/dali-top.jpg">
                                </div>
                                <div class="face bottom">
                                    <img src="../images/dali-bottom.jpg">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <hr>
            <hr>
            <hr>
            <div class="sec" id="sec2">
                <table align="center" cellspacing="150" width=90%>
                    <tr>
                        <td>
                        <span class="big">Colecția
                                <span class="color">Picasso</span>
                            </span><br>
                            <span class="big">Valoare totală: 4.500.000€</span><br>
                            <span>Pentru detalii, adresați-vă personalului de management din secțiunea "<b><a href="../php/contact.php" style="color: black; text-decoration:underline">Contact</b></a>"</span>
                        </td>
                        <td>
                            <div class="cube">
                                <div class="face front">
                                    <img src="../images/picasso-front.jpg" alt="">
                                </div>
                                <div class="face back">
                                    <img src="../images/picasso-back.webp" alt="">
                                </div>
                                <div class="face right">
                                    <img src="../images/picasso-right.jpg" alt="">
                                </div>
                                <div class="face left">
                                    <img src="../images/picasso-left.jpeg" alt="">
                                </div>
                                <div class="face top">
                                    <img src="../images/picasso-top.jpg" alt="">
                                </div>
                                <div class="face bottom">
                                    <img src="../images/picasso-bottom.jpg" alt="">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <hr>
            <hr>
            <hr>
            <div class="sec" id="sec3">
                <table align="center" cellspacing="150" width=90%>
                    <tr>
                        <td>
                            <span class="big">Colecția
                                <span class="color">Monet</span>
                            </span><br>
                            <span class="big">Valoare totală: 4.000.000€</span><br>
                            <span>Pentru detalii, adresați-vă personalului de management din secțiunea "<b><a href="../php/contact.php" style="color: black; text-decoration:underline">Contact</b></a>"</span>
                        </td>
                        <td>
                            <div class="cube">
                                <div class="face front">
                                    <img src="../images/monet-front.png" alt="">
                                </div>
                                <div class="face back">
                                    <img src="../images/monet-back.jpg" alt="">
                                </div>
                                <div class="face right">
                                    <img src="../images/monet-right.jpg" alt="">
                                </div>
                                <div class="face left">
                                    <img src="../images/monet-left.jpg" alt="">
                                </div>
                                <div class="face top">
                                    <img src="../images/monet-top.jpg" alt="">
                                </div>
                                <div class="face bottom">
                                    <img src="../images/monet-bottom.jpg" alt="">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="../scripts/sidebarScript.js"></script>
    <script src="../scripts/culori.js"></script>
</body>

</html>