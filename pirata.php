<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Caminho para o arquivo de texto onde os emails serão armazenados
    $file = "cadastros/dados.txt";

    
    // Abre o arquivo em modo de escrita (append)
    $fileHandle = fopen($file, "a");
    
    // Verifica se o arquivo foi aberto com sucesso
    if ($fileHandle) {
        // Formata a linha que será escrita no arquivo
        $data = "Nome: " . $name . "\nE-mail: " . $email . "\n\n";
        
        // Escreve a linha no arquivo
        fwrite($fileHandle, $data);
        
        // Fecha o arquivo
        fclose($fileHandle);
        
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Ocorreu um erro ao cadastrar. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido ao script.";
}
?>
