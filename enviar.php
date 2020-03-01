<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = new mysqli($server, $username, $password, $db);
 

    // Verifica se o POST tem algum valor
    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $erro = 'Nada foi postado.';
    }
    if(!$conect=mysqli_connect('localhost','root','','usuario')) die ('erro ao conectar');
    if(!validaCPF($_POST['cpf'])){
        $erro = 'Informe um CPF/ Passaporte válido.';
        exit();
    } else {

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

 
    function validaCPF($cpf) {
 
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
    
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
    
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    
    }
?>