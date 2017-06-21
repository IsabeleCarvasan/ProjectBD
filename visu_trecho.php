<?php include './inc/header.php'; ?>

       <form id="alvara" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">
                  Listagem de Transporte
                  <button class="btn-criar" id="novo-alvara">Novo Transporte</button>
              </p>
              
              <div class="row">
                <div class="caixa-f">
                <div class="col-md-3">
                  <p class="formu-letra">Número Identificação</p>
                </div>
                <div class="col-md-5">
                  <p class="formu-letra">Nome da Criança</p>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Veículo</p>
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
                    <div class="col-md-5">
                      <p class="letra-fi ">Nome</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi ">111</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi">
                        <button class="btn-alterar glyphicon glyphicon-pencil" id="manu-trecho"></button>
                        <button class="btn-deletar glyphicon glyphicon-trash" id="dele-trecho"></button>
                        <button class="btn-detalhes glyphicon glyphicon-plus" id="deta-trecho"></button>
                      </p>
                    </div>
                  </div>
                </div>
          

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>