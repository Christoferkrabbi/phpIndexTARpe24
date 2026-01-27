<?php

echo "<div class='flex-container'>";
echo "<div>";
echo "<h1>Ajafunktsioonid</h1>";
echo "tänane kuupäev ".date("d.m.Y");
//timezone - juhul kui timezone ei ole määratud,
// siis php kasutab aega, mis on localhostis kasutusel
date_default_timezone_set("Europe/Tallinn");
echo "<br>";
echo "<a href = 'https://www.php.net/manual/en/timezones.europe.php'> timezone </a>";
echo "<br>";
echo "time()- aeg sekundites ".time();
echo "<br>";
echo "date() -".date("d.m.Y G:i:s", time());
echo "<pre>
date('d.m.Y G:i:s', time())
d - ? 01...31
m - 1...12
Y - neljakohaline arv(aasta)
G - 24h formaat
i - minutid 0...59
s -sekundid 0...59
</pre>";
echo "</div>";

echo "<div>";
echo "<h1>Tehtud kuupäevaga</h1>";
echo "<br>";
echo "+1min = time()+60 = ".date('d.m.Y G:i:s', time() +60);
echo "<br>";
echo "+1tund = time()+60*60 = ".date('d.m.Y G:i:s', time() +60*60);
echo "<br>";
echo "+1päev = time()+60*60*24 = ".date('d.m.Y G:i:s', time() +60*60*24);
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
echo "<br>";
echo "</div>";

echo "<div>";
echo "<h1>Kindlad kuupäevad</h1>";
$synnipaev=mktime(10, 0, 0, 1, 23, 2007);
echo "Minu sünnipäev: ".date("d.m.Y G:i:s", $synnipaev);
echo "<br>";
echo "massiivi (array) abil näidata tänane kuu";
echo "<br>";
$kuud=array(1=>'jaanuar','veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev=date('d');
$aasta=date('Y');
$kuu = $kuud[(int)date('m')];
echo "tänase kuupäev kuu nimega: ".$paev.". ".$kuu." ".$aasta.".a";
echo "<br>";
$synnipaevpaev=date('23');
$synniaasta=date('2007');
$kuu=$kuud[date('1')]; //kuu nimega
echo "sünnipäeva kuupäev kuu nimega: ".$synnipaevpaev.". ".$kuu." ".$synniaasta.".a";
echo "</div>";
echo "</div class='flex-container'>";




