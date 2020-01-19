<!doctype html>
<html lange="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/04b00d367c.js"></script>
    <link rel="stylesheet" href="view/css/styles.css">
    <title>Forma</title>
</head>
<body>

<?php

    $skrydzioNumeriai = ['GH45213', 'TH45875', 'KL96548', 'CF74523'];
    $bagazas = ['10 kg', '15 kg', '20 kg', '25 kg', '30 kg'];
    $skrydisPirmyn = ['Vilnius', 'Londonas', 'Milanas', 'Berlynas'];
    $skrydisAtgal = ['Vilnius', 'Londonas', 'Milanas', 'Berlynas'];
    $validation_errors=[];

    if (isset($_POST['submit'])) {

        if (!isset($_POST['skrydzioNumeriai'])) {
            $validation_errors[] = "Privalomas laukas: įveskite skrydžio numerį.";
        }

        if (!isset($_POST['bagazas'])) {
            $validation_errors[] = "Privalomas laukas: įveskite bagažo kiekį.";
        }

        if (!preg_match('/\w{1,100}$/', $_POST['vardas'])) {
            $validation_errors[] = "Įvestas vardas neatitinka formato.";
        } else {
            $_POST['vardas'];
        }

        if (!preg_match('/\w{1,100}/', $_POST['pavarde'])) {
            $validation_errors[] = "Įvesta pavardė neatitinka formato.";
        } else {
            $_POST['pavarde'];
        }

        if (!preg_match('/^([3-6]\d{10})$/', $_POST['asmensKodas'])) {
            $validation_errors[] = "Įvestas asmens kodas neatitinka formato.";
        } else {
            $_POST['asmensKodas'];
        }

        if (!preg_match('/[\w\s{50,1000}]/i', $_POST['pastabos'])) {
            $validation_errors[] = "Įvesta pastaba neatitinka formato.";
        } else {
            $_POST['pastabos'];
        }
    }

?>

<?php if($validation_errors):?>
        <div class="alert alert-danger validation-erros" role="alert">
            <ul>
                <li>
                    <?php foreach($validation_errors as $error) :?>
                <li><i class="fas fa-exclamation"></i> <?= $error; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>

<?php endif;?>

<div class = "container ticket-info">
    <h3>
        Lėktuvo bilieto užsakymas
    </h3>
    <form method="post">
    <div class="form-group">
        <select name = "skrydzioNumeriai" class = "form-control">
            <option selected disabled>--Pasirinkite skrydžio numerį--</option>
            <?php foreach ($skrydzioNumeriai as $skrydzioNumeris):?>
            <option value = "<?=$skrydzioNumeris?>"><?=$skrydzioNumeris?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <select name = "bagazas" class = "form-control">
            <option selected disabled>--Pasirinkite bagažo svorį--</option>
            <?php foreach ($bagazas as $Jusubagazas):?>
                <option value = "<?=$Jusubagazas?>"><?=$Jusubagazas?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <select name = "skrydisPirmyn" class = "form-control">
            <option selected disabled>--Pasirinkite skrydį pirmyn--</option>
            <?php foreach ($skrydisPirmyn as $JusuSkrydisPirmyn):?>
                <option value = "<?=$JusuSkrydisPirmyn?>"><?=$JusuSkrydisPirmyn?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <select name = "skrydisAtgal" class = "form-control">
            <option selected disabled>--Pasirinkite skrydį atgal--</option>
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
        <label>Pavardė</label>
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
    <button type="submit" class="btn btn-primary" name = "submit">Pateikti</button>

        <?php if (isset($_POST["submit"]) && !$validation_errors):?>

            <?php $skrydzioNumeris = $_POST['skrydzioNumeriai'];
            $skrydisPirmyn = $_POST['skrydisPirmyn'];
            $skrydisAtgal = $_POST['skrydisAtgal'];
            $vardas = $_POST['vardas'];
            $pavarde = $_POST['pavarde'];
            $asmensKodas = $_POST['asmensKodas'];
            $bilietoKaina = $_POST['kaina'];
            $bagazas = intval($_POST['bagazas']);
            $bendraKaina = $_POST['kaina'];
            $pastabos = $_POST['pastabos'];

            if ($bagazas >= 20) {
            $bendraKaina += 30;
            }
        ?>
            <button type="button" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#ticket">
                Formuoti bilietą
            </button>
        <?php endif;?>

</form>
</div>

<div class="modal fade bd-example-modal-lg" id = "ticket" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Skrydžio informacija</h5>
            </div>
            <div class="modal-body">
                <div class = "container-fluid ticket">
                    <div class = "row pavadinimas"><strong>Jūsų bilietas:</strong></div>
                    <div class = "row">
                        <div class = "col-sm">
                            <div class = "row">Skrydžio numeris: <?=$skrydzioNumeris?></div>
                            <div class = "row">Kryptis pirmyn: <?=$skrydisPirmyn?></div>
                            <div class = "row">Kryptis atgal: <?=$skrydisAtgal?></div>
                        </div>
                        <div class = "col-sm">
                            <div class = "row">Keleivio vardas: <?=$vardas?></div>
                            <div class = "row">Keleivio pavardė: <?=$pavarde?></div>
                            <div class = "row">Keleivio asmens kodas: <?=$asmensKodas?></div>
                        </div>
                        <div class = "col-sm skrydzio-perziura">
                            <div class = "row"><strong>Bilieto peržiūra</strong></div>
                            <div class = "row">Skrydžio kaina: <?=$bilietoKaina?> Eur</div>
                            <div class = "row">Bagažo kiekis: <?=$bagazas?> kg</div>
                            <div class = "row">Bendra bilieto kaina: <?=$bendraKaina?> Eur</div>
                        </div>
                    </div>
                    <div class = "row">Pastabos: <?=$pastabos?></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Spausdinti bilietą</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti langą</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>