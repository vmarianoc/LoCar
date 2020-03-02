<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Cadastro do Locatário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="web1920Cadastro.css">
        <script type="text/javascript" src="includes/jquery-1.2.6.pack.js"></script>
        <script type="text/javascript" src="includes/jquery.maskedinput-1.1.4.pack.js"></script>
        <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "80%" 
        }
        </script>
    </head>

    <body onload="zoom()">

    
        <script type="text/javascript">
        
            $(document).ready(function(){
                $("#cpf").mask("999.999.999-99");
            });
            $(document).ready(function(){
                $("#telefone").mask("(99)99999-9999");
            });
            $(document).ready(function(){
                $("#cep").mask("99999-999");
            });
        </script>

   
    <form action="javascript:void(0)" method="post" id="ajax-form">
         
        <div data-layer="c29ea42a-d886-4086-a597-e008cc1158b0" class="web1920Cadastro justify-content-center">
            <img src="assets/web1920Cadastro.png" class=" img-fluid">
            <div data-layer="2d856e97-239d-461b-b200-d47678f5e26d">
                <input class="digiteONomeCompleto" type="text" placeholder="Digite o nome completo" id="nome" name="nome" 
                 maxlength="50" required>
            </div>
            <div data-layer="5ccac4d4-8227-4ad8-a0f8-ee42d766c258" class="informeSeusDadosPessoais">Informe seus dados pessoais</div>
            <div data-layer="19c9894a-180e-4085-aac6-b9ab05bf4ffa">
                <input class="cpfPass" type="text" placeholder="000.000.000-00" name="cpf" maxlength="11" 
                minlength="11" id="cpf" require></div>
            <div data-layer="b5044ed5-f47e-449e-9e13-a46599a8e143" class="cpfPassaporte">CPF/ Passaporte</div>
            <div data-layer="f35fa999-1199-4b07-b610-21122c788def" class="nome">Nome</div>
            <div data-layer="0f7c113d-156d-438c-ade1-9b4f76ab0c68" class="cadastroDoLocatario">Cadastro do Locatário</div>
            <div data-layer="d1f460b1-a9ca-4286-9a8d-71418be2cce4">
                <input class="digiteUmEnderecoDeEMailValido" type="email" required="required" class="input-text" 
                placeholder="Digite um endereço de e-mail válido" name="email"
                maxlength="50" id="email"></div>
            <div data-layer="45cfb261-b8da-41f8-8e9e-782e451678f3" class="eMail">E-mail</div>
            <div data-layer="47599780-b99f-4383-bce7-726889d20d58">
                <input class="telCel" type="tel" maxlength="14" minlength="14" placeholder="(XX)XXXXX-XXXX" 
                name="telefone"  id="telefone" require></div>
            <div data-layer="6dca1c1f-8417-4b55-a57b-24cde8a222a0" class="telefoneOuCelular">Telefone ou Celular</div>
            <div data-layer="a96e9847-d710-4f28-a3ac-3b86bfa19336" class="categoriaHabilitada">Categoria Habilitada</div>
            <div data-layer="2575537d-6de3-4bea-b91e-b7632559ed9f" class="informeSeusDadosDaCarteiraNacionalDeHabilitacao">Informe seus dados da Carteira Nacional de Habilitação</div>
            <div data-layer="dfd867e1-bec4-47ab-9a2a-173bcfdd43bf" class="validade">Validade</div>
            <div data-layer="be24c8c4-f1da-4fdd-b7a8-cc0f20267cdf" class="locarLogoTransparente"></div>
            <div data-layer="b3133449-dda6-4e11-b683-a5c2266f8253" class="numeroDeRegistroDaCnh">Número de Registro da CNH</div>
            <div data-layer="231b1180-8001-4c2f-bd3e-4ca369ee2bb3">
                <input class="numCNH" type="text" placeholder="XXXXXXXXXXX" name="cnh" maxlength="11" 
                minlength="11" id="cnh" required></div>
            <div data-layer="40442816-d3da-47ef-812d-3e50d6784a8c">
                <select class="selecioneALetraDaCategoria" class="custom-select" placeholder="Selecione a letra da categoria" required>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select></div>
            <div data-layer="27322758-cfe3-4656-861a-33be9a7b55a7">
                <input class="validadeCNH" type="date" required="required" maxlength="10" placeholder="dd/mm/aaaa" name="validade" id="validade"
                 min="2012-01-01" max="2050-02-18" id="validade"></div>
            <div data-layer="bf12c08a-53e7-4882-91bf-6f2220b7c988" class="informeSeuEndereco">Informe seu endereço</div>
            <div data-layer="38f644ef-7e4d-4b8e-84a8-60ee1dd9b19b">
                <input class="cepDado" type="text" placeholder="XXXXX-XXX" name="cep"  id="cep" maxlength="9" 
                minlength="8" required></div>
            <div data-layer="e7fdbf01-a60f-4b48-9d2c-0c26a8a1362c" class="cep">CEP</div>
            <div data-layer="b175c7de-29df-44a5-a2ec-038c8cb3f744">
                <input class="digiteONomeDaRua" type="text" required="required" placeholder="Digite o nome da rua" name="rua" 
                 maxlength="50" id="rua"></div>
            <div data-layer="5179ec2b-d285-4da4-82da-78924a483530" class="rua">Rua</div>
            <div data-layer="afb21f02-386c-41ff-bb32-670ae86e154d">
                <input class="numEnd" type="text" required="required" maxlength="5" minlength="1" placeholder="XXXXX" name="numero" 
                 id="numero"></div>
            <div data-layer="d9d0bc16-bd29-49da-8841-06cfea3a40a6" class="numero">Número</div>
            <div data-layer="fc5d65e1-fd0c-4dcd-a50b-b2033e5fd3d2" >
                <input class="digiteONomeDoBairro" type="text" required="required" placeholder="Digite o nome do bairro" name="bairro" 
                 maxlength="50" id="bairro"></div>
            <div data-layer="f1def891-fcdf-4062-80fd-b40e30ad7a0e" class="bairro">Bairro</div>
            <div data-layer="6251f79e-9646-44ef-b226-630b5ede6196">
                <input class="opcional" type="text" placeholder="Opcional" name="complemento"  
                maxlength="30" id="complemento"></div>
            <div data-layer="a51ba5af-f482-4dfb-9161-557182c4749a" class="complemento">Complemento</div>
            <div data-layer="8f4c15a9-723d-41aa-90e5-d11a265df971">
                <input class="digiteONomeDaCidade" type="text" placeholder="Digite o nome da cidade" name="cidade" id="cidade"
                 maxlength="30"></div>
            <div data-layer="bd2ff272-7d7c-497c-8043-496f2c47dfa5" class="cidade">Cidade</div>
            <div data-layer="5a9828e2-ab30-422d-9610-db4bdf6c52ec">
                <input class="digiteONomeDoEstado" type="text" placeholder="Digite o nome do estado" name="estado" id="estado"
                 maxlength="30"></div>
            <div data-layer="fb5cd7fd-5ff6-4676-a5e5-3134cc9eaccf" class="estado">Estado</div>
            <div data-layer="53b37357-cef2-4105-9513-5bd7e8fa20bf" class="pais">País</div>
            <div data-layer="62898099-3600-4d83-8d2e-234c34b5eced">
                <input class="digiteONomeDoPais" type="text" placeholder="Digite o nome do país" name="pais" id="pais"
                 maxlength="30"></div>
            <div data-layer="67c17e44-c3e1-4947-94f3-a2a3791798d1" class="retangulo3" ></div>
            <div data-layer="67c17e44-c3e1-4947-94f3-a2a3791798d1" class="retangulo3">
            <button id = "submit" type = "submit" class = "btn btn-outline-light" style = "border-bottom-right-radius: 20px; 
                border-bottom-left-radius: 20px;border-top-right-radius: 20px;border-top-left-radius: 20px;padding: 10px 58px ">Cadastrar</div>
                
            </div>
        </div>
    </form>
    </br>
    <p id="show_message" style="display: none"><h1>Enviado com Sucesso!</h1> </p>
    <span id="error" style="display: none"></span>
