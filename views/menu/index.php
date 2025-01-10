<?php include 'views/layout/header.php'; ?>

<div class="container my-4">
    <div class="row">
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['nama_menu']); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?>
                        </h6>
                        <p class="card-text"><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                        <a href="index.php?action=detail&id=<?php echo $row['id']; ?>" 
                           class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>
