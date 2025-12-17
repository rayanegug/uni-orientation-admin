<?php
require_once '../config/database.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

// Fausses données réalistes
$universities = [
    ['id' => 1, 'name' => 'Université Mohammed V', 'city' => 'Rabat', 'status' => 'Actif', 'type' => 'Public'],
    ['id' => 2, 'name' => 'Université Internationale de Rabat', 'city' => 'Rabat', 'status' => 'Actif', 'type' => 'Privé'],
    ['id' => 3, 'name' => 'Al Akhawayn University', 'city' => 'Ifrane', 'status' => 'Maintenance', 'type' => 'Privé'],
    ['id' => 4, 'name' => 'ENCG Casablanca', 'city' => 'Casablanca', 'status' => 'Actif', 'type' => 'Public'],
];
?>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Gestion des Universités</h2>
            <p class="text-muted">Gérez la liste des établissements partenaires.</p>
        </div>
        <a href="create.php" class="btn btn-primary shadow-sm"><i class="bi bi-plus-lg"></i> Nouveau</a>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th class="ps-4">Université</th>
                        <th>Ville</th>
                        <th>Type</th>
                        <th>Statut</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($universities as $u): ?>
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded p-2 me-3 text-primary"><i class="bi bi-building"></i></div>
                                <strong><?= $u['name'] ?></strong>
                            </div>
                        </td>
                        <td><?= $u['city'] ?></td>
                        <td><span class="badge bg-light text-dark border"><?= $u['type'] ?></span></td>
                        <td>
                            <?php if($u['status'] == 'Actif'): ?>
                                <span class="badge badge-soft-success">En ligne</span>
                            <?php else: ?>
                                <span class="badge badge-soft-warning">Maintenance</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-end pe-4">
                            <a href="#" class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil-square"></i></a>
                            <button onclick="confirmDelete(<?= $u['id'] ?>)" class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Êtes-vous sûr ?',
        text: "Cette action est irréversible !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#4361ee',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer !',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Supprimé !',
                'L\'université a été supprimée (simulation).',
                'success'
            )
        }
    })
}
</script>

<?php require_once '../includes/footer.php'; ?>