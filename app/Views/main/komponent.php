<?= $this->extend('layout/templateKomponent'); ?>
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komponent</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }
        .img-fluid {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 0 auto 20px;
            border-radius: 8px;
        }
        .parametr {
            font-size: 18px;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .buy-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
        .buy-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .buy-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php $imgKomponent = array(
                        "src" => base_url("MoodleSracky/komponenty/" .$komponent->pic),
                        "alt" => "Komponent",
                        "class" => "img-fluid",
                        "style" => "width: 300px; height: auto;"
                    ); ?>
        <h1><?php echo $komponent->nazev?></h1>
        <h1>Made by <?php echo $komponent->vyrobce?></h1>
        <h1><?php echo $komponent->typKomponent?></h1>
        <?= img($imgKomponent);?>
        <?php foreach ($parametr as $p): ?>
            <div class="parametr"><?php echo $p->nazev?> - <?php echo $p->hodnota?></div>
        <?php endforeach; ?>
        <div class="buy-link">
            <h1>Buy here: <?= anchor($komponent->odkaz, "totally not a virus"); ?></h1>
        </div>
    </div>
</body>
</html>
<?= $this->endSection(); ?>