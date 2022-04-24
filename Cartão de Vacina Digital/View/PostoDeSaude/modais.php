<div id="pesquisarVacinacao" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pesquisar População</h4>
             
            </div>
            <div class="modal-body">
                <form method="POST" action="#Vacina">
                    <input type="text" name="campo_pesquisaVac" autofocus  placeholder="Nome da Vacina" required="" class="form-control my-2"> <br>                   
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
                
        </div>
    </div>
</div>

<div id="pesquisarVac" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pesquisar Vacina</h4>
             
            </div>
            <div class="modal-body">
                <form method="POST" action="#Vacina">
                    <input type="text" name="campo_pesquisa_vac" autofocus  placeholder="Nome da Vacina" required="" class="form-control my-2"> <br>                   
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
                
        </div>
    </div>
</div>

<div id="pesquisarAgente" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pesquisar Agente de Saúde</h4>
       
            </div>
            <div class="modal-body">
                <form method="POST" action="#Agente">
                    <input type="text" name="campo_pesquisa_agt" autofocus  placeholder="Nome do Agente" required="" class="form-control my-2"> <br>                   
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
                
        </div>
    </div>
</div>

<div id="pesquisarAgt" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pesquisar Agente de Saúde</h4>
       
            </div>
            <div class="modal-body">
                <form method="POST" action="#Rotas">
                    <input type="text" name="campo_pesquisa_age" autofocus  placeholder="Nome do Agente" required="" class="form-control my-2"> <br>                   
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
                
        </div>
    </div>
</div>

<div id="pesquisarPopulacao" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pesquisar População</h4>
             
            </div>
            <div class="modal-body">
                <form method="POST" action="#Populacao">
                    <input type="text" name="campo_pesquisa_pop" autofocus  placeholder="Nome da Pessoa" required="" class="form-control my-2"> <br>                   
                    <input type="submit" value="Pesquisar" class="btn btn-success">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
                
        </div>
    </div>
</div>

<!--<div class="modal fade" id="sitemodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deseja Realmente sair ?</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <div class="modal-body">
            <a class="btn btn-danger" href="../../Controller/sair.php" role="button">Sim</a>
            <a class="btn btn-success" href="" data-dismiss="modal" role="button">Não</a>
            
      </div>

      <div class="modal-footer">

      </div>
    </div>
  </div>

</div>-->


<div id="sitemodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja Realmente sair ?</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                          <a class="btn btn-danger" href="../../Controller/sair.php" role="button">Sim</a>
                            <a class="btn btn-success" href="" data-dismiss="modal" role="button">Não</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="sitepdf" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gerar PDF:</h5>
      </div>
      
      <div class="modal-body">

          <a type="button" class="btn btn btn-primary" target="_blank" href="agentepdf.php">Agente</a>
            <a type="button" class="btn btn-success" target="_blank"  href="populacao.php">População</a>
            <a type="button" class="btn btn-danger" target="_blank"  href="vacinas.php">Vacinas</a> 
      </div>

      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-dark">Fechar</button>
      </div>
    </div>
  </div>

</div>
