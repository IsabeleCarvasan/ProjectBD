<?php include './inc/header.php'; ?>

       <form id="alvara" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">
                  Listagem de Criança
                  <button class="btn-criar" id="novo-alvara">Nova Criança</button>
              </p>
              
              <div class="row">
                <div class="caixa-f">
                <div class="col-md-4">
                  <p class="formu-letra">Responsavel</p>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Nome</p>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Escola</p>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Opções</p>
                </div>
              </div>
              </div>
              <div id="resultado" class="row">
                  <div class="caixa-fl">
                    <div class="col-md-4">
                      <p class="letra-fi ">Nome</p>
                    </div>
                    <div class="col-md-4">
                      <p class="letra-fi ">Nome</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi ">Nome</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi">
                        <button class="btn-alterar glyphicon glyphicon-pencil" id="manu-crianca"></button>
                        <button class="btn-deletar glyphicon glyphicon-trash" id="dele-crianca"></button>
                        <button class="btn-detalhes glyphicon glyphicon-plus" id="deta-crianca"></button>
                      </p>
                    </div>
                  </div>
                </div>
          

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>