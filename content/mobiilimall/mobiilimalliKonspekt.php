<?php require("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mobiilimalli konspekt</title>
    <link rel="stylesheet" href="style/mobiilimallStyle.css">
</head>
<body>

<br>
<br>
<main>
<h1>Mobiilisõbraliku veebilehe loomine</h1>

<h2>1. Sissejuhatus</h2>

<p>
    Ülesandeks oli luua mobiilisõbralik responsive veebileht anekdootide kuvamiseks.
    Leht pidi töötama nii arvutis kui mobiilis.
</p>

<p>
    Veebilehe loomisel kasutasin järgmisi tehnoloogiaid:
</p>

<ul>
    <li>HTML – lehe struktuuri loomiseks</li>
    <li>CSS / W3.CSS – kujunduse jaoks</li>
    <li>PHP – lehe osade ühendamiseks (require käsk)</li>
</ul>

<hr>

<h2>2. Koodilõigud</h2>

<h3>Mobiilivaate seadistamine</h3>

<p>
    See meta tag võimaldab veebilehel kohanduda mobiiliseadmete ekraaniga.
</p>

<pre>
&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
</pre>

<h3>Päise failide ühendamine</h3>

<p>
    Kasutasin require käsku, et lisada igale anekdoodi lehele sama päis.
    See võimaldab kujundust hoida ühtsena.
</p>

<pre>
&lt;?php require("header.php"); ?&gt;
</pre>


<h3>Jaluse ühendamine</h3>

<p>
    Require käsuga lisasin jaluse, et vältida sama koodi kordamist mitmel lehel.
</p>

<pre>
&lt;?php require("footer.php"); ?&gt;
</pre>

<h3>W3.CSS kasutamine</h3>

<p>
    Kasutasin W3.CSS raamistikku, mis aitab luua responsive kujundust.
</p>

<pre>
&lt;link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css"&gt;
</pre>

<hr>

<h2>3. Mobiilivaade</h2>

<p>
    Telefonis muutub veebileht kitsamaks. Menüüd ja tekst kohanduvad väiksema ekraani jaoks.
    Külgmenüü avaneb mobiilis nupuga ning sisu paigutus muutub vertikaalseks.
</p>

<img src="../../image/mobiilivaade.png" width="300">

</main>

</body>
<?php require("footer.php"); ?>
</html>
