<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
    <h1>PHP tunnitööd</h1>
</header>
<?php
//navigerimismenüü
include('nav.php');
?>


<section>
    <?php
    if(isset($_GET["leht"])){
        include('content/'.$_GET["leht"]);
    } else {
        echo "Tere tulemast!";
    }
    ?>

</section>
<?php
    echo "Gleb Sõtšjov &copy";
    echo "<br>";
    echo date('Y');
?>
</body>
</html>
