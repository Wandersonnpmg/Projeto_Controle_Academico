<?php
/* Vari�veis PDO */
$base_dados = 'disciplina';
$usuario_bd = 'root';
$senha_bd   = 'vertrigo';
$host_db    = 'localhost';
$conexao_pdo = null;
 
/* Concatena��o das vari�veis para detalhes da classe PDO */
$detalhes_pdo = 'mysql:host=' . $host_db . ';dbname='. $base_dados;
 
// Tenta conectar
try {
    // Cria a conex�o PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
	
    // Mata o script
    die();
}
?>