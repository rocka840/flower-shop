<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FLower Shop 2</title>
    <link rel='stylesheet' type='text/css' media='screen' href='flowercss.css'>

</head>
<body>

<?php
if(isset($_GET["username"]) && isset($_GET["password"])){
    $_SESSION["username"] = $_GET["username"];
    $_SESSION["password"] = $_GET["password"];
}

if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
    print "You are logged in.";
    ?>
    <form method="get" action="flowershop2.php">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php
} else {
    ?>

    <form action="flowershop2.php" method="get">
        <div>Login Here</div>
        <input name="username" placeholder="username here">
        <input name="password" type="password" placeholder="password here">
        <input type="submit" name="submit">
    </form>
    <?php
}
?>


<h1 class="header">Flower Shop</h1>
<h2 class="subheader">buy here! - click on lower banner to see more info</h2>

<div id="ALLProducts">
    <?php
    $fileHandler = fopen("DataFlower2.txt", "r");
    while($line=fgets($fileHandler))
    {
        $oneProduct = explode("|", $line);

        ?>


        <div class="box">
            <img src="<?=$oneProduct[0]?>" alt="FlowerImg" class="image">
            <div class="Name">Name:<?=$oneProduct[1]?></div>
            <div class="Price">Price:<?=$oneProduct[2]?></div>
            <div class="Colour">Colours Available:<?=$oneProduct[3]?></div>
        </div>

        <?php
    }
    fclose($fileHandler);
    ?>
    <br>
    <?php
    include_once "Navigation.php";
    ?>
</div>

</body>
</html>