<script type="text/javascript">
 $(document).ready(function($){
 
    // hide messages 
    $("#error").hide();
    $("#show_message").hide();
 
    // on submit...
    $('#ajax-form').submit(function(e){
 
        e.preventDefault();
 
 
        $("#error").hide();

        //name required
        var nome = $("input#nome").val();
        if(nome == ""){
            $("#error").fadeIn().text("Nome requerido.");
            $("input#nome").focus();
            return false;
        }
 
        // email required
        var email = $("input#email").val();
        if(email == ""){
            $("#error").fadeIn().text("Email requerido");
            $("input#email").focus();
            return false;
        }
 
        var cpf = $("input#cpf").val();
        if(cpf == ""){
            $("#error").fadeIn().text("cpf requirido");
            $("input#cpf").focus();
            return false;
        }

        //name required
        var tel = $("input#tel").val();
        if(tel == ""){
            $("#error").fadeIn().text("Telefone requerido.");
            $("input#tel").focus();
            return false;
        }
 
        // email required
        var cnh = $("input#cnh").val();
        if(cnh == ""){
            $("#error").fadeIn().text("cnh requerido");
            $("input#cnh").focus();
            return false;
        }
 
        var validade = $("input#validade").val();
        if(validade == ""){
            $("#error").fadeIn().text("validade requirida");
            $("input#validade").focus();
            return false;
        }
        //name required
        var bairro = $("input#bairro").val();
        if(bairro == ""){
            $("#error").fadeIn().text("bairro requerido.");
            $("input#bairro").focus();
            return false;
        }
 
        // email required
        var complemento = $("input#complemento").val();
        if(cnh == ""){
            $("#error").fadeIn().text("complemento requerido");
            $("input#complemento").focus();
            return false;
        }
 
        var cep = $("input#cep").val();
        if(validade == ""){
            $("#error").fadeIn().text("cep requirido");
            $("input#cep").focus();
            return false;
        }



        
 
        // ajax
        $.ajax({
            type:"POST",
            url: "enviar.php",
            data: $(this).serialize(), // get all form field value in serialize form
            success: function(){
                window.location.href = 'sucesso.php'
              $("#show_message").fadeIn();
              //$("#ajax-form").fadeOut();
            }
        });
    });  
 
    return false;
    });
</script>
    
    </body>
    </html>
            