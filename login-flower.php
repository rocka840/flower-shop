<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN flower shop</title>
</head>
<body>
<?php
// Set session variable
if(isset($_GET["email"]) && isset($_GET["password"])){
    $_SESSION["email"] = $_GET["email"];
    $_SESSION["password"] = $_GET["password"];
} else {
?>

    <form action="flower-shop.php" method="get">
    <div>LOGIN please</div>
    <input name="email" placeholder="please input your email">
    <input type="password" name="password" placeholder="password here please">
    <input type="submit" name="go">
</form>

<?php
}
?>

</body>
</html>