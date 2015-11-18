<?php include('conexao.php');
// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM aluno');
// A classe PDO executa o comando
$prepara->execute();
?>
<h1>Listando dados tabela aluno com PDO</h1>
<table border="1">
<tr>
<th>ra</th><th>curso</th><th>nome</th><th>endereco</th><th>telefone</th><th>Alterar</th><th>excluir</th>
</tr>
<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['ra'] .'</td>';
	echo '<td>' . $linha['curso']. '</td>';
	echo '<td>' . $linha['nome'] .'</td>';
	echo '<td>' . $linha['endereco']. '</td>';
	echo '<td>' . $linha['telefone'] .'</td>';
	echo '<td>Alterar</td><td>excluir</td></tr>';
	
}
?>
<?php
	$link = "C:\Users\Usuario\controle_academico\aluno.xml"; 
	$xml = simplexml_load_file($link) -> channel;
	
	foreach($xml -> item as $item){  
		echo "<strong>ra:</strong> ".utf8_decode($item -> number)."<br />"; 
		echo "<strong>curso:</strong> ".utf8_decode($item -> number)."<br />"; 
		echo "<strong>nome:</strong> ".utf8_decode($item -> text)."<br />";
		echo "<strong>endereco:</strong> ".utf8_decode($item -> text)."<br />"; 
		echo "<strong>telefone:</strong> ".utf8_decode($item -> number)."<br />"; echo "<br />"; 
	} 

?>

<?php.ini
	
    allow_url_fopen = On

?>

</table>