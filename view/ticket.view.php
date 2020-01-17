<!doctype html>
<html lange="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<?php var_dump($_POST);?>
<?php
$skrydzioNr = $_POST['skrydzioNumeriai'];
$skrydisPirmyn = $_POST['skrydisPirmyn'];
$skrydisAtgal = $_POST['skrydisAtgal'];
$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$asmensKodas = $_POST['asmensKodas'];
$bilietoKaina = $_POST['kaina'];
$bagazas = intval($_POST['bagazas']);
$bendraKaina = $_POST['kaina'];

    if ($bagazas >= 20){
        $bendraKaina+=30;
    }

$pastabos = $_POST['pastabos'];
?>

<div class = "container ticket">
    <div class = "row">
        <div class = "col-sm-12">Bilieto informacija</div>
    </div>
    <div class = "row">
        <div class = "col-sm">
            <div class = "row"><?=$skrydzioNr?></div>
            <div class = "row"><?=$skrydisPirmyn?></div>
            <div class = "row"><?=$skrydisAtgal?></div>
        </div>
        <div class = "col-sm">
            <div class = "row"><?=$vardas?></div>
            <div class = "row"><?=$pavarde?></div>
            <div class = "row"><?=$asmensKodas?></div>
        </div>
        <div class = "col-sm">
            <div class = "row">Skrydzio perziura</div>
            <div class = "row"><?=$bilietoKaina?></div>
            <div class = "row"><?=$bagazas?>kg</div>
            <div class = "row"><?=$bendraKaina?></div>
        </div>
    </div>
    <div class = "row"><?=$pastabos?></div>
    <a href = "../index.php" ><button type="submit" class="btn btn-primary" name = "submit">Grizti</button></a>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>