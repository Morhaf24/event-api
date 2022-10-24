<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>übung aus Kapital 5</title>
</head>
<body>
    <?php
        $autokennzeichen = array("HH" => "Hamburg",
                                 "B"  => "Berlin",
                                 "S"  => "Stuttgart"
);
$autokennzeichen["F"] = "Frankfurt";
$autokennzeichen["HB"] = "Bremen";

unset($autokennzeichen["HB"]);
$autokennzeichen["F"] = "Frankfurt am Main";

echo "<table border='1'>";
echo "<tr><th>Kennzeichen</th><th>Hauptstadt</th></tr>";

foreach ($autokennzeichen as $kennzeichen => $stadt) {
    echo "<tr><td>$kennzeichen</td><td>$stadt</td></tr>";
}
echo "</table>"
?>
</body>
</html> 