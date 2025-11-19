<?php
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
echo "<br>";
echo "+1min = time()+60 = ".date('d.m.Y G:i:s', time() +60);
echo "<br>";
echo "+1tund = time()+60*60 = ".date('d.m.Y G:i:s', time() +60*60);
echo "<br>";
echo "+1päev = time()+60*60*24 = ".date('d.m.Y G:i:s', time() +60*60*24);
