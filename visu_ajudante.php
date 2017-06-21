<?php include './inc/header.php'; ?>

       <form id="alvara" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">
                  Listagem de Ajudante
                  <button class="btn-criar" id="novo-alvara">Novo Ajudante</button>
              </p>
              
              <div class="row">
                <div class="caixa-f">
                <div class="col-md-5">
                  <p class="formu-letra">Nome</p>
                </div>
                <div class="col-md-3">
                  <p class="formu-letra">CPF</p>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">RG</p>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Opções</p>
                </div>
              </div>
              </div>
              <div id="resultado" class="row">
                  <div class="caixa-fl">
                    <div class="col-md-5">
                      <p class="letra-fi ">NOME</p>
                    </div>
                    <div class="col-md-3">
                      <p class="letra-fi ">1111</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi ">1111</p>
                    </div>
                    <div class="col-md-2">
                      <p class="letra-fi">
                        <button class="btn-alterar glyphicon glyphicon-pencil" id="manu-ajudante"></button>
                        <button class="btn-deletar glyphicon glyphicon-trash" id="dele-ajudante"></button>
                        <button class="btn-detalhes glyphicon glyphicon-plus" id="deta-ajudante"></button>
                      </p>
                    </div>
                  </div>
                </div>
          

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>