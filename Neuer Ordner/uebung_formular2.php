<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Übung (Kapitel 6)</title>
  </head>
  <body>
    <h1>Bewerbung, Newsletter oder Infomaterial</h1>
    Bitte nennen Sie uns Ihr Anliegen:
    <?php
    if (isset($_POST["anrede"])) {
      $anrede = $_POST["anrede"];
    }
    if (isset($_POST["anrede"])) {
      $vorname = $_POST["vorname"];
    }
    if (isset($_POST["anrede"])) {
      $nachname = $_POST["nachname"];
    }
    if (isset($_POST["anrede"])) {
      $mail = $_POST["mail"];
    }
    ?>
    <form action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
      <p>Anrede: 
        <input type="radio" name="anrede" value="Herr" <?php
        if (isset($anrede) && $anrede == "Herr") {
          echo "checked";
        }
        ?>>Herr 
        <input type="radio" name="anrede" value="Frau" <?php
        if (isset($anrede) && $anrede == "Frau") {
          echo "checked";
        }
        ?>>Frau
      </p>
      <p>Vorname: <input type="text" name="vorname" value="<?php if (isset($vorname)) echo $vorname; ?>"></p>
      <p>Nachname: <input type="text" name="nachname" value="<?php if (isset($nachname)) echo $nachname; ?>"></p>
      <p>Mailadresse: <input type="text" name="mail" value="<?php if (isset($mail)) echo $mail; ?>"></p>
      <p>
        <input type="submit" name="bewerbung" value="bei Ihnen bewerben">
        <input type="submit" name="newsletter" value="Newsletter abonnieren">
        <input type="submit" name="infomaterial" value="Infomaterial anfordern">
      </p>
    </form>
    <?php
    if (isset($_POST["bewerbung"])) {
      echo "<p><em>Herzlichen Dank, $anrede $nachname, für Ihre Bewerbungsanfrage. Unsere Personalabteilung wird per Mail - an Ihre Adresse $mail - Kontakt zu Ihnen aufnehmen.</em></p>";
    }
    if (isset($_POST["newsletter"])) {
      echo "<p><em>Herzlichen Dank, $anrede $nachname, für das Abonnement unseres Newsletters. Sie erhalten ihn ab sofort per Mail - an Ihre Adresse $mail.</em></p>";
    }
    if (isset($_POST["infomaterial"])) {
      echo "<p><em>Herzlichen Dank, $anrede $nachname, für die Anforderung von Informationsmaterial. Wir senden Ihnen die Unterlagen umgehend per Mail - an Ihre Adresse $mail.</em></p>";
    }
    ?>
  </body>
</html>