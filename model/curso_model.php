<?php
require_once __DIR__ . '/../db/connection.php';

class CursoModel {
  private $conn;

  public function __construct() {
    $db = new Database();
    $this->conn = $db->getConnection();
  }

  public function criarCurso($nome, $horario, $turno) {
    $sql = "INSERT INTO curso (nome, horario, turno) VALUES (?, ?, ?)";

    try {
      $stmt = $this->conn->prepare($sql); 
      $stmt->execute([$nome, $horario, $turno]);
      return true; // Adicionado retorno de sucesso
    } catch (PDOException $e) {
      error_log("Um erro surgiu ao inserir um curso: " . $e->getMessage()); // Usar error_log é melhor que echo
      return false;
    }
  }

  public function selectTodosCursos() {
    $sql = "SELECT * FROM curso ORDER BY nome ASC";
    try {
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();

    } catch (PDOException $e) {
      error_log("Erro ao buscar professores: " . $e->getMessage());
      return null;
    }
  }
}