<?= $this->extend('layout/templateMain'); ?>
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Maker</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Add New Maker</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url("item/create") ?>">
                            <div class="mb-3">
                                <label for="vyrobce" class="form-label">Vyrobce</label>
                                <input type="text" name="vyrobce" id="vyrobce" class="form-control" placeholder="Vložte Vyrobca" required>
                            </div>
                            <div class="mb-3">
                                <label for="url" class="form-label">URL</label>
                                <input type="text" name="url" id="url" class="form-control" placeholder="Vložte URL" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Odeslat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?= $this->endSection(); ?>