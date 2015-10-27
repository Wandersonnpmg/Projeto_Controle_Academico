<?php include('conexao.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM professor');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela professor com PDO</h1>
<table border="1">
<tr>
<th>codigo</th><th>nome</th><th>endereco</th><th>telefone</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['codigo'] .'</td>';
	echo '<td>' . $linha['nome']. '</td>';
	echo '<td>' . $linha['endereco']. '</td>';
	echo '<td>' . $linha['telefone']. '</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
}
?>
</table>