<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navigation Bar</title>

    <style>
        .nav{
    background-color: indianred;
        }
    </style>
</head>
<body>

<div class="nav">
    <?php
    $navigationLinks=["roses.php"=>"Roses", "hydrangea.php"=>"Hydrangea", "lily.php"=>"Lily"];
    /*
    navigationLinks["roses.php"] -> this will be equal to "Roses"
    */
   // $sampleArray=["Value1","Value2"];
    /*
     $sampleArray[0] -> this will be equal tp "Value"
     */
    foreach ($navigationLinks as $key => $value){
        AddNavLink($key, $value);
    }
    //AddNavLink("roses.php","Products");
    ?>
</div>

</body>
</html>