<?php include('conexao_curso.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM curso');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela com PDO</h1>
<table border="1">
<tr>
<th>codigo</th><th>Alterar</th><th>excluir</th>
<th>disciplina</th><th>Alterar</th><th>excluir</th>
<th>descricao</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['curso_codigo'] .'</td>';
	echo '<td>' . $linha['curso_disciplina']. '</td>';
	echo '<td>' . $linha['curso_descricao']. '</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
}
?>
</table>