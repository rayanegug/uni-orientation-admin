<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="/projet_concours/dashboard.php">
        <i class="bi bi-mortarboard-fill"></i> Uni<span style="color:#2b2d42">Admin</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4">
        <li class="nav-item">
            <a class="nav-link text-dark fw-bold" href="/projet_concours/universities/index.php">
                <i class="bi bi-building"></i> Universités
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="#">
                <i class="bi bi-layers"></i> Programmes
            </a>
        </li>
      </ul>
      <div class="d-flex align-items-center">
          <div class="me-3 text-end d-none d-lg-block">
              <small class="text-muted d-block">Admin</small>
              <span class="fw-bold">Superviseur</span>
          </div>
          <a href="/projet_concours/logout.php" class="btn btn-light text-danger rounded-circle" title="Déconnexion">
              <i class="bi bi-power"></i>
          </a>
      </div>
    </div>
  </div>
</nav>