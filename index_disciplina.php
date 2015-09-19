<?php include('conexao_disciplina.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM tabela_disciplina');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela com PDO</h1>
<table border="1">
<tr>
<th>codigo</th><th>Alterar</th><th>excluir</th>
<th>professor</th><th>Alterar</th><th>excluir</th>
<th>descricao</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['disciplina_codigo'] .'</td>';
	echo '<td>' . $linha['disciplina_professor']. '</td>';
	echo '<td>' . $linha['disciplina_descricao']. '</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
}
?>
</table>