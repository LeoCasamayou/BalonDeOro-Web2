<?php
require_once './app/models/jugador.model.php';
require_once './app/views/jugadores.view.php';

class JugadorController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new JugadorModel();
        $this->view = new JugadoresView();
        session_start();
    }

    public function showJugadores() {
        $jugadores = $this->model->getJugadores();
        if (!$jugadores) {
            $jugadores = []; 
        }
        require './app/views/jugadores/list.php';
    }

    public function showForm() {
        require './app/views/jugadores/form.php';
    }

    public function addJugador() {
        if (!empty($_POST['nombre']) && !empty($_POST['posicion']) && !empty($_POST['equipo'])) {
            $this->model->insertJugador($_POST['nombre'], $_POST['posicion'], $_POST['equipo']);
        }
        header('Location: ' . BASE_URL . 'listar');
    }

    public function editJugador($id) {
        $jugador = $this->model->getJugadorById($id);
        require './app/views/jugadores/form.php';
    }

    public function updateJugador($id) {
        if (!empty($_POST['nombre']) && !empty($_POST['posicion']) && !empty($_POST['equipo'])) {
            $this->model->updateJugador($id, $_POST['nombre'], $_POST['posicion'], $_POST['equipo']);
        }
        header('Location: ' . BASE_URL . 'listar');
    }

    public function deleteJugador($id) {
        $this->model->deleteJugador($id);
        header('Location: ' . BASE_URL . 'listar');
    }

    public function showJugadoresPorEquipo($id_equipo) {
        $jugadores = $this->model->getJugadoresByEquipo($id_equipo);
        require './app/views/jugadores/list.php';
    }

    public function detailJugador($id) {
        $jugador = $this->model->getJugadorById($id);
        require './app/views/jugadores/detail.php';
    }
}
