<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <title>Overzicht Instructeurs</title>
</head>
<style>
    .button-position {
        text-align: center;
    }
    .button-style {
        text-align: center;
        background-color: white;
        margin-bottom: 2%;
        margin-top: 1%;
        font-size: large;
    }
    .center{
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>

<a href="../../Instructeur/overzichtinstructeur">Terug</a> <br><br>

<div class="styling">
    <h2><?= $data['title']; ?></h2>
    <h3>Naam: <?= $data['naam']; ?></h3>
    <h3>Datum in dienst: <?= $data['InDienst']; ?></h3>
    <h3>Aantal sterren: <?= $data['Sterren']; ?></h3>
</div>

<div class="button-position">
    <button class="button-style">Toevoegen Voertuig</button>
</div>

<table class="center">
    <thead>
        <th>TypeVoertuig</th>
        <th>Type</th>
        <th>Kenteken</th>
        <th>Bouwjaar</th>
        <th>Brandstof</th>
        <th>Rijbewijscategorie</th>
        <th>Wijzigen</th>
    </thead>
    <tbody>
        <?= $data['tableRows']; ?>
    </tbody>
</table>

</body>
</html>