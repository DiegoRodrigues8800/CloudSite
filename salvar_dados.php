<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $imagem = $_POST['imagem'];

    // Formata os dados para salvar em um arquivo (poderia ser um banco de dados também)
    $dados = "Nome: $nome\n";
    $dados .= "E-mail: $email\n";
    $dados .= "Telefone: $telefone\n";
    $dados .= "Imagem: $imagem\n";
    $dados .= "--------------------------------------\n";

    // Caminho para o arquivo onde os dados serão salvos
    $arquivo = 'dados_cadastrados.txt';

    // Abre ou cria o arquivo para escrita
    $handle = fopen($arquivo, 'a') or die('Não foi possível abrir o arquivo para escrita.');

    // Escreve os dados no arquivo
    fwrite($handle, $dados);

    // Fecha o arquivo
    fclose($handle);

    // Redireciona de volta para a página inicial ou exibe uma mensagem de sucesso
    header('Location: index.html');
    exit;
}
?>
