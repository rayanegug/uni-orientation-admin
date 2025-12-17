<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === 'admin' && $pass === 'admin') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body { background: linear-gradient(135deg, #4361ee 0%, #f0f2f5 100%); height: 100vh; }
        .login-card { width: 400px; padding: 2rem; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="card login-card text-center">
        <div class="mb-4">
            <h1 class="text-primary fw-bold"><i class="bi bi-mortarboard-fill"></i></h1>
            <h4>Bon retour !</h4>
            <p class="text-muted">Connectez-vous à l'espace admin</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="alert alert-danger py-2">Identifiants incorrects (admin/admin)</div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-floating mb-3 text-start">
                <input type="text" name="username" class="form-control" id="uInput" placeholder="User" value="admin">
                <label for="uInput">Nom d'utilisateur</label>
            </div>
            <div class="form-floating mb-3 text-start">
                <input type="password" name="password" class="form-control" id="pInput" placeholder="Pass" value="admin">
                <label for="pInput">Mot de passe</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-3 shadow-sm">Se connecter</button>
        </form>
    </div>

</body>
</html>