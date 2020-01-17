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
    $bagazas = ['10 kg', '15 kg', '20 kg', '25 kg', '30 kg'];
    $skrydisPirmyn = ['Vilnius', 'Londonas', 'Milanas', 'Berlynas'];
    $skrydisAtgal = ['Vilnius', 'Londonas', 'Milanas', 'Berlynas'];

    if(isset($_POST['submit'])){
        foreach ($_POST as $value){
        //echo "$value<br>";
        //var_dump($_POST);
        // var_dump($_POST['price']);
    }

        if (empty($_POST["skrydzioNumeriai"])) {
            $skrydzioNrError = "Privalomas laukas, prasome uzpildyti";
        } else {
            $skrydzioNr = $_POST["skrydzioNumeriai"];
        }
}
?>

<div class = "container ticket-info">
    <h3>
        Lektuvo bilietas
    </h3>
    <form method="post" action="view/ticket.view.php">
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
        <input class="form-control" id="vardas" name = "vardas">
    </div>
    <div class="form-group">
        <label>Pavarde</label>
        <input class="form-control" id="pavarde" name = "pavarde">
    </div>
    <div class="form-group">
        <label>Asmens kodas</label>
        <input type = "number" class="form-control" id="asmensKodas" name = "asmensKodas">
    </div>
    <div class="form-group">
        <label>Kaina</label>
        <input type = "number" class="form-control" id="kaina" name = "kaina">
    </div>
    <div class="form-group">
        <label>Pastabos</label>
        <textarea class="form-control" id="pastabos" name = "pastabos" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name = "submit">Spausdinti</button>
</form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>