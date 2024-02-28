<?php
// Função para conectar ao banco de dados controle_backup
function conectarDB() {
  $host = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "controle_backup";

  $conexao = mysqli_connect($host, $usuario, $senha, $banco);

  if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
  }

  return $conexao;
}

// Função para ler todos os registros da tabela storage
function lerRegistros($conexao) {
  $sql = "SELECT * FROM storage";
  $resultado = mysqli_query($conexao, $sql);

  if (!$resultado) {
    die("Erro ao executar a consulta: " . mysqli_error($conexao)); //Conentar essa linha quando fazer upload para o servidor
    error_log("Erro ao executar a consulta" .  mysqli_error($conexao) , 0);
  }

  return $resultado;
}


// Conexão ao banco de dados
$conexao = conectarDB();

// Leitura dos registros da tabela storage
$resultado = lerRegistros($conexao);

// Fechamento da conexão com o banco de dados
mysqli_close($conexao);
?>