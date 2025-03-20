<?= $this->extend('layout/templateKomVyr'); ?>
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="cs">
<?php var_dump($breadcrumps);?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Seznam komponentu <?php echo $vyrobce->vyrobce ?>:</h1>

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
<div class="container my-5">
    <div class="row">
        <?php foreach ($komponent as $k):
            $imgKomponent = array(
                "src" => base_url("MoodleSracky/komponenty/" .$k->pic),
                "alt" => "Komponent",
                "class" => "img-fluid",
                "style" => "width: 95%; height: auto; margin-top: 10px;"
            ); ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <?= img($imgKomponent);?>
                        <h5 class="card-title">
                            <?= anchor("komponent/" . $k->id, $k->nazev); ?>
                        </h5>
                        <p class="card-text">
                            <strong>Typ:</strong> <?= esc($k->typKomponent) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <?= $pager->links('default', "default_full") ?>
            </nav>
        </div>
    </div>
</div>

</body>

</html>
<?= $this->endSection(); ?>