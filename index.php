<html>
<head>
    <title>FORMULARI</title>
</head>
<body>
    <!-- EXERCICI 1 -->
    <h2>EXERCICI 1</h2>
    <form action="prova1.php" method="GET">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="llinatg1">Llinatge 1:</label>
        <input type="text" name="llinatge1" required><br>

        <label for="llinatg2">Llinatge 2:</label>
        <input type="text" name="llinatge2" required><br>

        <input type="submit" value="Enviar">
    </form>

    <!-- EXERCICI 2 -->
    <h2>EXERCICI 2</h2>
    <form action="prova2.php" method="GET">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="llinatg1">Llinatge 1:</label>
        <input type="text" name="llinatge1" required><br>

        <label for="llinatg2">Llinatge 2:</label>
        <input type="text" name="llinatge2" required><br>

        <label for="ciutat">Ciutat:</label>
        <input type="radio" name="ciutat" value="Barcelona">Barcelona
        <input type="radio" name="ciutat" value="Madrid">Madrid
        <input type="radio" name="ciutat" value="Valencia">Valencia
        <br>

        <input type="submit" value="Enviar">
    </form>

    <!-- EXERCICI 3 -->
    <h2>EXERCICI 3</h2>
    <form action="prova2.php" method="GET">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="llinatg1">Llinatge 1:</label>
        <input type="text" name="llinatge1" required><br>

        <label for="llinatg2">Llinatge 2:</label>
        <input type="text" name="llinatge2" required><br>

        <label for="ciutat">Ciutat:</label>
        <input type="radio" name="ciutat" value="Barcelona">Barcelona
        <input type="radio" name="ciutat" value="Madrid">Madrid
        <input type="radio" name="ciutat" value="Valencia">Valencia
        <br>

        <label for="aficions">Aficions:</label>
        <input type="checkbox" name="aficions[]" value="Esport">Esport
        <input type="checkbox" name="aficions[]" value="Lectura">Lectura
        <input type="checkbox" name="aficions[]" value="Música">Música
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
