<?php require "estruturas/cabecalho.php"; ?>

        <h2>Página de Contato</h2>
        <hr>
        <form action="https://formspree.io/f/xzbojqpv" method="post" id="my-form">
            <div>
                <!-- label for: Essencial para acessibilida para touch screen -->
                <label for="nome">Nome</label> 
                <!-- name: ling.beck so vai ler o que digitar se o campo tiver o name, php não consegue acessar o campo pelo id -->
                
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="date">Data De Nascimento</label>
                <input type="date" name="data" id="data" required>
            </div>

            <div>
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" required>
            </div>

            <div>
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade" min="18" max="100" required>
            </div>
            
            <div>
                <!-- innput tip radio o name tem que ser igual pra todos e o id tem que ser diferente pra cada um  -->
                <p>Sexo:</p>
                <input value="Masculino" type="radio" name="sexo" id="feminino" required>
                <label for="feminino">Feminino</label>
                <input value="Feminino" type="radio" name="sexo" id="masculino" required>
                <label for="masculino">Masculino</label>
            </div>

            <div>
                <p>Interesses</p>

                <input value="Design" type="checkbox" name="interesses" id="design">
                <label for="design">Design</label>

                <input value="Marketing" type="checkbox" name="interesses" id="marketing">
                <label for="marketing">Marketing</label>

                <input value="Progamação" type="checkbox" name="interesses" id="progamacao">
                <label for="progamacao">Progamação</label>
            </div>
            <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
            <div>
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" maxlength="9" required>
                <button id="localizar-cep">Localizar</button>
                <b id="status"></b>
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" size="30">
            </div>
            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade">
            </div>
            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado">
            </div>
            <!-- /FIM HTML PARA CEP/ENDEREÇO -->



            <div>
                <label for="assunto">Assunto:</label>
                <select name="" id="">
                    <!-- value envia infor para o bando de dados -->
                    <option value=""></option>
                    <option>Duvidas</option>
                    <option>Elegios</option>
                    <option>Reclmações</option>
                </select>
            </div>

            <div>
                <label for="mensagem">Mensagem: 
                    <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
                </label> 
                <br>
                <textarea maxlength="100" name="mensagem" id="mensagem" cols="20" rows="5" placeholder="Digite sua mensagem"></textarea>
            </div>

            <button type="submit">Enviar dados</button>
            <p id="my-form-status"></p>

        </form>
 
<?php require "estruturas/rodape.php";?>