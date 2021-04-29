<?php
    $currentPage = basename($_SERVER["SCRIPT_NAME"], '.php');
    $navLinks = ['home', 'aboutme', 'photos'];
    
    function outputNav($navLinks, $currentPage) {
        $theClass = '';
        foreach ($navLinks as $link) {
            if ($link == 'home' && $currentPage == 'index') {
                $theClass = 'clicked';
            } elseif ($link == $currentPage) {
                $theClass = 'clicked';
            } else {
                $theClass = '';
            }
    
            if ($link == 'home') {
                echo "<li><a href=index.php class='{$theClass}'>" . ucfirst($link) . "</a></li>";
            } else {
                echo "<li><a href={$link}.php class='{$theClass}'>" . ucfirst($link) . "</a></li>";
            }
    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shiba Website</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <nav class="navbar">
        <img class="logo" src="images/shilogo.png">
        <ul>
            <?php
            outputNav($navLinks, $currentPage);
            ?>

        </ul>
    </nav>
</body>

</html>