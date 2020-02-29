<?php
    $erro = false;

    // Verifica se o POST tem algum valor
    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $erro = 'Nada foi postado.';
    }

    // Cria as variáveis dinamicamente
foreach ( $_POST as $chave => $valor ) {
	// Remove todas as tags HTML
	// Remove os espaços em branco do valor
	$$chave = trim( strip_tags( $valor ) );
	
	// Verifica se tem algum valor nulo
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}

    // Verifica se $idade realmente existe e se é um número. 
// Também verifica se não existe nenhum erro anterior
if ( ( ! isset( $cpf) || ! is_numeric( $cpf ) ) && !$erro ) {
	$erro = 'O CPF/ Passaporte deve ser um valor numérico.';
}
if ( ( ! isset( $telefone) || ! is_numeric( $telefone ) ) && !$erro ) {
	$erro = 'O Telefone ou Celular deve ser um valor numérico.';
}
if ( ( ! isset( $cnh) || ! is_numeric( $cnh ) ) && !$erro ) {
	$erro = 'O Número de Registro da CNH deve ser um valor numérico.';
}
if ( ( ! isset( $cep) || ! is_numeric( $cep ) ) && !$erro ) {
	$erro = 'O CEP deve ser um valor numérico.';
}
if ( ( ! isset( $numero) || ! is_numeric( $numero ) ) && !$erro ) {
	$erro = 'O Número deve ser um valor numérico.';
}

// Verifica se $email realmente existe e se é um email. 
// Também verifica se não existe nenhum erro anterior
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}


// Se existir algum erro, mostra o erro
if ( $erro ) {
	echo $erro;
} else {
	// Se a variável $erro continuar com valor falso
	// Você pode fazer o que preferir aqui, por exemplo, 
	// enviar para a base de dados, ou enviar um email
	// Tanto faz. Vou apenas exibir os dados na tela.
	echo "<h1> Veja os dados enviados</h1>";
	
	foreach ( $_POST as $chave => $valor ) {
		echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
    }

        $conn = new mysqli('localhost', 'root', '1234');
        if ($conn->connect_error) {
            die('Falha ao estabelecer uma conexão: '.$conn->connect_error);
        } else {
            /*
            VERIFICO SE EXISTE UM BANCO DE DADOS.
            CASO NÃO TENHA O BANCO DE DADOS, EU O CRIO.
            */
            if(!$conn->select_db('locar')) {
                $conn->query('CREATE DATABASE IF NOT EXISTS locar;');
                $conn->select_db('locar');
            }
 
            /*
            FAÇO O MESMO COM A TABELA
            OBS: É POSSÍVEL CRIAR DE FORMA AUTOMÁTICA E BASEADO NO FORMULÁRIO,
            MAS ISSO EU DEIXAREI PARA FAZER EM OUTRAS POSTAGEM COM JQUERY
            */
 
            $tabela = $conn->query('SHOW TABLES LIKE \'usuario\'');
            if($tabela->num_rows == 0) {
                $conn->query('CREATE table usuario(
                    cpf varchar(11) NOT NULL,
                    nome varchar(50) NOT NULL,
                    email varchar(50) NOT NULL,
                    telefone int(11) NOT NULL,
                    cnh varchar(11) NOT NULL,
                    categoria varchar(1) NOT NULL,
                    validade date NOT NULL,
                    cep varchar(8) NOT NULL,
                    numero int(5) NOT NULL,
                    complemento varchar(30) NOT NULL,
                    rua varchar(50) NOT NULL,
                    bairro varchar(50) NOT NULL,
                    cidade varchar(30) NOT NULL,
                    estado varchar(30) NOT NULL,
                    pais varchar(30) NOT NULL
                  
                    id INT(11) AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, sexo ENUM(\'m\',\'f\'), endereco VARCHAR(255) NOT NULL, numero VARCHAR(10) NOT NULL, cidade VARCHAR(255) NOT NULL, estado VARCHAR(2), PRIMARY KEY (id));');
            }
 
            $campos  = implode(", ", array_keys($dados));
            $valores = implode("','", $dados);
            $valores = "'".$valores."'";            
 
            $conn->query('INSERT INTO clientes('.$campos.') VALUES('.$valores.')');
            /* SE TUDO ESTIVER OK, REDIRECIONO PARA UMA PÁGINA DE SUCESSO */
            header('location: sucesso.php');
 
        }
 
}

?>