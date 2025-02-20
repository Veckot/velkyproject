<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♡</title>
    <?= $this->include("layout/css");?> 
</head>
<body>
    <?= $this->include("layout/nav");?>
    <div class="container-fluid">
        <?= $this->renderSection("content");?>
        <?= $this->include("layout/js");?>
    </div>
</body>
</html>
