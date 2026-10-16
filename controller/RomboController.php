<?php
require_once __DIR__ . '/../model/Rombo.php';

class RomboController
{
    private Rombo $modelo;

    public function __construct()
    {
        $this->modelo = new Rombo();
    }

    public function procesarFormulario(): string
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return '';
        }

        $accion = $_POST['accion'] ?? '';

        if ($accion === 'guardar') {
            return $this->guardarOActualizar();
        }

        if ($accion === 'eliminar') {
            return $this->eliminar();
        }

        return '';
    }

    private function guardarOActualizar(): string
    {
        $id = (int) ($_POST['id_rombo'] ?? 0);
        $detalle = trim($_POST['txtDetalle'] ?? '');
        $lado = trim($_POST['txtLado'] ?? '');
        $altura = trim($_POST['txtAltura'] ?? '');

        if ($lado === '' || !is_numeric($lado) || (float) $lado <= 0) {
            return 'Ingrese un lado válido mayor a cero';
        }

        if ($altura === '' || !is_numeric($altura) || (float) $altura <= 0) {
            return 'Ingrese una altura válida mayor a cero';
        }

        if ($id > 0) {
            $this->modelo->actualizar($id, $detalle, (float) $lado, (float) $altura);
            header('Location: home.php?mensaje=actualizado');
            exit;
        }

        $this->modelo->guardar($detalle, (float) $lado, (float) $altura);
        header('Location: home.php?mensaje=guardado');
        exit;
    }

    private function eliminar(): string
    {
        $id = (int) ($_POST['id_rombo'] ?? 0);

        if ($id <= 0) {
            return 'No se pudo eliminar el registro';
        }

        $this->modelo->eliminar($id);
        header('Location: home.php?mensaje=eliminado');
        exit;
    }

    public function listar(string $buscar = ''): array
    {
        return $this->modelo->listar($buscar);
    }

    public function obtenerParaEditar(int $id): ?array
    {
        if ($id <= 0) {
            return null;
        }

        return $this->modelo->obtenerPorId($id);
    }
}