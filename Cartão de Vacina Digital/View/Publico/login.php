<div class="py-5 section-aquamarine animate-in-down" id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-md-left text-center animate-in-left">
          <h1 class="text-white">Entre e acompanhe o seu cartão de vacina</h1>
          <div class="row">
            <div class="col-md-6">
              <p class="text-right">O Cartão de Vacinação é um documento de comprovação de imunidade. É responsabilidade das Unidades de Saúde emití-lo ou atualizá-lo por ocasião da administração de qualquer vacina. Deve ser guardado junto com documentos de identificação pessoal. É importante que seja apresentado nos atendimentos médicos de rotina e fundamental que esteja disponível nos casos de acidentes. 
CVA
                </p>
            </div>
            <div class="col-md-6">
              <img class="img-fluid d-block mx-auto" src="../imagens/ze_gotinha-238x400.png"> </div>
          </div>
        </div>
        <div class="col-md-4 align-self-center animate-in-right">
             <form method="POST" action="../../Controller/login.php">
                 <input type="text" name="usu_nome" placeholder="Nome de usuário" required="" class="form-control my-2"> <br>
                 <input type="password" name="usu_senha" placeholder="Senha" required="" class="form-control my-2"> <br>
                 <select name="tipo" class="form-control my-2">
                     <option value="0"> Selecione ... </option>
                     <option value="1"> Agente </option>
                     <option value="2"> PSF </option>
                     <option value="3"> População </option>
                     <option value="4"> Secretaria </option>
                 </select>
            <input type="submit" value="Entrar no sistema" class="btn btn-success">
        </form>
        </div>
      </div>
    </div>
  </div>