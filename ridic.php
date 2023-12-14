<?php
if (isset($_POST["Auto"]) && isset($_POST["vzdalenost"]) && isset($_POST["cena"])) {
    $spotreba = 0;
    if ($_POST["Auto"] == "Skoda") {
        $spotreba = 6;
    }else if ($_POST["Auto"] == "Ford") {
        $spotreba = 10;
    }else if ($_POST["Auto"] == "Subaru") {
        $spotreba = 13;
    }
$vzdalenost = $_POST["vzdalenost"];
$cena = $_POST["cena"];
$finalcena = ($spotreba /100) * $vzdalenost * $cena;

}
?>
<div>
    <form method="POST">
        Auto: <select name="Auto" id="">
            <option value="Skoda">Škoda</option>
            <option value="Ford">Ford</option>
            <option value="Subaru">Subaru</option>
        </select><br>
        Ujetá vzdálenost: <input type="number" name="vzdalenost"><br> 
        Cena za l: <input type="number" name="cena"><br>
        <button type="submit">Vypočti</button><hr>
    </form>
    <?php
    if (isset($_POST["Auto"]) && isset($_POST["vzdalenost"]) && isset($_POST["cena"])) {
        echo"Jel ".$_POST["Auto"]." ".$_POST["vzdalenost"]." km <br>Spotřeba: ".$spotreba."/km <br>"."Cena: ".$finalcena."Kč";        
    }
    ?>
</div>