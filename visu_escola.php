<?php include './inc/header.php'; ?>

       <form id="alvara" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">
                  Listagem de Escola
                  <button class="btn-criar" id="novo-alvara">Nova Escola</button>
              </p>
              
              <div class="row">
                <div class="caixa-f">
                <div class="col-md-3">
                  <p class="formu-letra">Número Identificação</p>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Nome</p>
                </div>
                <div class="col-md-3">
                  <p class="formu-letra">Tipo</p>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Opções</p>
                </div>
              </div>
              </div>
              <div id="resultado" class="row">
                  <div class="caixa-fl">
                    <div class="col-md-3">
                      <p class="letra-fi ">1111</p>
                    </div>
                    <div class="col-md-4">
                      <p class="letra-fi ">Nome</p>
                    </div>
                    <div class="col-md-3">
                      <p class="letra-fi ">Tipo</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi">
                        <button class="btn-alterar glyphicon glyphicon-pencil" id="manu-escola"></button>
                        <button class="btn-deletar glyphicon glyphicon-trash" id="dele-escola"></button>
                        <button class="btn-detalhes glyphicon glyphicon-plus" id="deta-escola"></button>
                      </p>
                    </div>
                  </div>
                </div>
          

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>