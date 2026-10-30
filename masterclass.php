<?php include 'header.php'; ?>

<h2>Inschrijven voor de Masterclass Kamado</h2>
<p>Vul onderstaand formulier in om je plek te reserveren.</p>

<form action="verwerk.php" method="POST">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam" required><br><br>

    <label for="email">E-mailadres:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="datum">Kies een datum:</label><br>
    <select id="datum" name="datum">
        <option value="15 mei">15 mei</option>
        <option value="22 mei">22 mei</option>
        <option value="5 juni">5 juni</option>
    </select><br><br>

    <button type="submit" name="submit">Inschrijven</button>
</form>

<?php include 'footer.php'; ?>