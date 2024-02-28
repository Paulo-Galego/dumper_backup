<?php

//Quando for realizar upload para o servidor, criar uma pasta com o nome que achar necessário e importar os arquivos.
// O servidor precisa estar com a versãodo php 8.02
include "controller_database.php";


require 'vendor/autoload.php';

use Spatie\DbDumper\Databases\MySql;

echo "<h1>Começou o processamento de Backup</h1> <br><br>";

while ($registro = mysqli_fetch_assoc($resultado)) {
    echo "Hostname: " . $registro["hostname"] . "<br>";
    echo "Nome do Banco: " . $registro["nome_base"] . "<br>";
    echo "Usuário: " . $registro["usuario"] . "<br>";
    echo "Senha: " . $registro["senha"] . "<br>";
    echo "Pasta de Backup: " . $registro["caminho_backup"] . "<br><br>";

    try {
      
        MySql::create()
        
            ->setDumpBinaryPath('C:\xampp\mysql\bin')
            ->setHost($registro["hostname"])
            ->setDbName($registro["nome_base"])
            ->setUserName($registro["usuario"])
            ->setPassword($registro["senha"])
            ->dumpToFile($registro["caminho_backup"] . $registro["nome_base"] . date('YmdHis') . '.sql');
            echo 'Dump gerado com sucesso!' . $registro["nome_base"] . "<br><br>";
            //error_log("Fim da execução do script", 0);
    
    } catch (\Exception $ex) {
        //echo 'Erro ao gerar dump' . $ex->getMessage();
        error_log("Erro na criação do backup da base" . $registro["nome_base"] . " Erro: " . $ex->getMessage() , 0);
        //Para habilitar o erro_log, acesso arquivo php.ini na pasta C:\xampp\php - Abrir o arquivo php.ini, e localizar a variavel:
        //error_log=colocar o caminho da pasta onde deseja salvar o log.
        //Essa função error_log armazenara algum erro que ocorrer!
        
    }

  }

  echo "Fim do processamento"; //comentar essa linha quando realizar upload no servidor

?>