<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/details.css">
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
    <?php
    $id = $_GET["id"];
    $author = $_GET["author"];
    $title = urldecode($_GET["name"]);
    $src = $_GET["src"];
    $date = $_GET["date"];
    $width = $_GET["width"];
    $height = $_GET["height"];

    //pastram ratia, insa facem poza suficient de mare
    $ratio = $width / $height;
    $maxWidth = 750;
    $maxHeight = 630;
    if ($width > $height) {
        $newWidth = min($width, $maxWidth);
        $newHeight = $newWidth / $ratio;
    } else {
        $newHeight = min($height, $maxHeight);
        $newWidth = $newHeight * $ratio;
    }
    $height = $newHeight;
    $width = $newWidth;
    if(!($id && $author && $title && $src && $date && $width && $height)){
        echo "Eroare";
    }
    ?>

    <div id="container" class="closeSidebar">
        <div id="circle"></div>
        <div id="pictureContainer">
            <!--<img src=<?php echo $src; ?> id="da">-->
            <div id="image" style="background-image: url('<?php echo $src; ?>'); width: <?php echo $width; ?>px; height:<?php echo $height; ?>px"></div>
        </div>

        <div id="text">
            <br>
            <span style="font-size: 40px;"><strong>"<?php echo $title; ?>"</strong></span>
            <span style="font-size: 35px;"><strong><?php echo $author; ?>,<?php echo $date; ?></strong></span>
            <span style="font-size: 28px;">Numărul #<?php echo $id + 1; ?> în popularitate!</span>
            <span><?php
                    $price = (int)(1e4 / (($id + 1))) * 100;
                    if ($price < 1000) $price = 1000;
                    echo number_format($price, 0, '.', '.');
                    echo "€";
                    ?></span>
                    <br>
            <div style="font-size: 28px;">Efect: &nbsp;<select id="shaderSelect">
                    <!--contrast(80%); hue-rotate(90deg)  invert(100%) saturate(2100%) sepia(50%);-->
                    <option value="imgRotation">Rotire</option>
                    <option value="sepia">Sepia</option>
                    <option value="greyscale">Greyscale</option>
                    <option value="hueRotate">Hue-rotate</option>
                    <option value="invert">Invert</option>
                    <option value="saturate">Saturate</option>
                </select></div><br>
            <div id="controller" class="open" style="background-image: url('<?php echo $src; ?>');"></div><br>
            <select id="hoverOption" class="closed">
                <option value="integral">Efect integral</option>
                <option value="circle">Efect in cerc</option>
            </select>
            <span style="font-size: 28px;">Schimbă puterea efectului</span><input type="range" id="range">
        </div>
    </div>
    <script src="../scripts/detailsScript.js"></script>
    <script src="../scripts/sidebarScript.js"></script>
</body>

</html>