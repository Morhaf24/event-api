<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÜBUNG AUS KAPITAL 5</title>
</head>
<body>
    <table border="1">
        <tr>
            <th width="125">Beginn</th>
            <th width="125">Disziplin</th>
            <th width="125">Ort</th>
            <th width="125">Bemerkung</th>
        </tr>
    <?php
       $mehrdimensional = array(
        "09:30 Uhr" => array("Diskuswurd", "Nebenplatz", "Jugendmeisterschaften"),
        "10:00 Uhr" => array("5-km-Lauf", "Stadion - Laufbahn", "offener Lauf"),
        "11:00 Uhr" => array("Halbmarathon", "Waldgebiet", "Teilnahme ab 18 Jahre"),
        "12:00 Uhr" => array("Stabhochsprung", "Stadio - Stabhochsprung", "Nur Frauen")
       );

       foreach ($mehrdimensional as $key => $ausgabe) {
        list ($disziplin, $ort, $bemerkung) = $ausgabe;
        echo "<tr>";
        echo "<td>" - $key . "</td>";
        echo "<td>" - $disziplin . "</td>";
        echo "<td>" - $ort . "</td>";
        echo "<td>" - $bemerkung . "</td>";
        echo "</tr>";
       }
    ?>
        </table>

</body>
</html>