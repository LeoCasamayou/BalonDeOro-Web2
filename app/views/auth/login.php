<?php require __DIR__ . '/../templates/header.php'; ?>

<h1 class="text-primary mt-4">Iniciar sesión</h1>

<?php if (!empty($error)): ?>
  <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<form method="POST" action="<?= BASE_URL ?>verificar" style="max-width:400px;">
  <div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="text" name="user" id="user" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Contraseña</label>
    <input type="password" name="pass" id="pass" class="form-control" required>
  </div>
  <button class="btn btn-primary w-100">Entrar</button>
</form>

<?php require __DIR__ . '/../templates/footer.php'; ?>