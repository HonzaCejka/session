<?php
if (isset($_POST["Strom"]) && isset($_POST["sirka"]) && isset($_POST["delka"])) {
    $hustota = 0;
    if ($_POST["Strom"] == "Smrk") {
        $hustota = 2;
    }else if ($_POST["Strom"] == "Borovice") {
        $hustota = 3;
    }else if ($_POST["Strom"] == "Modrin") {
        $hustota = 4;
    }
$plocha = $_POST["sirka"] * $_POST["delka"];
$Pocet = $plocha * $hustota;

}
?>
<div>
    <form method="POST">
        Stromek: <select name="Strom" id="">
            <option value="Smrk">Smrk</option>
            <option value="Borovice">Borovice</option>
            <option value="Modrin">Modrin</option>
        </select><br>
        Šířka pozemku: <input type="number" name="sirka"><br> 
        Délka pozemku: <input type="number" name="delka"><br>
        <button type="submit">Vypočti</button><hr>
    </form>
    <?php
    if (isset($_POST["Strom"]) && isset($_POST["sirka"]) && isset($_POST["delka"])) {
        echo"Plocha je: ".$plocha." m2<br>";
        echo"Stromků je: ".$Pocet."<br>";
    }
    ?>
</div>