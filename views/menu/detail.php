<?php include 'views/layout/header.php'; ?>

<div class="container my-4">
    <?php if ($menu = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo htmlspecialchars($menu['nama_menu']); ?></h2>
                <h6 class="card-subtitle mb-2 text-muted">
                    Category: <?php echo htmlspecialchars($menu['nama_kategori']); ?>
                </h6>
                <h5 class="mb-3">
                    Rp <?php echo number_format($menu['harga'], 0, ',', '.'); ?>
                </h5>
                <p class="card-text"><?php echo htmlspecialchars($menu['deskripsi']); ?></p>
                <a href="index.php" class="btn btn-secondary">Back to Menu</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'views/layout/footer.php'; ?>