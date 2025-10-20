<?php require_once __DIR__ . '/../templates/header.php'; ?>

<main>
  <header>
    <h1 class="text-primary mt-3"><?= $jugador ? 'Editar jugador' : 'Agregar jugador' ?></h1>
  </header>

  <section class="mt-3">
    <form method="post" action="<?= BASE_URL . ($jugador ? 'jugadores/actualizar' : 'jugadores/crear') ?>" style="max-width:520px">
        <?php if ($jugador): ?>
            <input type="hidden" name="id_jugador" value="<?= (int)$jugador->id_jugador ?>">
        <?php endif; ?>

        <fieldset class="mb-3">
            <label class="form-label">Nombre</label>
            <input class="form-control" name="nombre" required value="<?= $jugador ? htmlspecialchars($jugador->nombre) : '' ?>">
        </fieldset>

        <fieldset class="mb-3">
            <label class="form-label">Posición</label>
            <input class="form-control" name="posicion" required value="<?= $jugador ? htmlspecialchars($jugador->posicion) : '' ?>">
        </fieldset>

        <fieldset class="mb-4">
            <label class="form-label">Equipo</label>
            <select class="form-select" name="id_equipo" required>
                <option value="" disabled <?= $jugador ? '' : 'selected' ?>>Seleccioná un equipo</option>
                <?php foreach ($equipos as $e): ?>
                    <option value="<?= (int)$e->id_equipo ?>" <?= ($jugador && $e->id_equipo == $jugador->id_equipo) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($e->nombre) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </fieldset>

        <footer class="d-flex gap-2">
            <a class="btn btn-secondary" href="<?= BASE_URL ?>listar">Cancelar</a>
            <button class="btn btn-primary"><?= $jugador ? 'Guardar cambios' : 'Crear' ?></button>
        </footer>
    </form>
  </section>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
