<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Brand Name -->
        <a class="navbar-brand fw-bold text-primary" href="<?= base_url() ?>">BigAssProject228</a>

        <nav aria-label="breadcrumb" class="bg-light py-2 px-3 rounded shadow-sm">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            </ol>
        </nav>

        <!-- Navbar Toggler (for Mobile View) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <?= anchor("admin", $title = "Add nigga", ['class' => 'bg-light nav-link text-primary fw-bold']); ?>
                </li>
                <li class="nav-item">
                    <?= anchor("tabs", $title = "Taby", ['class' => 'nav-link text-primary fw-bold']); ?>
                </li>
            </ul>
        </div>
</nav>