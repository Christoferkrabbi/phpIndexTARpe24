<?php
echo "<h2>Matemaatilised funktsioonid (kasutaja sisestusega)</h2>";

// Arvu ruut
function ruut($arv) {
    return $arv * $arv;
}

// Arvu ruutjuur
function ruutjuur($arv) {
    if ($arv < 0) {
        return "Negatiivsel arvul puudub ruutjuur";
    }
    return sqrt($arv);
}

// Protsendi arvutamine
function protsent($osa, $kogus) {
    if ($kogus == 0) {
        return "Nulliga ei saa jagada";
    }
    return ($osa / $kogus) * 100;
}

$ruutArv = $_POST["ruutarv"] ?? "";
$ruutjuurArv = $_POST["ruutjuurarv"] ?? "";
$osa = $_POST["osa"] ?? "";
$kogus = $_POST["kogus"] ?? "";
?>

<form method="post">
    <h3>Arvu ruut</h3>
    <input type="number" name="ruutarv" step="any">

    <h3>Arvu ruutjuur</h3>
    <input type="number" name="ruutjuurarv" step="any">

    <h3>Protsendi arvutamine</h3>
    Osa: <input type="number" name="osa" step="any">
    Kogus: <input type="number" name="kogus" step="any">

    <br><br>
    <button type="submit">Arvuta</button>
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Tulemused</h3>";
    echo "<ul>";

    if ($ruutArv !== "") {
        echo "<li>$ruutArv ruudus = " . ruut($ruutArv) . "</li>";
    }

    if ($ruutjuurArv !== "") {
        echo "<li>ruutjuur $ruutjuurArv = " . ruutjuur($ruutjuurArv) . "</li>";
    }

    if ($osa !== "" && $kogus !== "") {
        echo "<li>$osa on " . round(protsent($osa, $kogus), 2) . "% arvust $kogus</li>";
    }

    echo "</ul>";
}
?>
