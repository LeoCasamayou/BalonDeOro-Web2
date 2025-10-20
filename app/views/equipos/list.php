<?php require_once __DIR__ . '/../templates/header.php'; ?>

<main>
  <header>
    <h1 class="text-primary mt-3 mb-4">Equipos</h1>
  </header>

  <section>
    <table class="table table-bordered table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fundación</th>
                <th>Liga</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipos as $equipo): ?>
                <tr>
                    <td><?= htmlspecialchars($equipo->id_equipo) ?></td>
                    <td><?= htmlspecialchars($equipo->nombre) ?></td>
                    <td><?= htmlspecialchars($equipo->fundacion) ?></td>
                    <td><?= htmlspecialchars($equipo->liga) ?></td>
                    <td>
                        <nav class="d-flex justify-content-center gap-2">
                            <a href="<?= BASE_URL ?>equipos/jugadores/<?= (int)$equipo->id_equipo ?>" class="btn btn-sm btn-outline-primary">Ver jugadores</a>
                            <?php if (!empty($_SESSION['USER'])): ?>
                                <a href="<?= BASE_URL ?>equipos/editar/<?= (int)$equipo->id_equipo ?>" class="btn btn-sm btn-success">Editar</a>
                                <a href="<?= BASE_URL ?>equipos/eliminar/<?= (int)$equipo->id_equipo ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que querés eliminar este equipo?')">Eliminar</a>
                            <?php endif; ?>
                        </nav>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </section>

  <?php if (!empty($_SESSION['USER'])): ?>
    <footer class="mt-3">
      <a href="<?= BASE_URL ?>equipos/agregar" class="btn btn-primary">Agregar Equipo</a>
    </footer>
  <?php endif; ?>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
