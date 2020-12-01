<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FLower Shop 2</title>

    <style>

    .header{
        text-align: center;
        font-size: xx-large;
        margin-top: 15%;
    }

    .subheader{
        text-align: center;
        font-size: x-large;
        margin-top: -2%;
    }

        #ALLProducts{
    display: flex;
    flex-direction:row;
    flex-wrap: wrap;
            position: absolute;
            top: 33%;
            left: 7%;
            right: 7%;

}

.box{
    display: inline-block;
    background-color: indianred;
    text-align: center;
    width: 33%;
    height: 100%;
   margin-left: 0.1%;
    margin-right: 0.22%;
    margin-bottom: 0.22%;

}

.image{
    height: 150px;
    width: 150px;
}

.Name{
    font-size: medium;
}

.Price{
    font-size: small;
}

.Colour{
    font-size: x-small;
}
    </style>
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