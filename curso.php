<?php include('conexao.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM curso');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela curso com PDO</h1>
<table border="1">
<tr>
<th>codigo</th><th>disciplina</th><th>descricao</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// La�o para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['codigo'] .'</td>';
	echo '<td>' . $linha['disciplina']. '</td>';
	echo '<td>' . $linha['descricao']. '</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
}
?>
</table>