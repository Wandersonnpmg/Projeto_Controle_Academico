<?php include('conexao_professor.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM tabela_professor');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela com PDO</h1>
<table border="1">
<tr>
<th>codigo</th><th>Alterar</th><th>excluir</th>
<th>nome</th><th>Alterar</th><th>excluir</th>
<th>endereco</th><th>Alterar</th><th>excluir</th>
<th>telefone</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['professor_codigo'] .'</td>';
	echo '<td>' . $linha['professor_nome']. '</td>';
	echo '<td>' . $linha['professor_endereco']. '</td>';
	echo '<td>' . $linha['professor_telefone']. '</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
}
?>
</table>