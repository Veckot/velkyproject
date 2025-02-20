<?= $this->extend('layout/templateMain'); ?>
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vyrobci</title>
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #007BFF;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>

<body>
    <?php
    
    ?>
    <div class="container my-5">
    <h1 class="mb-4">
        Prehled hovinek
    </h1>
    <? var_dump($dataMain);?>
    <div class="row">
        <?php foreach ($vyrobce as $v): ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?= anchor("komponentyVyrobce/" . $v->idVyrobce); ?>
                        </h5>
                        <p class="card-text">
                            <strong>Id:</strong> <?=esc($v->idVyrobce) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



</body>

</html>
<?= $this->endSection(); ?>