<?php 
try {
    $pdo = new PDO("mysql:host=localhost;dbname=feedback","root", "root");
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
}
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$comentario = addslashes($_POST['coments']);

$pdo = $pdo->prepare("INSERT INTO comentario SET nome = :nome, email = :email, comentario = :comentario");
$pdo->bindValue(":nome", $nome);
$pdo->bindValue(":email", $email);
$pdo->bindValue(":comentario", $comentario);
$pdo->execute();    

header("Location: index.php");
?>
