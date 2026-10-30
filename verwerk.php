<?php include 'header.php'; ?>

<div class="bedankt-container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $naam = htmlspecialchars($_POST['naam']);
        $email = htmlspecialchars($_POST['email']);
        $datum = htmlspecialchars($_POST['datum']);

        $registratie = "Naam: $naam | E-mail: $email | Datum: $datum | Tijd: " . date("d-m-Y H:i:s") . "\n";

        file_put_contents('inschrijvingen.txt', $registratie, FILE_APPEND);

        echo "<h2>Bedankt voor je inschrijving, $naam!</h2>";
        echo "<p>We hebben je aanmelding voor de masterclass op <strong>$datum</strong> succesvol ontvangen en opgeslagen.</p>";
        echo "<p>Er is een bevestigingsmail gestuurd naar: <strong>$email</strong></p>";
    } else {
        echo "<h2>Oeps!</h2>";
        echo "<p>Je hebt deze pagina niet via het formulier bereikt. Ga terug naar de <a href='masterclass.php'>masterclass pagina</a>.</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>