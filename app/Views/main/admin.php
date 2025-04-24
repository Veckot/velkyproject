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
    <div class="mb-3">
        <a href="<?= base_url('addnewmaker') ?>" class="btn btn-primary">
            Add New Maker
        </a>
    </div>
    
    <?php

    $table = new \CodeIgniter\View\Table();
    $headers = array('Id', 'Vyrobce', 'URL', 'Edit', 'Delete');
    $table->setHeading($headers);

    foreach ($vyrobce as $row) {
        $table->addRow(
            $row->idVyrobce,
            $row->vyrobce,
            $row->url,
            1,
            1
        );
    }

    $template = array(
        'table_open' => '<table class="table table-hover table-striped table-bordered">',
        'thead_open' => '<thead class="thead-dark">',
        'thead_close' => '</thead>',
        'heading_row_start' => '<tr>',
        'heading_row_end' => '</tr>',
        'heading_cell_start' => '<th scope="col">',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end' => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'table_close' => '</table>'
    );

    $table->setTemplate($template);

    echo $table->generate();
    ?>
</body>

</html>

<?= $this->endSection(); ?>