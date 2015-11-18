<?php include('conexao.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM disciplina');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela disciplina com PDO</h1>
<table border="1">
<tr>
<th>codigo</th><th>professor</th><th>descricao</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['codigo'] .'</td>';
	echo '<td>' . $linha['professor']. '</td>';
	echo '<td>' . $linha['descricao']. '</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
}
?>

<?php
	$link = "C:\Users\Usuario\controle_academico\disciplina.xml"; 
	$xml = simplexml_load_file($link) -> channel;
	
	foreach($xml -> item as $item){  
		echo "<strong>codigo:</strong> ".utf8_decode($item -> number)."<br />"; 
		echo "<strong>professor:</strong> ".utf8_decode($item -> number)."<br />"; 
		echo "<strong>descricao:</strong> ".utf8_decode($item -> text)."<br />";
	} 

?>

<?php.ini
	
    allow_url_fopen = On

?>

</table>