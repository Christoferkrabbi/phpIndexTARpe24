
    <?php
echo "<h2>MÕISTATUS – ARVA ÄRA EESTI LINNANIMI</h2>";
/* eesmärk on ära arvata, millist Eesti linna on kirjeldatud.
// Kirjuta abiks 5–6 tekstipõhist funktsiooni” ehk vihjet,
// mis aitavad samm-sammult lähemale jõuda õigele linnanimele.
// funktsioonid on näiteks selliseid - esimene täht on .. jne*/
echo "<br>"
?>
    <form method="post">
        <label>Sisesta täht:</label>
        <input type="text" name="taht" maxlength="1">
        <button type="submit">Saada</button>
    </form>

<?php
$linn="tallinn";
$taht = "";

if (isset($_POST["taht"])) {
    $taht = $_POST["taht"];
}
echo "<ol>";
echo "<li>" . esimeneTaht($linn) . "</li>";
echo "<li>" . viimaneTaht($linn) . "</li>";
echo "<li>" . tahtedeArv($linn) . "</li>";
echo "<li>" . sisaldabTahte($linn, $taht) . "</li>";
echo "<li>" . tahtEsineb($linn, $taht) . "</li>";
echo "<li>" . kuiPikk($linn, 6) . "</li>";
echo "</ol>";


function esimeneTaht($linn) {
    return "Linn algab tähega " . substr($linn, 0, 1);
}
function viimaneTaht($linn) {
    return "Linn lõpeb tähega " . substr($linn, -1);
}
function tahtedeArv($linn) {
    return "Linnanimes on " . strlen($linn) . " tähte";
}
function sisaldabTahte($linn, $taht) {
    if ($taht == "") {
        return "Palun sisesta täht";
    }

    if (strpos($linn, $taht) !== false) {
        return "Linnanimi sisaldab tähte '$taht'";
    } else {
        return "Linnanimi ei sisalda tähte '$taht'";
    }
}

function tahtEsineb($linn, $taht) {
    if ($taht == "") {
        return "Sisesta täht, et näha mitu korda see esineb";
    }

    $arv = substr_count($linn, $taht);

    if ($arv == 1) {
        return "Täht '$taht' esineb 1 kord";
    } else {
        return "Täht '$taht' esineb $arv korda";
    }
}


function kuiPikk($linn, $pikkus) {
    if (strlen($linn) > $pikkus) {
        return "Linnanimi on kui $pikkus tähte pikk";
    } else {
        return "Linnanimi on $pikkus tähte või lühem";
    }
}


?>