<?php
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

 

?>