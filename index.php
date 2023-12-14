<?php
session_start();
if (isset($_GET["odhlasit"])) {
    session_destroy();
    header("location:index.php");
}

if (isset($_POST["Jmeno"]) && isset($_POST["Heslo"])) {
    if ($_POST["Jmeno"] == "lesnik") {
        if ($_POST["Heslo"] == "123") {
            $_SESSION["Jmeno"] = "lesnik";
            $_SESSION["login"] = true;
        }
    }
    else if ($_POST["Jmeno"] == "ridic") {
        if ($_POST["Heslo"] == "1234") {
            $_SESSION["Jmeno"] = "ridic";
            $_SESSION["login"] = true;
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php    
    if (!isset($_SESSION["login"])) {        
    ?>
    <form method="POST">
        Jméno: <input type="text" name="Jmeno" id="Jmeno"><br>
        Heslo: <input type="password" name="Heslo" id="Jmeno"><br>
                <button type="submit">Odeslat</button><br>
    </form>
    <?php
    }
    else{?>
        <a href="index.php/?odhlasit=true">Odhlásit</a>
    <?php
    }
    ?>
</body>

<hr>
<?php
if ($_SESSION) {
  $nazevsouboru = $_SESSION["Jmeno"].".php";
  include($nazevsouboru);
}
?>
</html>

