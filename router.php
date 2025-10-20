<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/app/controllers/jugador.controller.php';
require_once __DIR__ . '/app/controllers/equipo.controller.php';
require_once __DIR__ . '/app/controllers/auth.controller.php';

$action = $_GET['action'] ?? 'listar';
$params = explode('/', trim($action, '/'));

$jug = new JugadorController();
$eq  = new EquipoController();
$auth = new AuthController();

switch ($params[0]) {
    case 'listar':
        $jug->showJugadores();
        break;

    case 'jugadores':
        switch ($params[1] ?? '') {
            case 'agregar':     $jug->addForm(); break;
            case 'crear':       $jug->create(); break;
            case 'editar':      $jug->editForm((int)($params[2] ?? 0)); break;
            case 'actualizar':  $jug->update(); break;
            case 'eliminar':    $jug->delete((int)($params[2] ?? 0)); break;
            case 'detalle':     $jug->detail((int)($params[2] ?? 0)); break;
            default:            $jug->showJugadores(); break;
        }
        break;

    case 'equipos':
        if (($params[1] ?? '') === 'jugadores') {
            $jug->byEquipo((int)($params[2] ?? 0));
            break;
        }
        switch ($params[1] ?? '') {
            case 'agregar':     $eq->addForm(); break;
            case 'crear':       $eq->create(); break;
            case 'editar':      $eq->editForm((int)($params[2] ?? 0)); break;
            case 'actualizar':  $eq->update(); break;
            case 'eliminar':    $eq->delete((int)($params[2] ?? 0)); break;
            default:            $eq->showEquipos(); break;
        }
        break;

    case 'login':      $auth->showLogin(); break;
    case 'verificar':  $auth->login(); break;
    case 'logout':     $auth->logout(); break;

    default:
        http_response_code(404);
        echo "404 - Página no encontrada";
}

