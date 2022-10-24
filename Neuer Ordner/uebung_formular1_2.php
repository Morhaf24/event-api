<?php
    $vorname = $_POST["Vorname"];
    $Nachname = $_POST["Nachname"];
    $Wohnung = $_POST["Wohnung"];

    $database = new mysqli("localhost", "root", "", "uek295");

    $result = $database->query("INSERT INTO `uebung_formular1.php` (`Vorname`, `Nachname`, `Wohnung`) 
                                VALUES ('$vorname', '$Nachname', '$Wohnung');");

    if ($result == false) {
        echo "An error occurred while fetching the student data.";
    }
    else if ($result !== true) {
        if ($result->num_rows > 0) {
            while ($textfeld = $result->fetch_assoc()) {
         //       $database->query("INSERT INTO `textfeld` (`Vorname`, `Nachname`, `Wohnung`) VALUES ('a', 'b', 'c']');");
             /**    echo "<tr>
                        <td>" . $textfeld["Vorname"] . "</td>
                        <td>" . $textfeld["Nachname"] . "</td>
                        <td>" . $textfeld["Wohnung"] . "</td>
                     </tr>"; */
                    echo $result;
            }
        }
    }
    /**    echo "<p>Vorname: " . $_POST["Vorname"] . "<br>";
        echo "Nachname: " . $_POST["Nachname"] . "<br>";
        echo "Wohnung: " . $_POST["Wohnung"] . "</p>";
        echo "Die Daten sind erfolgreich gesendet"
    */
    ?>