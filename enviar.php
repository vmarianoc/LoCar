<?php
    $erro = false;

    // Verifica se o POST tem algum valor
    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $erro = 'Nada foi postado.';
    }
    if ( ( ! isset( $cpf ) || ! is_numeric( $cpf ) ) && !$erro ) {
        $erro = 'o CPF/ Passaporte deve ser um valor numérico.';
    }
    if ( ( ! isset( $telefone ) || ! is_numeric( $telefone ) ) && !$erro ) {
        $erro = 'O Telefone ou Celular deve ser um valor numérico.';
    }
    if ( ( ! isset( $cnh ) || ! is_numeric( $cnh ) ) && !$erro ) {
        $erro = 'O Número de Registro da CNH deve ser um valor numérico.';
    }
    if ( ( ! isset( $cep ) || ! is_numeric( $cep ) ) && !$erro ) {
        $erro = 'O CEP deve ser um valor numérico.';
    }
    if ( ( ! isset( $numero ) || ! is_numeric( $numero ) ) && !$erro ) {
        $erro = 'O Número deve ser um valor numérico.';
    }
    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
        $erro = 'Envie um email válido.';
    }
    if ( $erro ) {
        echo $erro;
    } else {

    
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);

        $conn = new mysqli($server, $username, $password, $db);
    
        $cpfBD = $_POST['cpf'];
        $nomeBD = $_POST['nome'];
        $emailBD = $_POST['email'];
        $telefoneBD = $_POST['telefone'];
        $cnhBD = $_POST['cnh'];
        $categoriaBD = $_POST['categoria'];
        $validadeBD = $_POST['validade'];
        $cepBD = $_POST['cep'];
        $numeroBD = $_POST['numero'];
        $complementoBD = $_POST['complemento'];
        $ruaBD = $_POST['rua'];
        $bairroBD = $_POST['bairro'];
        $cidadeBD = $_POST['cidade'];
        $estadoBD = $_POST['estado'];
        $paisBD = $_POST['pais'];
        if(mysqli_query($conn, "INSERT INTO usuario(cpf, nome, email, telefone, cnh, categoria, validade, cep, numero, complemento, rua, bairro, cidade, estado, pais) VALUES('" . $cpfBD . "', '" . $nomeBD . "', '" . $emailBD . "', '" . $telefoneBD . "', '" . $cnhBD . "', '" . $categoriaBD . "', '" . $validadeBD . "', '" . $cepBD . "', '" . $numeroBD . "', '" . $complementoBD . "', '" . $ruaBD . "', '" . $bairroBD . "', '" . $cidadeBD . "', '" . $estadoBD . "', '" . $paisBD . "')")) {
        echo '1';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);

    } 

?>