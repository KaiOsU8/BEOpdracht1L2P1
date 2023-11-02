<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  
    <link rel="stylesheet" href="../../../public/css/style.css">
    <title>Overzicht Instructeurs</title>
</head>
<style>
    body{
        text-align: center;
    }
    .center{
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
    <h2><?= $data['title']; ?></h2>
    <a href="../../overzichtinstructeurs">Terug</a> 

    <table class="center">
        <thead>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Mobiel</th>
            <th>Datum in dienst</th>
            <th>Aantal sterren</th>
            <th>Voertuigen</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>

</body>
</html>



