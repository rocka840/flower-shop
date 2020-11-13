<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php 
    if (isset($_GET["NBR"]) && isset($_GET["type"]))
    {
        $fileHandler = fopen("flowerData.txt","a");
        fwrite($fileHandler, $_GET["NBR"]." ".$_GET["type"]."\n");
        fclose($fileHandler);
        ?>
        Your order have been submited
        <?php
    }
    else 
    {
        ?>
        <form>
        Number of flowers: <input name="NBR">
        <br>
        Type of flower:
        <select name="type">
        <option value="Roses">Roses</option>
        <option value="Tulips">Tulips</option>
        </select>
        <input type="submit" value="Order">
        </form>
        <?php
    }
    ?>

</body>
</html>