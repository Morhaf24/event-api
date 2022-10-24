<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÜBUNG (Kapital 3)</title>
</head>
<body>
    <h1>Mit Variablen, Operatoren und Konstanten arbeiten</h1>
    <?php
        $bezeichnung_tisch = "Schreibtisch";
        $bezeichnung_stuhl = "Bürostuhl";
        $bezeichnung_lampe = "Lampe";
        $bezeichnung_pctisch = "Computertisch";

        $preis_tisch = "1999.00";
        $preis_stuhl = "589.00 ";
        $preis_lampe = "29.00 ";
        $preis_pctisch = "999.00 ";

        $netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
        $brutto_gesamt = $netto_gesamt / 100 * 119;

        $brutto_tisch = $preis_tisch / 100 * 119;
        $brutto_stuhl = $preis_stuhl / 100 * 119;
        $brutto_lampe = $preis_lampe / 100 * 119;
        $brutto_pctisch = $preis_pctisch / 100 * 119;

        echo "Netto-Gesamtpreis der eingekaufte Artikel: $netto_gesamt Euro.";
        echo "<br> </br>";
        echo "Brutto-Gesamtpreis der eingekaufte Artikel: $brutto_gesamt Euro.";
        echo "<br> </br>";
        echo "Brutto-Preis <b>$bezeichnung_tisch</b>: $brutto_tisch Euro.";
        echo "<br> </br>";
        echo "Brutto-Preis <b>$bezeichnung_stuhl</b>: $brutto_stuhl Euro.";
        echo "<br> </br>";
        echo "Brutto-Preis <b>$bezeichnung_lampe</b>: $brutto_lampe Euro.";
        echo "<br> </br>";
        echo "Brutto-Preis <b>$bezeichnung_pctisch</b>: $brutto_pctisch Euro.";
            ?>