<?php include('conexao_aluno.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM tabela_aluno');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela com PDO</h1>
<table border="1">
<tr>
<th>ra</th><th>Alterar</th><th>excluir</th>
<th>curso</th><th>Alterar</th><th>excluir</th>
<th>nome</th><th>Alterar</th><th>excluir</th>
<th>endereco</th><th>Alterar</th><th>excluir</th>
<th>telefone</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['aluno_ra'] .'</td>';
	echo '<td>' . $linha['aluno_curso']. '</td>';
	echo '<td>' . $linha['aluno_nome'] .'</td>';
	echo '<td>' . $linha['aluno_endereco']. '</td>';
	echo '<td>' . $linha['aluno_telefone'] .'</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
	
}
?>
</table>