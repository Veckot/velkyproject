<?= $this->extend('layout/templateMain'); ?>
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komponent</title>
</head>

<body>
    <?php foreach ($parametr as $p): ?>
        <h1><?php echo $p->nazev?> - <?php echo $p->hodnota?></h1>
    <?php endforeach; ?>
</body>

</html>
<?= $this->endSection(); ?>