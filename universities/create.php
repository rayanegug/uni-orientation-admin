<?php
require_once '../config/database.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

// Simulation de l'enregistrement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ici, normalement on enregistre en Base de Données
    // Pour la démo, on affiche juste un succès
    $success = true;
}
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <div class="d-flex align-items-center mb-4">
                <a href="index.php" class="btn btn-light rounded-circle me-3 text-secondary"><i class="bi bi-arrow-left"></i></a>
                <div>
                    <h2 class="fw-bold mb-0">Ajouter une université</h2>
                    <p class="text-muted mb-0">Remplissez les informations ci-dessous.</p>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    
                    <?php if(isset($success)): ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Succès !',
                                text: 'L\'université a été ajoutée avec succès (Simulation).',
                                confirmButtonColor: '#4361ee'
                            }).then(() => {
                                window.location.href = 'index.php';
                            });
                        </script>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label fw-bold">Nom de l'établissement</label>
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Ex: Université Hassan II" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Ville</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" name="city" class="form-control border-start-0 ps-0" placeholder="Ex: Casablanca">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Type</label>
                                <select name="type" class="form-select">
                                    <option value="Public">Public</option>
                                    <option value="Privé">Privé</option>
                                    <option value="Partenariat">Partenariat</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold">Site Web</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">https://</span>
                                    <input type="text" name="website" class="form-control border-start-0 ps-0" placeholder="www.exemple.ma">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold">Description courte</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="À propos de l'université..."></textarea>
                            </div>

                            <div class="col-12 mt-4 d-flex justify-content-end gap-2">
                                <a href="index.php" class="btn btn-light text-muted">Annuler</a>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-check-lg me-2"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>