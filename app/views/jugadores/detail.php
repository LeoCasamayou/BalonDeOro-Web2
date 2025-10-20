<?php require_once __DIR__ . '/../templates/header.php'; ?>

<main>
  <header>
    <h1 class="text-primary mt-3">Detalle del jugador</h1>
  </header>

  <article class="card mt-3" style="max-width: 640px;">
    <div class="card-body">
      <h2 class="card-title h4 mb-1"><?= htmlspecialchars($jugador->nombre) ?></h2>
      <p class="text-muted mb-3">Posición: <strong><?= htmlspecialchars($jugador->posicion) ?></strong></p>

      <section>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Equipo:</strong> <?= htmlspecialchars($jugador->equipo_nombre) ?></li>
          <li class="list-group-item"><strong>Liga:</strong> <?= htmlspecialchars($jugador->liga) ?></li>
          <li class="list-group-item"><strong>Fundación del club:</strong> <?= htmlspecialchars($jugador->fundacion) ?></li>
        </ul>
      </section>

      <footer class="mt-3 d-flex gap-2">
        <a class="btn btn-outline-primary" href="<?= BASE_URL ?>listar">Volver a Jugadores</a>
        <a class="btn btn-outline-secondary" href="<?= BASE_URL ?>equipos/jugadores/<?= (int)$jugador->id_equipo ?>">Ver compañeros</a>
      </footer>
    </div>
  </article>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
