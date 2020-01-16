<!doctype html>
<html lange="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="view/css/styles.css">
    <title>Forma</title>
</head>
<body>

<?php

    $skrydzioNumeriai = ['GH45213', 'TH45875', 'KL96548', 'CF74523'];
    $bagazas = [5, 10, 20, 30];
    $skrydisPirmyn = ['Vilnius', 'Londonas', 'Milanas', 'Berlynas'];
    $skrydisAtgal = ['Vilnius', 'Londonas', 'Milanas', 'Berlynas'];

    if(isset($_POST['submit'])){
        foreach($_POST as $value){
            echo "$value<br>";
        }
?>

<div class = "container ticket-info">
    <h3>
        Lektuvo bilietas
    </h3>
<form method = "post" action = "view/ticket.view.php">
    <div class="form-group">
        <select name = "skrydzioNumeriai" class = "form-control">
            <option selected disabled>--Pasirinkite skrydzio Nr.--</option>
            <?php foreach ($skrydzioNumeriai as $skrydzioNumeris):?>
            <option value = "<?=$skrydzioNumeris?>"><?=$skrydzioNumeris?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <select name = "bagazas" class = "form-control">
            <option selected disabled>--Pasirinkite bagazo svori--</option>
            <?php foreach ($bagazas as $Jusubagazas):?>
                <option value = "<?=$Jusubagazas?>"><?=$Jusubagazas?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <select name = "skrydisPirmyn" class = "form-control">
            <option selected disabled>--Pasirinkite skrydi pirmyn--</option>
            <?php foreach ($skrydisPirmyn as $JusuSkrydisPirmyn):?>
                <option value = "<?=$JusuSkrydisPirmyn?>"><?=$JusuSkrydisPirmyn?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <select name = "skrydisAtgal" class = "form-control">
            <option selected disabled>--Pasirinkite skrydi atgal--</option>
            <?php foreach ($skrydisAtgal as $JusuSkrydisAtgal):?>
                <option value = "<?=$JusuSkrydisAtgal?>"><?=$JusuSkrydisAtgal?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label>Vardas</label>
        <input class="form-control" id="name" name = "name">
    </div>
    <div class="form-group">
        <label>Pavarde</label>
        <input class="form-control" id="lastName" name = "lastName">
    </div>
    <div class="form-group">
        <label>Asmens kodas</label>
        <input type = "number" class="form-control" id="personalID" name = "personalID">
    </div>
    <div class="form-group">
        <label>Kaina</label>
        <input type = "number" class="form-control" id="price" name = "price">
    </div>
    <div class="form-group">
        <label>Pastabos</label>
        <textarea class="form-control" id="notes" name = "notes" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name = "submit">Spausdinti</button>
</form>
</div>

<div class = "container ticket">
    <div class = "row">
        <div class = "col-sm-12">Bilieto informacija</div>
    </div>
    <div class = "row">
        <div class = "col-sm">
            <div class = "row">Skrydzio Numeris</div>
            <div class = "row">Skrydis pirmyn</div>
            <div class = "row">Skrydis atgal</div>
        </div>
        <div class = "col-sm">
            <div class = "row">Vardas</div>
            <div class = "row">Pavarde</div>
            <div class = "row">Asmens kodas</div>
        </div>
        <div class = "col-sm">
            <div class = "row">Skrydzio perziura</div>
            <div class = "row">Bilieto kaina</div>
            <div class = "row">Bagazo kaina</div>
            <div class = "row"><p><?=$bilietoKaina;?></p></div>
        </div>
    </div>
    <div class = "row">Pastabos</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>