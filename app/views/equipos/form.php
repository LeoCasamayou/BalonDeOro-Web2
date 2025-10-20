<?php require_once __DIR__ . '/../templates/header.php'; ?>

<main>
  <header>
    <h1 class="text-primary mt-3"><?= $equipo ? 'Editar equipo' : 'Agregar equipo' ?></h1>
  </header>

  <section class="mt-3">
    <form method="post" action="<?= BASE_URL . ($equipo ? 'equipos/actualizar' : 'equipos/crear') ?>" style="max-width:520px">
        <?php if ($equipo): ?>
            <input type="hidden" name="id_equipo" value="<?= (int)$equipo->id_equipo ?>">
        <?php endif; ?>

        <fieldset class="mb-3">
            <label class="form-label">Nombre</label>
            <input class="form-control" name="nombre" required value="<?= $equipo ? htmlspecialchars($equipo->nombre) : '' ?>">
        </fieldset>

        <fieldset class="mb-3">
            <label class="form-label">Fundación (año)</label>
            <input type="number" min="1800" max="2100" class="form-control" name="fundacion" required value="<?= $equipo ? htmlspecialchars($equipo->fundacion) : '' ?>">
        </fieldset>

        <fieldset class="mb-4">
            <label class="form-label">Liga</label>
            <input class="form-control" name="liga" required value="<?= $equipo ? htmlspecialchars($equipo->liga) : '' ?>">
        </fieldset>

        <footer class="d-flex gap-2">
            <a class="btn btn-secondary" href="<?= BASE_URL ?>equipos">Cancelar</a>
            <button class="btn btn-primary"><?= $equipo ? 'Guardar cambios' : 'Crear' ?></button>
        </footer>
    </form>
  </section>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
