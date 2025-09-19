<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/magazin.css">
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
    $json = file_get_contents('../data.json');
    $data = json_decode($json, true);
    $data_L = count($data);
    $ct = -1;
    ?>
    <div id="container" class="closeSidebar">
        <div id="content" style="text-align: center;">
            <br><br>
            <form action="" method="POST">
                <input placeholder="Operă, autor, an" type="text" name="value" style="width: 45%; border-radius: 15px; padding: 2px 10px">
                <input type="submit" name="search" value="Cauta" id="searchButton" style="border-radius: 15px; border: 2px solid black;">
            </form>
            <br>
            <?php
            #if (isset($_POST["search"])) {
            $value = isset($_POST["value"]) ? $_POST["value"] : "";
            #echo $value;
            if (isset($_POST["value"]) && $value != " ") {
                $quo = '"';
                echo '<span><strong>Rezultate pentru: ', $quo, $value, $quo, ' </strong></span><br>';
            }
            for ($i = 0; $i < $data_L; $i++) {
                $loweredTitle = strtolower($data[$i]["title"]);
                $loweredAuthor = strtolower($data[$i]["artistName"]);
                $encodedDate = urlencode($data[$i]["completitionYear"]);
                $value = strtolower($value);
                if (!$value || (strstr($loweredTitle, $value) || strstr($loweredAuthor, $value) || strstr($encodedDate, $value))) {
                    $ct++;
                    $encodedTitle = urlencode($data[$i]["title"]);
                    $encodedArtistName = urlencode($data[$i]["artistName"]);
                    $encodedSrc = urlencode($data[$i]["image"]);
                    $encodedDate = urlencode($data[$i]["completitionYear"]);
                    $encodedWidth = urlencode($data[$i]["width"]);
                    $encodedHeight = urlencode($data[$i]["height"]);
                    $ratio = $encodedWidth / $encodedHeight;
                    echo "<a href='./details.php?id=$i&author=$encodedArtistName&name=$encodedTitle&src=$encodedSrc
                        &date=$encodedDate&width=$encodedWidth&height=$encodedHeight'><div class='product'>";

                    echo "<img src=", $data[$i]["image"], ">";


                    $shortenedName = $data[$i]["title"];
                    $maximumStringLength = 25;
                    if (strlen($data[$i]["title"]) > $maximumStringLength) {
                        $shortenedName = substr($data[$i]["title"], 0, $maximumStringLength);
                        $shortenedName .= "...";
                    }
                    echo "<span>", $shortenedName, "</span>";

                    echo "<br><span><strong>", $data[$i]["artistName"], "</strong></span>";

                    echo "</div></a>";
                    if ($ct && !(($ct + 1) % 3))
                        echo "<br>";
                }
            }
            #}
            ?>
            <br>
            <i class='bx bxs-chevron-up bx-lg' id="arrow"></i>
            <br>
        </div>
    </div>

    <script src="../scripts/sidebarScript.js"></script>
    <script src="../scripts/arrowScript.js"></script>
</body>

</html>