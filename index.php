<!DOCTYPE html>

<?php include 'php/controller.php'; ?>

<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container-fluid">
        <div class="head page-header">
            <h1>Agenda</h1>
        </div>
        <form action="php/controller.php" method="post">
            <div class="form-group">
                <label>Datum en tijd</label>
                <input type="text" name="datum_tijd" id="datum_tijd">
            </div>
            <div class="form-group">
                <label>Beschrijving</label>
                <input type="text" name="beschrijving" id="beschrijving">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Toevoegen</button>
        </form>
        <?php leesAfspraken(); ?>
    </div>
</body>
</html>