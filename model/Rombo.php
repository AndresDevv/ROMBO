<?php
require_once __DIR__ . '/../config/Database.php';

class Rombo
{
    private PDO $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->conectar();
    }

    public function listar(string $buscar = ''): array
    {
        if ($buscar !== '') {
            $sql = "SELECT * FROM rombo
                    WHERE detalle LIKE :buscarDetalle
                       OR CAST(lado AS CHAR) LIKE :buscarLado
                       OR CAST(altura AS CHAR) LIKE :buscarAltura
                       OR CAST(area AS CHAR) LIKE :buscarArea
                       OR CAST(perimetro AS CHAR) LIKE :buscarPerimetro
                    ORDER BY id_rombo DESC";
            $stmt = $this->pdo->prepare($sql);

            $valorBuscar = '%' . $buscar . '%';

            $stmt->execute([
                'buscarDetalle' => $valorBuscar,
                'buscarLado' => $valorBuscar,
                'buscarAltura' => $valorBuscar,
                'buscarArea' => $valorBuscar,
                'buscarPerimetro' => $valorBuscar,
            ]);

            return $stmt->fetchAll();
        }

        $sql = "SELECT * FROM rombo ORDER BY id_rombo DESC";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function obtenerPorId(int $id): ?array
    {
        $sql = "SELECT * FROM rombo WHERE id_rombo = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $registro = $stmt->fetch();

        return $registro ?: null;
    }

    public function guardar(string $detalle, float $lado, float $altura): bool
    {
        $area = $lado * $altura;
        $perimetro = $lado * 4;

        $sql = "INSERT INTO rombo(detalle, lado, altura, area, perimetro)
                VALUES(:detalle, :lado, :altura, :area, :perimetro)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'detalle' => $detalle,
            'lado' => $lado,
            'altura' => $altura,
            'area' => $area,
            'perimetro' => $perimetro,
        ]);
    }

    public function actualizar(int $id, string $detalle, float $lado, float $altura): bool
    {
        $area = $lado * $altura;
        $perimetro = $lado * 4;

        $sql = "UPDATE rombo
                SET detalle = :detalle,
                    lado = :lado,
                    altura = :altura,
                    area = :area,
                    perimetro = :perimetro
                WHERE id_rombo = :id";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'id' => $id,
            'detalle' => $detalle,
            'lado' => $lado,
            'altura' => $altura,
            'area' => $area,
            'perimetro' => $perimetro,
        ]);
    }

    public function eliminar(int $id): bool
    {
        $sql = "DELETE FROM rombo WHERE id_rombo = :id";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['id' => $id]);
    }
}