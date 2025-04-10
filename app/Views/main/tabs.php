<?= $this->extend('layout/templateMain'); ?>
<?= $this->section("content"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabs</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Debugging Output (Optional) -->
        <?php // var_dump($typkomponent); 
        ?>

        <!-- Nav Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach ($typkomponent as $index => $typ): ?>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link <?= $index === 0 ? 'active' : '' ?>"
                        id="tab-<?php echo $typ->idKomponent ?>"
                        data-bs-toggle="tab"
                        data-bs-target="#content-<?php echo $typ->idKomponent ?>"
                        type="button"
                        role="tab"
                        aria-controls="content-<?php echo $typ->idKomponent ?>"
                        aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                        <?php echo $typ->typKomponent ?>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <?php foreach ($typkomponent as $index => $typ): ?>
                <div
                    class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>"
                    id="content-<?php echo $typ->idKomponent ?>"
                    role="tabpanel"
                    aria-labelledby="tab-<?php echo $typ->idKomponent ?>">
                    <div class="row">
                    <?php foreach ($komponent as $k): ?>
                    <?php if ($k->typKomponent_id == $typ->idKomponent): // Filter components by category ?>
                        <?php 
                        $imgKomponent = array(
                            "src" => base_url("MoodleSracky/komponenty/" . $k->pic),
                            "alt" => "Komponent",
                            "class" => "img-fluid",
                            "style" => "width: 95%; height: auto; margin-top: 10px;"
                        ); ?>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <?= img($imgKomponent); ?>
                                    <h5 class="card-title">
                                        <?= anchor("komponent/" . $k->id, $k->nazev); ?>
                                    </h5>
                                    <p class="card-text">
                                        <strong>Typ:</strong> <?= esc($k->typKomponent) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?= $this->endSection(); ?>