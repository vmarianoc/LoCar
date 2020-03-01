<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>LoCar - Locadora de Carros</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="web1920Login.css">
        <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>

    <body>
        <div data-layer="7abd0011-b6cc-45f3-8889-406ce5c0dfda" class="web1920Login  justify-content-center">
        <img src="assets/web1920Login.png" class=" img-fluid">       
        <div data-layer="463beea2-2509-4c4b-8dd2-3e45537681f7" class="retangulo33"></div>
        <div data-layer="759fb51d-b700-43ac-84b6-22cfb3be563a" class="retangulo4"></div>
        <div data-layer="3ff4fa95-45b2-456d-a754-07981aa76031">
            <input class="digiteONomeDaCidade" type="text" placeholder="Digite o nome da cidade" name="cidade" id="cidade"
                pattern="[a-zA-Záãâéêíîóôõú\s]+$" maxlength="30"></div>
        <div data-layer="90463dc7-0c9a-42b0-9c3f-277d76ed2363">
            <input class="dataRet" type="date" required="required" maxlength="10" placeholder="dd/mm/aaaa" name="dataRet" 
            pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="" id="datePickerId" style="border-color: transparent;">
            <script type="text/javascript">
                datePickerId.max = new Date().toISOString().split("T")[0];
            </script>
        </div>
        <div data-layer="52a73616-e475-42d0-b2dc-56a12db43756">
            <!-- Modal HTML embedded directly into document -->
            <div id="ex1" class="modal">
                <div class="modal-header">
                    <h3 class="modal-title" style="text-align: center;">Contrato de locação</h3>
                </div>
                <div class="modal-body">
                    <a href="https://www.unidas.com.br/media/2236/contrato-de-loca%C3%A7%C3%A3o-rac_vers%C3%A3o-final-29102018.pdf"
                    target="blank">Clique aqui para abrir o contrato de locação.</a>
                    <p>
                        Fonte: <a href="https://www.unidas.com.br/">Unidas Locadora</a>.
                    </p>
                </div>
                <div class="modal-footer">
                <a href="#" rel="modal:close">Close</a>
              </div>
            </div>
            
            <!-- Link to open the modal -->
            <p><a class="contratoDeLocacao" href="#ex1" rel="modal:open">CONTRATO DE LOCAÇÃO</a></p>
        </div>
        <div data-layer="49ff09bd-6e0c-46f6-ba7a-e90fa95850ea" class="locarLogoTransparente"></div>
        <div data-layer="e49f37d1-6d3e-48c1-a475-e8b26d8d3f1a" class="dataEHoraDeRetirada">Data e Hora de Retirada</div>
        <div data-layer="d4df093f-4e31-4a74-9dcd-0b84d67b126b" class="localDeRetirada">Local de Retirada</div>
        <svg data-layer="aeec9267-9ee5-4349-ac49-fd3d2125f699" preserveAspectRatio="none" viewBox="0 0 32.04559326171875 40" class="iconAwesomeCalendarAlt"><path d="M 0 36.25 C 0 38.3203125 1.537902355194092 40 3.433456420898438 40 L 28.61213684082031 40 C 30.50769233703613 40 32.04559326171875 38.3203125 32.04559326171875 36.25 L 32.04559326171875 15 L 0 15 L 0 36.25 Z M 22.88970947265625 20.9375 C 22.88970947265625 20.421875 23.27597427368164 20 23.74807357788086 20 L 26.60928726196289 20 C 27.08138656616211 20 27.4676513671875 20.421875 27.4676513671875 20.9375 L 27.4676513671875 24.0625 C 27.4676513671875 24.57812309265137 27.08138656616211 25 26.60928726196289 25 L 23.74807357788086 25 C 23.27597427368164 25 22.88970947265625 24.57812309265137 22.88970947265625 24.0625 L 22.88970947265625 20.9375 Z M 22.88970947265625 30.93749809265137 C 22.88970947265625 30.42187690734863 23.27597427368164 30 23.74807357788086 30 L 26.60928726196289 30 C 27.08138656616211 30 27.4676513671875 30.42187690734863 27.4676513671875 30.93749809265137 L 27.4676513671875 34.0625 C 27.4676513671875 34.578125 27.08138656616211 35 26.60928726196289 35 L 23.74807357788086 35 C 23.27597427368164 35 22.88970947265625 34.578125 22.88970947265625 34.0625 L 22.88970947265625 30.93749809265137 Z M 13.73382568359375 20.9375 C 13.73382568359375 20.421875 14.12008953094482 20 14.59218883514404 20 L 17.45340347290039 20 C 17.92550277709961 20 18.311767578125 20.421875 18.311767578125 20.9375 L 18.311767578125 24.0625 C 18.311767578125 24.57812309265137 17.92550277709961 25 17.45340347290039 25 L 14.59218883514404 25 C 14.12008953094482 25 13.73382568359375 24.57812309265137 13.73382568359375 24.0625 L 13.73382568359375 20.9375 Z M 13.73382568359375 30.93749809265137 C 13.73382568359375 30.42187690734863 14.12008953094482 30 14.59218883514404 30 L 17.45340347290039 30 C 17.92550277709961 30 18.311767578125 30.42187690734863 18.311767578125 30.93749809265137 L 18.311767578125 34.0625 C 18.311767578125 34.578125 17.92550277709961 35 17.45340347290039 35 L 14.59218883514404 35 C 14.12008953094482 35 13.73382568359375 34.578125 13.73382568359375 34.0625 L 13.73382568359375 30.93749809265137 Z M 4.57794189453125 20.9375 C 4.57794189453125 20.421875 4.964205741882324 20 5.436305999755859 20 L 8.297519683837891 20 C 8.769619941711426 20 9.1558837890625 20.421875 9.1558837890625 20.9375 L 9.1558837890625 24.0625 C 9.1558837890625 24.57812309265137 8.769619941711426 25 8.297519683837891 25 L 5.436305999755859 25 C 4.964205741882324 25 4.57794189453125 24.57812309265137 4.57794189453125 24.0625 L 4.57794189453125 20.9375 Z M 4.57794189453125 30.93749809265137 C 4.57794189453125 30.42187690734863 4.964205741882324 30 5.436305999755859 30 L 8.297519683837891 30 C 8.769619941711426 30 9.1558837890625 30.42187690734863 9.1558837890625 30.93749809265137 L 9.1558837890625 34.0625 C 9.1558837890625 34.578125 8.769619941711426 35 8.297519683837891 35 L 5.436305999755859 35 C 4.964205741882324 35 4.57794189453125 34.578125 4.57794189453125 34.0625 L 4.57794189453125 30.93749809265137 Z M 28.61213684082031 5 L 25.17867851257324 5 L 25.17867851257324 1.25 C 25.17867851257324 0.5625000596046448 24.66366195678711 0 24.03419494628906 0 L 21.74522399902344 0 C 21.11575698852539 0 20.60073852539063 0.5625000596046448 20.60073852539063 1.25 L 20.60073852539063 5 L 11.44485473632813 5 L 11.44485473632813 1.25 C 11.44485473632813 0.5625000596046448 10.92983627319336 0 10.30036926269531 0 L 8.011398315429688 0 C 7.381931304931641 0 6.866912841796875 0.5625000596046448 6.866912841796875 1.25 L 6.866912841796875 5 L 3.433456420898438 5 C 1.537902355194092 5 0 6.679687023162842 0 8.75 L 0 12.5 L 32.04559326171875 12.5 L 32.04559326171875 8.75 C 32.04559326171875 6.679687023162842 30.50769233703613 5 28.61213684082031 5 Z"  /></svg>
        <svg data-layer="d6b8beae-0e5d-4126-a208-e2852634b549" preserveAspectRatio="none" viewBox="0.5625 0.5624999403953552 37.04559326171875 33.99383544921875" class="iconAwesomeClock"><path d="M 19.08530044555664 0.5624999403953552 C 8.852946281433105 0.5624999403953552 0.5625 8.169990539550781 0.5625 17.55941772460938 C 0.5625 26.9488468170166 8.852946281433105 34.55633163452148 19.08530044555664 34.55633163452148 C 29.31764793395996 34.55633163452148 37.60809326171875 26.9488468170166 37.60809326171875 17.55941772460938 C 37.60809326171875 8.169990539550781 29.31764793395996 0.5624999403953552 19.08530044555664 0.5624999403953552 Z M 23.35002326965332 24.55694007873535 L 16.76248168945313 20.16378593444824 C 16.53094482421875 20.00615119934082 16.39650535583496 19.75942230224609 16.39650535583496 19.49898529052734 L 16.39650535583496 7.964383602142334 C 16.39650535583496 7.512046337127686 16.79982376098633 7.141952037811279 17.29277038574219 7.141952037811279 L 20.87782669067383 7.141952037811279 C 21.37077140808105 7.141952037811279 21.77409172058105 7.512046337127686 21.77409172058105 7.964383602142334 L 21.77409172058105 17.40178680419922 L 26.51682662963867 20.56814765930176 C 26.92014503479004 20.83543968200684 27.00230026245117 21.34946060180664 26.71101379394531 21.71955299377441 L 24.60479354858398 24.37874794006348 C 24.31350517272949 24.74198722839355 23.75333976745605 24.82423210144043 23.35002326965332 24.55694007873535 Z"  /></svg>
        <div data-layer="a757a6b5-2d38-48bb-b66a-bdb492b166f4">
            <input class="horaRet" type="time" required="required" maxlength="8" placeholder="hh:mm" name="hour" 
            pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" style="border-color: transparent;" min="08:00" max="17:00"></div>
        <svg data-layer="5312f35b-3b31-4ab0-b0a9-17f2cdf9bebe" preserveAspectRatio="none" viewBox="-0.5 0 1 43" class="linha1"><path d="M 0 0 L 0 43"  /></svg>
        <svg data-layer="3f3ae529-6ee5-4ad2-b54e-09257ce72990" preserveAspectRatio="none" viewBox="-0.5 0 1 71" class="linha3"><path d="M 0 0 L 0 71"  /></svg>
        <div data-layer="ba363c0c-64f7-47ae-a54f-5ee7dfd15e2b">
            <!-- Modal HTML embedded directly into document -->
            <div id="ex6" class="modal">
                <div class="modal-header">
                    <h3 class="modal-title" style="text-align: center;">Perguntas Frequentes</h3>
                </div>
                <div class="modal-body">
                    <h5>O que é necessário para alugar e dirigir um carro na locadora?</h5>
                    <p style="text-align: justify;">
                        Para alugar um veículo, você deverá:
                        
                        - Possuir e apresentar uma Carteira de Habilitação Nacional (CNH) válida e emitida em território nacional;
                        
                        ou documento de identidade (RG) junto ao CPF. A apresentação do RG ou CNH original que contenha o número do CPF dispensa a apresentação deste.- Apresentar cartão de crédito nominal para a operação de pré-autorização. Não serão aceitos para essa operação, cartão pré-pago ou virtual. Além de ter as suas informações aprovadas pela locadora.
                        
                        Para conduzir o veículo locado:
                        
                        - Deverá ser apresentada a Carteira de Habilitação original, válida e emitida em território nacional. Caso o cliente não preencha o perfil exigido, poderá indicar um condutor adicional. Neste caso, o cliente tem ciência e concorda que deverá abster-se de conduzir o veículo locado e que assumirá todas as responsabilidades pelos atos praticados pela pessoa por ele indicada.
                        
                        A regra para locação de veículos a estrangeiros deve ser consultada na loja de retirada do veículo.</p>
                    <h5>Como são contabilizadas as diárias?</h5>
                    <p style="text-align: justify;">
                        A cada 24 horas, é contabilizada uma diária de locação. Caso a devolução do veículo ultrapasse o horário previsto, a cada hora extra, será cobrada a razão de 1/6 do valor da diária contratada. Após a sexta hora adicional, será cobrada uma nova diária de locação. Quanto às Proteções, após a primeira hora de tolerância, será cobrado o valor integral de uma diária da(s) proteção (ões) contratada(s).
                    </p>
                    <h5>Qual a diferença entre Km Livre e Km Controlado?</h5>
                    <p style="text-align: justify;">A locadora oferece quilometragem livre para locações de 1 a 20 dias, ou seja, você pode dirigir o quanto quiser. Para locações de 21 a 30 dias, a quilometragem é controlada, ou seja: caso você ultrapasse o limite de 4.500 quilômetros durante esse período, será cobrado um valor a partir de R$ 0,48 para cada KM adicional, que será calculado de acordo com o grupo contratado.</p>
                    <h5>Qual o período máximo que posso ficar com um carro alugado?</h5>
                    <p style="text-align: justify;">O período máximo para locações feitas por meio do site é de 30 dias.</p>
                    <h5>Posso alugar carro com motorista?</h5>
                    <p style="text-align: justify;">A locadora oferece o serviço de motorista. Caso haja necessidade, poderá ser contratado um motorista bilíngüe.
                    <h5>Posso incluir outro motorista para dirigir um veículo?</h5>
                    <p style="text-align: justify;">Como locatário, você pode nomear até 4 (quatro) motoristas adicionais no contrato de locação. Isso poderá ser feito no momento de retirada do veículo. Esta nomeação implica pagamento de taxa vigente, por diária, para cada motorista adicional indicado.
                    </p>    
                    <br>Fonte: <a href="https://www.unidas.com.br/para-voce/como-alugar">Unidas Locadora</a>.</p>

                    
                </div>
                  <div class="modal-footer">
                    <a href="#" rel="modal:close">Close</a>
                  </div>
                
            </div>
            
            <!-- Link to open the modal -->
            <p><a class="perguntasFrequentes" href="#ex6" rel="modal:open">PERGUNTAS FREQUENTES</a></p></div>
        <div data-layer="4b608f79-4e0b-45a6-8ed1-c874750671f9">
            <!-- Modal HTML embedded directly into document -->
            <div id="ex2" class="modal">
                <div class="modal-header">
                    <h3 class="modal-title" style="text-align: center;">Como alugar?</h3>
                  </div>
                  <div class="modal-body">
                    <h4>Passo a Passo:</h4>
                    <p style="text-align: justify;">Estando no site da LoCar, primeiramente, deve-se ser inserido, por meio da digitação, o nome
                    da cidade de retirada do veículo. Seguido da data e hora de retirada e devolução - lembrando que é apenas permitido
                    o intervalo de hora entre 8 e 17 horas e, o intervalo de data, entre o dia atual e sem data máxima. Após preencher 
                    esses dados, e clicar no botão "ALUGAR" é redirecionado à página de Cadastro de Locatário.
                    <br>Nessa página, a de Cadastro do Locatário, os campos devem ser devidamente preenchidos. Primeiramente com os
                    dados pessoais, sendo nome, CPF ou passaporte, telefone ou celular e e-mail - todos com inserção por meio da 
                    digitação. Seguido dos dados da Carteira Nacional de Habilitação, sendo o número de registro, a categoria habilitada
                    e a validade - o primeiro com inserção por meio da digitação, o segundo, por seleção de categorias já pré-definidas
                    e, o terceiro, por seleção de data através de um calendário. E, por fim, deve ser informado o endereço do locatário,
                    constituído pelos campos de CEP, rua, número, bairro, complemento, cidade, estado e país - todos também com inserção
                    por meio da digitação.
                    <br>Após o informe de todos os dados citados anteriormente, o respectivo locatário é cadastrado ao clicar no botão
                    "Cadastrar-se", presente no final da tela.
                </p>
                  </div>
                  <div class="modal-footer">
                    <a href="#" rel="modal:close">Close</a>
                  </div>
                
            </div>
            
            <!-- Link to open the modal -->
            <p><a class="comoAlugar" href="#ex2" rel="modal:open">COMO ALUGAR</a></p>
        </div>
        <svg data-layer="c8cd4a4a-8d2b-4c02-abbb-111e15954b84" preserveAspectRatio="none" viewBox="-0.5 0 1 71" class="linha4"><path d="M 0 0 L 0 71"  /></svg>
        <div data-layer="3a31a9f3-c710-4f91-ba01-102b0d433710">
            <!-- Modal HTML embedded directly into document -->
            <div id="ex4" class="modal">
                <div class="modal-header">
                    <h3 class="modal-title" style="text-align: center;">Requisitos e Condições</h3>
                </div>
                <div class="modal-body">
                    <h4>Requisitos:</h4>
                    <p style="text-align: justify;">"Carteira de habilitação:
                        Para conduzir o veículo locado, deverá ser apresentada a Carteira de Habilitação válida e emitida em território nacional.
                        <br>Cartão de crédito:
                        A pré-autorização deverá ser feita mediante um cartão de crédito nominal, com suas informações aprovadas pela locadora. Não serão aceitos cartões de débito ou pré-pago.
                        <h5>Atenção</h5>                        
                        <p style="text-align: justify;">Caso o cliente não preencha o perfil exigido, poderá indicar um condutor com CNH válida. Nesse caso, o cliente deverá abster-se de conduzir o veículo, apresentar RG ou documento de ordem com foto e CPF, e tornar-se o responsável pelos atos praticados pela pessoa por ele indicada.
                        <br>Estrangeiro - O cliente deve ter Carteira de Habilitação válida de seu país de origem, assim como passaporte ou documento nacional de seu país de origem e o visto de entrada no Brasil.</p>
                    </p>
                    <h4>Condições:</h4>
                    <p style="text-align: justify;">
                        Para locações entre 1 e 20 diárias, a quilometragem é livre. Para locações entre 21 e 30 diárias é estipulado um limite de 4.500 quilômetros rodados para todo o período. Será cobrado um valor para cada quilômetro excedido conforme tarifário presente na loja, bem como resumo da reserva realizada no site.
                        <br>
                        O cliente pode nomear até 5 (cinco) motoristas adicionais, implicando no pagamento da taxa diária vigente.
                        <br>A devolução do veículo em outra loja será permitida somente com a autorização da loja de origem e o pagamento da respectiva taxa de retorno.
                        <br>Caso o veículo do grupo escolhido no ato da reserva não esteja disponível no dia da retirada, a locadora disponibilizará outro veículo de um grupo superior. Nesse caso, os valores das diárias de locação e das diárias de proteção cobradas serão correspondentes ao veículo escolhido no ato da reserva e indisponível no momento da retirada.
                        <br>O pagamento da locação deverá ser realizado no momento da abertura do contrato."
                        <br>Fonte: <a href="https://www.unidas.com.br/para-voce/como-alugar">Unidas Locadora</a>.
                    </p>
                </div>
            
            <div class="modal-footer">
                <a href="#" rel="modal:close">Close</a>
            </div></div>
            <!-- Link to open the modal -->
            <p><a class="politicaDePrivacidade" href="#ex4" rel="modal:open">REQUISITOS E CONDIÇÕES</a></p>
        </div>
        <svg data-layer="b25ca4ea-f26d-4f45-a0f1-eaa55420ea2f" preserveAspectRatio="none" viewBox="-0.5 0 1 71" class="linha5"><path d="M 0 0 L 0 71"  /></svg>
        <div data-layer="57f199be-0cc1-4420-94a7-7e9bf103d674" class="retangulo34"></div>
        <div data-layer="9efe45e3-4d53-4e1c-b890-df088a45f359">
            <input class="dataDev" type="date" required="required" maxlength="10" placeholder="dd/mm/aaaa" name="dataDev" 
            pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2020-02-29" max="2050-02-18" id="dataRet" style="border-color: transparent;">
        </div>
        <div data-layer="804e2032-7dbb-4818-b8a1-446cdd8d5ae0" class="dataEHoraDeDevolucao">Data e Hora de Devolução</div>
        <svg data-layer="ee23d384-8afe-4249-b8c9-9e20349dd655" preserveAspectRatio="none" viewBox="0 0 32.04559326171875 40" class="iconAwesomeCalendarAlt23f98bd7"><path d="M 0 36.25 C 0 38.3203125 1.537902355194092 40 3.433456420898438 40 L 28.61213684082031 40 C 30.50769233703613 40 32.04559326171875 38.3203125 32.04559326171875 36.25 L 32.04559326171875 15 L 0 15 L 0 36.25 Z M 22.88970947265625 20.9375 C 22.88970947265625 20.421875 23.27597427368164 20 23.74807357788086 20 L 26.60928726196289 20 C 27.08138656616211 20 27.4676513671875 20.421875 27.4676513671875 20.9375 L 27.4676513671875 24.0625 C 27.4676513671875 24.57812309265137 27.08138656616211 25 26.60928726196289 25 L 23.74807357788086 25 C 23.27597427368164 25 22.88970947265625 24.57812309265137 22.88970947265625 24.0625 L 22.88970947265625 20.9375 Z M 22.88970947265625 30.93749809265137 C 22.88970947265625 30.42187690734863 23.27597427368164 30 23.74807357788086 30 L 26.60928726196289 30 C 27.08138656616211 30 27.4676513671875 30.42187690734863 27.4676513671875 30.93749809265137 L 27.4676513671875 34.0625 C 27.4676513671875 34.578125 27.08138656616211 35 26.60928726196289 35 L 23.74807357788086 35 C 23.27597427368164 35 22.88970947265625 34.578125 22.88970947265625 34.0625 L 22.88970947265625 30.93749809265137 Z M 13.73382568359375 20.9375 C 13.73382568359375 20.421875 14.12008953094482 20 14.59218883514404 20 L 17.45340347290039 20 C 17.92550277709961 20 18.311767578125 20.421875 18.311767578125 20.9375 L 18.311767578125 24.0625 C 18.311767578125 24.57812309265137 17.92550277709961 25 17.45340347290039 25 L 14.59218883514404 25 C 14.12008953094482 25 13.73382568359375 24.57812309265137 13.73382568359375 24.0625 L 13.73382568359375 20.9375 Z M 13.73382568359375 30.93749809265137 C 13.73382568359375 30.42187690734863 14.12008953094482 30 14.59218883514404 30 L 17.45340347290039 30 C 17.92550277709961 30 18.311767578125 30.42187690734863 18.311767578125 30.93749809265137 L 18.311767578125 34.0625 C 18.311767578125 34.578125 17.92550277709961 35 17.45340347290039 35 L 14.59218883514404 35 C 14.12008953094482 35 13.73382568359375 34.578125 13.73382568359375 34.0625 L 13.73382568359375 30.93749809265137 Z M 4.57794189453125 20.9375 C 4.57794189453125 20.421875 4.964205741882324 20 5.436305999755859 20 L 8.297519683837891 20 C 8.769619941711426 20 9.1558837890625 20.421875 9.1558837890625 20.9375 L 9.1558837890625 24.0625 C 9.1558837890625 24.57812309265137 8.769619941711426 25 8.297519683837891 25 L 5.436305999755859 25 C 4.964205741882324 25 4.57794189453125 24.57812309265137 4.57794189453125 24.0625 L 4.57794189453125 20.9375 Z M 4.57794189453125 30.93749809265137 C 4.57794189453125 30.42187690734863 4.964205741882324 30 5.436305999755859 30 L 8.297519683837891 30 C 8.769619941711426 30 9.1558837890625 30.42187690734863 9.1558837890625 30.93749809265137 L 9.1558837890625 34.0625 C 9.1558837890625 34.578125 8.769619941711426 35 8.297519683837891 35 L 5.436305999755859 35 C 4.964205741882324 35 4.57794189453125 34.578125 4.57794189453125 34.0625 L 4.57794189453125 30.93749809265137 Z M 28.61213684082031 5 L 25.17867851257324 5 L 25.17867851257324 1.25 C 25.17867851257324 0.5625000596046448 24.66366195678711 0 24.03419494628906 0 L 21.74522399902344 0 C 21.11575698852539 0 20.60073852539063 0.5625000596046448 20.60073852539063 1.25 L 20.60073852539063 5 L 11.44485473632813 5 L 11.44485473632813 1.25 C 11.44485473632813 0.5625000596046448 10.92983627319336 0 10.30036926269531 0 L 8.011398315429688 0 C 7.381931304931641 0 6.866912841796875 0.5625000596046448 6.866912841796875 1.25 L 6.866912841796875 5 L 3.433456420898438 5 C 1.537902355194092 5 0 6.679687023162842 0 8.75 L 0 12.5 L 32.04559326171875 12.5 L 32.04559326171875 8.75 C 32.04559326171875 6.679687023162842 30.50769233703613 5 28.61213684082031 5 Z"  /></svg>
        <svg data-layer="74c1e168-fd12-47e6-b7fa-d9bb64d267ed" preserveAspectRatio="none" viewBox="0.5625 0.5624999403953552 37.045654296875 33.99383544921875" class="iconAwesomeClock1bc5689c"><path d="M 19.08530044555664 0.5624999403953552 C 8.852946281433105 0.5624999403953552 0.5625 8.169990539550781 0.5625 17.55941772460938 C 0.5625 26.9488468170166 8.852946281433105 34.55633163452148 19.08530044555664 34.55633163452148 C 29.31764793395996 34.55633163452148 37.60809326171875 26.9488468170166 37.60809326171875 17.55941772460938 C 37.60809326171875 8.169990539550781 29.31764793395996 0.5624999403953552 19.08530044555664 0.5624999403953552 Z M 23.35002326965332 24.55694007873535 L 16.76248168945313 20.16378593444824 C 16.53094482421875 20.00615119934082 16.39650535583496 19.75942230224609 16.39650535583496 19.49898529052734 L 16.39650535583496 7.964383602142334 C 16.39650535583496 7.512046337127686 16.79982376098633 7.141952037811279 17.29277038574219 7.141952037811279 L 20.87782669067383 7.141952037811279 C 21.37077140808105 7.141952037811279 21.77409172058105 7.512046337127686 21.77409172058105 7.964383602142334 L 21.77409172058105 17.40178680419922 L 26.51682662963867 20.56814765930176 C 26.92014503479004 20.83543968200684 27.00230026245117 21.34946060180664 26.71101379394531 21.71955299377441 L 24.60479354858398 24.37874794006348 C 24.31350517272949 24.74198722839355 23.75333976745605 24.82423210144043 23.35002326965332 24.55694007873535 Z"  /></svg>
        <div data-layer="0a74d3a6-cc9b-4f26-9982-6f468a464036">
            <input class="horaDev" type="time" required="required" maxlength="8" placeholder="hh:mm" name="hour" 
            pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" style="border-color: transparent;" min="08:00" max="17:00"></div>
        <svg data-layer="492700a0-4b6e-4e11-bd21-678bc2f94728" preserveAspectRatio="none" viewBox="-0.5 0 1 43" class="linha6"><path d="M 0 0 L 0 43"  /></svg>
        <div data-layer="f76514a7-7b28-4e04-9c01-d2bbac18c5c9" class="retangulo3"></div>
        <!-- <div data-layer="4ba0f3b3-125b-4571-a50a-4df77f72c534" class="alugar">ALUGAR</div> -->
        <a href="web1920Cadastro.php" data-layer="4ba0f3b3-125b-4571-a50a-4df77f72c534" class="alugar">ALUGAR</a>
    </div>



</body>

</html>