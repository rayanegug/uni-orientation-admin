<?php
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold">Tableau de bord</h2>
            <p class="text-muted">Aperçu des statistiques de la plateforme.</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card bg-gradient-primary h-100 p-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 uppercase">Universités</h6>
                            <h2 class="display-5 fw-bold mb-0">14</h2>
                        </div>
                        <i class="bi bi-building fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-gradient-success h-100 p-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 uppercase">Programmes</h6>
                            <h2 class="display-5 fw-bold mb-0">86</h2>
                        </div>
                        <i class="bi bi-mortarboard fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 p-3 border-0 bg-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted uppercase">Visiteurs (Mois)</h6>
                            <h2 class="display-5 fw-bold mb-0 text-dark">1.2k</h2>
                        </div>
                        <i class="bi bi-people fs-1 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header border-0 pb-0 bg-white">
                    <h5 class="card-title">Inscriptions par région</h5>
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="120"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Derniers ajouts</h5>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex align-items-center border-0 mb-2">
                        <div class="bg-light p-2 rounded me-3"><i class="bi bi-plus-circle text-primary"></i></div>
                        <div>
                            <h6 class="mb-0">UIR Rabat</h6>
                            <small class="text-muted">Il y a 2h</small>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 mb-2">
                        <div class="bg-light p-2 rounded me-3"><i class="bi bi-pencil text-warning"></i></div>
                        <div>
                            <h6 class="mb-0">FST Settat</h6>
                            <small class="text-muted">Il y a 5h</small>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0">
                        <div class="bg-light p-2 rounded me-3"><i class="bi bi-trash text-danger"></i></div>
                        <div>
                            <h6 class="mb-0">ENCG Agadir</h6>
                            <small class="text-muted">Hier</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Script pour générer le graphique (Fake Data)
const ctx = document.getElementById('myChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Casablanca', 'Rabat', 'Marrakech', 'Tanger', 'Fès'],
        datasets: [{
            label: 'Étudiants intéressés',
            data: [120, 190, 85, 60, 90],
            backgroundColor: '#4361ee',
            borderRadius: 5
        }]
    },
    options: {
        scales: { y: { beginAtZero: true } },
        plugins: { legend: { display: false } }
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>