<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/contact.css">
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
        <table align="center" cellspacing="4">
            <tr>
                <td>
                    <span style="font-size: 45px">Creatorul site-ului:</span>
                </td>
                <td style="text-align:center; border-radius: 0 20px 0 0;">
                    <span style="font-size: 43px;" class="color">Mania David-Marian</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span style="font-size: 43px">Școala de proveniență:</span>
                </td>
                <td>
                    <span style="font-size: 30px" class="color">Colegiul Național Dr. Ioan Meșotă, Brașov</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span style="font-size: 43px">Informații achizitii:</span>
                </td>
                <td>
                    <ul type="circle">
                        <li><span style="font-size: 30px" class="color">email: galeria.ro-purchase@gmail.com</span>
                            <i class='bx bx-copy-alt bx-sm'></i>
                            <span class="copyConfirmationMessage">Text copiat!</span>
                        </li>
                        <li><span style="font-size: 30px" class="color">telefon: +40 727 000 000</span>
                            <i class='bx bx-copy-alt bx-sm'></i>
                            <span class="copyConfirmationMessage">Text copiat!</span>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="border-radius: 0 0 0 20px;">
                    <span style="font-size: 43px">Întrebări și feedback:</span>
                </td>
                <td>
                    <ul type="circle">
                        <li><span style="font-size: 30px" class="color">email: galeria.ro-helpline@gmail.com</span>
                            <i class='bx bx-copy-alt bx-sm'></i>
                            <span class="copyConfirmationMessage">Text copiat!</span>
                        </li>
                        <li><span style="font-size: 30px" class="color">telefon: +40 727 999 999</span>
                            <i class='bx bx-copy-alt bx-sm'></i>
                            <span class="copyConfirmationMessage">Text copiat!</span>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <script src="../scripts/sidebarScript.js"></script>
    <script src="../scripts/contact.js"></script>
    <script src="../scripts/culori.js"></script>
</body>

</html>

</html>