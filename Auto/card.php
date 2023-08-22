<div class="col">
    <div class="card shadow-sm">
        <div class="ratio ratio-4x3">
            <img src="img/<?php echo ($i+1) ?>.jpg" class="card-img-top">
        </div>

        <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <?php if($cookieAdminValue != ''): ?>
            <button type="button" onclick="document.location='editForm.php'" class="btn btn-sm btn-outline-secondary">Edit</button>
            <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
</div>